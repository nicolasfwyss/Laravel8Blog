<div class="form-group">
    <label for="title" class="form-label">{{ __('Title')}} </label>
    <input id="title" type="text" class="form-input @error('title') is-invalid @enderror" name="title" value="{{old('title') ?? $post->title ?? ''}}">

    @error('title')
    <div class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </div>
    @enderror
</div>


<div class="form-group">
    <label for="body" class="form-label">{{ __('Body') }}</label>
    <textarea id="body" name="body" class="form-input @error('body') is-invalid @enderror"> {{old('body') ?? $post->body ?? ''}} </textarea>

    @error('body')
    <div class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">Beitrag Speichern</button>
