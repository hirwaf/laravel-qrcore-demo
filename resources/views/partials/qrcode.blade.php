@if($code != null)
    <div id="print">
        {!! \QrCode::size(300)->generate(route('item.verify', $code)); !!}
    </div>
    <script>
        printElem('print')
    </script>
@endif