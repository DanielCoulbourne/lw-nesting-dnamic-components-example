<div style="background: #ccc; padding: 10px;">
    <input wire:model="search" type="text" placeholder="Search users..."/>

    <div>
        CURRENT RESULTS: {{ implode($this->results) }}
    </div>

    <ul>
        @foreach($results as $result)
            <li>
                <x-dynamic-component :component="$component" class="mt-4" :result="$result" />
            </li>
        @endforeach
    </ul>
</div>
