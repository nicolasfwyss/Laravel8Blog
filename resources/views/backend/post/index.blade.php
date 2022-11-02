<x-layouts.main>
    <div class="flex-1">
        <div class="mb-5 flex justify-end">
            <a href="{{ route('admin.post.create') }}" class="btn btn-primary">
                <i class="fa fa-plus fa-fw"></i> Beitrag erstellen
            </a>
        </div>

        <table class="backend-table text-gray-800 bg-white shadow-md text-gray-800 w-full">
            <thead>
            <tr class="text-white font-bold">
                <th class="bg-blue-800 border border-gray-200 p-2">ID</th>
                <th class="bg-blue-800 border border-gray-200 p-2">Datum</th>
                <th class="bg-blue-800 border border-gray-200 p-2">Title</th>
                <th class="bg-blue-800 border border-gray-200 p-2"></th>
                <th class="bg-blue-800 border border-gray-200 p-2">Optionen</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr @if($loop->even) class="bg-gray-200" @endif>
                    <td class="border border-gray-200 p-2">{{ $post->id }}</td>
                    <td class="border border-gray-200 p-2">{{ $post->created_at }}</td>
                    <td class="border border-gray-200 p-2">{{ $post->title }}</td>
                    <td class="border border-gray-200 p-2">
                        @if($post->isTrashed())
                            <i class="far fa-dot-circle text-red-700"></i>
                        @else
                            <i class="far fa-dot-circle text-green-600"></i>
                        @endif
                    </td>
                    <td class="border border-gray-200 p-2">
                        <div class="flex">
                            <a href="{{ route('admin.post.edit', $post->slug) }}" class="btn btn-primary"> <i class="px-1 fa fa-pencil-alt fa-fw"></i> </a>
                            <form action="{{ route('admin.post.destroy', $post->slug) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-trash-alt fa-fw"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="my-5">
            {{ $posts->links() }}
        </div>
    </div>
</x-layouts.main>