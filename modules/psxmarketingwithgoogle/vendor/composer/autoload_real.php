<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit31e4e8a30540df35710747e8c7d14ee1
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

        spl_autoload_register(array('ComposerAutoloaderInit31e4e8a30540df35710747e8c7d14ee1', 'loadClassLoader'), true, false);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit31e4e8a30540df35710747e8c7d14ee1', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit31e4e8a30540df35710747e8c7d14ee1::getInitializer($loader));

        $loader->setClassMapAuthoritative(true);
        $loader->register(false);

        $includeFiles = \Composer\Autoload\ComposerStaticInit31e4e8a30540df35710747e8c7d14ee1::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire31e4e8a30540df35710747e8c7d14ee1($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire31e4e8a30540df35710747e8c7d14ee1($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
