<div class="flex-col mb-3 p-2">
    <div>

        <x-title title="Pretraga knjiga"/>

        <div class="flex justify-between items-center pb-3">
            
            {{--        SEARCH INPUT       --}}

            <input
            type="text"
            class="w-1/3 input"
            name="query"
            placeholder="Unesite deo naslova knjige"
            wire:model.debounce.150ms="query"
            autofocus
            />


            {{--        SEARCH MODE      --}}

            <div class="flex justify-center pl-4 pb-2">
                <div> Starost :</div>

                <div class="form-check form-check-inline pl-4">
                    <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                    type="radio"
                    name="age"
                    wire:model="age"
                    id="age1"
                    value="5">
                    <label class="form-check-label inline-block text-gray-800" for="searchMode1">do 5 godina</label>
                </div>

                <div class="form-check form-check-inline pl-4">
                    <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                    type="radio"
                    name="age"
                    wire:model="age"
                    id="age2"
                    value="10">
                    <label class="form-check-label inline-block text-gray-800" for="searchMode2">do 10 godina</label>
                </div>

                <div class="form-check form-check-inline pl-4">
                    <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                    type="radio"
                    name="age"
                    wire:model="age"
                    id="age3"
                    value="10000">
                    <label class="form-check-label inline-block text-gray-800" for="searchMode3">preko 10 godina</label>
                </div>
            </div>

        </div>

        {{--        SEARCH RESULTS     --}}
        @if(count($books)>0)

        @foreach ($books as $book)
        <x-book :book="$book"/>
        @endforeach

        @else

        <div class="error">Nema pronađenih knjiga za zadati kriterijum pretrage</div>

        @endif
    </div>

</div>
