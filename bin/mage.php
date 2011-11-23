<?php
# mage install
# mage init

# mage config add environment [production]
# mage config add host prod_example@s05.example.com to:[production]
# mage config git git://github.com/andres-montanez/Zend-Framework-Twig-example-app.git
# mage config svn svn://example.com/repo

# mage deploy to:production
# mage update
# mage up
# mage task:init to:production 
# mage run:full-deployment to:production

# full-deployment = update, deploy to:production

$baseDir = dirname(dirname(__FILE__));

require_once $baseDir . '/Mage/Autoload.php';
spl_autoload_register(array('Mage_Autoload', 'autoload'));

Mage_Console::output('Begining Magallanes' . PHP_EOL . PHP_EOL);

$console = new Mage_Console;
$console->setArgs($argv);
$console->parse();

$console->run();
