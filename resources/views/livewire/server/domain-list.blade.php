<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="py-4 space-y-4">
        <div class="flex justify-between">
            <div class="w-1/4">
                <x-input.text wire:model="search" placeholder="Search Domains..." />
            </div>

            <div>
                <x-button.primary wire:click="showModal"><x-icon.plus/> New</x-button.primary>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 mb-10">
        @forelse($server->domains as $domain)
            <a href="{{ $domain->url }}" target="_blank" class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                <div class="flex-1 min-w-0">
                    <div class="focus:outline-none">
                        <span class="absolute inset-0" aria-hidden="true"></span>
                        <p class="text-sm font-medium text-gray-900">
                            {{ $domain->name }}
                        </p>
                        <p class="text-xs text-gray-400 truncate">
                            Managed by: @if($domain->managed_by){{ $domain->managed_by }}@else Not Assigned @endif
                        </p>
                        @if($server->company_id)
                            <span class="absolute top-3 right-3 flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">{{ $server->company->company_name }}</span>
                        @endif
                    </div>
                </div>
            </a>
        @empty
            <div class="flex">
                <span>No Results</span>
            </div>
        @endforelse
    </div>

{{--    {{ $server->domains->links() }}--}}

    <form wire:submit.prevent="save">
        <x-modal.dialog wire:model.defer="showCreateModal">
            <x-slot name="title">Create Domain</x-slot>

            <x-slot name="content">

                <x-input.group for="name" label="Domain Name" :error="$errors->first('editing.name')">
                    <x-input.text wire:model="editing.name" id="name" />
                </x-input.group>

                <x-input.group for="registrar" label="Registrar" :error="$errors->first('editing.registrar')">
                    <x-input.text wire:model="editing.registrar" id="registrar" />
                </x-input.group>

                <x-input.group for="expires" label="Expires" :error="$errors->first('editing.expires')">
                    <x-input.date wire:model="editing.expires" id="expires" />
                </x-input.group>

                <x-input.group for="expires" label="Expires" :error="$errors->first('editing.expires')">
                    <x-input.date wire:model="editing.expires" id="expires" />
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
