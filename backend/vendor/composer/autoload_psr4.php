<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Symfony\\Polyfill\\Php81\\' => array($vendorDir . '/symfony/polyfill-php81'),
    'Symfony\\Polyfill\\Php80\\' => array($vendorDir . '/symfony/polyfill-php80'),
    'Slim\\' => array($vendorDir . '/slim/slim/Slim'),
    'Rsind\\Backend\\' => array($baseDir . '/src'),
    'Psr\\Log\\' => array($vendorDir . '/psr/log/src'),
    'Psr\\Http\\Server\\' => array($vendorDir . '/psr/http-server-handler/src', $vendorDir . '/psr/http-server-middleware/src'),
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-factory/src', $vendorDir . '/psr/http-message/src'),
    'Psr\\Container\\' => array($vendorDir . '/psr/container/src'),
    'MongoDB\\' => array($vendorDir . '/mongodb/mongodb/src'),
    'FastRoute\\' => array($vendorDir . '/nikic/fast-route/src'),
);