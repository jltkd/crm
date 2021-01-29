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
        @forelse($companies as $company)
            <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                <div class="flex-1 min-w-0">
                    <a href="/companies/{{ $company->id }}" class="focus:outline-none">
                        <span class="absolute inset-0" aria-hidden="true"></span>
                        <p class="text-sm font-medium text-gray-900">
                            {{ $company->company_name }}
                        </p>
                        <p class="text-xs text-gray-400 truncate">
                            {{ $company->phone_number }}
                        </p>
                        @if($company->status === 'live')
                            <span class="absolute top-3 right-3 flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">{{ $company->status }}</span>
                        @elseif($company->status === 'prospect')
                            <span class="absolute top-3 right-3 flex-shrink-0 inline-block px-2 py-0.5 text-yellow-800 text-xs font-medium bg-yellow-100 rounded-full">{{ $company->status }}</span>
                        @else
                            <span class="absolute top-3 right-3 flex-shrink-0 inline-block px-2 py-0.5 text-red-800 text-xs font-medium bg-red-100 rounded-full">{{ $company->status }}</span>
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
    {{ $companies->links() }}

    <form wire:submit.prevent="create">
        <x-modal.dialog wire:model.defer="showCreateModal">
            <x-slot name="title">Create Company</x-slot>

            <x-slot name="content">
                <x-input.group for="company_name" label="Company Name">
                    <x-input.text wire:model.lazy="company_name" id="company_name" required />
                    @error('company_name') <span class="text-red-600">{{ $message }}</span> @enderror
                </x-input.group>

                <x-input.group for="status" label="Status">
                    <x-input.select wire:model="status" id="status" required>
                        <option value="" disabled>Select Status...</option>
                        @foreach (App\Models\Company::STATUSES as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    </x-input.select>
                </x-input.group>

                <x-input.group for="address" label="Address">
                    <x-input.text wire:model="address" id="address" />
                </x-input.group>

                <x-input.group for="city" label="City">
                    <x-input.text wire:model="city" id="city" />
                </x-input.group>

                <x-input.group for="state" label="State">
                    <x-input.text wire:model="state" id="state" />
                </x-input.group>

                <x-input.group for="postal_code" label="Postal Code">
                    <x-input.text wire:model="postal_code" id="postal_code" />
                </x-input.group>

                <x-input.group for="phone_number" label="Phone Number">
                    <x-input.text wire:model="phone_number" id="phone_number" />
                </x-input.group>

                <x-input.group for="email_address" label="Email Address">
                    <x-input.text wire:model="email_address" id="email_address" />
                </x-input.group>

            </x-slot>

            <x-slot name="footer">
                <x-button.secondary wire:click="closeModal">Cancel</x-button.primary>
                <x-button.primary type="submit">Save</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>

    <x-notification />

</div>
