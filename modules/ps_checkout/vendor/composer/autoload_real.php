<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit32fcf93a16edf13b4c7ea8b5f67a7d24
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

        spl_autoload_register(array('ComposerAutoloaderInit32fcf93a16edf13b4c7ea8b5f67a7d24', 'loadClassLoader'), true, false);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit32fcf93a16edf13b4c7ea8b5f67a7d24', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit32fcf93a16edf13b4c7ea8b5f67a7d24::getInitializer($loader));

        $loader->register(false);

        $includeFiles = \Composer\Autoload\ComposerStaticInit32fcf93a16edf13b4c7ea8b5f67a7d24::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire32fcf93a16edf13b4c7ea8b5f67a7d24($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire32fcf93a16edf13b4c7ea8b5f67a7d24($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
