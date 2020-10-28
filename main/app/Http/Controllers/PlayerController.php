<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{

    public function index()
    {
        $players = Player::all();

        return view('players.index', compact('players'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    public function edit(Player $player)
    {
        //
    }

    public function update(Request $request, Player $player)
    {
        //
    }

    public function destroy(Player $player)
    {
        $player -> delete();

        return redirect() -> route('index');
    }
}
