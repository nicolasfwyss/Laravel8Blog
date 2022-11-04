<th {{ $attributes->merge(['class' => 'bg-blue-800 border border-gray-200 p-2 text-left whitespace-nowrap tracking-wider']) }} >
    {{ $slot }}

    @if($attributes['sortable'])

        @if($attributes['direction'] == 'asc')

            <span class="">
                <i class="ml-2 fa fa-chevron-up"></i>
            </span>
        @elseif($attributes['direction'] == 'desc')
            <span class="">
                <i class="ml-2 fa fa-chevron-down"></i>
            </span>
        @else
            <span class="opacity-70 hover:opacity-100 transition duration-150 ease">
                <i class="ml-2 fa fa-chevron-up"></i>
            </span>
        @endif
    @endif
</th>

