<div>
    <h1 class="order-1 text-gray-900 text-3xl font-extrabold tracking-tight mb-4">Create Your First Client</h1>
    <form wire:submit.prevent="createClient" method="post">
        @csrf

        <div>
            <x-jet-label for="name" value="{{ __('Name *') }}" />
            <x-jet-input wire:model.defer="name" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus autocomplete="name" />
            @error('name')<span class="text-sm text-red-600">Name is Required</span>@enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="status" value="{{ __('Status *') }}" />
            <select wire:model.defer="status" name="status" id="status" class="border-gray-300 focus:border-tkdBlue rounded-md shadow-sm block mt-1 w-full">
                <option value="" selected="selected">Select a Status</option>
                <option value="active">Active</option>
                <option value="prospect">Prospect</option>
            </select>
            @error('status')<span class="text-sm text-red-600">Status is Required</span>@enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="address" value="{{ __('Address') }}" />
            <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" autofocus autocomplete="address" />
        </div>

        <div class="mt-4 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
            <div class="sm:col-span-2">
                <x-jet-label for="city" value="{{ __('City') }}" />
                <x-jet-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" autofocus autocomplete="city" />
            </div>

            <div class="sm:col-span-2">
                <x-jet-label for="state" value="{{ __('State') }}" />
                <select name="status" id="status" class="border-gray-300 focus:border-tkdBlue rounded-md shadow-sm block mt-1 w-full">
                    <option value="" selected="selected">Select a State</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>

            <div class="sm:col-span-2">
                <x-jet-label for="zip_code" value="{{ __('Zip Code') }}" />
                <x-jet-input id="zip_code" class="block mt-1 w-full" type="text" name="zip_code" :value="old('zip_code')" autofocus autocomplete="zip_code" />
            </div>
        </div>

        <div class="mt-4">
            <x-jet-label for="phone_number" value="{{ __('Phone Number') }}" />
            <x-jet-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" autofocus autocomplete="phone_number" />
        </div>

        <x-jet-button class="mt-4">
            {{ __('Submit') }}
        </x-jet-button>

    </form>
</div>
