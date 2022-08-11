@props(['message', 'type'])

@if($message)
<div role="alert" {{ $attributes->merge(['class' => 'alert alert-'.$type]) }}>
    {{ $message }}
</div>
@endif
