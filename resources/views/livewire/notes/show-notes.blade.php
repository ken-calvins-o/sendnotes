<?php

use Livewire\Volt\Component;
use App\Models\Note;

new class extends Component {

    public function with(): array
    {
        return [
            'notes' => Auth::user()
                ->notes()
                ->orderBy('send_date', 'asc')
                ->get(),
        ];
    }
}; ?>

<div>
    //
</div>
