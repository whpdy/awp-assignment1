<div class="bg-blue-100 mb-4 px-4 py-4 border rounded border-gray-500">

    <div class="flex">
        <div class="w-1/2 my-auto">
            <h2 class="text-xl font-bold mb-2">
                {{ $p -> name }}
            </h2>
            <p class="font-bold">
                {{ $p -> team }}
            </p>
            <p>
                {{ $p -> position }}
            </p>

        </div>
         <div class="w-1/4 my-auto">
            <div class="float-right">

                <p class="crud-button mb-2">
                    <a href="{{ $p -> path }}">
                        <i class="fas fa-dog"></i>
                    </a>
                </p>

                <p class="crud-button mb-2">
                    <a href="{{ $p -> path . "/edit"}}">
                        <i class="fas fa-edit"></i>
                    </a>
                </p>

                <form class="inline" method="post" action="{{ $p -> path }}">
                    @method ('DELETE')
                    @csrf
                    <button type="submit">
                        <i class="fas fa-dumpster inline crud-button"></i>
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>

