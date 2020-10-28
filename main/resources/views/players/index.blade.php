@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

        <ul>
        @foreach($players as $p)
            <li>
                <a href="{{ $p -> path }}">{{ $p -> name }}</li></a>
            </li>
            @endforeach
        </ul>
        </div>
    </main>
@endsection
