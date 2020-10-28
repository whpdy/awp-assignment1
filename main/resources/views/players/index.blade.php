@extends('layouts.app')

@section ('header')
    <div class="flex justify-between">
        <div class="text-4xl mb-8">
            <h1>NBA Players</h1>
        </div>
        <div>
            <div class="nav-button mr-2">
                <a href="/dog/"><i class="fas fa-paw mr-2"></i>Add New Player</a>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

        <ul>
        @foreach($players as $p)
            <li>
                <a href="{{ $p -> path }}">{{ $p -> name }}</a>
                @include( '_player')
            </li>
            @endforeach
        </ul>
        </div>
    </main>
@endsection
