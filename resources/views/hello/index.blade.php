<table>
    @foreach ($data as $item)
        <tr>
            <th>
                {{ $item['name'] }}
            </th>
            <td>
                {{ $item['mail'] }}
            </td>
        </tr>
    @endforeach
</table>
