<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Utility/Token.php-1624732867',
   'data' => 
  array (
    '5a9366897eee7b636eaef0cf9dc8108b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Drupal placeholder/token replacement system.
 *
 * API functions for replacing placeholders in text with meaningful values.
 *
 * For example: When configuring automated emails, an administrator enters
 * standard text for the email. Variables like the title of a node and the date
 * the email was sent can be entered as placeholders like [node:title] and
 * [date:short]. When a Drupal module prepares to send the email, it can call
 * the Token::replace() function, passing in the text. The token system will
 * scan the text for placeholder tokens, give other modules an opportunity to
 * replace them with meaningful text, then return the final product to the
 * original module.
 *
 * Tokens follow the form: [$type:$name], where $type is a general class of
 * tokens like \'node\', \'user\', or \'comment\' and $name is the name of a given
 * placeholder. For example, [node:title] or [node:created:since].
 *
 * In addition to raw text containing placeholders, modules may pass in an array
 * of objects to be used when performing the replacement. The objects should be
 * keyed by the token type they correspond to. For example:
 *
 * @code
 * // Load a node and a user, then replace tokens in the text.
 * $text = \'On [date:short], [user:name] read [node:title].\';
 * $node = Node::load(1);
 * $user = User::load(1);
 *
 * // [date:...] tokens use the current date automatically.
 * $data = array(\'node\' => $node, \'user\' => $user);
 * return Token::replace($text, $data);
 * @endcode
 *
 * Some tokens may be chained in the form of [$type:$pointer:$name], where $type
 * is a normal token type, $pointer is a reference to another token type, and
 * $name is the name of a given placeholder. For example, [node:author:mail]. In
 * that example, \'author\' is a pointer to the \'user\' account that created the
 * node, and \'mail\' is a placeholder available for any \'user\'.
 *
 * @see Token::replace()
 * @see hook_tokens()
 * @see hook_token_info()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'htmlescapedtext' => 'Drupal\\Component\\Render\\HtmlEscapedText',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'attachmentsinterface' => 'Drupal\\Core\\Render\\AttachmentsInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\Token',
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
    '4f5e9086311d8a7004c350985163d9b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The tag to cache token info with.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'htmlescapedtext' => 'Drupal\\Component\\Render\\HtmlEscapedText',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'attachmentsinterface' => 'Drupal\\Core\\Render\\AttachmentsInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\Token',
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
    '804d656ecab6c546035d2b3847831937' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The token cache.
   *
   * @var \\Drupal\\Core\\Cache\\CacheBackendInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'htmlescapedtext' => 'Drupal\\Component\\Render\\HtmlEscapedText',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'attachmentsinterface' => 'Drupal\\Core\\Render\\AttachmentsInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\Token',
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
    '22c99c74f99ac7399c74ed9b0bcb2722' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The language manager.
   *
   * @var \\Drupal\\Core\\Language\\LanguageManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'htmlescapedtext' => 'Drupal\\Component\\Render\\HtmlEscapedText',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'attachmentsinterface' => 'Drupal\\Core\\Render\\AttachmentsInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\Token',
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
    'cb44e14e4fbb13cdbaddd6e429b3b88d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Token definitions.
   *
   * @var array[]|null
   *   An array of token definitions, or NULL when the definitions are not set.
   *
   * @see self::setInfo()
   * @see self::getInfo()
   * @see self::resetInfo()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'htmlescapedtext' => 'Drupal\\Component\\Render\\HtmlEscapedText',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'attachmentsinterface' => 'Drupal\\Core\\Render\\AttachmentsInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\Token',
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
    'f2b9d028509563d9a9bc4ea7b92f7fcf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module handler service.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'htmlescapedtext' => 'Drupal\\Component\\Render\\HtmlEscapedText',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'attachmentsinterface' => 'Drupal\\Core\\Render\\AttachmentsInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\Token',
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
    '1ea8643c15869232f32cba6f167cb9c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cache tags invalidator.
   *
   * @var \\Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'htmlescapedtext' => 'Drupal\\Component\\Render\\HtmlEscapedText',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'attachmentsinterface' => 'Drupal\\Core\\Render\\AttachmentsInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\Token',
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
    'dbc739bd1312aac8ce22d2910008aae1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The renderer.
   *
   * @var \\Drupal\\Core\\Render\\RendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'htmlescapedtext' => 'Drupal\\Component\\Render\\HtmlEscapedText',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'attachmentsinterface' => 'Drupal\\Core\\Render\\AttachmentsInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\Token',
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
    '761b9287263b7db22e8f79e7a836c7ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new class instance.
   *
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache
   *   The token cache.
   * @param \\Drupal\\Core\\Language\\LanguageManagerInterface $language_manager
   *   The language manager.
   * @param \\Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface $cache_tags_invalidator
   *   The cache tags invalidator.
   * @param \\Drupal\\Core\\Render\\RendererInterface $renderer
   *   The renderer.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'htmlescapedtext' => 'Drupal\\Component\\Render\\HtmlEscapedText',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'attachmentsinterface' => 'Drupal\\Core\\Render\\AttachmentsInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\Token',
         'functionName' => '__construct',
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
    '9c19061d8416ef62e8e94a6a62cc13c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replaces all tokens in a given string with appropriate values.
   *
   * @param string $text
   *   An HTML string containing replaceable tokens. The caller is responsible
   *   for calling \\Drupal\\Component\\Utility\\Html::escape() in case the $text
   *   was plain text.
   * @param array $data
   *   (optional) An array of keyed objects. For simple replacement scenarios
   *   \'node\', \'user\', and others are common keys, with an accompanying node or
   *   user object being the value. Some token types, like \'site\', do not require
   *   any explicit information from $data and can be replaced even if it is
   *   empty.
   * @param array $options
   *   (optional) A keyed array of settings and flags to control the token
   *   replacement process. Supported options are:
   *   - langcode: A language code to be used when generating locale-sensitive
   *     tokens.
   *   - callback: A callback function that will be used to post-process the
   *     array of token replacements after they are generated.
   *   - clear: A boolean flag indicating that tokens should be removed from the
   *     final text if no replacement value can be generated.
   * @param \\Drupal\\Core\\Render\\BubbleableMetadata|null $bubbleable_metadata
   *   (optional) An object to which static::generate() and the hooks and
   *   functions that it invokes will add their required bubbleable metadata.
   *
   *   To ensure that the metadata associated with the token replacements gets
   *   attached to the same render array that contains the token-replaced text,
   *   callers of this method are encouraged to pass in a BubbleableMetadata
   *   object and apply it to the corresponding render array. For example:
   *   @code
   *     $bubbleable_metadata = new BubbleableMetadata();
   *     $build[\'#markup\'] = $token_service->replace(\'Tokens: [node:nid] [current-user:uid]\', [\'node\' => $node], [], $bubbleable_metadata);
   *     $bubbleable_metadata->applyTo($build);
   *   @endcode
   *
   *   When the caller does not pass in a BubbleableMetadata object, this
   *   method creates a local one, and applies the collected metadata to the
   *   Renderer\'s currently active render context.
   *
   * @return string
   *   The token result is the entered HTML text with tokens replaced. The
   *   caller is responsible for choosing the right escaping / sanitization. If
   *   the result is intended to be used as plain text, using
   *   PlainTextOutput::renderFromHtml() is recommended. If the result is just
   *   printed as part of a template relying on Twig autoescaping is possible,
   *   otherwise for example the result can be put into #markup, in which case
   *   it would be sanitized by Xss::filterAdmin().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'htmlescapedtext' => 'Drupal\\Component\\Render\\HtmlEscapedText',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'attachmentsinterface' => 'Drupal\\Core\\Render\\AttachmentsInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\Token',
         'functionName' => 'replace',
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
    '4b3f6ca07fa7c193ae90da28c1fe4782' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds a list of all token-like patterns that appear in the text.
   *
   * @param string $text
   *   The text to be scanned for possible tokens.
   *
   * @return array
   *   An associative array of discovered tokens, grouped by type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'htmlescapedtext' => 'Drupal\\Component\\Render\\HtmlEscapedText',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'attachmentsinterface' => 'Drupal\\Core\\Render\\AttachmentsInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\Token',
         'functionName' => 'scan',
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
    '022c9206f977d633765769006a330ccb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates replacement values for a list of tokens.
   *
   * @param string $type
   *   The type of token being replaced. \'node\', \'user\', and \'date\' are common.
   * @param array $tokens
   *   An array of tokens to be replaced, keyed by the literal text of the token
   *   as it appeared in the source text.
   * @param array $data
   *   An array of keyed objects. For simple replacement scenarios: \'node\',
   *   \'user\', and others are common keys, with an accompanying node or user
   *   object being the value. Some token types, like \'site\', do not require
   *   any explicit information from $data and can be replaced even if it is
   *   empty.
   * @param array $options
   *   A keyed array of settings and flags to control the token replacement
   *   process. Supported options are:
   *   - langcode: A language code to be used when generating locale-sensitive
   *     tokens.
   *   - callback: A callback function that will be used to post-process the
   *     array of token replacements after they are generated. Can be used when
   *     modules require special formatting of token text, for example URL
   *     encoding or truncation to a specific length.
   * @param \\Drupal\\Core\\Render\\BubbleableMetadata $bubbleable_metadata
   *   The bubbleable metadata. This is passed to the token replacement
   *   implementations so that they can attach their metadata.
   *
   * @return array
   *   An associative array of replacement values, keyed by the original \'raw\'
   *   tokens that were found in the source text. For example:
   *   $results[\'[node:title]\'] = \'My new node\';
   *
   * @see hook_tokens()
   * @see hook_tokens_alter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'htmlescapedtext' => 'Drupal\\Component\\Render\\HtmlEscapedText',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'attachmentsinterface' => 'Drupal\\Core\\Render\\AttachmentsInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\Token',
         'functionName' => 'generate',
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
    '5e11f82dedc63734aaa27b227e3f1af1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a list of tokens that begin with a specific prefix.
   *
   * Used to extract a group of \'chained\' tokens (such as [node:author:name])
   * from the full list of tokens found in text. For example:
   * @code
   *   $data = array(
   *     \'author:name\' => \'[node:author:name]\',
   *     \'title\'       => \'[node:title]\',
   *     \'created\'     => \'[node:created]\',
   *   );
   *   $results = Token::findWithPrefix($data, \'author\');
   *   $results == array(\'name\' => \'[node:author:name]\');
   * @endcode
   *
   * @param array $tokens
   *   A keyed array of tokens, and their original raw form in the source text.
   * @param string $prefix
   *   A textual string to be matched at the beginning of the token.
   * @param string $delimiter
   *   (optional) A string containing the character that separates the prefix from
   *   the rest of the token. Defaults to \':\'.
   *
   * @return array
   *   An associative array of discovered tokens, with the prefix and delimiter
   *   stripped from the key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'htmlescapedtext' => 'Drupal\\Component\\Render\\HtmlEscapedText',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'attachmentsinterface' => 'Drupal\\Core\\Render\\AttachmentsInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\Token',
         'functionName' => 'findWithPrefix',
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
    'c26d669c183fc36fc0f400a591f8d542' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns metadata describing supported tokens.
   *
   * The metadata array contains token type, name, and description data as well
   * as an optional pointer indicating that the token chains to another set of
   * tokens.
   *
   * @return array
   *   An associative array of token information, grouped by token type. The
   *   array structure is identical to that of hook_token_info().
   *
   * @see hook_token_info()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'htmlescapedtext' => 'Drupal\\Component\\Render\\HtmlEscapedText',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'attachmentsinterface' => 'Drupal\\Core\\Render\\AttachmentsInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\Token',
         'functionName' => 'getInfo',
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
    '4472113dcebbf5226fb9c998db23c5d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets metadata describing supported tokens.
   *
   * @param array $tokens
   *   Token metadata that has an identical structure to the return value of
   *   hook_token_info().
   *
   * @see hook_token_info()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'htmlescapedtext' => 'Drupal\\Component\\Render\\HtmlEscapedText',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'attachmentsinterface' => 'Drupal\\Core\\Render\\AttachmentsInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\Token',
         'functionName' => 'setInfo',
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
    '141148c8375f36d8be8bab6b8935e0c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resets metadata describing supported tokens.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'htmlescapedtext' => 'Drupal\\Component\\Render\\HtmlEscapedText',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'attachmentsinterface' => 'Drupal\\Core\\Render\\AttachmentsInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\Token',
         'functionName' => 'resetInfo',
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