<tbody>
@foreach($p->detail as $detail)
    <tr class="bg-white border-b">
        <td class="px-6 py-4">{{ $detail->email }}</td>
        <td class="px-6 py-4">{{ $detail->name }}</td>
        <td class="px-6 py-4">{{ $detail->new }}</td>
        <td class="px-6 py-4">{{ $detail->created_at }}</td>
    </tr>
@endforeach
</tbody>
