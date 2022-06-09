<?php declare(strict_types=1);

namespace Eventbrite\Model;

/**
 * Abstract model base for shared functionality across data types.
 */
class ModelBase
{
    /**
     * @param array $response
     * @param string|null $response_object_key
     *
     * @return static
     */
    public static function createFromResponse(array $response = [], string $response_object_key = null) {
        $static = new static();
        $reflection = new \ReflectionClass($static);
        $item = $response;
        if (isset($response['properties'])) {
            $item = $response['properties'];
        }
        if (isset($item[$response_object_key])) {
            $item = $item[$response_object_key];
        }
        if (is_numeric(array_key_first($item))) {
            $item = $item[0];
        }
        $properties = array_keys($item);
        foreach ($properties as $property) {
            // No need to attempt setting value to null.
            if (is_null($item[$property])) {
                continue;
            }
            // Use reflection to get the object property type so we can recursively build child objects.
            $property_reflection = null;
            $property_type = null;
            try {
                $property_reflection = $reflection->getProperty($property);
                $property_type = $property_reflection->getType();
            } catch (\Exception $exception) {
            }
            // If this is a built-in data type, set the value directly.
            if ($property_type && $property_type->getName() == 'array' && !is_array($item[$property])) {
                $static->{$property} = (array) $item[$property];
                continue;
            } elseif (!$property_type || $property_type->isBuiltin()) {
                $static->{$property} = $item[$property];
                continue;
            }
            // If this is an enum, set the value using the enum.
            // @todo - better (flexible) detection of enums.
            if (stripos($property_type->getName(), 'enum') !== false) {
                $value = is_array($item[$property]) ? implode(',', $item[$property]) : $item[$property];
                $static->{$property} = call_user_func(["\\{$property_type->getName()}", 'from'], $value);
                continue;
            }
            // Finally, we have a typed property. Attempt to create the object.
            $static->{$property} = call_user_func(["\\{$property_type->getName()}", 'createFromResponse'], ['properties' => $item[$property]]);
        }
        return $static;
    }
    
}
