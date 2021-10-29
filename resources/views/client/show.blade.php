<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{$client->name }}
            </h2>
            <span class="ml-3 px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
              {{ ucfirst($client->status) }}
            </span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-6 lg:gap-x-12 xl:gap-x-16">
                <div class="col-span-2 mt-4 p-4 bg-white border border-gray-200 rounded-lg shadow-sm">
                    <dl class="pb-6 mb-6">
                        <dt class="font-medium text-gray-900">Address</dt>
                        <dd class="mt-3 text-gray-500">
                            <span class="block">{{ $client->address }}</span>
                            <span class="block">{{ $client->city }}, {{ $client->state }} {{ $client->zip_code }}</span>
                            <span class="block">{{ $client->phone_number }}</span>
                        </dd>
                    </dl>
                    <div class="flex justify-end">
                        <a href="#" class="w-full block text-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
