@props(['value', 'name'])

<div class="mb-3">

<x-backend.layout.forms.label for="{{ $name.'Input' }}" text="{{ ucwords(str_replace('_',' ',$name)) }}"/>                      

<textarea name="{{ $name }}" id="{{ $name.'Input' }}" {{ $attributes->merge(['class'=>'form-control']) }} 
   >
    {{ $value }}
</textarea>

<x-backend.layout.forms.error name="{{$name}}"/>

</div>