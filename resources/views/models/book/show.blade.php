@extends('layouts.app')

@section('content')

<div class="flex-col mb-3 pb-3 w-full sm:w-600">

    <x-title title="Prikaz knjige"/>

    <div class="pb-3">

        <x-book :book="$book"/>

    </div>

</div>

@endsection
