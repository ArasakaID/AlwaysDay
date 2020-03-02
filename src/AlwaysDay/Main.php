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

use pocketmine\scheduler\Task;

class UpdateTime extends Task {

    public function __construct(Main $plugin) {
		$this->plugin = $plugin;
	}

	public function onRun(int $currentTick) {
		if($this->plugin->getConfig()->get("alwaysday") == true){
			foreach($this->plugin->getServer()->getLevels() as $level){
				$level->setTime(1000);
			}
		}
		
	}
}
