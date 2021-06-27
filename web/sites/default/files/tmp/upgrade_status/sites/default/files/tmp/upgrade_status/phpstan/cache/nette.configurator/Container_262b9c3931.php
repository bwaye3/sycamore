<?php
// source: phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/conf/config.neon
// source: /Users/bradleywaye/Sites/local.sycamoretrust.com/web/sites/default/files/tmp/upgrade_status/deprecation_testing.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_262b9c3931 extends _HumbugBox2acd634d137b\Nette\DI\Container
{
	protected $tags = [
		'phpstan.broker.methodsClassReflectionExtension' => ['068' => true, '072' => true],
		'phpstan.broker.propertiesClassReflectionExtension' => [
			'069' => true,
			'073' => true,
			'0167' => true,
			'0225' => true,
		],
		'phpstan.broker.dynamicFunctionReturnTypeExtension' => [
			'0115' => true,
			'0116' => true,
			'0117' => true,
			'0118' => true,
			'0119' => true,
			'0120' => true,
			'0121' => true,
			'0123' => true,
			'0124' => true,
			'0125' => true,
			'0126' => true,
			'0127' => true,
			'0128' => true,
			'0129' => true,
			'0130' => true,
			'0131' => true,
			'0132' => true,
			'0133' => true,
			'0134' => true,
			'0135' => true,
			'0136' => true,
			'0137' => true,
			'0138' => true,
			'0142' => true,
			'0143' => true,
			'0145' => true,
			'0146' => true,
			'0148' => true,
			'0151' => true,
			'0152' => true,
			'0153' => true,
			'0154' => true,
			'0155' => true,
			'0156' => true,
			'0157' => true,
			'0158' => true,
			'0159' => true,
			'0160' => true,
			'0169' => true,
			'0172' => true,
			'0173' => true,
			'0174' => true,
			'0175' => true,
			'0177' => true,
			'0178' => true,
			'0179' => true,
			'0180' => true,
			'0181' => true,
			'0182' => true,
			'0183' => true,
			'0184' => true,
			'0185' => true,
			'0186' => true,
			'0187' => true,
			'0188' => true,
			'0189' => true,
			'0210' => true,
			'0211' => true,
			'0214' => true,
			'0215' => true,
			'0216' => true,
		],
		'phpstan.typeSpecifier.functionTypeSpecifyingExtension' => [
			'0122' => true,
			'0144' => true,
			'0170' => true,
			'0171' => true,
			'0190' => true,
			'0191' => true,
			'0192' => true,
			'0193' => true,
			'0194' => true,
			'0195' => true,
			'0196' => true,
			'0197' => true,
			'0198' => true,
			'0199' => true,
			'0200' => true,
			'0201' => true,
			'0202' => true,
			'0203' => true,
			'0204' => true,
			'0205' => true,
			'0206' => true,
			'0207' => true,
			'0208' => true,
			'0209' => true,
		],
		'phpstan.broker.dynamicStaticMethodReturnTypeExtension' => ['0139' => true, '0141' => true, '0217' => true],
		'phpstan.broker.dynamicMethodReturnTypeExtension' => [
			'0140' => true,
			'0150' => true,
			'0169' => true,
			'0212' => true,
			'0213' => true,
			'0217' => true,
			'0223' => true,
			'0224' => true,
		],
		'phpstan.dynamicStaticMethodThrowTypeExtension' => [
			'0147' => true,
			'0149' => true,
			'0163' => true,
			'0164' => true,
			'0165' => true,
			'0166' => true,
			'0168' => true,
		],
		'phpstan.dynamicFunctionThrowTypeExtension' => ['0161' => true, '0162' => true],
		'phpstan.typeSpecifier.methodTypeSpecifyingExtension' => ['0176' => true],
		'phpstan.rules.rule' => [
			'0226' => true,
			'0227' => true,
			'rules.0' => true,
			'rules.1' => true,
			'rules.10' => true,
			'rules.11' => true,
			'rules.12' => true,
			'rules.13' => true,
			'rules.14' => true,
			'rules.15' => true,
			'rules.16' => true,
			'rules.17' => true,
			'rules.18' => true,
			'rules.19' => true,
			'rules.2' => true,
			'rules.20' => true,
			'rules.21' => true,
			'rules.22' => true,
			'rules.3' => true,
			'rules.4' => true,
			'rules.5' => true,
			'rules.6' => true,
			'rules.7' => true,
			'rules.8' => true,
			'rules.9' => true,
		],
	];

	protected $types = ['container' => '_HumbugBox2acd634d137b\Nette\DI\Container'];
	protected $aliases = [];

	protected $wiring = [
		'_HumbugBox2acd634d137b\Nette\DI\Container' => [['container']],
		'PHPStan\Rules\Rule' => [
			0 => ['088', '089', '091', '092', '0102', '0226', '0227'],
			2 => [
				'rules.0',
				'rules.1',
				'rules.2',
				'rules.3',
				'rules.4',
				'rules.5',
				'rules.6',
				'rules.7',
				'rules.8',
				'rules.9',
				'rules.10',
				'rules.11',
				'rules.12',
				'rules.13',
				'rules.14',
				'rules.15',
				'rules.16',
				'rules.17',
				'rules.18',
				'rules.19',
				'rules.20',
				'rules.21',
				'rules.22',
			],
		],
		'PHPStan\Rules\Debug\DumpTypeRule' => [2 => ['rules.0']],
		'PHPStan\Rules\Debug\FileAssertRule' => [2 => ['rules.1']],
		'PHPStan\Rules\Classes\PluginManagerInspectionRule' => [2 => ['rules.2']],
		'PHPStan\Rules\Drupal\Coder\DiscouragedFunctionsRule' => [2 => ['rules.3']],
		'PHPStan\Rules\Drupal\GlobalDrupalDependencyInjectionRule' => [2 => ['rules.4']],
		'PHPStan\Rules\Drupal\PluginManager\AbstractPluginManagerRule' => [2 => ['rules.5']],
		'PHPStan\Rules\Drupal\PluginManager\PluginManagerSetsCacheBackendRule' => [2 => ['rules.5']],
		'PHPStan\Rules\Deprecations\AccessDeprecatedConstant' => [2 => ['rules.6']],
		'PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule' => [2 => ['rules.7']],
		'PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule' => [2 => ['rules.8']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule' => [2 => ['rules.9']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule' => [2 => ['rules.10']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule' => [2 => ['rules.11']],
		'PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule' => [2 => ['rules.12']],
		'PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule' => [2 => ['rules.13']],
		'PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule' => [2 => ['rules.14']],
		'PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule' => [2 => ['rules.15']],
		'PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule' => [2 => ['rules.16']],
		'PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule' => [2 => ['rules.17']],
		'PHPStan\Rules\Deprecations\TypeHintDeprecatedInClassMethodSignatureRule' => [2 => ['rules.18']],
		'PHPStan\Rules\Deprecations\TypeHintDeprecatedInClosureSignatureRule' => [2 => ['rules.19']],
		'PHPStan\Rules\Deprecations\TypeHintDeprecatedInFunctionSignatureRule' => [2 => ['rules.20']],
		'PHPStan\Rules\Deprecations\UsageOfDeprecatedCastRule' => [2 => ['rules.21']],
		'PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule' => [2 => ['rules.22']],
		'PhpParser\BuilderFactory' => [['01']],
		'PHPStan\Parser\LexerFactory' => [['02']],
		'PhpParser\NodeVisitorAbstract' => [['03', '04', '038', '050', '059']],
		'PhpParser\NodeVisitor' => [['03', '04', '038', '050', '059']],
		'PhpParser\NodeVisitor\NameResolver' => [['03']],
		'PhpParser\NodeVisitor\NodeConnectingVisitor' => [['04']],
		'PhpParser\PrettyPrinterAbstract' => [['05']],
		'PhpParser\PrettyPrinter\Standard' => [['05']],
		'PHPStan\Broker\AnonymousClassNameHelper' => [['06']],
		'PHPStan\Php\PhpVersion' => [['07']],
		'PHPStan\Php\PhpVersionFactory' => [['08']],
		'PHPStan\Php\PhpVersionFactoryFactory' => [['09']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['010']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['011']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['012']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['013']],
		'PHPStan\PhpDoc\PhpDocInheritanceResolver' => [['014']],
		'PHPStan\PhpDoc\PhpDocNodeResolver' => [['015']],
		'PHPStan\PhpDoc\PhpDocStringResolver' => [['016']],
		'PHPStan\PhpDoc\ConstExprNodeResolver' => [['017']],
		'PHPStan\PhpDoc\TypeNodeResolver' => [['018']],
		'PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider' => [['019']],
		'PHPStan\PhpDoc\TypeStringResolver' => [['020']],
		'PHPStan\PhpDoc\StubValidator' => [['021']],
		'PHPStan\Analyser\Analyser' => [['022']],
		'PHPStan\Analyser\FileAnalyser' => [['023']],
		'PHPStan\Analyser\IgnoredErrorHelper' => [['024']],
		'PHPStan\Analyser\ScopeFactory' => [['025']],
		'PHPStan\Analyser\LazyScopeFactory' => [['025']],
		'PHPStan\Analyser\NodeScopeResolver' => [['026']],
		'PHPStan\Analyser\ResultCache\ResultCacheManagerFactory' => [['027']],
		'PHPStan\Analyser\ResultCache\ResultCacheClearer' => [['028']],
		'PHPStan\Cache\Cache' => [['029']],
		'PHPStan\Command\AnalyseApplication' => [['030']],
		'PHPStan\Command\AnalyserRunner' => [['031']],
		'PHPStan\Command\FixerApplication' => [['032']],
		'PHPStan\Command\IgnoredRegexValidator' => [['033']],
		'PHPStan\Dependency\DependencyDumper' => [['034']],
		'PHPStan\Dependency\DependencyResolver' => [['035']],
		'PHPStan\Dependency\ExportedNodeFetcher' => [['036']],
		'PHPStan\Dependency\ExportedNodeResolver' => [['037']],
		'PHPStan\Dependency\ExportedNodeVisitor' => [['038']],
		'PHPStan\DependencyInjection\Container' => [['039'], ['040']],
		'PHPStan\DependencyInjection\Nette\NetteContainer' => [['040']],
		'PHPStan\DependencyInjection\DerivativeContainerFactory' => [['041']],
		'PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider' => [['042']],
		'PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider' => [['043']],
		'PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider' => [['044']],
		'PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider' => [['045']],
		'PHPStan\File\FileHelper' => [['046']],
		'PHPStan\File\FileExcluderFactory' => [['047']],
		'PHPStan\File\FileExcluderRawFactory' => [['048']],
		'PHPStan\File\FileExcluder' => [2 => ['fileExcluderAnalyse', 'fileExcluderScan']],
		'PHPStan\File\FileFinder' => [2 => ['fileFinderAnalyse', 'fileFinderScan']],
		'PHPStan\File\FileMonitor' => [['049']],
		'PHPStan\NodeVisitor\StatementOrderVisitor' => [['050']],
		'PHPStan\Parallel\ParallelAnalyser' => [['051']],
		'PHPStan\Parallel\Scheduler' => [['052']],
		'PHPStan\Parser\Parser' => [
			0 => ['053'],
			2 => [1 => 'currentPhpVersionRichParser', 'currentPhpVersionSimpleParser', 'php8Parser', 'pathRoutingParser'],
		],
		'PHPStan\Parser\CachedParser' => [['053']],
		'PHPStan\Parser\FunctionCallStatementFinder' => [['054']],
		'PHPStan\Process\CpuCoreCounter' => [['055']],
		'PHPStan\Reflection\FunctionReflectionFactory' => [['056']],
		'PHPStan\Reflection\MethodsClassReflectionExtension' => [['057', '068', '070', '072']],
		'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [['057']],
		'PHPStan\Reflection\PropertiesClassReflectionExtension' => [['058', '069', '070', '073', '0167', '0225']],
		'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [['058']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor' => [['059']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher' => [['060']],
		'PHPStan\BetterReflection\SourceLocator\Type\SourceLocator' => [
			0 => ['061'],
			2 => [1 => 'betterReflectionSourceLocator'],
		],
		'PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator' => [['061']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker' => [['062']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory' => [['063']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository' => [['064']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory' => [['065']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory' => [['066']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository' => [['067']],
		'PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension' => [['068']],
		'PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension' => [['069']],
		'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [['070']],
		'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [['071']],
		'PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension' => [['072']],
		'PHPStan\Reflection\BrokerAwareExtension' => [['073', '0211']],
		'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [['073']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider' => [['074']],
		'PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider' => [['075']],
		'PHPStan\Reflection\SignatureMap\SignatureMapParser' => [['076']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProvider' => [['080'], ['077', '078']],
		'PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider' => [['077']],
		'PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider' => [['078']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory' => [['079']],
		'PHPStan\Rules\Api\ApiRuleHelper' => [['081']],
		'PHPStan\Rules\AttributesCheck' => [['082']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck' => [['083']],
		'PHPStan\Rules\ClassCaseSensitivityCheck' => [['084']],
		'PHPStan\Rules\Comparison\ConstantConditionRuleHelper' => [['085']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper' => [['086']],
		'PHPStan\Rules\Exceptions\ExceptionTypeResolver' => [1 => ['087'], [1 => 'exceptionTypeResolver']],
		'PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver' => [['087']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule' => [['088']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule' => [['089']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck' => [['090']],
		'PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule' => [['091']],
		'PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule' => [['092']],
		'PHPStan\Rules\Exceptions\TooWideThrowTypeCheck' => [['093']],
		'PHPStan\Rules\FunctionCallParametersCheck' => [['094']],
		'PHPStan\Rules\FunctionDefinitionCheck' => [['095']],
		'PHPStan\Rules\FunctionReturnTypeCheck' => [['096']],
		'PHPStan\Rules\Generics\GenericAncestorsCheck' => [['097']],
		'PHPStan\Rules\Generics\GenericObjectTypeCheck' => [['098']],
		'PHPStan\Rules\Generics\TemplateTypeCheck' => [['099']],
		'PHPStan\Rules\Generics\VarianceCheck' => [['0100']],
		'PHPStan\Rules\IssetCheck' => [['0101']],
		'PHPStan\Rules\Methods\MethodSignatureRule' => [['0102']],
		'PHPStan\Rules\MissingTypehintCheck' => [['0103']],
		'PHPStan\Rules\NullsafeCheck' => [['0104']],
		'PHPStan\Rules\Constants\AlwaysUsedClassConstantsExtensionProvider' => [['0105']],
		'PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider' => [['0105']],
		'PHPStan\Rules\PhpDoc\UnresolvableTypeHelper' => [['0106']],
		'PHPStan\Rules\Properties\ReadWritePropertiesExtensionProvider' => [['0107']],
		'PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider' => [['0107']],
		'PHPStan\Rules\Properties\PropertyDescriptor' => [['0108']],
		'PHPStan\Rules\Properties\PropertyReflectionFinder' => [['0109']],
		'PHPStan\Rules\RegistryFactory' => [['0110']],
		'PHPStan\Rules\RuleLevelHelper' => [['0111']],
		'PHPStan\Rules\UnusedFunctionParametersCheck' => [['0112']],
		'PHPStan\Type\FileTypeMapper' => [['0113']],
		'PHPStan\Type\TypeAliasResolver' => [['0114']],
		'PHPStan\Type\DynamicFunctionReturnTypeExtension' => [
			[
				'0115',
				'0116',
				'0117',
				'0118',
				'0119',
				'0120',
				'0121',
				'0123',
				'0124',
				'0125',
				'0126',
				'0127',
				'0128',
				'0129',
				'0130',
				'0131',
				'0132',
				'0133',
				'0134',
				'0135',
				'0136',
				'0137',
				'0138',
				'0142',
				'0143',
				'0145',
				'0146',
				'0148',
				'0151',
				'0152',
				'0153',
				'0154',
				'0155',
				'0156',
				'0157',
				'0158',
				'0159',
				'0160',
				'0169',
				'0172',
				'0173',
				'0174',
				'0175',
				'0177',
				'0178',
				'0179',
				'0180',
				'0181',
				'0182',
				'0183',
				'0184',
				'0185',
				'0186',
				'0187',
				'0188',
				'0189',
				'0210',
				'0211',
				'0214',
				'0215',
				'0216',
			],
		],
		'PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension' => [['0115']],
		'PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension' => [['0116']],
		'PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension' => [['0117']],
		'PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension' => [['0118']],
		'PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension' => [['0119']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension' => [['0120']],
		'PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension' => [['0121']],
		'PHPStan\Type\FunctionTypeSpecifyingExtension' => [
			[
				'0122',
				'0144',
				'0170',
				'0171',
				'0190',
				'0191',
				'0192',
				'0193',
				'0194',
				'0195',
				'0196',
				'0197',
				'0198',
				'0199',
				'0200',
				'0201',
				'0202',
				'0203',
				'0204',
				'0205',
				'0206',
				'0207',
				'0208',
				'0209',
			],
		],
		'PHPStan\Analyser\TypeSpecifierAwareExtension' => [
			[
				'0122',
				'0144',
				'0170',
				'0171',
				'0176',
				'0190',
				'0191',
				'0192',
				'0193',
				'0194',
				'0195',
				'0196',
				'0197',
				'0198',
				'0199',
				'0200',
				'0201',
				'0202',
				'0203',
				'0204',
				'0205',
				'0206',
				'0207',
				'0208',
				'0209',
				'0211',
			],
		],
		'PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension' => [['0122']],
		'PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension' => [['0123']],
		'PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension' => [['0124']],
		'PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension' => [['0125']],
		'PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension' => [['0126']],
		'PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension' => [['0127']],
		'PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension' => [['0128']],
		'PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension' => [['0129']],
		'PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension' => [['0130']],
		'PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension' => [['0131']],
		'PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension' => [['0132']],
		'PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension' => [['0133']],
		'PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension' => [['0134']],
		'PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension' => [['0135']],
		'PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension' => [['0136']],
		'PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension' => [['0137']],
		'PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension' => [['0138']],
		'PHPStan\Type\DynamicStaticMethodReturnTypeExtension' => [['0139', '0141', '0217']],
		'PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension' => [['0139']],
		'PHPStan\Type\DynamicMethodReturnTypeExtension' => [
			['0140', '0150', '0169', '0212', '0213', '0217', '0223', '0224'],
		],
		'PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension' => [['0140']],
		'PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension' => [['0141']],
		'PHPStan\Type\Php\CompactFunctionReturnTypeExtension' => [['0142']],
		'PHPStan\Type\Php\CountFunctionReturnTypeExtension' => [['0143']],
		'PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension' => [['0144']],
		'PHPStan\Type\Php\CurlInitReturnTypeExtension' => [['0145']],
		'PHPStan\Type\Php\DateFunctionReturnTypeExtension' => [['0146']],
		'PHPStan\Type\DynamicStaticMethodThrowTypeExtension' => [['0147', '0149', '0163', '0164', '0165', '0166', '0168']],
		'PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension' => [['0147']],
		'PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension' => [['0148']],
		'PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension' => [['0149']],
		'PHPStan\Type\Php\DsMapDynamicReturnTypeExtension' => [['0150']],
		'PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension' => [['0151']],
		'PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension' => [['0152']],
		'PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension' => [['0153']],
		'PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension' => [['0154']],
		'PHPStan\Type\Php\GetClassDynamicReturnTypeExtension' => [['0155']],
		'PHPStan\Type\Php\GetoptFunctionDynamicReturnTypeExtension' => [['0156']],
		'PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension' => [['0157']],
		'PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension' => [['0158']],
		'PHPStan\Type\Php\HashHmacFunctionsReturnTypeExtension' => [['0159']],
		'PHPStan\Type\Php\HashFunctionsReturnTypeExtension' => [['0160']],
		'PHPStan\Type\DynamicFunctionThrowTypeExtension' => [['0161', '0162']],
		'PHPStan\Type\Php\IntdivThrowTypeExtension' => [['0161']],
		'PHPStan\Type\Php\JsonThrowTypeExtension' => [['0162']],
		'PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension' => [['0163']],
		'PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension' => [['0164']],
		'PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension' => [['0165']],
		'PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension' => [['0166']],
		'PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension' => [['0167']],
		'PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension' => [['0168']],
		'PHPStan\Type\Php\StatDynamicReturnTypeExtension' => [['0169']],
		'PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension' => [['0170']],
		'PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension' => [['0171']],
		'PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension' => [['0172']],
		'PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension' => [['0173']],
		'PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension' => [['0174']],
		'PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension' => [['0175']],
		'PHPStan\Type\MethodTypeSpecifyingExtension' => [['0176']],
		'PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension' => [['0176']],
		'PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension' => [['0177']],
		'PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension' => [['0178']],
		'PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension' => [['0179']],
		'PHPStan\Type\Php\MbFunctionsReturnTypeExtension' => [['0180']],
		'PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension' => [['0181']],
		'PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension' => [['0182']],
		'PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension' => [['0183']],
		'PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension' => [['0184']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension' => [['0185']],
		'PHPStan\Type\Php\PowFunctionReturnTypeExtension' => [['0186']],
		'PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension' => [['0187']],
		'PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension' => [['0188']],
		'PHPStan\Type\Php\RangeFunctionReturnTypeExtension' => [['0189']],
		'PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension' => [['0190']],
		'PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension' => [['0191']],
		'PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension' => [['0192']],
		'PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension' => [['0193']],
		'PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension' => [['0194']],
		'PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension' => [['0195']],
		'PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension' => [['0196']],
		'PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension' => [['0197']],
		'PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension' => [['0198']],
		'PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension' => [['0199']],
		'PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension' => [['0200']],
		'PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension' => [['0201']],
		'PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension' => [['0202']],
		'PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension' => [['0203']],
		'PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension' => [['0204']],
		'PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension' => [['0205']],
		'PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension' => [['0206']],
		'PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension' => [['0207']],
		'PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension' => [['0208']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension' => [['0209']],
		'PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension' => [['0210']],
		'PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension' => [['0211']],
		'PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension' => [['0212']],
		'PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension' => [['0213']],
		'PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension' => [['0214']],
		'PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension' => [['0215']],
		'PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension' => [['0216']],
		'PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension' => [['0217']],
		'PHPStan\Analyser\TypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\TypeSpecifierFactory' => [['typeSpecifierFactory']],
		'PHPStan\File\RelativePathHelper' => [
			0 => ['relativePathHelper'],
			2 => [1 => 'simpleRelativePathHelper', 'parentDirectoryRelativePathHelper'],
		],
		'PHPStan\File\ParentDirectoryRelativePathHelper' => [2 => ['parentDirectoryRelativePathHelper']],
		'PHPStan\Reflection\ReflectionProvider' => [
			['reflectionProvider'],
			['broker', 'innerRuntimeReflectionProvider'],
			[2 => 'betterReflectionProvider', 'runtimeReflectionProvider'],
		],
		'PHPStan\Broker\Broker' => [['broker']],
		'PHPStan\Broker\BrokerFactory' => [['brokerFactory']],
		'PHPStan\Cache\CacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Cache\FileCacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Parser\RichParser' => [2 => ['currentPhpVersionRichParser']],
		'PHPStan\Parser\SimpleParser' => [2 => ['currentPhpVersionSimpleParser', 'php8Parser']],
		'PhpParser\Parser' => [0 => ['phpParserDecorator'], 2 => [1 => 'currentPhpVersionPhpParser', 'php8PhpParser']],
		'PHPStan\Parser\PhpParserDecorator' => [['phpParserDecorator']],
		'PhpParser\Lexer' => [2 => ['currentPhpVersionLexer', 'php8Lexer']],
		'PhpParser\ParserAbstract' => [2 => ['currentPhpVersionPhpParser', 'php8PhpParser']],
		'PhpParser\Parser\Php7' => [2 => ['currentPhpVersionPhpParser', 'php8PhpParser']],
		'PHPStan\Rules\Registry' => [['registry']],
		'PHPStan\PhpDoc\StubPhpDocProvider' => [['stubPhpDocProvider']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory' => [['reflectionProviderFactory']],
		'PHPStan\BetterReflection\Reflector\ClassReflector' => [
			2 => ['betterReflectionClassReflector', 'nodeScopeResolverClassReflector'],
		],
		'PHPStan\BetterReflection\Reflector\Reflector' => [
			2 => [
				'betterReflectionClassReflector',
				'nodeScopeResolverClassReflector',
				'betterReflectionFunctionReflector',
				'betterReflectionConstantReflector',
			],
		],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingClassReflector' => [
			2 => ['betterReflectionClassReflector', 'nodeScopeResolverClassReflector'],
		],
		'PHPStan\BetterReflection\Reflector\FunctionReflector' => [2 => ['betterReflectionFunctionReflector']],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingFunctionReflector' => [
			2 => ['betterReflectionFunctionReflector'],
		],
		'PHPStan\BetterReflection\Reflector\ConstantReflector' => [2 => ['betterReflectionConstantReflector']],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingConstantReflector' => [
			2 => ['betterReflectionConstantReflector'],
		],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProvider' => [2 => ['betterReflectionProvider']],
		'Hoa\Compiler\Llk\Parser' => [['regexParser']],
		'Hoa\File\File' => [['regexGrammarStream']],
		'Hoa\File\Generic' => [['regexGrammarStream']],
		'Hoa\Stream\Stream' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Pointable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Lockable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Bufferable' => [['regexGrammarStream']],
		'Hoa\Event\Source' => [['regexGrammarStream']],
		'Hoa\Event\Listenable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Stream' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Pathable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Statable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Touchable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\In' => [['regexGrammarStream']],
		'Hoa\File\Read' => [['regexGrammarStream']],
		'PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider' => [2 => ['runtimeReflectionProvider']],
		'PHPStan\Reflection\Runtime\RuntimeReflectionProvider' => [['innerRuntimeReflectionProvider']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory' => [['0218']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory' => [['0219']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\SourceStubber' => [1 => ['0220', '0221']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber' => [['0220']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber' => [['0221']],
		'PhpParser\Lexer\Emulative' => [2 => ['php8Lexer']],
		'PHPStan\Parser\PathRoutingParser' => [2 => ['pathRoutingParser']],
		'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
			[
				'errorFormatter.raw',
				'errorFormatter.baselineNeon',
				'errorFormatter.table',
				'errorFormatter.checkstyle',
				'errorFormatter.json',
				'errorFormatter.junit',
				'errorFormatter.prettyJson',
				'errorFormatter.gitlab',
				'errorFormatter.github',
				'errorFormatter.teamcity',
			],
		],
		'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [['errorFormatter.raw']],
		'PHPStan\Command\ErrorFormatter\BaselineNeonErrorFormatter' => [['errorFormatter.baselineNeon']],
		'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [['errorFormatter.table']],
		'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [['errorFormatter.checkstyle']],
		'PHPStan\Command\ErrorFormatter\JsonErrorFormatter' => [['errorFormatter.json', 'errorFormatter.prettyJson']],
		'PHPStan\Command\ErrorFormatter\JunitErrorFormatter' => [['errorFormatter.junit']],
		'PHPStan\Command\ErrorFormatter\GitlabErrorFormatter' => [['errorFormatter.gitlab']],
		'PHPStan\Command\ErrorFormatter\GithubErrorFormatter' => [['errorFormatter.github']],
		'PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter' => [['errorFormatter.teamcity']],
		'PHPStan\Drupal\ServiceMap' => [['0222']],
		'PHPStan\Type\EntityTypeManagerGetStorageDynamicReturnTypeExtension' => [['0223']],
		'PHPStan\Type\ServiceDynamicReturnTypeExtension' => [['0224']],
		'PHPStan\Reflection\EntityFieldsViaMagicReflectionExtension' => [['0225']],
		'PHPStan\Rules\Drupal\LoadIncludes' => [['0226']],
		'PHPStan\Rules\Drupal\ModuleLoadInclude' => [['0227']],
		'PHPStan\Rules\Deprecations\DeprecatedClassHelper' => [['0228']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [
			'stubFiles' => [
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
			],
			'bootstrap' => null,
			'bootstrapFiles' => [
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php',
				'/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/mglaman/phpstan-drupal/drupal-autoloader.php',
			],
			'excludes_analyse' => [
				'*.api.php',
				'*/tests/fixtures/*.php',
				'*/tests/Drupal/Tests/Listeners/Legacy/*',
				'*/tests/fixtures/*.php',
				'*/settings*.php',
				'*/bower_components/*',
				'*/node_modules/*',
			],
			'excludePaths' => null,
			'autoload_directories' => [],
			'autoload_files' => [],
			'level' => null,
			'paths' => [],
			'exceptions' => [
				'uncheckedExceptionRegexes' => [],
				'uncheckedExceptionClasses' => [],
				'checkedExceptionRegexes' => [],
				'checkedExceptionClasses' => [],
				'check' => ['missingCheckedExceptionInThrows' => false, 'tooWideThrowType' => false],
			],
			'featureToggles' => [
				'bleedingEdge' => false,
				'disableRuntimeReflectionProvider' => false,
				'closureUsesThis' => false,
				'randomIntParameters' => false,
				'nullCoalesce' => false,
				'fileWhitespace' => false,
				'unusedClassElements' => false,
				'readComposerPhpVersion' => false,
				'dateTimeInstantiation' => false,
				'detectDuplicateStubFiles' => false,
				'checkLogicalAndConstantCondition' => false,
				'checkLogicalOrConstantCondition' => false,
				'checkMissingTemplateTypeInParameter' => false,
				'wrongVarUsage' => false,
				'arrayDestructuring' => false,
				'objectFromNewClass' => false,
				'skipCheckGenericClasses' => ['RecursiveIterator', 'RecursiveArrayIterator'],
				'rememberFunctionValues' => false,
				'preciseExceptionTracking' => false,
				'apiRules' => false,
				'deepInspectTypes' => false,
				'neverInGenericReturnType' => false,
			],
			'fileExtensions' => ['php', 'module', 'theme', 'inc', 'install', 'profile', 'engine'],
			'checkAlwaysTrueCheckTypeFunctionCall' => false,
			'checkAlwaysTrueInstanceof' => false,
			'checkAlwaysTrueStrictComparison' => false,
			'checkClassCaseSensitivity' => false,
			'checkExplicitMixed' => false,
			'checkFunctionArgumentTypes' => false,
			'checkFunctionNameCase' => false,
			'checkGenericClassInNonGenericObjectType' => false,
			'checkInternalClassCaseSensitivity' => false,
			'checkMissingIterableValueType' => false,
			'checkMissingCallableSignature' => false,
			'checkMissingVarTagTypehint' => false,
			'checkArgumentsPassedByReference' => false,
			'checkMaybeUndefinedVariables' => false,
			'checkNullables' => false,
			'checkThisOnly' => true,
			'checkUnionTypes' => false,
			'checkExplicitMixedMissingReturn' => false,
			'checkPhpDocMissingReturn' => false,
			'checkPhpDocMethodSignatures' => false,
			'checkExtraArguments' => false,
			'checkMissingClosureNativeReturnTypehintRule' => false,
			'checkMissingTypehints' => false,
			'checkTooWideReturnTypesInProtectedAndPublicMethods' => false,
			'checkUninitializedProperties' => false,
			'inferPrivatePropertyTypeFromConstructor' => false,
			'implicitThrows' => true,
			'reportMaybes' => false,
			'reportMaybesInMethodSignatures' => false,
			'reportStaticMethodSignatures' => false,
			'mixinExcludeClasses' => [],
			'scanFiles' => [],
			'scanDirectories' => [],
			'parallel' => [
				'jobSize' => 20,
				'processTimeout' => 60.0,
				'maximumNumberOfProcesses' => 32,
				'minimumNumberOfJobsPerProcess' => 2,
				'buffer' => 134217728,
			],
			'phpVersion' => null,
			'polluteScopeWithLoopInitialAssignments' => true,
			'polluteScopeWithAlwaysIterableForeach' => true,
			'polluteCatchScopeWithTryAssignments' => false,
			'propertyAlwaysWrittenTags' => [],
			'propertyAlwaysReadTags' => [],
			'additionalConstructors' => [],
			'treatPhpDocTypesAsCertain' => true,
			'tipsOfTheDay' => true,
			'reportMagicMethods' => false,
			'reportMagicProperties' => false,
			'ignoreErrors' => [
				'#\Drupal calls should be avoided in classes, use dependency injection instead#',
				'#Plugin definitions cannot be altered.#',
				'#Missing cache backend declaration for performance.#',
				'#Plugin manager has cache backend specified but does not declare cache tags.#',
			],
			'internalErrorsCountLimit' => 50,
			'cache' => ['nodesByFileCountMax' => 1024, 'nodesByStringCountMax' => 1024],
			'reportUnmatchedIgnoredErrors' => false,
			'scopeClass' => 'PHPStan\Analyser\MutatingScope',
			'typeAliases' => [],
			'universalObjectCratesClasses' => ['stdClass'],
			'earlyTerminatingMethodCalls' => [],
			'earlyTerminatingFunctionCalls' => [],
			'memoryLimitFile' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/sites/default/files/tmp/upgrade_status/sites/default/files/tmp/upgrade_status/phpstan/.memory_limit',
			'tempResultCachePath' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/sites/default/files/tmp/upgrade_status/sites/default/files/tmp/upgrade_status/phpstan/resultCaches',
			'resultCachePath' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/sites/default/files/tmp/upgrade_status/sites/default/files/tmp/upgrade_status/phpstan/resultCache.php',
			'staticReflectionClassNamePatterns' => ['#^PhpParser\\\#', '#^PHPStan\\\#', '#^Hoa\\\#'],
			'dynamicConstantNames' => [
				'ICONV_IMPL',
				'LIBXML_VERSION',
				'LIBXML_DOTTED_VERSION',
				'PHP_VERSION',
				'PHP_MAJOR_VERSION',
				'PHP_MINOR_VERSION',
				'PHP_RELEASE_VERSION',
				'PHP_VERSION_ID',
				'PHP_EXTRA_VERSION',
				'PHP_ZTS',
				'PHP_DEBUG',
				'PHP_MAXPATHLEN',
				'PHP_OS',
				'PHP_OS_FAMILY',
				'PHP_SAPI',
				'PHP_EOL',
				'PHP_INT_MAX',
				'PHP_INT_MIN',
				'PHP_INT_SIZE',
				'PHP_FLOAT_DIG',
				'PHP_FLOAT_EPSILON',
				'PHP_FLOAT_MIN',
				'PHP_FLOAT_MAX',
				'DEFAULT_INCLUDE_PATH',
				'PEAR_INSTALL_DIR',
				'PEAR_EXTENSION_DIR',
				'PHP_EXTENSION_DIR',
				'PHP_PREFIX',
				'PHP_BINDIR',
				'PHP_BINARY',
				'PHP_MANDIR',
				'PHP_LIBDIR',
				'PHP_DATADIR',
				'PHP_SYSCONFDIR',
				'PHP_LOCALSTATEDIR',
				'PHP_CONFIG_FILE_PATH',
				'PHP_CONFIG_FILE_SCAN_DIR',
				'PHP_SHLIB_SUFFIX',
				'PHP_FD_SETSIZE',
				'OPENSSL_VERSION_NUMBER',
			],
			'editorUrl' => null,
			'drupal' => [
				'drupal_root' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web',
				'entityTypeStorageMapping' => [
					'node' => 'Drupal\node\NodeStorage',
					'taxonomy_term' => 'Drupal\taxonomy\TermStorage',
					'user' => 'Drupal\user\UserStorage',
				],
			],
			'tmpDir' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/sites/default/files/tmp/upgrade_status/sites/default/files/tmp/upgrade_status/phpstan',
			'customRulesetUsed' => true,
			'debugMode' => true,
			'productionMode' => false,
			'tempDir' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/sites/default/files/tmp/upgrade_status/sites/default/files/tmp/upgrade_status/phpstan',
			'rootDir' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan',
			'currentWorkingDirectory' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web',
			'cliArgumentsVariablesRegistered' => true,
			'additionalConfigFiles' => [
				'/Users/bradleywaye/Sites/local.sycamoretrust.com/web/sites/default/files/tmp/upgrade_status/deprecation_testing.neon',
			],
			'analysedPaths' => ['/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/ckeditor_tweetthis'],
			'composerAutoloaderProjectPaths' => ['/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/..'],
			'analysedPathsFromConfig' => [],
			'generateBaselineFile' => null,
			'usedLevel' => '0',
			'cliAutoloadFile' => null,
			'fixerTmpDir' => '/var/tmp//phpstan-fixer',
			'singleReflectionFile' => null,
			'singleReflectionInsteadOfFile' => null,
			'__parametersSchema' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Structure', [
				"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00items" => [
					'bootstrap' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'bootstrapFiles' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'excludes_analyse' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'excludePaths' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\AnyOf', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
							\_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Structure', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00items" => [
									'analyse' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
									]),
								],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
							]),
							\_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Structure', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00items" => [
									'analyseAndScan' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
									]),
								],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
							]),
							\_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Structure', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00items" => [
									'analyse' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
									]),
									'analyseAndScan' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
									]),
								],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
							]),
							null,
						],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
					]),
					'autoload_directories' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'autoload_files' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'level' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\AnyOf', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
							\_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							\_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							null,
						],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
					]),
					'paths' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'exceptions' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Structure', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'uncheckedExceptionRegexes' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'uncheckedExceptionClasses' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'checkedExceptionRegexes' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'checkedExceptionClasses' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'check' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Structure', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00items" => [
									'missingCheckedExceptionInThrows' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
									]),
									'tooWideThrowType' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
										"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
									]),
								],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
							]),
						],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'featureToggles' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Structure', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'bleedingEdge' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'disableRuntimeReflectionProvider' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'closureUsesThis' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'randomIntParameters' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'nullCoalesce' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'fileWhitespace' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'unusedClassElements' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'readComposerPhpVersion' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'dateTimeInstantiation' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'detectDuplicateStubFiles' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'checkLogicalAndConstantCondition' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'checkLogicalOrConstantCondition' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'checkMissingTemplateTypeInParameter' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'wrongVarUsage' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'arrayDestructuring' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'objectFromNewClass' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'skipCheckGenericClasses' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'rememberFunctionValues' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'preciseExceptionTracking' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'apiRules' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'deepInspectTypes' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'neverInGenericReturnType' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'fileExtensions' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueCheckTypeFunctionCall' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueInstanceof' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueStrictComparison' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkClassCaseSensitivity' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkExplicitMixed' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkFunctionArgumentTypes' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkFunctionNameCase' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkGenericClassInNonGenericObjectType' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkInternalClassCaseSensitivity' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingIterableValueType' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingCallableSignature' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingVarTagTypehint' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkArgumentsPassedByReference' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMaybeUndefinedVariables' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkNullables' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkThisOnly' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkUnionTypes' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkExplicitMixedMissingReturn' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkPhpDocMissingReturn' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkPhpDocMethodSignatures' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkExtraArguments' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingClosureNativeReturnTypehintRule' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingTypehints' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkTooWideReturnTypesInProtectedAndPublicMethods' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkUninitializedProperties' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'inferPrivatePropertyTypeFromConstructor' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'implicitThrows' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tipsOfTheDay' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMaybes' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMaybesInMethodSignatures' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportStaticMethodSignatures' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'parallel' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Structure', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'jobSize' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'processTimeout' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'float',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'maximumNumberOfProcesses' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'minimumNumberOfJobsPerProcess' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'buffer' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'phpVersion' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\AnyOf', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
							\_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [70100.0, 80099.0],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							null,
						],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
					]),
					'polluteScopeWithLoopInitialAssignments' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'polluteScopeWithAlwaysIterableForeach' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'polluteCatchScopeWithTryAssignments' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'propertyAlwaysWrittenTags' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'propertyAlwaysReadTags' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'additionalConstructors' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'treatPhpDocTypesAsCertain' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMagicMethods' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMagicProperties' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'ignoreErrors' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\AnyOf', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
								\_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								\_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Structure', [
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'path' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
								\_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Structure', [
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'count' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'path' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
								\_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Structure', [
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'paths' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
												"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
												"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
												"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [
													null,
													null,
												],
												"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
												"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
												"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
												"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
												"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
												"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
											]),
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
							],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'internalErrorsCountLimit' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cache' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Structure', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'nodesByFileCountMax' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'nodesByStringCountMax' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'reportUnmatchedIgnoredErrors' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'scopeClass' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'typeAliases' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'array',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'universalObjectCratesClasses' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'stubFiles' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'earlyTerminatingMethodCalls' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'array',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'earlyTerminatingFunctionCalls' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'memoryLimitFile' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tempResultCachePath' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'resultCachePath' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'staticReflectionClassNamePatterns' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'dynamicConstantNames' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'customRulesetUsed' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'rootDir' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tmpDir' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'currentWorkingDirectory' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cliArgumentsVariablesRegistered' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'mixinExcludeClasses' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'scanFiles' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'scanDirectories' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'fixerTmpDir' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'editorUrl' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'debugMode' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'productionMode' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tempDir' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'additionalConfigFiles' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'generateBaselineFile' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'analysedPaths' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'composerAutoloaderProjectPaths' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'analysedPathsFromConfig' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'usedLevel' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cliAutoloadFile' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'singleReflectionFile' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'singleReflectionInsteadOfFile' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'drupal' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Structure', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'drupal_root' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'entityTypeStorageMapping' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'array',
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'__parametersSchema' => \_HumbugBox2acd634d137b\Nette\PhpGenerator\Dumper::createObject('_HumbugBox2acd634d137b\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00type" => '_HumbugBox2acd634d137b\Nette\Schema\Schema',
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
				],
				"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
				"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
				"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00required" => true,
				"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00default" => null,
				"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00before" => null,
				"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
				"\x00_HumbugBox2acd634d137b\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
			]),
		];
	}


	public function createService01(): PhpParser\BuilderFactory
	{
		return new PhpParser\BuilderFactory;
	}


	public function createService02(): PHPStan\Parser\LexerFactory
	{
		return new PHPStan\Parser\LexerFactory($this->getService('07'));
	}


	public function createService03(): PhpParser\NodeVisitor\NameResolver
	{
		return new PhpParser\NodeVisitor\NameResolver;
	}


	public function createService04(): PhpParser\NodeVisitor\NodeConnectingVisitor
	{
		return new PhpParser\NodeVisitor\NodeConnectingVisitor;
	}


	public function createService05(): PhpParser\PrettyPrinter\Standard
	{
		return new PhpParser\PrettyPrinter\Standard;
	}


	public function createService06(): PHPStan\Broker\AnonymousClassNameHelper
	{
		return new PHPStan\Broker\AnonymousClassNameHelper($this->getService('046'), $this->getService('simpleRelativePathHelper'));
	}


	public function createService07(): PHPStan\Php\PhpVersion
	{
		return $this->getService('08')->create();
	}


	public function createService08(): PHPStan\Php\PhpVersionFactory
	{
		return $this->getService('09')->create();
	}


	public function createService09(): PHPStan\Php\PhpVersionFactoryFactory
	{
		return new PHPStan\Php\PhpVersionFactoryFactory(
			null,
			false,
			['/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/..']
		);
	}


	public function createService010(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		return new PHPStan\PhpDocParser\Lexer\Lexer;
	}


	public function createService011(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		return new PHPStan\PhpDocParser\Parser\TypeParser($this->getService('012'));
	}


	public function createService012(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		return new PHPStan\PhpDocParser\Parser\ConstExprParser;
	}


	public function createService013(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		return new PHPStan\PhpDocParser\Parser\PhpDocParser($this->getService('011'), $this->getService('012'));
	}


	public function createService014(): PHPStan\PhpDoc\PhpDocInheritanceResolver
	{
		return new PHPStan\PhpDoc\PhpDocInheritanceResolver($this->getService('0113'));
	}


	public function createService015(): PHPStan\PhpDoc\PhpDocNodeResolver
	{
		return new PHPStan\PhpDoc\PhpDocNodeResolver($this->getService('018'), $this->getService('017'), $this->getService('0106'));
	}


	public function createService016(): PHPStan\PhpDoc\PhpDocStringResolver
	{
		return new PHPStan\PhpDoc\PhpDocStringResolver($this->getService('010'), $this->getService('013'));
	}


	public function createService017(): PHPStan\PhpDoc\ConstExprNodeResolver
	{
		return new PHPStan\PhpDoc\ConstExprNodeResolver;
	}


	public function createService018(): PHPStan\PhpDoc\TypeNodeResolver
	{
		return new PHPStan\PhpDoc\TypeNodeResolver($this->getService('019'), $this->getService('039'));
	}


	public function createService019(): PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider
	{
		return new PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider($this->getService('039'));
	}


	public function createService020(): PHPStan\PhpDoc\TypeStringResolver
	{
		return new PHPStan\PhpDoc\TypeStringResolver($this->getService('010'), $this->getService('011'), $this->getService('018'));
	}


	public function createService021(): PHPStan\PhpDoc\StubValidator
	{
		return new PHPStan\PhpDoc\StubValidator($this->getService('041'));
	}


	public function createService022(): PHPStan\Analyser\Analyser
	{
		return new PHPStan\Analyser\Analyser($this->getService('023'), $this->getService('registry'), $this->getService('026'), 50);
	}


	public function createService023(): PHPStan\Analyser\FileAnalyser
	{
		return new PHPStan\Analyser\FileAnalyser(
			$this->getService('025'),
			$this->getService('026'),
			$this->getService('053'),
			$this->getService('035'),
			false
		);
	}


	public function createService024(): PHPStan\Analyser\IgnoredErrorHelper
	{
		return new PHPStan\Analyser\IgnoredErrorHelper(
			$this->getService('033'),
			$this->getService('046'),
			[
				'#\Drupal calls should be avoided in classes, use dependency injection instead#',
				'#Plugin definitions cannot be altered.#',
				'#Missing cache backend declaration for performance.#',
				'#Plugin manager has cache backend specified but does not declare cache tags.#',
			],
			false
		);
	}


	public function createService025(): PHPStan\Analyser\LazyScopeFactory
	{
		return new PHPStan\Analyser\LazyScopeFactory('PHPStan\Analyser\MutatingScope', $this->getService('039'));
	}


	public function createService026(): PHPStan\Analyser\NodeScopeResolver
	{
		return new PHPStan\Analyser\NodeScopeResolver(
			$this->getService('reflectionProvider'),
			$this->getService('nodeScopeResolverClassReflector'),
			$this->getService('042'),
			$this->getService('053'),
			$this->getService('0113'),
			$this->getService('07'),
			$this->getService('014'),
			$this->getService('046'),
			$this->getService('typeSpecifier'),
			$this->getService('045'),
			true,
			false,
			true,
			[],
			[],
			true,
			false
		);
	}


	public function createService027(): PHPStan\Analyser\ResultCache\ResultCacheManagerFactory
	{
		return new class ($this) implements PHPStan\Analyser\ResultCache\ResultCacheManagerFactory {
			private $container;


			public function __construct(Container_262b9c3931 $container)
			{
				$this->container = $container;
			}


			public function create(array $fileReplacements): PHPStan\Analyser\ResultCache\ResultCacheManager
			{
				return new PHPStan\Analyser\ResultCache\ResultCacheManager(
					$this->container->getService('036'),
					$this->container->getService('fileFinderScan'),
					$this->container->getService('reflectionProvider'),
					'/Users/bradleywaye/Sites/local.sycamoretrust.com/web/sites/default/files/tmp/upgrade_status/sites/default/files/tmp/upgrade_status/phpstan/resultCache.php',
					'/Users/bradleywaye/Sites/local.sycamoretrust.com/web/sites/default/files/tmp/upgrade_status/sites/default/files/tmp/upgrade_status/phpstan/resultCaches',
					['/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/ckeditor_tweetthis'],
					['/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/..'],
					[
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
					],
					'0',
					null,
					[
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php',
						'/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/mglaman/phpstan-drupal/drupal-autoloader.php',
					],
					[],
					[],
					$fileReplacements
				);
			}
		};
	}


	public function createService028(): PHPStan\Analyser\ResultCache\ResultCacheClearer
	{
		return new PHPStan\Analyser\ResultCache\ResultCacheClearer(
			'/Users/bradleywaye/Sites/local.sycamoretrust.com/web/sites/default/files/tmp/upgrade_status/sites/default/files/tmp/upgrade_status/phpstan/resultCache.php',
			'/Users/bradleywaye/Sites/local.sycamoretrust.com/web/sites/default/files/tmp/upgrade_status/sites/default/files/tmp/upgrade_status/phpstan/resultCaches'
		);
	}


	public function createService029(): PHPStan\Cache\Cache
	{
		return new PHPStan\Cache\Cache($this->getService('cacheStorage'));
	}


	public function createService030(): PHPStan\Command\AnalyseApplication
	{
		return new PHPStan\Command\AnalyseApplication(
			$this->getService('031'),
			$this->getService('021'),
			$this->getService('027'),
			$this->getService('024'),
			'/Users/bradleywaye/Sites/local.sycamoretrust.com/web/sites/default/files/tmp/upgrade_status/sites/default/files/tmp/upgrade_status/phpstan/.memory_limit',
			50
		);
	}


	public function createService031(): PHPStan\Command\AnalyserRunner
	{
		return new PHPStan\Command\AnalyserRunner(
			$this->getService('052'),
			$this->getService('022'),
			$this->getService('051'),
			$this->getService('055')
		);
	}


	public function createService032(): PHPStan\Command\FixerApplication
	{
		return new PHPStan\Command\FixerApplication(
			$this->getService('049'),
			$this->getService('027'),
			$this->getService('028'),
			$this->getService('024'),
			$this->getService('055'),
			$this->getService('052'),
			['/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/ckeditor_tweetthis'],
			'/Users/bradleywaye/Sites/local.sycamoretrust.com/web',
			'/var/tmp//phpstan-fixer',
			32
		);
	}


	public function createService033(): PHPStan\Command\IgnoredRegexValidator
	{
		return new PHPStan\Command\IgnoredRegexValidator($this->getService('regexParser'), $this->getService('020'));
	}


	public function createService034(): PHPStan\Dependency\DependencyDumper
	{
		return new PHPStan\Dependency\DependencyDumper(
			$this->getService('035'),
			$this->getService('026'),
			$this->getService('053'),
			$this->getService('025'),
			$this->getService('fileFinderAnalyse')
		);
	}


	public function createService035(): PHPStan\Dependency\DependencyResolver
	{
		return new PHPStan\Dependency\DependencyResolver(
			$this->getService('046'),
			$this->getService('reflectionProvider'),
			$this->getService('037')
		);
	}


	public function createService036(): PHPStan\Dependency\ExportedNodeFetcher
	{
		return new PHPStan\Dependency\ExportedNodeFetcher($this->getService('053'), $this->getService('038'));
	}


	public function createService037(): PHPStan\Dependency\ExportedNodeResolver
	{
		return new PHPStan\Dependency\ExportedNodeResolver($this->getService('0113'), $this->getService('05'));
	}


	public function createService038(): PHPStan\Dependency\ExportedNodeVisitor
	{
		return new PHPStan\Dependency\ExportedNodeVisitor($this->getService('037'));
	}


	public function createService039(): PHPStan\DependencyInjection\Container
	{
		return new PHPStan\DependencyInjection\MemoizingContainer($this->getService('040'));
	}


	public function createService040(): PHPStan\DependencyInjection\Nette\NetteContainer
	{
		return new PHPStan\DependencyInjection\Nette\NetteContainer($this);
	}


	public function createService041(): PHPStan\DependencyInjection\DerivativeContainerFactory
	{
		return new PHPStan\DependencyInjection\DerivativeContainerFactory(
			'/Users/bradleywaye/Sites/local.sycamoretrust.com/web',
			'/Users/bradleywaye/Sites/local.sycamoretrust.com/web/sites/default/files/tmp/upgrade_status/sites/default/files/tmp/upgrade_status/phpstan',
			[
				'/Users/bradleywaye/Sites/local.sycamoretrust.com/web/sites/default/files/tmp/upgrade_status/deprecation_testing.neon',
			],
			['/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/ckeditor_tweetthis'],
			['/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/..'],
			[],
			'0',
			null
		);
	}


	public function createService042(): PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider($this->getService('039'));
	}


	public function createService043(): PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider($this->getService('039'));
	}


	public function createService044(): PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider($this->getService('039'));
	}


	public function createService045(): PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicThrowTypeExtensionProvider($this->getService('039'));
	}


	public function createService046(): PHPStan\File\FileHelper
	{
		return new PHPStan\File\FileHelper('/Users/bradleywaye/Sites/local.sycamoretrust.com/web');
	}


	public function createService047(): PHPStan\File\FileExcluderFactory
	{
		return new PHPStan\File\FileExcluderFactory(
			$this->getService('048'),
			[
				'*.api.php',
				'*/tests/fixtures/*.php',
				'*/tests/Drupal/Tests/Listeners/Legacy/*',
				'*/tests/fixtures/*.php',
				'*/settings*.php',
				'*/bower_components/*',
				'*/node_modules/*',
			],
			null
		);
	}


	public function createService048(): PHPStan\File\FileExcluderRawFactory
	{
		return new class ($this) implements PHPStan\File\FileExcluderRawFactory {
			private $container;


			public function __construct(Container_262b9c3931 $container)
			{
				$this->container = $container;
			}


			public function create(array $analyseExcludes): PHPStan\File\FileExcluder
			{
				return new PHPStan\File\FileExcluder(
					$this->container->getService('046'),
					$analyseExcludes,
					[
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
						'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
					]
				);
			}
		};
	}


	public function createService049(): PHPStan\File\FileMonitor
	{
		return new PHPStan\File\FileMonitor($this->getService('fileFinderAnalyse'));
	}


	public function createService050(): PHPStan\NodeVisitor\StatementOrderVisitor
	{
		return new PHPStan\NodeVisitor\StatementOrderVisitor;
	}


	public function createService051(): PHPStan\Parallel\ParallelAnalyser
	{
		return new PHPStan\Parallel\ParallelAnalyser(50, 60.0, 134217728);
	}


	public function createService052(): PHPStan\Parallel\Scheduler
	{
		return new PHPStan\Parallel\Scheduler(20, 32, 2);
	}


	public function createService053(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('pathRoutingParser'), 1024);
	}


	public function createService054(): PHPStan\Parser\FunctionCallStatementFinder
	{
		return new PHPStan\Parser\FunctionCallStatementFinder;
	}


	public function createService055(): PHPStan\Process\CpuCoreCounter
	{
		return new PHPStan\Process\CpuCoreCounter;
	}


	public function createService056(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_262b9c3931 $container)
			{
				$this->container = $container;
			}


			public function create(
				ReflectionFunction $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				$filename,
				bool $isPure = null
			): PHPStan\Reflection\Php\PhpFunctionReflection {
				return new PHPStan\Reflection\Php\PhpFunctionReflection(
					$reflection,
					$this->container->getService('053'),
					$this->container->getService('054'),
					$this->container->getService('029'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$filename,
					$isPure
				);
			}
		};
	}


	public function createService057(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension;
	}


	public function createService058(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension;
	}


	public function createService059(): PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor;
	}


	public function createService060(): PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher(
			$this->getService('059'),
			$this->getService('053')
		);
	}


	public function createService061(): PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator($this->getService('060'));
	}


	public function createService062(): PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker(
			$this->getService('064'),
			$this->getService('065'),
			$this->getService('063')
		);
	}


	public function createService063(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory(
			$this->getService('060'),
			$this->getService('fileFinderScan')
		);
	}


	public function createService064(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository($this->getService('063'));
	}


	public function createService065(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory {
			private $container;


			public function __construct(Container_262b9c3931 $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\BetterReflection\SourceLocator\Type\Composer\Psr\PsrAutoloaderMapping $mapping): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator($mapping, $this->container->getService('067'));
			}
		};
	}


	public function createService066(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory {
			private $container;


			public function __construct(Container_262b9c3931 $container)
			{
				$this->container = $container;
			}


			public function create(string $fileName): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator(
					$this->container->getService('060'),
					$fileName
				);
			}
		};
	}


	public function createService067(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository($this->getService('066'));
	}


	public function createService068(): PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension([]);
	}


	public function createService069(): PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension([]);
	}


	public function createService070(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\PhpClassReflectionExtension(
			$this->getService('025'),
			$this->getService('026'),
			$this->getService('071'),
			$this->getService('014'),
			$this->getService('057'),
			$this->getService('058'),
			$this->getService('080'),
			$this->getService('053'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('074'),
			$this->getService('0113'),
			false,
			['stdClass']
		);
	}


	public function createService071(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_262b9c3931 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Reflection\ClassReflection $declaringClass,
				?PHPStan\Reflection\ClassReflection $declaringTrait,
				PHPStan\Reflection\Php\BuiltinMethodReflection $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?string $stubPhpDocString,
				bool $isPure = null
			): PHPStan\Reflection\Php\PhpMethodReflection {
				return new PHPStan\Reflection\Php\PhpMethodReflection(
					$declaringClass,
					$declaringTrait,
					$reflection,
					$this->container->getService('reflectionProvider'),
					$this->container->getService('053'),
					$this->container->getService('054'),
					$this->container->getService('029'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$stubPhpDocString,
					$isPure
				);
			}
		};
	}


	public function createService072(): PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension;
	}


	public function createService073(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(['stdClass']);
	}


	public function createService074(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider($this->getService('039'));
	}


	public function createService075(): PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider
	{
		return new PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider(
			$this->getService('080'),
			$this->getService('betterReflectionFunctionReflector'),
			$this->getService('0113'),
			$this->getService('stubPhpDocProvider')
		);
	}


	public function createService076(): PHPStan\Reflection\SignatureMap\SignatureMapParser
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapParser($this->getService('020'));
	}


	public function createService077(): PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider($this->getService('076'), $this->getService('07'));
	}


	public function createService078(): PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider(
			$this->getService('077'),
			$this->getService('060'),
			$this->getService('0113')
		);
	}


	public function createService079(): PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory(
			$this->getService('07'),
			$this->getService('077'),
			$this->getService('078')
		);
	}


	public function createService080(): PHPStan\Reflection\SignatureMap\SignatureMapProvider
	{
		return $this->getService('079')->create();
	}


	public function createService081(): PHPStan\Rules\Api\ApiRuleHelper
	{
		return new PHPStan\Rules\Api\ApiRuleHelper;
	}


	public function createService082(): PHPStan\Rules\AttributesCheck
	{
		return new PHPStan\Rules\AttributesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('094'),
			$this->getService('084')
		);
	}


	public function createService083(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck($this->getService('0111'), false);
	}


	public function createService084(): PHPStan\Rules\ClassCaseSensitivityCheck
	{
		return new PHPStan\Rules\ClassCaseSensitivityCheck($this->getService('reflectionProvider'));
	}


	public function createService085(): PHPStan\Rules\Comparison\ConstantConditionRuleHelper
	{
		return new PHPStan\Rules\Comparison\ConstantConditionRuleHelper($this->getService('086'), true);
	}


	public function createService086(): PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('typeSpecifier'),
			['stdClass'],
			true
		);
	}


	public function createService087(): PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver
	{
		return new PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver($this->getService('reflectionProvider'), [], [], [], []);
	}


	public function createService088(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule($this->getService('090'));
	}


	public function createService089(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule($this->getService('090'));
	}


	public function createService090(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck($this->getService('exceptionTypeResolver'));
	}


	public function createService091(): PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule($this->getService('093'));
	}


	public function createService092(): PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule($this->getService('0113'), $this->getService('093'));
	}


	public function createService093(): PHPStan\Rules\Exceptions\TooWideThrowTypeCheck
	{
		return new PHPStan\Rules\Exceptions\TooWideThrowTypeCheck;
	}


	public function createService094(): PHPStan\Rules\FunctionCallParametersCheck
	{
		return new PHPStan\Rules\FunctionCallParametersCheck(
			$this->getService('0111'),
			$this->getService('0104'),
			$this->getService('07'),
			$this->getService('0106'),
			false,
			false,
			false,
			false,
			false
		);
	}


	public function createService095(): PHPStan\Rules\FunctionDefinitionCheck
	{
		return new PHPStan\Rules\FunctionDefinitionCheck(
			$this->getService('reflectionProvider'),
			$this->getService('084'),
			$this->getService('07'),
			false,
			true,
			false
		);
	}


	public function createService096(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		return new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('0111'));
	}


	public function createService097(): PHPStan\Rules\Generics\GenericAncestorsCheck
	{
		return new PHPStan\Rules\Generics\GenericAncestorsCheck(
			$this->getService('reflectionProvider'),
			$this->getService('098'),
			$this->getService('0100'),
			false,
			['RecursiveIterator', 'RecursiveArrayIterator']
		);
	}


	public function createService098(): PHPStan\Rules\Generics\GenericObjectTypeCheck
	{
		return new PHPStan\Rules\Generics\GenericObjectTypeCheck;
	}


	public function createService099(): PHPStan\Rules\Generics\TemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\TemplateTypeCheck(
			$this->getService('reflectionProvider'),
			$this->getService('084'),
			$this->getService('098'),
			$this->getService('0114'),
			false
		);
	}


	public function createService0100(): PHPStan\Rules\Generics\VarianceCheck
	{
		return new PHPStan\Rules\Generics\VarianceCheck;
	}


	public function createService0101(): PHPStan\Rules\IssetCheck
	{
		return new PHPStan\Rules\IssetCheck($this->getService('0108'), $this->getService('0109'));
	}


	public function createService0102(): PHPStan\Rules\Methods\MethodSignatureRule
	{
		return new PHPStan\Rules\Methods\MethodSignatureRule(false, false);
	}


	public function createService0103(): PHPStan\Rules\MissingTypehintCheck
	{
		return new PHPStan\Rules\MissingTypehintCheck(
			$this->getService('reflectionProvider'),
			false,
			false,
			false,
			['RecursiveIterator', 'RecursiveArrayIterator']
		);
	}


	public function createService0104(): PHPStan\Rules\NullsafeCheck
	{
		return new PHPStan\Rules\NullsafeCheck;
	}


	public function createService0105(): PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider
	{
		return new PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider($this->getService('039'));
	}


	public function createService0106(): PHPStan\Rules\PhpDoc\UnresolvableTypeHelper
	{
		return new PHPStan\Rules\PhpDoc\UnresolvableTypeHelper(false);
	}


	public function createService0107(): PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider
	{
		return new PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider($this->getService('039'));
	}


	public function createService0108(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		return new PHPStan\Rules\Properties\PropertyDescriptor;
	}


	public function createService0109(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		return new PHPStan\Rules\Properties\PropertyReflectionFinder;
	}


	public function createService0110(): PHPStan\Rules\RegistryFactory
	{
		return new PHPStan\Rules\RegistryFactory($this->getService('039'));
	}


	public function createService0111(): PHPStan\Rules\RuleLevelHelper
	{
		return new PHPStan\Rules\RuleLevelHelper($this->getService('reflectionProvider'), false, true, false);
	}


	public function createService0112(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		return new PHPStan\Rules\UnusedFunctionParametersCheck($this->getService('reflectionProvider'));
	}


	public function createService0113(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('074'),
			$this->getService('053'),
			$this->getService('016'),
			$this->getService('015'),
			$this->getService('029'),
			$this->getService('06')
		);
	}


	public function createService0114(): PHPStan\Type\TypeAliasResolver
	{
		return new PHPStan\Type\TypeAliasResolver(
			[],
			$this->getService('020'),
			$this->getService('018'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0115(): PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension;
	}


	public function createService0116(): PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension($this->getService('07'));
	}


	public function createService0117(): PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension;
	}


	public function createService0118(): PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension;
	}


	public function createService0119(): PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension;
	}


	public function createService0120(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension;
	}


	public function createService0121(): PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension;
	}


	public function createService0122(): PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0123(): PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension;
	}


	public function createService0124(): PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension;
	}


	public function createService0125(): PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension;
	}


	public function createService0126(): PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension;
	}


	public function createService0127(): PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension;
	}


	public function createService0128(): PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension;
	}


	public function createService0129(): PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension;
	}


	public function createService0130(): PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension;
	}


	public function createService0131(): PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension;
	}


	public function createService0132(): PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension;
	}


	public function createService0133(): PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension;
	}


	public function createService0134(): PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension;
	}


	public function createService0135(): PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension;
	}


	public function createService0136(): PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension;
	}


	public function createService0137(): PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension;
	}


	public function createService0138(): PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension
	{
		return new PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension;
	}


	public function createService0139(): PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension;
	}


	public function createService0140(): PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension;
	}


	public function createService0141(): PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension;
	}


	public function createService0142(): PHPStan\Type\Php\CompactFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CompactFunctionReturnTypeExtension(false);
	}


	public function createService0143(): PHPStan\Type\Php\CountFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountFunctionReturnTypeExtension;
	}


	public function createService0144(): PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension;
	}


	public function createService0145(): PHPStan\Type\Php\CurlInitReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlInitReturnTypeExtension;
	}


	public function createService0146(): PHPStan\Type\Php\DateFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFunctionReturnTypeExtension;
	}


	public function createService0147(): PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension;
	}


	public function createService0148(): PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension;
	}


	public function createService0149(): PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension;
	}


	public function createService0150(): PHPStan\Type\Php\DsMapDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicReturnTypeExtension;
	}


	public function createService0151(): PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension;
	}


	public function createService0152(): PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension($this->getService('07'));
	}


	public function createService0153(): PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0154(): PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension;
	}


	public function createService0155(): PHPStan\Type\Php\GetClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetClassDynamicReturnTypeExtension;
	}


	public function createService0156(): PHPStan\Type\Php\GetoptFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetoptFunctionDynamicReturnTypeExtension;
	}


	public function createService0157(): PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0158(): PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension;
	}


	public function createService0159(): PHPStan\Type\Php\HashHmacFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\HashHmacFunctionsReturnTypeExtension;
	}


	public function createService0160(): PHPStan\Type\Php\HashFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\HashFunctionsReturnTypeExtension;
	}


	public function createService0161(): PHPStan\Type\Php\IntdivThrowTypeExtension
	{
		return new PHPStan\Type\Php\IntdivThrowTypeExtension;
	}


	public function createService0162(): PHPStan\Type\Php\JsonThrowTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0163(): PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0164(): PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0165(): PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0166(): PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0167(): PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension;
	}


	public function createService0168(): PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension;
	}


	public function createService0169(): PHPStan\Type\Php\StatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StatDynamicReturnTypeExtension;
	}


	public function createService0170(): PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension;
	}


	public function createService0171(): PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension($this->getService('0109'));
	}


	public function createService0172(): PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension;
	}


	public function createService0173(): PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension;
	}


	public function createService0174(): PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension;
	}


	public function createService0175(): PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0176(): PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension;
	}


	public function createService0177(): PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension;
	}


	public function createService0178(): PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension;
	}


	public function createService0179(): PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension;
	}


	public function createService0180(): PHPStan\Type\Php\MbFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbFunctionsReturnTypeExtension;
	}


	public function createService0181(): PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension;
	}


	public function createService0182(): PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension;
	}


	public function createService0183(): PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension;
	}


	public function createService0184(): PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension;
	}


	public function createService0185(): PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension;
	}


	public function createService0186(): PHPStan\Type\Php\PowFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PowFunctionReturnTypeExtension;
	}


	public function createService0187(): PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension;
	}


	public function createService0188(): PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension;
	}


	public function createService0189(): PHPStan\Type\Php\RangeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RangeFunctionReturnTypeExtension;
	}


	public function createService0190(): PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService0191(): PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0192(): PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension;
	}


	public function createService0193(): PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension;
	}


	public function createService0194(): PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0195(): PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension;
	}


	public function createService0196(): PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension;
	}


	public function createService0197(): PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension;
	}


	public function createService0198(): PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0199(): PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension;
	}


	public function createService0200(): PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension($this->getService('0170'));
	}


	public function createService0201(): PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension;
	}


	public function createService0202(): PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension;
	}


	public function createService0203(): PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension;
	}


	public function createService0204(): PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension;
	}


	public function createService0205(): PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension;
	}


	public function createService0206(): PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension;
	}


	public function createService0207(): PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension;
	}


	public function createService0208(): PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension;
	}


	public function createService0209(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension;
	}


	public function createService0210(): PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0211(): PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension(true);
	}


	public function createService0212(): PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension;
	}


	public function createService0213(): PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension;
	}


	public function createService0214(): PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension;
	}


	public function createService0215(): PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension;
	}


	public function createService0216(): PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension;
	}


	public function createService0217(): PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension
	{
		return new PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension;
	}


	public function createService0218(): PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory(
			$this->getService('phpParserDecorator'),
			$this->getService('php8PhpParser'),
			$this->getService('0220'),
			$this->getService('0221'),
			$this->getService('067'),
			$this->getService('064'),
			$this->getService('062'),
			$this->getService('061'),
			$this->getService('039'),
			[],
			[],
			[],
			[],
			['/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/ckeditor_tweetthis'],
			['/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/..'],
			[],
			$this->parameters['singleReflectionFile'],
			['#^PhpParser\\\#', '#^PHPStan\\\#', '#^Hoa\\\#']
		);
	}


	public function createService0219(): PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory {
			private $container;


			public function __construct(Container_262b9c3931 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\BetterReflection\Reflector\FunctionReflector $functionReflector,
				PHPStan\BetterReflection\Reflector\ClassReflector $classReflector,
				PHPStan\BetterReflection\Reflector\ConstantReflector $constantReflector
			): PHPStan\Reflection\BetterReflection\BetterReflectionProvider {
				return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
					$this->container->getService('074'),
					$this->container->getService('042'),
					$classReflector,
					$this->container->getService('0113'),
					$this->container->getService('07'),
					$this->container->getService('075'),
					$this->container->getService('stubPhpDocProvider'),
					$this->container->getService('056'),
					$this->container->getService('relativePathHelper'),
					$this->container->getService('06'),
					$this->container->getService('05'),
					$this->container->getService('046'),
					$functionReflector,
					$constantReflector,
					$this->container->getService('0220')
				);
			}
		};
	}


	public function createService0220(): PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber
	{
		return new PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber($this->getService('php8PhpParser'));
	}


	public function createService0221(): PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber
	{
		return new PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber;
	}


	public function createService0222(): PHPStan\Drupal\ServiceMap
	{
		return new PHPStan\Drupal\ServiceMap;
	}


	public function createService0223(): PHPStan\Type\EntityTypeManagerGetStorageDynamicReturnTypeExtension
	{
		return new PHPStan\Type\EntityTypeManagerGetStorageDynamicReturnTypeExtension([
			'node' => 'Drupal\node\NodeStorage',
			'taxonomy_term' => 'Drupal\taxonomy\TermStorage',
			'user' => 'Drupal\user\UserStorage',
		]);
	}


	public function createService0224(): PHPStan\Type\ServiceDynamicReturnTypeExtension
	{
		return new PHPStan\Type\ServiceDynamicReturnTypeExtension($this->getService('0222'));
	}


	public function createService0225(): PHPStan\Reflection\EntityFieldsViaMagicReflectionExtension
	{
		return new PHPStan\Reflection\EntityFieldsViaMagicReflectionExtension;
	}


	public function createService0226(): PHPStan\Rules\Drupal\LoadIncludes
	{
		return new PHPStan\Rules\Drupal\LoadIncludes('/Users/bradleywaye/Sites/local.sycamoretrust.com/web');
	}


	public function createService0227(): PHPStan\Rules\Drupal\ModuleLoadInclude
	{
		return new PHPStan\Rules\Drupal\ModuleLoadInclude('/Users/bradleywaye/Sites/local.sycamoretrust.com/web');
	}


	public function createService0228(): PHPStan\Rules\Deprecations\DeprecatedClassHelper
	{
		return new PHPStan\Rules\Deprecations\DeprecatedClassHelper($this->getService('broker'));
	}


	public function createServiceBetterReflectionClassReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingClassReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingClassReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionConstantReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingConstantReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingConstantReflector(
			$this->getService('betterReflectionSourceLocator'),
			$this->getService('betterReflectionClassReflector')
		);
	}


	public function createServiceBetterReflectionFunctionReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingFunctionReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingFunctionReflector(
			$this->getService('betterReflectionSourceLocator'),
			$this->getService('betterReflectionClassReflector')
		);
	}


	public function createServiceBetterReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
			$this->getService('074'),
			$this->getService('042'),
			$this->getService('betterReflectionClassReflector'),
			$this->getService('0113'),
			$this->getService('07'),
			$this->getService('075'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('056'),
			$this->getService('relativePathHelper'),
			$this->getService('06'),
			$this->getService('05'),
			$this->getService('046'),
			$this->getService('betterReflectionFunctionReflector'),
			$this->getService('betterReflectionConstantReflector'),
			$this->getService('0220')
		);
	}


	public function createServiceBetterReflectionSourceLocator(): PHPStan\BetterReflection\SourceLocator\Type\SourceLocator
	{
		return $this->getService('0218')->create();
	}


	public function createServiceBroker(): PHPStan\Broker\Broker
	{
		return $this->getService('brokerFactory')->create();
	}


	public function createServiceBrokerFactory(): PHPStan\Broker\BrokerFactory
	{
		return new PHPStan\Broker\BrokerFactory($this->getService('039'));
	}


	public function createServiceCacheStorage(): PHPStan\Cache\FileCacheStorage
	{
		return new PHPStan\Cache\FileCacheStorage('/Users/bradleywaye/Sites/local.sycamoretrust.com/web/sites/default/files/tmp/upgrade_status/sites/default/files/tmp/upgrade_status/phpstan/cache/PHPStan');
	}


	public function createServiceContainer(): Container_262b9c3931
	{
		return $this;
	}


	public function createServiceCurrentPhpVersionLexer(): PhpParser\Lexer
	{
		return $this->getService('02')->create();
	}


	public function createServiceCurrentPhpVersionPhpParser(): PhpParser\Parser\Php7
	{
		return new PhpParser\Parser\Php7($this->getService('currentPhpVersionLexer'));
	}


	public function createServiceCurrentPhpVersionRichParser(): PHPStan\Parser\RichParser
	{
		return new PHPStan\Parser\RichParser(
			$this->getService('currentPhpVersionPhpParser'),
			$this->getService('03'),
			$this->getService('04'),
			$this->getService('050')
		);
	}


	public function createServiceCurrentPhpVersionSimpleParser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser($this->getService('currentPhpVersionPhpParser'), $this->getService('03'));
	}


	public function createServiceErrorFormatter__baselineNeon(): PHPStan\Command\ErrorFormatter\BaselineNeonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\BaselineNeonErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__github(): PHPStan\Command\ErrorFormatter\GithubErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GithubErrorFormatter(
			$this->getService('simpleRelativePathHelper'),
			$this->getService('errorFormatter.table')
		);
	}


	public function createServiceErrorFormatter__gitlab(): PHPStan\Command\ErrorFormatter\GitlabErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GitlabErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__json(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(false);
	}


	public function createServiceErrorFormatter__junit(): PHPStan\Command\ErrorFormatter\JunitErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JunitErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__prettyJson(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(true);
	}


	public function createServiceErrorFormatter__raw(): PHPStan\Command\ErrorFormatter\RawErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\RawErrorFormatter;
	}


	public function createServiceErrorFormatter__table(): PHPStan\Command\ErrorFormatter\TableErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TableErrorFormatter($this->getService('relativePathHelper'), true);
	}


	public function createServiceErrorFormatter__teamcity(): PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceExceptionTypeResolver(): PHPStan\Rules\Exceptions\ExceptionTypeResolver
	{
		return $this->getService('087');
	}


	public function createServiceFileExcluderAnalyse(): PHPStan\File\FileExcluder
	{
		return $this->getService('047')->createAnalyseFileExcluder();
	}


	public function createServiceFileExcluderScan(): PHPStan\File\FileExcluder
	{
		return $this->getService('047')->createScanFileExcluder();
	}


	public function createServiceFileFinderAnalyse(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder(
			$this->getService('fileExcluderAnalyse'),
			$this->getService('046'),
			['php', 'module', 'theme', 'inc', 'install', 'profile', 'engine']
		);
	}


	public function createServiceFileFinderScan(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder(
			$this->getService('fileExcluderScan'),
			$this->getService('046'),
			['php', 'module', 'theme', 'inc', 'install', 'profile', 'engine']
		);
	}


	public function createServiceInnerRuntimeReflectionProvider(): PHPStan\Reflection\Runtime\RuntimeReflectionProvider
	{
		return new PHPStan\Reflection\Runtime\RuntimeReflectionProvider(
			$this->getService('074'),
			$this->getService('042'),
			$this->getService('056'),
			$this->getService('0113'),
			$this->getService('07'),
			$this->getService('075'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('0220')
		);
	}


	public function createServiceNodeScopeResolverClassReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingClassReflector
	{
		return $this->getService('betterReflectionClassReflector');
	}


	public function createServiceParentDirectoryRelativePathHelper(): PHPStan\File\ParentDirectoryRelativePathHelper
	{
		return new PHPStan\File\ParentDirectoryRelativePathHelper('/Users/bradleywaye/Sites/local.sycamoretrust.com/web');
	}


	public function createServicePathRoutingParser(): PHPStan\Parser\PathRoutingParser
	{
		return new PHPStan\Parser\PathRoutingParser(
			$this->getService('046'),
			$this->getService('currentPhpVersionRichParser'),
			$this->getService('currentPhpVersionSimpleParser'),
			$this->getService('php8Parser')
		);
	}


	public function createServicePhp8Lexer(): PhpParser\Lexer\Emulative
	{
		return new PhpParser\Lexer\Emulative;
	}


	public function createServicePhp8Parser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser($this->getService('php8PhpParser'), $this->getService('03'));
	}


	public function createServicePhp8PhpParser(): PhpParser\Parser\Php7
	{
		return new PhpParser\Parser\Php7($this->getService('php8Lexer'));
	}


	public function createServicePhpParserDecorator(): PHPStan\Parser\PhpParserDecorator
	{
		return new PHPStan\Parser\PhpParserDecorator($this->getService('053'));
	}


	public function createServiceReflectionProvider(): PHPStan\Reflection\ReflectionProvider
	{
		return $this->getService('reflectionProviderFactory')->create();
	}


	public function createServiceReflectionProviderFactory(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory
	{
		return new PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory(
			$this->getService('runtimeReflectionProvider'),
			$this->getService('betterReflectionProvider'),
			false
		);
	}


	public function createServiceRegexGrammarStream(): Hoa\File\Read
	{
		return new Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
	}


	public function createServiceRegexParser(): Hoa\Compiler\Llk\Parser
	{
		return Hoa\Compiler\Llk\Llk::load($this->getService('regexGrammarStream'));
	}


	public function createServiceRegistry(): PHPStan\Rules\Registry
	{
		return $this->getService('0110')->create();
	}


	public function createServiceRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\FuzzyRelativePathHelper(
			$this->getService('parentDirectoryRelativePathHelper'),
			'/Users/bradleywaye/Sites/local.sycamoretrust.com/web',
			['/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/ckeditor_tweetthis']
		);
	}


	public function createServiceRules__0(): PHPStan\Rules\Debug\DumpTypeRule
	{
		return new PHPStan\Rules\Debug\DumpTypeRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__1(): PHPStan\Rules\Debug\FileAssertRule
	{
		return new PHPStan\Rules\Debug\FileAssertRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__10(): PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule
	{
		return new PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule($this->getService('broker'));
	}


	public function createServiceRules__11(): PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule
	{
		return new PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule($this->getService('broker'), $this->getService('0111'));
	}


	public function createServiceRules__12(): PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule
	{
		return new PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule(
			$this->getService('broker'),
			$this->getService('0111')
		);
	}


	public function createServiceRules__13(): PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule
	{
		return new PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__14(): PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule
	{
		return new PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule($this->getService('broker'));
	}


	public function createServiceRules__15(): PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule
	{
		return new PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule($this->getService('broker'));
	}


	public function createServiceRules__16(): PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule
	{
		return new PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule($this->getService('broker'));
	}


	public function createServiceRules__17(): PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule
	{
		return new PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule($this->getService('broker'), $this->getService('0111'));
	}


	public function createServiceRules__18(): PHPStan\Rules\Deprecations\TypeHintDeprecatedInClassMethodSignatureRule
	{
		return new PHPStan\Rules\Deprecations\TypeHintDeprecatedInClassMethodSignatureRule($this->getService('0228'));
	}


	public function createServiceRules__19(): PHPStan\Rules\Deprecations\TypeHintDeprecatedInClosureSignatureRule
	{
		return new PHPStan\Rules\Deprecations\TypeHintDeprecatedInClosureSignatureRule($this->getService('0228'));
	}


	public function createServiceRules__2(): PHPStan\Rules\Classes\PluginManagerInspectionRule
	{
		return new PHPStan\Rules\Classes\PluginManagerInspectionRule;
	}


	public function createServiceRules__20(): PHPStan\Rules\Deprecations\TypeHintDeprecatedInFunctionSignatureRule
	{
		return new PHPStan\Rules\Deprecations\TypeHintDeprecatedInFunctionSignatureRule($this->getService('0228'));
	}


	public function createServiceRules__21(): PHPStan\Rules\Deprecations\UsageOfDeprecatedCastRule
	{
		return new PHPStan\Rules\Deprecations\UsageOfDeprecatedCastRule;
	}


	public function createServiceRules__22(): PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule
	{
		return new PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule($this->getService('broker'));
	}


	public function createServiceRules__3(): PHPStan\Rules\Drupal\Coder\DiscouragedFunctionsRule
	{
		return new PHPStan\Rules\Drupal\Coder\DiscouragedFunctionsRule;
	}


	public function createServiceRules__4(): PHPStan\Rules\Drupal\GlobalDrupalDependencyInjectionRule
	{
		return new PHPStan\Rules\Drupal\GlobalDrupalDependencyInjectionRule;
	}


	public function createServiceRules__5(): PHPStan\Rules\Drupal\PluginManager\PluginManagerSetsCacheBackendRule
	{
		return new PHPStan\Rules\Drupal\PluginManager\PluginManagerSetsCacheBackendRule;
	}


	public function createServiceRules__6(): PHPStan\Rules\Deprecations\AccessDeprecatedConstant
	{
		return new PHPStan\Rules\Deprecations\AccessDeprecatedConstant($this->getService('broker'));
	}


	public function createServiceRules__7(): PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule
	{
		return new PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule($this->getService('broker'));
	}


	public function createServiceRules__8(): PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule
	{
		return new PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule($this->getService('broker'), $this->getService('0111'));
	}


	public function createServiceRules__9(): PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule
	{
		return new PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule($this->getService('broker'));
	}


	public function createServiceRuntimeReflectionProvider(): PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider(
			$this->getService('innerRuntimeReflectionProvider'),
			$this->getService('0220'),
			['#^PhpParser\\\#', '#^PHPStan\\\#', '#^Hoa\\\#'],
			$this->parameters['singleReflectionInsteadOfFile']
		);
	}


	public function createServiceSimpleRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\SimpleRelativePathHelper('/Users/bradleywaye/Sites/local.sycamoretrust.com/web');
	}


	public function createServiceStubPhpDocProvider(): PHPStan\PhpDoc\StubPhpDocProvider
	{
		return new PHPStan\PhpDoc\StubPhpDocProvider(
			$this->getService('053'),
			$this->getService('0113'),
			[
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
			]
		);
	}


	public function createServiceTypeSpecifier(): PHPStan\Analyser\TypeSpecifier
	{
		return $this->getService('typeSpecifierFactory')->create();
	}


	public function createServiceTypeSpecifierFactory(): PHPStan\Analyser\TypeSpecifierFactory
	{
		return new PHPStan\Analyser\TypeSpecifierFactory($this->getService('039'));
	}


	public function initialize()
	{
	}
}
