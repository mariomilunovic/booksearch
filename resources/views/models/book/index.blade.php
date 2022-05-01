@extends('layouts.app')

@section('content')


<div class="flex-col mb-3 pb-3 w-full sm:w-600">


    <x-title title="Prikaz svih knjiga"/>

    <div>
        @foreach ($books as $book)


        {{-- {{$book->title}} --}}
        <x-book :book="$book"/>



        @endforeach

        {{$books->links('pagination::tailwind')}}
    </div>



</div>


@endsection
