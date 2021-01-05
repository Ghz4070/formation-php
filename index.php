<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Game\Controllers\BattleController;
use Game\Controllers\HighlanderController;
use Game\Controllers\HumanController;
use Game\Controllers\SauronController;
use Game\Controllers\WizardController;
use Game\Controllers\ZombieController;


$fight = new BattleController(...[
        new ZombieController('Jean'),
        new ZombieController('Paul'),
        new ZombieController('Gauthier'),
        new ZombieController('Ilies'),
        new ZombieController('Frederic'),
        new ZombieController('Willy'),
        new ZombieController('Ivan'),
        new HighlanderController('Sarah'),
        new SauronController('Toufik'),
        new WizardController('Alexandre'),
        new WizardController('Cyrille'),
        new WizardController('Etienne'),
        new HumanController('Sefyu'),
        new HumanController('Safae'),
        new HumanController('Fanina'),
        new HumanController('Cheick'),
        new HumanController('Islem'),
    ]
);

$fight->fight();