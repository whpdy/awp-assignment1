<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    const PLAYERS_ON_MAIN_PAGE = 9;

    public function index()
    {
        $players = Player::query() -> orderByDesc('name') -> paginate(self::PLAYERS_ON_MAIN_PAGE);
        return view('players.index', ['players' => $players]);
    }

    public function create () {

        return view ('players.create');

    }

    public function store(Request $request) {

        request () -> validate([
            'name' => 'required|min:2|max:50',
            'team' => 'required|min:5|max:50',
            'position' => 'required|min:4|max:32',
        ]);

        $attributes = $request -> all(
            'name',
                 'team',
                 'position'
        );

        $player = Player::create ($attributes);
        return redirect() -> route('index');
    }

    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    public function edit(Player $player)
    {
        return view ('players.edit', compact('player'));
    }

    public function update(Request $request, Player $player)
    {
        $attributes = request() -> validate([
            'name' => 'required|min:2|max:50',
            'team' => 'required|min:5|max:50',
            'position' => 'required|min:4|max:32'
        ]);

        $player -> update($attributes);
        return redirect() -> route('index');
    }

    public function destroy(Player $player)
    {
        $player -> delete();

        return redirect() -> route('index');
    }
}
