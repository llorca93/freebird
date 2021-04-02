<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInit6951f18c6c80c2f98a12712b888cd417
=======
class ComposerAutoloaderInitc2aba5fe23a6bbf28409e90c65fac1e5
>>>>>>> 5085d8bd26d05fd957697ee818f531f0823619bc
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInit6951f18c6c80c2f98a12712b888cd417', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(\dirname(__FILE__)));
        spl_autoload_unregister(array('ComposerAutoloaderInit6951f18c6c80c2f98a12712b888cd417', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInitc2aba5fe23a6bbf28409e90c65fac1e5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(\dirname(__FILE__)));
        spl_autoload_unregister(array('ComposerAutoloaderInitc2aba5fe23a6bbf28409e90c65fac1e5', 'loadClassLoader'));
>>>>>>> 5085d8bd26d05fd957697ee818f531f0823619bc

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require __DIR__ . '/autoload_static.php';

<<<<<<< HEAD
            call_user_func(\Composer\Autoload\ComposerStaticInit6951f18c6c80c2f98a12712b888cd417::getInitializer($loader));
=======
            call_user_func(\Composer\Autoload\ComposerStaticInitc2aba5fe23a6bbf28409e90c65fac1e5::getInitializer($loader));
>>>>>>> 5085d8bd26d05fd957697ee818f531f0823619bc
        } else {
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }

            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }

            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->register(true);

        if ($useStaticLoader) {
<<<<<<< HEAD
            $includeFiles = Composer\Autoload\ComposerStaticInit6951f18c6c80c2f98a12712b888cd417::$files;
=======
            $includeFiles = Composer\Autoload\ComposerStaticInitc2aba5fe23a6bbf28409e90c65fac1e5::$files;
>>>>>>> 5085d8bd26d05fd957697ee818f531f0823619bc
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
<<<<<<< HEAD
            composerRequire6951f18c6c80c2f98a12712b888cd417($fileIdentifier, $file);
=======
            composerRequirec2aba5fe23a6bbf28409e90c65fac1e5($fileIdentifier, $file);
>>>>>>> 5085d8bd26d05fd957697ee818f531f0823619bc
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequire6951f18c6c80c2f98a12712b888cd417($fileIdentifier, $file)
=======
function composerRequirec2aba5fe23a6bbf28409e90c65fac1e5($fileIdentifier, $file)
>>>>>>> 5085d8bd26d05fd957697ee818f531f0823619bc
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
    }
}
