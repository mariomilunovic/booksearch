<div
class="fixed inset-0"
role="dialog"
tabindex="-1"
x-show="show_delete"

aria-modal="true"
x-on:click.away="show_delete = false"
x-cloak
x-transition
>


{{-- modal content start --}}
<div class="z-50 flex-col relative min-h-screen flex items-center justify-center text-left">


    <div class="card flex-col bg-neutral-500 h-400 w-400 justify-between p-3">
        <div class="pb-6">
            <h3 class="text-white font-semibold">Da li ste sigurni da želite da obrišete knjigu iz baze?</h3>
        </div>
        <div class="flex justify-between">
            <a href="{{route('book.destroy',$book)}}" class="btn-red-small shadow-md p-3" x-on:click="show_delete=false">
                Obriši
            </a>

            <a class="btn-gray-small shadow-md p-3" x-on:click="show_delete=false">
                Zatvori
            </a>
        </div>
    </div>

</div>
{{-- modal content end --}}

{{-- semi transparent overlay --}}
<div @click.outside="show_delete = false" x-show="show_delete" x-transition.opacity class="z-10 fixed inset-0 bg-black bg-opacity-75"></div>




</div>
