<?php

namespace App\Listeners;

use App\Events\Play;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PlayListener {
    /**
     * Create the event listener.
     *
     * @return void
     */

    public function __construct() {
        # return null;
    }

    /**
     * Handle the event.
     *
     * @param  Play  $event
     * @return void
     */

    public function handle(Play $event) {
        # return null;
    }
}