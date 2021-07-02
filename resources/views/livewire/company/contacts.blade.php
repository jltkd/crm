<div class="bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
        <div class="-ml-4 -mt-2 flex items-end justify-between flex-wrap sm:flex-nowrap">
            <div class="ml-4 mt-2">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Contacts
                </h3>
            </div>
            <div class="ml-4 mt-2 flex-shrink-0">
                <button wire:click="create" type="button" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    New Contact
                </button>
            </div>
        </div>
    </div>
    <ul class="p-5">
        @forelse($company->contacts as $contact)
            <li class="relative p-4 flex hover:bg-gray-50 sm:rounded-lg">
                <div class="flex items-center flex-1">
                    <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name={{ $contact->first_name }}+{{ $contact->last_name }}" alt="{{ $contact->first_name }} {{ $contact->last_name }}">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">{{ $contact->first_name }} {{ $contact->last_name }} - {{ $contact->title }}</p>
                        <a href="mailto:{{$contact->email_address}}" class="text-sm text-gray-500">{{ $contact->email_address }}</a>
                        <p class="text-sm text-gray-500">{{ $contact->phone_number }}</p>
                    </div>
                </div>
                <div class="flex items-center flex-shrink-0">
                    <x-jet-dropdown>
                        <x-slot name="trigger">
                            <button type="button" class="transition ease-in-out duration-150 w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" id="pinned-project-options-menu-0-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open options</span>
                                <!-- Heroicon name: solid/dots-vertical -->
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                </svg>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <div class="py-1" role="none">
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                <a wire:click.prevent="edit({{ $contact->id }})" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="pinned-project-options-menu-0-item-0">Edit</a>
                            </div>
                            <div class="py-1" role="none">
                                <a wire:click.prevent="delete({{ $contact->id }})" class="text-red-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="pinned-project-options-menu-0-item-1">Delete</a>
                            </div>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </li>
        @empty
            <p class="text-gray-300 text-center">No Contacts have been added</p>
        @endforelse
    </ul>

    <form wire:submit.prevent="save">
        <x-modal.dialog wire:model.defer="showEditModal">
            <x-slot name="title">Create Contact for {{ $company->company_name }}</x-slot>

            <x-slot name="content">
                <input type="hidden" wire:model.lazy="editing.company_id" value="{{ $company->id }}">

                <x-input.group for="first_name" label="First Name">
                    <x-input.text wire:model.lazy="editing.first_name" id="first_name" />
                    @error('editing.first_name') <span class="text-red-600">{{ $message }}</span> @enderror
                </x-input.group>

                <x-input.group for="last_name" label="Last Name">
                    <x-input.text wire:model.lazy="editing.last_name" id="last_name" />
                    @error('editing.last_name') <span class="text-red-600">{{ $message }}</span> @enderror
                </x-input.group>

                <x-input.group for="title" label="Title">
                    <x-input.text wire:model.lazy="editing.title" id="title" />
                    @error('title') <span class="text-red-600">{{ $message }}</span> @enderror
                </x-input.group>

                <x-input.group for="phone_number" label="Phone Number">
                    <x-input.text wire:model="editing.phone_number" id="phone_number" />
                    @error('phone_number') <span class="text-red-600">{{ $message }}</span> @enderror
                </x-input.group>

                <x-input.group for="email_address" label="Email Address">
                    <x-input.text wire:model="editing.email_address" id="email_address" />
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
