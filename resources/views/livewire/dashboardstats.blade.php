<?php

use Livewire\Volt\Component;

new class extends Component {
    public function with()
    {
        return [
            'notesSentCount' => Auth::user()
                ->notes()
                ->where('send_date', '<', now())
                ->where('is_published', true)
                ->count(),

            'notesLovedCount' => Auth::user()->notes->sum('heart_count'),
        ];
    }
}; ?>
<div class="overflow-hidden"> <!-- Added overflow-hidden to prevent horizontal overflow -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4"> <!-- Adjusted grid for smaller screens -->
        <div class="p-4 sm:p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
            <div class="flex items-center">
                <div>
                    <p class="text-base sm:text-lg font-medium leading-6 text-gray-900 dark:text-gray-100">Notes Sent</p> <!-- Adjusted text size for smaller screens -->
                </div>
            </div>
            <div class="mt-2 sm:mt-4"> <!-- Adjusted margin-top for smaller screens -->
                <p class="text-xl sm:text-3xl font-bold leading-9 text-gray-900 dark:text-gray-100">{{ $notesSentCount }}</p> <!-- Adjusted text size for smaller screens -->
            </div>
        </div>
        <div class="p-4 sm:p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
            <div class="flex items-center">
                <div>
                    <p class="text-base sm:text-lg font-medium leading-6 text-gray-900 dark:text-gray-100">Notes Loved</p> <!-- Adjusted text size for smaller screens -->
                </div>
            </div>
            <div class="mt-2 sm:mt-4"> <!-- Adjusted margin-top for smaller screens -->
                <p class="text-xl sm:text-3xl font-bold leading-9 text-gray-900 dark:text-gray-100">{{ $notesLovedCount }}</p> <!-- Adjusted text size for smaller screens -->
            </div>
        </div>
    </div>
</div>

