<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 *
 */
class ResponseModelTest extends TestCase {

  /**
   * Tests that all models can self-create based on API Blueprint assets.
   */
  public function testModelCreation() {

    $api_map = json_decode(file_get_contents(__DIR__ . '/assets/api-map.json'), true);
    foreach ($api_map as $file => $item) {
      if ($item['type'] == 'messageBodySchema') {
        continue;
      }

      $response = json_decode(file_get_contents(__DIR__ . "/assets/{$item['group']}/{$file}"), true);
      $object = call_user_func_array(
        [$item['responseType'], 'createFromResponse'],
        [
          $response,
          $item['responseObjectKey'],
          $item['collectionDataType'],
        ]
      );

      self::assertIsObject($object);
    }
  }

  /**
   * Test some basic API calls.
   *
   * @return void
   */
  public function testServiceGetRequests() {
    $api = new Eventbrite\Service\Api(
      $_ENV['EVENTBRITE_API_HOST'],
      $_ENV['EVENTBRITE_AUTH_TOKEN']
    );
  }

}