<div>
    <div class="py-4 space-y-4">
        <div class="flex justify-between">
            <div class="w-1/4">
                <x-input.text wire:model="search" placeholder="Search Companies..." />
            </div>

            <div>
                <x-button.primary wire:click="create"><x-icon.plus/> New</x-button.primary>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 mb-10">
        @forelse($companies as $company)
            <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="{{ $company->logo }}" alt="{{ $company->company_name }}">
                </div>
                <div class="flex-1 min-w-0">
                    <a href="/companies/{{ $company->id }}" class="focus:outline-none">
                        <span class="absolute inset-0" aria-hidden="true"></span>
                        <p class="text-sm font-medium text-gray-900">
                            {{ $company->company_name }}
                        </p>
                        @if($company->status === 'live')
                            <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">{{ $company->status }}</span>
                        @elseif($company->status === 'prospect')
                            <span class="flex-shrink-0 inline-block px-2 py-0.5 text-yellow-800 text-xs font-medium bg-yellow-100 rounded-full">{{ $company->status }}</span>
                        @else
                            <span class="flex-shrink-0 inline-block px-2 py-0.5 text-red-800 text-xs font-medium bg-red-100 rounded-full">{{ $company->status }}</span>
                        @endif
                    </a>
                </div>
                <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                  </svg>
                </span>
            </div>
        @empty
            <div class="flex">
                <span>No Results</span>
            </div>
        @endforelse
    </div>
    {{ $companies->links() }}
</div>
