@extends('layouts.app')

@section('content')


<div class="flex-col mb-3 pb-3 w-full">


    <x-title title="Unos knjiga"/>

    <div class="flex justify-center pt-5">
        <div class="card bg-neutral-400 p-3 mb-3 w-full sm:w-1/4">
            <form action="{{route('book.upload')}}" method="post" enctype="multipart/form-data" class="w-full">
                @csrf



                <label for="file" class="label">Izaberi fajl</label>
                <input type="file" name="file" class="input"/>
                <div class="error">@error ('file'){{ $message }}@enderror</div>


                <button type="submit" class="block w-full btn-red-medium mt-5">
                    Unesi
                </button>
                <a href="{{route('pages.dashboard')}}" class="block w-full btn-blue-medium mt-5">Odustani</a>

            </form>
        </div>
    </div>



</div>


@endsection
