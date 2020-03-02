<?php

namespace AlwaysDay;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class Main extends PluginBase {
	
	public function onEnable(){
		$this->getScheduler()->scheduleRepeatingTask(new UpdateTime($this), 20); 
	}
	
}
