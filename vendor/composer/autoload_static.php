<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd55a87ef0eb83f8bd433e480d4b0f017
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Game\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Game\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Game\\Controllers\\AbstractCharacter' => __DIR__ . '/../..' . '/src/Controllers/AbstractCharacter.php',
        'Game\\Controllers\\BattleController' => __DIR__ . '/../..' . '/src/Controllers/BattleController.php',
        'Game\\Controllers\\HighlanderController' => __DIR__ . '/../..' . '/src/Controllers/HighlanderController.php',
        'Game\\Controllers\\HumanController' => __DIR__ . '/../..' . '/src/Controllers/HumanController.php',
        'Game\\Controllers\\SauronController' => __DIR__ . '/../..' . '/src/Controllers/SauronController.php',
        'Game\\Controllers\\TrollController' => __DIR__ . '/../..' . '/src/Controllers/TrollController.php',
        'Game\\Controllers\\WeaponController' => __DIR__ . '/../..' . '/src/Controllers/WeaponController.php',
        'Game\\Controllers\\WizardController' => __DIR__ . '/../..' . '/src/Controllers/WizardController.php',
        'Game\\Controllers\\ZombieController' => __DIR__ . '/../..' . '/src/Controllers/ZombieController.php',
        'Game\\Interfaces\\FighterInterface' => __DIR__ . '/../..' . '/src/Interfaces/FighterInterface.php',
        'Game\\Interfaces\\LivingInterface' => __DIR__ . '/../..' . '/src/Interfaces/LivingInterface.php',
        'Game\\Interfaces\\MayDieInterface' => __DIR__ . '/../..' . '/src/Interfaces/MayDieInterface.php',
        'Game\\Interfaces\\OpponentInterface' => __DIR__ . '/../..' . '/src/Interfaces/OpponentInterface.php',
        'Game\\Interfaces\\PlayerInterface' => __DIR__ . '/../..' . '/src/Interfaces/PlayerInterface.php',
        'Game\\Interfaces\\WearingWeaponInterface' => __DIR__ . '/../..' . '/src/Interfaces/WearingWeaponInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd55a87ef0eb83f8bd433e480d4b0f017::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd55a87ef0eb83f8bd433e480d4b0f017::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd55a87ef0eb83f8bd433e480d4b0f017::$classMap;

        }, null, ClassLoader::class);
    }
}
