@extends ('layouts.app')

@section ('header')

    <div class="text-4xl mb-8">
        <h1>NBA Players: Add a Player</h1>
    </div>

@endsection

@section ('content')

    <form method="post" action="/players/">

        @csrf

        <div class="flex flex-wrap">
            <div class="w-full">
                <label class="block" for="name">
                    Player's Name
                </label>

                <input class="block w-2/5 @error ('name') border border-red-500 @enderror"
                       type="text" name="name" data-lpignore="true" autocomplete="off" placeholder="e.g. Michael Jordan" />

                @error ('name')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-1/2">
                <label class="block" for="team">Team</label>
                <input class="block w-4/5 @error ('team') border border-red-500 @enderror"
                       type="text" name="team" data-lpignore="true"
                       autocomplete="off" placeholder="e.g. Toronto Raptors" />

                @error ('team')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="w-1/2">
                <label class="block" for="position">
                    Position
                </label>
                <input class="block w-4/5 @error ('position') border border-red-500 @enderror"
                       type="text" name="position" data-lpignore="true"
                       autocomplete="off" placeholder="e.g. Point Guard" />

                @error ('position')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>
        </div>

        <div class="flex flex-wrap mt-8">
            <div class="w-full">
                <button class="nav-button" type="submit"><i class="fas fa-plus mr-2"></i>Add Player</button>
                <a href="/">
                    <button class="nav-button" type="button"><i class="fas fa-times mr-2"></i>Cancel</button>
                </a>
            </div>
        </div>

    </form>

@endsection
