<?

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicTacToe extends Model {
    
    // adiciona os dados extras sobre o jogo/partida
    public $fillable = ['end_date', 'winner_id'];
    
    // chama os turnos de cada jogador
    public function turns() {
        return $this->hasMany('App\Turn', 'game_id');
    }
}