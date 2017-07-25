<?php

namespace PopupGUI; 

use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;
use pocketmine\Server;

class main extends PluginBase{

	public function onEnable(){
		$this->addGUI();
	}

	/*
	* GUIをポップアップする関数です。 
	* このコードをコピって組み込んでも使えます。
	* その場合はresourcesの内容も一緒にコピーにしてください。
	*/
	public function addGUI(){
		$this->saveResource("gui.hta");
		$this->saveResource("Icon.ico");

		if(stristr(PHP_OS, 'WIN')){
			exec("mshta " . $this->getDataFolder() . "gui.hta");

		}elseif(stristr(PHP_OS, 'LINUX')){
			//シェルスクリプトとかでできないかなーとか考えてる。

			$this->getLogger()->info("Linuxの場合のメッセージを記入");
			
		}elseif(stristr(PHP_OS, 'DAR')){
			//ほーほーが分かればappscriptとかその他の方法があれば
			//それを用いて可能にしたい(Mac環境がないからできればプルリク欲しいです)

			$this->getLogger()->info("MacOSの場合のメッセージを記入");

		}
	}
}