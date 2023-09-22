<div style="background: #ddd; padding: 10px;">
    <div> Selected: {{ implode(', ', $selected) }}</div>
    <button wire:click="clearSelected">Clear</button>

    <livewire:search component="results.special-search-result" />
</div>
