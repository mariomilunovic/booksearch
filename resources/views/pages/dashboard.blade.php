@extends('layouts.app')

@section('content')

<div class="flex-col mb-3 pb-3 w-96">

        <a href="{{route('book.livewire_search')}}" class="block w-full mt-4 btn-green-medium">Pretraga knjiga</a>

        <a href="{{route('book.import')}}" class="block w-full mt-4 {{ auth()->user()->hasRole('admin') == true ? "btn-red-medium":"btn-neutral-medium" }}">Unos knjiga</a>

</div>

@endsection
