{{-- @props([
    'message'
]) --}}

{{-- <div class="alert alert-success">
     {{ $message }}
</div> --}}

<div {{ $attributes->merge(['class' => 'alert alert-'.$type]) }}>
    {{ $message }}
</div>

