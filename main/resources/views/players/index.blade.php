@extends('layouts.app')

@section ('header')
    <div class="flex justify-between">
        <div class="text-4xl mb-8">
            <h1>NBA Players</h1>
        </div>
        <div>
            <div class="nav-button mr-2">
                <a href="/players/"><i class="fas fa-plus mr-2"></i>Add New Player</a>
            </div>
        </div>
    </div>

@endsection

@section('content')
        <div class="flex flex-wrap">

        @foreach($players as $p)

            <div class="w-1/3 pr-2">
                @include( '_player')
            </div>

        @endforeach
        </div>

    {{ $players -> links () }}

@endsection
