<!--Card-->
<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white" style="padding: 1em !important;">


    <table id="example" class="stripe hover p-8">
        <thead>
        <tr>
            <th data-priority="0" class="w-2/12">ID</th>
            <th data-priority="1">Name</th>
            <th data-priority="2">Position</th>
            <th data-priority="3">Office</th>
            <th data-priority="4">Age</th>
            <th data-priority="5">Start date</th>
            <th data-priority="6">Print Qrcode</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $k => $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['positive'] }}</td>
                <td>{{ $item['office'] }}</td>
                <td>{{ $item['age'] }}</td>
                <td>{{ $item['start_date'] }}</td>
                <td align="center">
                    <a href="{{ route('item.qrcode', ['code' => $item['id'] ]) }}"
                       target="_blank"
                       class="bg-green-100 py-3 px-4 cursor-pointer">Generate QrCode</a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>


</div>
<!--/Card-->