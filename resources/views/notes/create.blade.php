<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create a Note') }}
        </h2>
    </x-slot>

    <div class="py-6 sm:py-12"> <!-- Reduced padding for smaller screens -->
        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4"> <!-- Adjusted max-width and padding -->
            <x-button icon="arrow-left" class="mb-4 sm:mb-8" href="{{ route('notes.index') }}">All Notes</x-button> <!-- Adjusted margin-bottom -->
            <livewire:notes.create-note />
        </div>
    </div>

</x-app-layout>
