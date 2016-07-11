<?php
namespace RDCcommands;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\item\Item;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\inventory\Inventory;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use pocketmine\permission\ServerOperator;
/**
 *  ____     ______    ______    _________   _________     _______
 * |  _ \   |  __  |  |  ____|  |___   ___| |___   ___|   |__   __|
 * | |_) /  | |__| |  | |____       | |         | |          | |
 * |  __/   |  __  |  |  ____|      | |         | |          | |
 * | |      | |  | |  | |____       | |         | |        __| |__
 * |_|      |_|  |_|  |______|      |_|         |_|       |_______|
 * Plugin coded by Emiel2222.
 * This Label is by Emiel2222.
**/
class Main extends PluginBase implements Listener{
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->saveDefaultConfig();
        $this->getLogger()->info(TextFormat::AQUA . "RDC commands loaded. Coded by Emiel2222.");
    }
    
    public function onDisable(){
        $this->getLogger()->info(TextFormat::AQUA . "RDC commands disabled.");
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        switch($command->getName()){

            case "commands":

            $sender->sendMessage(TextFormat::GREEN . "Avaible Commands:");
            $sender->sendMessage(TextFormat::GREEN . "/youtube");
            $sender->sendMessage(TextFormat::GREEN . "/pet");
            $sender->sendMessage(TextFormat::GREEN . "/bug");
            $sender->sendMessage(TextFormat::GREEN . "/report");
            
            return true;
            
            case "youtube":
               if (!($sender instanceof Player)) {
                     $sender->sendMessage(TextFormat::GREEN . "§8[ §cError §8]§a Only available ingame!");
               } else {
            $sender->sendMessage(TextFormat::GREEN . "§cWIP");
               }
            return true;
            
            case "pet":
               if (!($sender instanceof Player)) {
                     $sender->sendMessage(TextFormat::GREEN . "§8[ §cError §8]§a Only available ingame!");
               } else {
            $sender->sendMessage(TextFormat::GREEN . "§cWIP");
               }
            return true;
            
            case "bug":
               if (!($sender instanceof Player)) {
                     $sender->sendMessage(TextFormat::GREEN . "§8[ §cError §8]§a Only available ingame!");
               } else {
            $sender->sendMessage(TextFormat::GREEN . "§cWIP");
               }
            return true;
            
            case "report":
               if (!($sender instanceof Player)) {
                     $sender->sendMessage(TextFormat::GREEN . "§8[ §cError §8]§a Only available ingame!");
               } else {
            $sender->sendMessage(TextFormat::GREEN . "§cWIP");
            }
            return true;
            
            case "party":
               if (!($sender instanceof Player)) {
                     $sender->sendMessage(TextFormat::GREEN . "§8[ §cError §8]§a Only available ingame!");
               } else {
            $sender->sendMessage(TextFormat::GREEN . "§cWIP");
               }
            return true;
     
            case "friend":
               if (!($sender instanceof Player)) {
                     $sender->sendMessage(TextFormat::GREEN . "§8[ §1Kit §8]§a Only available ingame!");
               } else {
            $sender->sendMessage(TextFormat::GREEN . "§cWIP");
               }
            return true;
            
            case "expand":
               if (!($sender instanceof Player)) {
                     $sender->sendMessage(TextFormat::GREEN . "§8[ §cError §8]§a Only available ingame!");
               } else {
            $sender->sendMessage(TextFormat::GREEN . "§cWIP");
               }
            return true;
            
		}
	}
}
    /*
     *                         Coded by Emiel2222
     */
