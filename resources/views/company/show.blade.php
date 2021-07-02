<x-app-layout>
    <x-slot name="title">
        {{ $company->company_name }} | TKD CRM
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $company->company_name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mt-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
            <livewire:company.single-company-detail :company="$company"/>
            <livewire:company.contacts :company="$company"/>
            <livewire:company.domain-list :company="$company"/>
        </div>
    </div>
</x-app-layout>
