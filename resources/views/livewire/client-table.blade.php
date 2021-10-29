<div>
    @forelse($clients as $client)
        <tr class="bg-white">
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                <a href="{{ route('client.show', $client) }}">{{ $client->name }}</a>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $client->phone_number }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  {{ ucfirst($client->status) }}
                </span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $client->city }}, {{ $client->state }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="{{ route('client.show', $client) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5" class="font-bold text-xl text-center py-3">No clients have been added.</td>
        </tr>
    @endforelse
</div>
