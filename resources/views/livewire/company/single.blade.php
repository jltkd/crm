<div class="mt-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
    <div class="space-y-6 lg:col-start-1 lg:col-span-1">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {{ $company->company_name }}
                </h3>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
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
                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">
                            Phone Number
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{ $company->phone_number }}
                        </dd>
                    </div>
                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">
                            Email address
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{ $company->email_address }}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>

    </div>
    <livewire:company.contacts :company="$company"/>
</div>
