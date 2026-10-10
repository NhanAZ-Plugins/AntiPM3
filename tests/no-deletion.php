<?php

declare(strict_types=1);

namespace pocketmine\plugin {
	class PluginBase {
		public function getServer(): never {
			throw new \RuntimeException('Retired plugin must not access the server');
		}
	}
}

namespace {
	require __DIR__ . '/../src/AntiPM3/Main.php';

	$fixture = __DIR__ . '/fixtures/preserve.txt';
	$before = file_get_contents($fixture);
	if ($before === false) {
		throw new \RuntimeException('Fixture is missing');
	}
	$plugin = new \AntiPM3\Main();
	$plugin->onEnable();
	if ($plugin->antiPM3(dirname($fixture)) !== false) {
		throw new \RuntimeException('Retired API should return false');
	}
	if (file_get_contents($fixture) !== $before) {
		throw new \RuntimeException('The retired plugin changed its fixture');
	}
	echo "PASS: retired AntiPM3 does not delete data\n";
}
