@extends('layouts.app')

@section('content')
<div class="flex-col mb-3 pb-3 w-96">
    <div class="flex-col">
        <div class="">
            <div class="card flex-col text-white font-bold bg-blue-500 hover:bg-blue-600 p-24 w-full h-60 justify-center items-start">

                <button class="w-full mt-4 btn-green-medium">Search</button>

                <button class="w-full mt-4 {{ auth()->user()->hasRole('admin') == true ? "btn-red-medium":"btn-neutral-medium" }}" {{ auth()->user()->hasRole('admin') == true ? "":"disabled" }}>Import</button>

            </div>
        </div>
    </div>
</div>
@endsection
