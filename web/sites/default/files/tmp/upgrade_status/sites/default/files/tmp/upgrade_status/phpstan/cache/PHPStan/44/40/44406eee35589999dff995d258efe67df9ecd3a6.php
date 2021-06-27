<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/MailHandlerInterface.php-1624732871',
   'data' => 
  array (
    '113df13f3504415f48c3ecc86faf4ebc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Handles the assembly and dispatch of HTML emails.
 *
 * Allows a render array (with an associated #theme) to be used as the
 * message body.
 *
 * Since Drupal core doesn\'t support HTML emails out of the box, Commerce
 * assumes that Swiftmailer (or an appropriate alternative) is used.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\MailHandlerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b60d36dcdab07d934cea7d1aa1d49ef8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sends an email to a user.
   *
   * @param string $to
   *   The address the email will be sent to. Must comply with RFC 2822.
   * @param string $subject
   *   The subject. Must not contain any newline characters.
   * @param array $body
   *   A render array representing the message body.
   * @param array $params
   *   Email parameters. Recognized keys:
   *     - id: A unique identifier of the email type.
   *       Allows hook_mail_alter() implementations to identify specific emails.
   *       Defaults to "mail". Automatically prefixed with "commerce_".
   *     - from: The address the email will be marked as being from.
   *       Defaults to the current store email.
   *     - reply-to: The address to which the reply will be sent. No default.
   *     - cc: The CC address or addresses (separated by a comma). No default.
   *     - bcc: The BCC address or addresses (separated by a comma). No default.
   *     - langcode: The email langcode. Every translatable string and entity
   *       will be rendered in this language. Defaults to the current language.
   *
   * @return bool
   *   TRUE if the email was sent successfully, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\MailHandlerInterface',
         'functionName' => 'sendMail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
  ),
));