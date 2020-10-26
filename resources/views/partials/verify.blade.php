@if($item != null)
    <table class="stripe hover p-8 bg-white" id="example">
        <tr>
            <th data-priority="0">Document ID</th>
            <th data-priority="1">Name</th>
            <th data-priority="2">Position</th>
            <th data-priority="3">Office</th>
            <th data-priority="4">Age</th>
            <th data-priority="5">Start date</th>
        </tr>
        <tr class="border-t border-gray-200">
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['positive'] }}</td>
            <td>{{ $item['office'] }}</td>
            <td>{{ $item['age'] }}</td>
            <td>{{ $item['start_date'] }}</td>
        </tr>
        <tr>
            <td colspan="6" class="text-center py-2 bg-green-300">
                Document is valid.
            </td>
        </tr>
    </table>
@else
    <p class="p-6 bg-red-300">Document is invalid</p>
@endif