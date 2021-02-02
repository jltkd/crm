<div class="mt-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
    <div class="space-y-6 lg:col-start-1 lg:col-span-1">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {{ $company->company_name }}
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Personal details and application.
                </p>
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
    <div class="lg:col-start-2 lg:col-span-2">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <ul class="divide-y divide-gray-200">
            <li class="py-4 flex">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                <div class="ml-3">
                    <p class="text-sm font-medium text-gray-900">Calvin Hawkins</p>
                    <p class="text-sm text-gray-500">calvin.hawkins@example.com</p>
                    <p class="text-sm text-gray-500">321-321-3211</p>
                </div>
            </li>

            <li class="py-4 flex">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                <div class="ml-3">
                    <p class="text-sm font-medium text-gray-900">Kristen Ramos</p>
                    <p class="text-sm text-gray-500">kristen.ramos@example.com</p>
                </div>
            </li>

            <li class="py-4 flex">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                <div class="ml-3">
                    <p class="text-sm font-medium text-gray-900">Ted Fox</p>
                    <p class="text-sm text-gray-500">ted.fox@example.com</p>
                </div>
            </li>
        </ul>

    </div>
</div>
