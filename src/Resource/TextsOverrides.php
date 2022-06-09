<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Texts Overrides
 */
class TextsOverrides extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve Text Overrides
     *
     * @param string $organization_id
     *   Organization Id
     * @param string $locale
     *   The Locale for which you want the strings.
     * @param string $text_codes
     *   List of text codes to retrieve
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\TextOverridesResponseContent|\Eventbrite\Model\DataType\Error
     */
    public function getOrganizationTextOverridesLocaleEventIdVenueIdTextCodes(string $organization_id, string $locale, string $text_codes, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\TextOverridesResponseContent::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('GET', "/organizations/{$organization_id}/text_overrides/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
    * Create Text Overrides
    *
    * @param string $organization_id
    *   Organization Id
    * @param string $locale
    *   The locale for which you want to retrieve the strings.
    
    If it is not provided, we will use the one from the context. If an event_id is specified, we will use the event's locale
    * @param string $venue_id
    *   Venue ID.
    * @param string $event_id
    *   Event ID.
    * @param array $strings
    * @param array $query
    *   Additional request parameters.
    *
    * @return \Eventbrite\Model\DataType\TextOverridesResponseContent|\Eventbrite\Model\DataType\Error
    */
    public function createOrganizationTextOverrides(string $organization_id, ?string $locale = null, ?string $venue_id = null, ?string $event_id = null, ?array $strings = null, array $query = array()) {
        $query['locale'] = $locale;
        $query['venue_id'] = $venue_id;
        $query['event_id'] = $event_id;
        $query['strings'] = $strings;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\TextOverridesResponseContent::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/organizations/{$organization_id}/text_overrides/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
}
