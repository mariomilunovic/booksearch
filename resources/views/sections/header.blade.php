
<div class="flex w-full items-center justify-between">


    {{-- left side --}}

    <div id="Logo" class="flex my-2 mx-4 justify-content-center items-center justify-between">
        <div>
            <a class="text-white text-4xl font-bold text-shadow-md whitespace-nowrap mr-4" href="{{ auth()->user()!=null ? Route('book.livewire_search') : Route('book.index') }}">
                BOOK SEARCH
            </a>
        </div>
        <div class="flex">
            <a href="{{route('book.index')}}" class="block w-full ml-4 btn-green-small whitespace-nowrap">Prikaz svih knjiga</a>
            @auth
            <a href="{{route('book.livewire_search')}}" class="block w-full ml-4 btn-green-small whitespace-nowrap">Pretraga knjiga</a>
            <a href="{{route('book.import')}}" class="block w-full ml-4 whitespace-nowrap {{ auth()->user()->hasRole('admin') == true ? "btn-red-small":"btn-neutral-small" }}">Unos knjiga</a>
            @endauth
        </div>


    </div>

    {{-- right side --}}
    <div class="flex">

        <div class="flex">
            @guest
            <a class="btn-amber-small mr-3" href="{{route('register.form')}}">Registracija</a>
            <a class="btn-green-small mr-3" href="{{route('login.form')}}">Prijava</a>
            @endguest

        </div>

        @auth
        <div x-data="{ isOpen: false }" class="mr-6">

            <div class="relative flex items-center">
                <div class="pr-2 font-semibold text-white text-right invisible sm:visible ">
                    {{ auth()->user()->name}}
                </div>
                <button x-on:click="isOpen = !isOpen" class="z-40 w-10 sm:w-12 overflow-hidden  border-4 border-gray-400 rounded-full transition duration-500 hover:scale-105 hover:border-gray-300 focus:border-gray-1 00 focus:outline-none">
                    <img src="/images/ui/user.png">
                </button>

                {{-- alpinejs menu --}}
                <div x-show="isOpen" @click.outside="isOpen = false"  class="z-50 absolute right-0 w-32 py-2 text-center bg-white rounded-lg shadow-lg top-14" x-cloak>

                    <a href="{{route('logout.logout')}}" class="block px-4 py-2 account-link hover:bg-blue-400">Odjava</a>
                </div>

            </div>

        </div>
        @endauth


    </div>

</div>
