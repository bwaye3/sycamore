<?php

namespace Drupal\serialization\Encoder;

<<<<<<< HEAD
use Symfony\Component\Serializer\Encoder\DecoderInterface;
use Symfony\Component\Serializer\Encoder\EncoderInterface;
=======
>>>>>>> dev
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder as BaseJsonEncoder;

/**
<<<<<<< HEAD
 * Adds 'ajax to the supported content types of the JSON encoder'
=======
 * Adds 'ajax' to the supported content types of the JSON encoder.
>>>>>>> dev
 *
 * @internal
 *   This encoder should not be used directly. Rather, use the `serializer`
 *   service.
 */
<<<<<<< HEAD
class JsonEncoder extends BaseJsonEncoder implements EncoderInterface, DecoderInterface {
=======
class JsonEncoder extends BaseJsonEncoder {
>>>>>>> dev

  /**
   * The formats that this Encoder supports.
   *
   * @var array
   */
  protected static $format = ['json', 'ajax'];

  /**
   * {@inheritdoc}
   */
  public function __construct(JsonEncode $encodingImpl = NULL, JsonDecode $decodingImpl = NULL) {
<<<<<<< HEAD
    $this->encodingImpl = $encodingImpl ?: $this->getJsonEncode();
    $this->decodingImpl = $decodingImpl ?: $this->getJsonDecode();
  }

  /**
   * Instantiates a JsonEncode instance.
   *
   * @internal this exists to bridge Symfony 3 to Symfony 4, and can be removed
   *   once Drupal requires Symfony 4.2 or higher.
   */
  private function getJsonEncode() {
=======
>>>>>>> dev
    // Encode <, >, ', &, and " for RFC4627-compliant JSON, which may also be
    // embedded into HTML.
    // @see \Symfony\Component\HttpFoundation\JsonResponse
    $json_encoding_options = JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT;
<<<<<<< HEAD
    $reflection = new \ReflectionClass(JsonEncode::class);
    if (array_key_exists('OPTIONS', $reflection->getConstants())) {
      return new JsonEncode([JsonEncode::OPTIONS => $json_encoding_options]);
    }
    return new JsonEncode($json_encoding_options);
  }

  /**
   * Instantiates a JsonDecode instance.
   *
   * @internal this exists to bridge Symfony 3 to Symfony 4, and can be removed
   *   once Drupal requires Symfony 4.2 or higher.
   */
  private function getJsonDecode() {
    $reflection = new \ReflectionClass(JsonDecode::class);
    if (array_key_exists('ASSOCIATIVE', $reflection->getConstants())) {
      return new JsonDecode([JsonDecode::ASSOCIATIVE => TRUE]);
    }
    return new JsonDecode(TRUE);
=======
    $this->encodingImpl = $encodingImpl ?: new JsonEncode([JsonEncode::OPTIONS => $json_encoding_options]);
    $this->decodingImpl = $decodingImpl ?: new JsonDecode([JsonDecode::ASSOCIATIVE => TRUE]);
>>>>>>> dev
  }

  /**
   * {@inheritdoc}
   */
  public function supportsEncoding($format) {
    return in_array($format, static::$format);
  }

  /**
   * {@inheritdoc}
   */
  public function supportsDecoding($format) {
    return in_array($format, static::$format);
  }

}
