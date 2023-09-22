<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class Search extends Component
{
    public $options = [
        'John',
        'Jacob',
        'Jingleheimer',
        'Daniel',
    ];

    public $search = '';

    public $results = [];

    public $component;

    public function mount($component = null)
    {
        $this->component = $component ?? 'search-result';
    }

    public function updatingSearch()
    {
        $this->search();
    }

    public function search()
    {
        $this->results = collect($this->options)
            ->filter(
                fn ($o) => Str::contains(
                    $o,
                    $this->search,
                    true
                )
            )->toArray();
    }

    public function render()
    {
        return view('livewire.search');
    }
}
