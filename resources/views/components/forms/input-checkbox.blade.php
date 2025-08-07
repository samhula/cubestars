@props(['id', 'name', 'checked'])

@if($checked)
    <input type="checkbox" id="{{ $id }}" name="{{ $name }}" checked>
@else
    <input type="checkbox" id="{{ $id }}" name="{{ $name }}">
@endif