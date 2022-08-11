@props(['name'])

<div class="mb-3">

<x-backend.layout.forms.label for="{{ $name.'Input' }}" text="{{ ucwords(str_replace('_',' ',$name)) }}"/>  

<input name="{{ $name }}" id="{{ $name }}"
{{ $attributes->merge([
    'class' => "form-control"
    ]) }}
>

<x-backend.layout.forms.error name="{{$name}}"/>

</div>