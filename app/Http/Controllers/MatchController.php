<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

class MatchController extends Controller {

    /* 
     * Static variable for better gameplay logic
     *   
    */
    private $BoardSize = "3";
    private $Player1 = "1";
    private $Player2 = "2";
    private $Player;
    private $field;
    private $board;
    private $empty = "0";
    private $Winner;  


    /*
     * create a matriz with the initial board this way we have a more dinamic board creation 
    */
    public function init() {
        $field -> array(array());
        for($i=0; $i < $this->BoardSize; $i++) {
            for ($i=0; $i < $this->BoardSize; $i++) {
                $this->field[$i][$j] = $this->empty;
            }
            $this->player = $this->player1;
        }
        return $this->$field;
    }


    /*
      * Call index page  
    */
    public function index() {
        return view('index');
    }

    /**
     * Returns a list of matches
     *
     * TODO it's mocked, make this work :)
     * TODO get list of matches from DB
     * @return \Illuminate\Http\JsonResponse
     */
    public function matches() {
        return response()->json([
            'id' => $id,
            'name' => 'Match'.$id,
            'next' => 1,
            'winner' => 0,
            'board' => [
                0, 0, 0,
                0, 0, 0,
                0, 0, 0,
            ],
        ]);
    }

    /**
     * Returns the state of a single match
     *
     * TODO it's mocked, make this work :)
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function match($id) {
        return response()->json([
            'id' => $id,
            'name' => 'Match'.$id,
            'next' => 2,
            'winner' => 0,
            'board' => [
                1, 0, 2,
                0, 1, 2,
                1, 1, 1,
            ],
        ]);
    }

    /**
     * Makes a move in a match
     *
     * TODO it's mocked, make this work :)
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function move($id) {
        $board = [
            1, 0, 2,
            0, 1, 2,
            0, 0, 0,
        ];

        $position = Input::get('position');
        $board[$position] = 2;

        return response()->json([
            'id' => $id,
            'name' => 'Match'.$id,
            'next' => 1,
            'winner' => 0,
            'board' => $board,
        ]);
    }

    /**
     * Creates a new match and returns the new list of matches
     *
     * TODO it's mocked, make this work :)
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create() {
        return response()->json($this->fakeMatches());
    }

    /**
     * Deletes the match and returns the new list of matches
     *
     * TODO it's mocked, make this work :)
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id) {
        return response()->json($this->fakeMatches()->filter(function($match) use($id){
            return $match['id'] != $id;
        })->values());
    }

    /**
     * Creates a fake array of matches
     *
     * @return \Illuminate\Support\Collection
     */
    private function fakeMatches() {
        return collect([
            [
                'id' => 1,
                'name' => 'Match1',
                'next' => 2,
                'winner' => 1,
                'board' => [
                    1, 0, 2,
                    0, 1, 2,
                    0, 2, 1,
                ],
            ],
            [
                'id' => 2,
                'name' => 'Match2',
                'next' => 1,
                'winner' => 0,
                'board' => [
                    1, 0, 2,
                    0, 1, 2,
                    0, 0, 0,
                ],
            ],
            [
                'id' => 3,
                'name' => 'Match3',
                'next' => 1,
                'winner' => 0,
                'board' => [
                    1, 0, 2,
                    0, 1, 2,
                    0, 2, 0,
                ],
            ],
            [
                'id' => 4,
                'name' => 'Match4',
                'next' => 2,
                'winner' => 0,
                'board' => [
                    0, 0, 0,
                    0, 0, 0,
                    0, 0, 0,
                ],
            ],
            [
                'id' => 5,
                'name' => 'Match Test',
                'next' => 2,
                'winner' => 0,
                'board' => [ 
                    0, 0, 0,
                    0, 0, 0,
                    0, 0, 0,
                ]
            ],
        ]);
    }

}