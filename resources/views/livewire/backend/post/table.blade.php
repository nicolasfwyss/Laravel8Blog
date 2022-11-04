<div class="flex-1">
    <div class="flex justify-between items-center mb-5">
        <div class="shadow-md flex">
            <form action="" method="post">
                <input type="text" class="form-input" name="search" wire:keydown.escape="$set('filter.search','')   " wire:model="filter.search" placeholder="Filter ...">
            </form>

        </div>

        <div>
            <a href="{{ route('admin.post.create') }}" class="btn btn-primary">
                <i class="fa fa-plus fa-fw"></i> Beitrag erstellen
            </a>
        </div>
    </div>

    <x-table>
        <x-thead>
            <x-tr class="text-white font-bold">
                <x-th sortable wire:click="sortBy('id')" :direction="$sortField === 'id' ? $sortDirection : null">ID
                </x-th>
                <x-th sortable wire:click="sortBy('created_at')"
                      :direction="$sortField === 'created_at' ? $sortDirection : null">Datum
                </x-th>
                <x-th sortable wire:click="sortBy('title')" :direction="$sortField === 'title' ? $sortDirection : null"
                      class="w-full">Title
                </x-th>
                {{--<x-th></x-th>--}}
                <x-th>Optionen</x-th>
            </x-tr>
        </x-thead>
        <x-tbody>
            @foreach($posts as $post)
                <x-tr {{--wire:loading.class.delay="opacity-25"--}} class="{{ $loop->even ? 'bg-gray-50' : '' }}">
                    <x-td>{{ $post->id }}</x-td>
                    <x-td class="whitespace-nowrap">{{ $post->created_at }}</x-td>
                    <x-td>{{ $post->title }}</x-td>
                    {{--<x-td class="">
                        @if($post->isTrashed())
                            <i class="far fa-dot-circle text-red-700"></i>
                        @else
                            <i class="far fa-dot-circle text-green-600"></i>
                        @endif
                    </x-td>--}}
                    <x-td class="">
                        <div class="flex">
                            <a href="{{ route('admin.post.edit', $post->slug) }}" class="btn btn-secondarya"> <i
                                    class="px-1 fa fa-pencil-alt fa-fw"></i> </a>
                            <form action="{{ route('admin.post.destroy', $post->slug) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-secondary">
                                    @if($post->isTrashed())
                                        <i class="fa fa-toggle-off fa-fw text-red-500"></i>
                                    @else
                                        <i class="fa fa-toggle-on fa-fw text-green-500"></i>
                                    @endif
                                </button>
                            </form>
                        </div>
                    </x-td>
                </x-tr>
            @endforeach
        </x-tbody>
    </x-table>

    <div class="my-5">
        {{ $posts->links() }}
    </div>
</div>
