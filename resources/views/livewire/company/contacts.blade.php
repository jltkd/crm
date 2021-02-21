<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
        <div class="-ml-4 -mt-2 flex items-end justify-between flex-wrap sm:flex-nowrap">
            <div class="ml-4 mt-2">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Contacts
                </h3>
            </div>
            <div class="ml-4 mt-2 flex-shrink-0">
                <button wire:click="showModal" type="button" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    New Contact
                </button>
            </div>
        </div>
    </div>
    <ul class="divide-y divide-gray-200 p-5">
        @forelse($company->contacts as $contact)
            <li class="py-4 flex">
                <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name={{ $contact->first_name }}+{{ $contact->last_name }}" alt="{{ $contact->first_name }} {{ $contact->last_name }}">
                <div class="ml-3">
                    <p class="text-sm font-medium text-gray-900">{{ $contact->first_name }} {{ $contact->last_name }}</p>
                    <a href="mailto:{{$contact->email_address}}" class="text-sm text-gray-500">{{ $contact->email_address }}</a>
                    <p class="text-sm text-gray-500">{{ $contact->phone_number }}</p>
                </div>
            </li>
        @empty
            <p class="text-gray-300 text-center">No Contacts have been added</p>
        @endforelse
    </ul>

    <form wire:submit.prevent="create">
        <x-modal.dialog wire:model.defer="showCreateModal">
            <x-slot name="title">Create Contact for {{ $company->company_name }}</x-slot>

            <x-slot name="content">
                <x-input.group for="first_name" label="First Name">
                    <x-input.text wire:model.lazy="first_name" id="first_name" />
                    @error('first_name') <span class="text-red-600">{{ $message }}</span> @enderror
                </x-input.group>

                <x-input.group for="last_name" label="Last Name">
                    <x-input.text wire:model.lazy="last_name" id="last_name" />
                    @error('last_name') <span class="text-red-600">{{ $message }}</span> @enderror
                </x-input.group>

                <x-input.group for="title" label="Title">
                    <x-input.text wire:model.lazy="title" id="title" />
                    @error('title') <span class="text-red-600">{{ $message }}</span> @enderror
                </x-input.group>

                <x-input.group for="phone_number" label="Phone Number">
                    <x-input.text wire:model="phone_number" id="phone_number" />
                    @error('phone_number') <span class="text-red-600">{{ $message }}</span> @enderror
                </x-input.group>

                <x-input.group for="email_address" label="Email Address">
                    <x-input.text wire:model="email_address" id="email_address" />
                    @error('email_address') <span class="text-red-600">{{ $message }}</span> @enderror
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
