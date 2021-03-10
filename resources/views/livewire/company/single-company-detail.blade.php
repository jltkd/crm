<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
        <div class="-ml-4 -mt-2 flex items-end justify-between flex-wrap sm:flex-nowrap">
            <div class="ml-4 mt-2">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {{ $company->company_name }}
                </h3>
            </div>
            <div class="ml-4 mt-2 flex-shrink-0">
                <button wire:click="edit({{ $company->id }})" type="button" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Edit
                </button>
            </div>
        </div>
    </div>
    <div class="px-4 py-5 sm:px-6">
        <dl class="grid gap-x-4 gap-y-8">
            <div class="sm:col-span-2">
                <dt class="text-sm font-medium text-gray-500">
                    Address
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    {{ $company->address }}<br />
                    {{ $company->city }}, {{ $company->state }} {{ $company->postal_code }}
                </dd>
            </div>
            @if($company->phone_number)
                <div class="sm:col-span-2">
                    <dt class="text-sm font-medium text-gray-500">
                        Phone Number
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $company->phone_number }}
                    </dd>
                </div>
            @endif
            @if($company->email_address)
                <div class="sm:col-span-2">
                    <dt class="text-sm font-medium text-gray-500">
                        Email address
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $company->email_address }}
                    </dd>
                </div>
            @endif
        </dl>
    </div>

    <form wire:submit.prevent="save">
        <x-modal.dialog wire:model.defer="showEditModal">
            <x-slot name="title">Edit</x-slot>

            <x-slot name="content">

                <x-input.group for="company_name" label="Company Name" :error="$errors->first('editing.company_name')">
                    <x-input.text wire:model="editing.company_name" id="company_name" />
                </x-input.group>

                <x-input.group for="address" label="Address" :error="$errors->first('editing.address')">
                    <x-input.text wire:model="editing.address" id="address" />
                </x-input.group>

                <x-input.group for="city" label="City" :error="$errors->first('editing.city')">
                    <x-input.text wire:model="editing.city" id="city" />
                </x-input.group>

                <x-input.group for="state" label="State" :error="$errors->first('editing.state')">
                    <x-input.text wire:model="editing.state" id="state" />
                </x-input.group>

                <x-input.group for="postal_code" label="Postal Code" :error="$errors->first('editing.postal_code')">
                    <x-input.text wire:model="editing.postal_code" id="postal_code" />
                </x-input.group>

                <x-input.group for="phone_number" label="Phone Number" :error="$errors->first('editing.phone_number')">
                    <x-input.text wire:model="editing.phone_number" id="phone_number" />
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
