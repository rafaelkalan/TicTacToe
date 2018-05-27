<?php // asking the all powerful php if I can use him

// File Location
namespace App\Events;

// imports need 
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class GameOver implements ShouldBroadcast {

    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public $gameId;
    public $userId;
    public $type;
    public $location;

    /** 
        * Creating a Game Over event  
        * @return void
    */
    public function _init($gameId, $userId, $location, $type) {
        
        $this->gameId = $gameId;
        $this->userId = $userId;
        $this->location = $location;
        $this->type = $type; 
    }

    /**
        * study better what this do 
        * broadcast the game
    */
    public function broadOn() {
        return new Channel('game-channel-' .$this->gameId . '-' . $this->$userId);
    }
}