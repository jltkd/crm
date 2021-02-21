<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
        <div class="-ml-4 -mt-2 flex items-end justify-between flex-wrap sm:flex-nowrap">
            <div class="ml-4 mt-2">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Domains
                </h3>
            </div>
            <div class="ml-4 mt-2 flex-shrink-0">
                <button wire:click="showModal" type="button" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    New Domain
                </button>
            </div>
        </div>
    </div>
    <ul class="divide-y divide-gray-200 p-5">
        @forelse($company->domains as $domain)
            <li class="py-4 flex">
                <div class="ml-3">
                    <a href="{{ $domain->url }}" target="_blank" class="text-sm font-medium text-gray-900">{{ $domain->name }}</a>
                    <p class="text-sm text-gray-500">{{ $domain->server->name }}</p>
                </div>
            </li>
        @empty
            <p class="text-gray-300 text-center">No Domains have been added</p>
        @endforelse
    </ul>

    <form wire:submit.prevent="create">
        <x-modal.dialog wire:model.defer="showCreateModal">
            <x-slot name="title">Create Domain for {{ $company->company_name }}</x-slot>

            <x-slot name="content">

                <x-input.group for="server_id" label="Server" :error="$errors->first('server_id')">
                    <x-input.select wire:model="server_id" id="server_id">
                        <option value=""></option>
                        @foreach (App\Models\Server::orderBy('name')->get() as $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                    </x-input.select>
                </x-input.group>

                <x-input.group for="name" label="Name">
                    <x-input.text wire:model.lazy="name" placeholder="ex: turnkeydigital.com" id="name" />
                    @error('name') <span class="text-red-600">{{ $message }}</span> @enderror
                </x-input.group>

                <x-input.group for="url" label="URL">
                    <x-input.text wire:model.lazy="url" placeholder="ex: https://turnkeydigital.com" id="url" />
                    @error('url') <span class="text-red-600">{{ $message }}</span> @enderror
                </x-input.group>

                <x-input.group for="registrar" label="Registrar">
                    <x-input.text wire:model.lazy="registrar" placeholder="ex: GoDaddy" id="registrar" />
                    @error('registrar') <span class="text-red-600">{{ $message }}</span> @enderror
                </x-input.group>

                <x-input.group for="expires" label="Expires">
                    <x-input.date wire:model="expires" id="expires" />
                    @error('expires') <span class="text-red-600">{{ $message }}</span> @enderror
                </x-input.group>

                <x-input.group for="managed_by" label="Managed By" :error="$errors->first('managed_by')">
                    <x-input.select wire:model="managed_by" id="managed_by">
                        <option value=""></option>
                        @foreach (App\Models\Domain::MANAGED as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    </x-input.select>
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
