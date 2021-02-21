<div class="mt-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
    {{ $server->name }}<br />
    {{ $server->ip_address }} <br />
    @if($server->company)
    {{ $server->company->company_name }} owns this server.
    @endif

    <livewire:server.domain-list :server="$server"/>

</div>
