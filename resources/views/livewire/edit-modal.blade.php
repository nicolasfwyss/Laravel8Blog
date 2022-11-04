<div>
    <x-modal wire:model.defer="showModal">
        <x-slot name="button">
            <a @click="show = true"
               {{--href="{{ route('admin.post.edit', $post->slug) }}"--}} class="btn btn-secondarya"> <i
                    class="px-1 fa fa-pencil-alt fa-fw"></i> </a>
        </x-slot>
        <x-slot name="title">
            Beitrag Erstellen
        </x-slot>
        <div class="form-group">
            <label for="title" class="form-label">{{ __('Title')}} </label>
            <input id="title" type="text" class="form-input @error('post.title') is-invalid @enderror" name="title"
                   wire:model="post.title">

            @error('post.title')
            <div class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>


        <div class="form-group">
            <label for="body" class="form-label">{{ __('Body') }}</label>
            <textarea id="body" name="body"
                      class="form-input @error('post.body') is-invalid @enderror" wire:model="post.body"> </textarea>

            @error('post.body')
            <div class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>


        <x-slot name="footer">
            <button wire:click="save" type="button"
                    class="inline-flex w-full justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">
                Speichern
            </button>
            <button @click="show = false" type="button"
                    class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </button>
        </x-slot>
    </x-modal>
</div>
