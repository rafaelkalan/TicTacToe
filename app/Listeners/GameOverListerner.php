<?php

namespace App\Listeners;

use App\Events\Gameover;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\ShouldQueue;

class GameOverListener {
    /**
     * Create the event listener.
     *
     * @return void
     */
     public function __construct()
     {
         //
     }
     /**
      * Handle the event.
      *
      * @param  GameOver  $event
      * @return void
      */
     public function handle(GameOver $event)
     {
         //
     }
}