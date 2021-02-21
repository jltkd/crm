<div>
    <div class="py-4 space-y-4">
        <div class="flex justify-between">
            <div class="w-1/4">
                <x-input.text wire:model="search" placeholder="Search Companies..." />
            </div>

            <div>
                <x-button.primary wire:click="showModal"><x-icon.plus/> New</x-button.primary>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 mb-10">
        @forelse($servers as $server)
            <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                <div class="flex-1 min-w-0">
                    <a href="/servers/{{ $server->slug }}" class="focus:outline-none">
                        <span class="absolute inset-0" aria-hidden="true"></span>
                        <p class="text-sm font-medium text-gray-900">
                            {{ $server->name }}
                        </p>
                        <p class="text-xs text-gray-400 truncate">
                            {{ $server->ip_address }}
                        </p>
                        @if($server->company_id)
                            <span class="absolute top-3 right-3 flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">{{ $server->company->company_name }}</span>
                        @endif
                    </a>
                </div>
            </div>
        @empty
            <div class="flex">
                <span>No Results</span>
            </div>
        @endforelse
    </div>

    {{ $servers->links() }}

    <form wire:submit.prevent="save">
        <x-modal.dialog wire:model.defer="showCreateModal">
            <x-slot name="title">Create Server</x-slot>

            <x-slot name="content">

                <x-input.group for="name" label="Server Name" :error="$errors->first('editing.name')">
                    <x-input.text wire:model="editing.name" id="name" />
                </x-input.group>

                <x-input.group for="ip_address" label="IP Address" :error="$errors->first('editing.ip_address')">
                    <x-input.text wire:model="editing.ip_address" id="ip_address" />
                </x-input.group>

            </x-slot>

            <x-slot name="footer">
                <x-button.secondary wire:click="closeModal">Cancel</x-button.secondary>
                <x-button.primary type="submit">Save</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>

    <x-notification />

</div>
