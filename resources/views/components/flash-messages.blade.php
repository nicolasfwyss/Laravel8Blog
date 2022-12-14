@if(count($messages))
<div class="w-full mb-5 container max-w-7xl mx-auto px-5 lg:px-40 space-y-3">
    @foreach($messages as $message)
        <div class="alert alert-flash alert-{{$message['level']}}">
             {{ $message['message'] }}
        </div>
    @endforeach
</div>
@endif
