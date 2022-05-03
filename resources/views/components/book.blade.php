<div x-data="{ show_delete : false }" x-on:keydown.escape.prevent.stop="show_delete = false">

 @include('modals.book_delete')

<div class="card flex-col py-3 px-3 mb-3 transition duration-300 bg-neutral-200 hover:ring-4 hover:ring-neutral-400 ease-in-out">

    <div class="flex items-center justify-between">

        <div class="flex-col text-md font-bold text-gray-600 items-center text-shadow p-2">

            <div class="">Naslov : {{$book->title}}</div>

            <div class="">Autor : {{$book->author}}</div>

            <div class="">Izdavač : {{$book->publisher}}</div>

            <div class="">Datum izdavanja : {{Carbon\Carbon::parse($book->published_at)->format('d.m.Y');}} ({{Carbon\Carbon::parse($book->published_at)->diffForHumans()}})</div>
        </div>
        @auth
        @if(auth()->user()->hasRole('admin'))
        <div>
            <a class="flex items-center" x-on:click="show_delete = !show_delete" href="#">

                <span class="font-bold mr-2 text-shadow  "></span>
                <span>
                    <i class="fa fa-trash"></i>

                </span>

            </a>
        </div>
        @endif
        @endauth
    </div>

</div>


</div>
