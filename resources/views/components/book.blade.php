<div class="card flex-col py-3 px-3 mb-3 transition duration-300 bg-neutral-200 hover:ring-4 hover:ring-neutral-400 ease-in-out">

    <div class="flex items-center justify-between">

        <div class="flex-col text-xl font-bold items-center text-shadow p-3">

            <div class="text-1xl font-bold text-gray-600">Title : {{$book->title}}</div>

            <div class="text-1xl font-bold text-gray-600">Author : {{$book->author}}</div>

            <div class="text-1xl font-bold text-gray-600">Publisher : {{$book->publisher}}</div>

            <div class="text-1xl font-bold text-gray-600">Published : {{$book->published_at}}</div>
        </div>

    </div>

</div>
