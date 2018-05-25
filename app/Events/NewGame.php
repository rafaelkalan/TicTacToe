<?php // from down here only god knows what is going on

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class newGame implements ShouldBroadcast {

    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public $destinationUser;
    public $gameId;
    public $from;

    /** 
        * Creating a new game event  
        * @return void
    */
    public function _init($destinationUser, $gameId, $from) {
        
        $this->destinationUser = $destinationUser;
        $this->gameId = $gameId;
        $this->from =  $from;

    }

    /**
        * study better what this do 
        * broadcast the game
    */
    public function broadOn() {
        return new Channel('new-game-channel-');
    }

}