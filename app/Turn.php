<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turn extends Model {
    
    // wtf this does
    public $incrementing  = false;

    // completa as informaçoes sobre o jogo/jogada
    public $fillable = ['player_id', 'location', 'type', 'game_id', 'id'];
    
    // especifica há qual jogo esses turnos pertencem
    public function game(){
        $this -> belongsTo('App\TicTacToe', 'game_id' );
    }
}