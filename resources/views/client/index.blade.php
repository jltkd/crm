<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Clients') }}
            </h2>
            <button onclick="Livewire.emit('openModal', 'client-form')" type="button" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-tkdBlue-600 hover:bg-tkdBlue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-tkdBlue-500">
                Create Client
            </button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <livewire:client-list/>
            </div>
        </div>
    </div>
</x-app-layout>
