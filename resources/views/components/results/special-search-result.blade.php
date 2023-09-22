@props([
    'result'
])

<div style="background: #bbb;">
    {{ $result }}
    <button wire:click="$emit('userSelected', '{{ $result }}')">Select</button>
</div>