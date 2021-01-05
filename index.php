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
        new ZombieController(1),
        new ZombieController(2),
        new ZombieController(3),
        new ZombieController(4),
        new ZombieController(5),
        new ZombieController(6),
        new ZombieController(7),
        new HighlanderController(8),
        new SauronController(9),
        new WizardController(10),
        new WizardController(11),
        new WizardController(12),
        new HumanController(13),
        new HumanController(14),
        new HumanController(15),
        new HumanController(16),
        new HumanController(17),
    ]
);
