<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Exception/DeclineException.php-1624732871',
   'data' => 
  array (
    '5ddb11b59b1af2975a4383fabe204cb4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base exception for declined transactions.
 *
 * A transaction can be declined due to an invalid payment method, fraud check,
 * expired authorization, etc.
 *
 * Good explanation for Braintree:
 * https://articles.braintreepayments.com/control-panel/transactions/declines
 *
 * @see \\Drupal\\commerce_payment\\Exception\\HardDeclineException
 * @see \\Drupal\\commerce_payment\\Exception\\SoftDeclineException
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Exception',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_payment\\Exception\\DeclineException',
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
  ),
));