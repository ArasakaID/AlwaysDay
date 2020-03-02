<?php

namespace AlwaysDay;

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
