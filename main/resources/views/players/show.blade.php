@extends('layouts.app')

@section('header')

    <div class="flex justify-between mb-8">
        <div class="text-4x1">
            <h1>NBA Players: {{ $player -> name }}</h1>
        </div>
        <div class="flex">
            <x-details-button :player="$player"/>
            <x-home-button />
        </div>
    </div>
@endsection

@section('content')

    <div class="flex">
        <div class="w-1/2">
            <img src="{{ $player -> image_url(500) }}" />
        </div>
        <div class="w-1/2 text-x1 bg-blue-100 px-4 py-4 border rounded border-gray-500">
            <h2 class="font-bold mb-4">
                Player Details
            </h2>
            <p class="mb-2">
                Team: {{ $player -> team }}
            </p>
            <p class="mb-4">
                Position: {{ $player -> position }}
            </p>
        </div>
    </div>

@endsection
