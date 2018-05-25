<?php

namespace App\Listeners;

use App\Events\NewGame;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewGameListener {
    /**
     * Create the event listener.
     *
     * @return void
     */
    
    public function __construct() {
        #return null;
    }

    /**
     * Handle the event.
     *
     * @param  NewGame  $event
     * @return void
     */
    
     public function handle(NewGame $event){
        #return null;
    }
}