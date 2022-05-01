@extends('layouts.app')

@section('content')
<div class="flex-col mb-3 pb-3 w-96">
    <div class="flex-col">
        <a href="{{route('book.index')}}" class="block w-full mt-4 btn-green-medium">Prikaz svih knjiga</a>
    </div>
</div>
@endsection
