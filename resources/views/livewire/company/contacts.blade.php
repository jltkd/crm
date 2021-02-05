<div class="lg:col-start-2 lg:col-span-2">
    <ul class="divide-y divide-gray-200">
        @foreach($company->contacts as $contact)
        <li class="py-4 flex">
            <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api?name={{ $contact->first_name }}+{{ $contact->last_name }}" alt="{{ $contact->first_name }} {{ $contact->last_name }}">
            <div class="ml-3">
                <p class="text-sm font-medium text-gray-900">{{ $contact->first_name }} {{ $contact->last_name }}</p>
                <p class="text-sm text-gray-500">{{ $contact->email_address }}</p>
                <p class="text-sm text-gray-500">{{ $contact->phone_number }}</p>
            </div>
        </li>
        @endforeach
    </ul>
</div>
