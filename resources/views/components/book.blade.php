<div class="card flex-col py-3 px-3 mb-3 transition duration-300 bg-neutral-200 hover:ring-4 hover:ring-neutral-400 ease-in-out">

    <div class="flex items-center justify-between">

        <div class="flex-col text-md font-bold text-gray-600 items-center text-shadow p-2">

            <div class="">Naslov : {{$book->title}}</div>

            <div class="">Autor : {{$book->author}}</div>

            <div class="">Izdavač : {{$book->publisher}}</div>

            <div class="">Datum izdavanja : {{Carbon\Carbon::parse($book->published_at)->format('d.m.Y');}} ({{Carbon\Carbon::parse($book->published_at)->diffForHumans()}})</div>
        </div>
    </div>

</div>
