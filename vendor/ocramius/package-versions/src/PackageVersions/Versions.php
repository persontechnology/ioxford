<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'laravel/laravel';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'anahkiasen/underscore-php' => '2.0.0@48f97b295c82d99c1fe10d8b0684c43f051b5580',
  'barryvdh/laravel-snappy' => 'v0.4.6@94d53c88fa58baa4573c5854663ebc9955f21265',
  'davejamesmiller/laravel-breadcrumbs' => '5.3.2@99f92a706faefb5e1816caa96e877a0184509e5b',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'dragonmantank/cron-expression' => 'v2.3.0@72b6fbf76adb3cf5bc0db68559b33d41219aba27',
  'egulias/email-validator' => '2.1.13@834593d5900615639208417760ba6a17299e2497',
  'erusev/parsedown' => '1.7.4@cb17b6477dfff935958ba01325f2e8a2bfa6dab3',
  'facade/ignition-contracts' => '1.0.0@f445db0fb86f48e205787b2592840dd9c80ded28',
  'fideloper/proxy' => '4.2.2@790194d5d3da89a713478875d2e2d05855a90a81',
  'guzzlehttp/guzzle' => '6.5.2@43ece0e75098b7ecd8d13918293029e555a50f82',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'h4cc/wkhtmltoimage-amd64' => '0.12.4@c4e33f635207af89a704205b8902fb5715ca88be',
  'h4cc/wkhtmltopdf-amd64' => '0.12.4@4e2ab2d032a5d7fbe2a741de8b10b8989523c95b',
  'ixudra/curl' => '6.18.1@ff1b23dba264272a7b3a8fef01f73eec23c8fbe7',
  'jakub-onderka/php-console-color' => 'v0.2@d5deaecff52a0d61ccb613bb3804088da0307191',
  'jakub-onderka/php-console-highlighter' => 'v0.4@9f7a229a69d52506914b4bc61bfdb199d90c5547',
  'knplabs/knp-snappy' => 'v1.2.0@162633e3143f7f03b395e1dbd53df25e1e87d2f5',
  'laravel/framework' => 'v5.8.36@ccf857af50897eda43ceaf12e318cf214e0e4e95',
  'laravel/nexmo-notification-channel' => 'v2.3.0@da1ba24ecd9877e461fc3fdd68761328eaf035e3',
  'laravel/tinker' => 'v1.0.10@ad571aacbac1539c30d480908f9d0c9614eaf1a7',
  'laravelcollective/html' => 'v5.8.1@3a1c9974ea629eed96e101a24e3852ced382eb29',
  'laraveles/spanish' => '1.4.5@1e71f5d5350f6db0c72e6a5ff4a00802b42805b3',
  'lcobucci/jwt' => '3.3.1@a11ec5f4b4d75d1fcd04e133dede4c317aac9e18',
  'league/flysystem' => '1.0.63@8132daec326565036bc8e8d1876f77ec183a7bd6',
  'league/fractal' => '0.18.0@4e553dae1a9402adbe11c81430a64675dc97b4fc',
  'maatwebsite/excel' => '3.1.18@d0231ab1f4bb93c8695630cb445ada1fdc54add0',
  'markbaker/complex' => '1.4.7@1ea674a8308baf547cbcbd30c5fcd6d301b7c000',
  'markbaker/matrix' => '1.2.0@5348c5a67e3b75cd209d70103f916a93b1f1ed21',
  'monolog/monolog' => '1.25.3@fa82921994db851a8becaf3787a9e73c5976b6f1',
  'nesbot/carbon' => '2.28.0@e2bcbcd43e67ee6101d321d5de916251d2870ca8',
  'nexmo/client' => '2.0.0@664082abac14f6ab9ceec9abaf2e00aeb7c17333',
  'nexmo/client-core' => '2.1.0@ef7e8a0715c93c5ddc7915e8a29f29331798bb52',
  'nexmo/laravel' => '2.1.0@d05faa716133b49975907848ed4c79f85033a1f9',
  'nikic/php-parser' => 'v4.3.0@9a9981c347c5c49d6dfe5cf826bb882b824080dc',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'opis/closure' => '3.5.1@93ebc5712cdad8d5f489b500c59d122df2e53969',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'patchwork/utf8' => 'v1.3.2@d296e0026e7ce10b2a9fe594feca9628ef00e9e8',
  'php-http/guzzle6-adapter' => 'v2.0.1@6074a4b1f4d5c21061b70bab3b8ad484282fe31f',
  'php-http/httplug' => '2.1.0@72d2b129a48f0490d55b7f89be0d6aa0597ffb06',
  'php-http/promise' => 'v1.0.0@dc494cdc9d7160b9a09bd5573272195242ce7980',
  'phpoffice/phpspreadsheet' => '1.10.1@1648dc9ebef6ebe0c5a172e16cf66732918416e0',
  'phpoption/phpoption' => '1.7.2@77f7c4d2e65413aff5b5a8cc8b3caf7a28d81959',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-client' => '1.0.0@496a823ef742b632934724bf769560c2a5c7c44e',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.9.12@90da7f37568aee36b116a030c5f99c915267edd4',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/uuid' => '3.9.2@7779489a47d443f845271badbdcedfe4df8e06fb',
  'spatie/laravel-activitylog' => '3.9.1@659738573f8607191afbd2b794db8669a5b20951',
  'spatie/laravel-permission' => '2.38.0@674ad54a0ba95d8ad26990aa250b5c9d9b165e15',
  'spatie/string' => '2.2.2@28607b9925b4f0499d48570553ca419c6298e26b',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/console' => 'v4.4.2@82437719dab1e6bdd28726af14cb345c2ec816d0',
  'symfony/css-selector' => 'v5.0.2@19d29e7098b7b2c3313cb03902ca30f100dcb837',
  'symfony/debug' => 'v4.4.2@5c4c1db977dc70bb3250e1308d3e8c6341aa38f5',
  'symfony/error-handler' => 'v4.4.2@6d7d7712a6ff5215ec26215672293b154f1db8c1',
  'symfony/event-dispatcher' => 'v4.4.2@b3c3068a72623287550fe20b84a2b01dcba2686f',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/finder' => 'v4.4.2@ce8743441da64c41e2a667b8eb66070444ed911e',
  'symfony/http-foundation' => 'v4.4.2@fcae1cff5b57b2a9c3aabefeb1527678705ddb62',
  'symfony/http-kernel' => 'v4.4.2@fe310d2e95cd4c356836c8ecb0895a46d97fede2',
  'symfony/mime' => 'v5.0.2@0e6a4ced216e49d457eddcefb61132173a876d79',
  'symfony/polyfill-ctype' => 'v1.13.1@f8f0b461be3385e56d6de3dbb5a0df24c0c275e3',
  'symfony/polyfill-iconv' => 'v1.13.1@a019efccc03f1a335af6b4f20c30f5ea8060be36',
  'symfony/polyfill-intl-idn' => 'v1.13.1@6f9c239e61e1b0c9229a28ff89a812dc449c3d46',
  'symfony/polyfill-mbstring' => 'v1.13.1@7b4aab9743c30be783b73de055d24a39cf4b954f',
  'symfony/polyfill-php72' => 'v1.13.1@66fea50f6cb37a35eea048d75a7d99a45b586038',
  'symfony/polyfill-php73' => 'v1.13.1@4b0e2222c55a25b4541305a053013d5647d3a25f',
  'symfony/process' => 'v4.4.2@b84501ad50adb72a94fb460a5b5c91f693e99c9b',
  'symfony/routing' => 'v4.4.2@628bcafae1b2043969378dcfbf9c196539a38722',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/translation' => 'v4.4.2@f7669f48a9633bf8139bc026c755e894b7206677',
  'symfony/translation-contracts' => 'v2.0.1@8cc682ac458d75557203b2f2f14b0b92e1c744ed',
  'symfony/var-dumper' => 'v4.4.2@be330f919bdb395d1e0c3f2bfb8948512d6bdd99',
  'tijsverkoyen/css-to-inline-styles' => '2.2.2@dda2ee426acd6d801d5b7fd1001cde9b5f790e15',
  'vlucas/phpdotenv' => 'v3.6.0@1bdf24f065975594f6a117f0f1f6cabf1333b156',
  'yajra/laravel-datatables' => 'v1.5.0@50de5e20ef01da1a353e0a81c0ad5f9da6a985ec',
  'yajra/laravel-datatables-buttons' => 'v4.8.0@9d3f4a72c6da9ef35aa775ae1b00f2648bea618c',
  'yajra/laravel-datatables-editor' => 'v1.17.1@2e09ebe5d422d07d6a766ffa426ac64c3fba70ee',
  'yajra/laravel-datatables-fractal' => 'v1.5.0@33a563f3ba6e9e90255956cadaf3acd48c521bba',
  'yajra/laravel-datatables-html' => 'v4.20.1@691427b9d554f5e3467217eaa64483de60de4bec',
  'yajra/laravel-datatables-oracle' => 'v9.8.0@9797a5f1b962b9ebf6bb087c88314dd724b3d5c0',
  'zendframework/zend-diactoros' => '2.2.1@de5847b068362a88684a55b0dbb40d85986cfa52',
  'beyondcode/laravel-dump-server' => '1.3.0@fcc88fa66895f8c1ff83f6145a5eff5fa2a0739a',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'filp/whoops' => '2.7.0@4c97f814aa2f0dd4d5bedc89181c10ef12c004c5',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'hamcrest/hamcrest-php' => 'v2.0.0@776503d3a8e85d4f9a1148614f95b7a608b046ad',
  'mockery/mockery' => '1.3.1@f69bbde7d7a75d6b2862d9ca8fab1cd28014b4be',
  'myclabs/deep-copy' => '1.9.4@579bb7356d91f9456ccd505f24ca8b667966a0a7',
  'nunomaduro/collision' => 'v3.0.1@af42d339fe2742295a54f6fdd42aaa6f8c4aca68',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'phpdocumentor/reflection-common' => '2.0.0@63a995caa1ca9e5590304cd845c15ad6d482a62a',
  'phpdocumentor/reflection-docblock' => '4.3.4@da3fd972d6bafd628114f7e7e036f45944b62e9c',
  'phpdocumentor/type-resolver' => '1.0.1@2e32a6d48972b2c1976ed5d8967145b6cec4a4a9',
  'phpspec/prophecy' => '1.10.1@cbe1df668b3fe136bcc909126a0f529a78d4cbbc',
  'phpunit/php-code-coverage' => '6.1.4@807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '7.5.19@4263f76a3fc65385e242ef7357b99f3bed36707e',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.3@464c90d7bdf5ad4e8a6aea15c091fec0603d4368',
  'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e',
  'sebastian/global-state' => '2.0.0@e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'webmozart/assert' => '1.6.0@573381c0a64f155a0d9a23f4b0c797194805b925',
  'laravel/laravel' => 'dev-master@a62becf6bd774491c25935713277195950d1ce98',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
