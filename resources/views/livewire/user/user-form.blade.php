<form wire:submit.prevent="store">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-4">
        <div>
            <label>
                Name
                <input wire:model="name" placeholder="enter name">
            </label>
            @error('name')
                {{$message}}
            @enderror
        </div>
        <div>
            <label>
                Email
                <input wire:model="email" type="email" placeholder="enter email">
            </label>
            @error('email')
            {{$message}}
            @enderror
        </div>
    </div>
    <div class="mt-5">
        <button>Submit</button>
    </div>
</form>
