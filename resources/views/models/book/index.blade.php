@extends('layouts.app')

@section('content')

<div class="flex-col mb-3 pb-3 w-full sm:w-600">

    <x-title title="Prikaz svih knjiga"/>

    <div class="pb-3">

        @foreach ($books as $book)

        <x-book :book="$book"/>

        @endforeach

        {{$books->links()}}

        @if($books->count()==0)
        <div class="error">Trenutno u bazi nema unetih knjiga</div>
        @endif

    </div>

</div>

@endsection
