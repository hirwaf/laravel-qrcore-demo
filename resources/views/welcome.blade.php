<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel QrCode Example</title>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
    <script>
        const printElem = (elem) => {
            const mywindow = window.open('', 'PRINT', 'height=400,width=600');

            mywindow.document.write('<html><head>');
            mywindow.document.write('</head><body >');
            mywindow.document.write('<h1>' + document.title + '</h1>');
            mywindow.document.write(document.getElementById(elem).innerHTML);
            mywindow.document.write('</body></html>');

            mywindow.document.close(); // necessary for IE >= 10
            mywindow.focus(); // necessary for IE >= 10*/

            mywindow.print();
            mywindow.close();

            return true;
        }
    </script>
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-center sm:pt-0">
            <svg id="color_line" height="100" viewBox="0 0 74 74"  xmlns="http://www.w3.org/2000/svg"
                 data-name="color line">
                <path d="m4.377 48.252a34.49 34.49 0 0 1 49.508-41.328l-.49.871a33.491 33.491 0 0 0 -48.073 40.132z"
                      fill="#323c6b"/>
                <path d="m36.948 71.482a34.324 34.324 0 0 1 -19.041-5.737l.555-.833a33.513 33.513 0 0 0 48.926-42.026l.906-.421a34.5 34.5 0 0 1 -31.346 49.017z"
                      fill="#323c6b"/>
                <path d="m37 59.483a22.488 22.488 0 1 1 22.484-22.488 22.514 22.514 0 0 1 -22.484 22.488zm0-43.976a21.488 21.488 0 1 0 21.484 21.488 21.512 21.512 0 0 0 -21.484-21.488z"
                      fill="#323c6b"/>
                <circle cx="57.87" cy="10.005" fill="#fe7058" r="5.002"/>
                <circle cx="13.946" cy="62.489" fill="#27ccbc" r="5.002"/>
                <path d="m62.87 10.01a4.975 4.975 0 0 1 -2.33 4.22 5.076 5.076 0 0 0 .46-2.1 5 5 0 0 0 -5-5 4.886 4.886 0 0 0 -2.67.78 5 5 0 0 1 9.54 2.1z"
                      fill="#ea6453"/>
                <path d="m18.95 62.49a4.948 4.948 0 0 1 -2.34 4.22 4.925 4.925 0 0 0 .46-2.1 5 5 0 0 0 -5-5 4.886 4.886 0 0 0 -2.67.78 5.008 5.008 0 0 1 9.55 2.1z"
                      fill="#21b3a9"/>
                <path d="m36.998 33.39-.001 16.516-13.893-4.954v-16.516z" fill="#fcd462"/>
                <path d="m50.89 28.436v16.516l-13.893 4.954.001-16.516z" fill="#fcd462"/>
                <path d="m50.89 28.44v16.51l-13.89 4.96v-3.16l11.13-3.97v-13.36z" fill="#f7be56"/>
                <path d="m37 46.75v3.16l-13.89-4.96v-2.91z" fill="#f7be56"/>
                <path d="m50.89 28.44-13.89 4.93-13.9-4.93 13.9-4.94z" fill="#fcd462"/>
                <g fill="#323c6b">
                    <path d="m37 33.87a.5.5 0 0 1 -.167-.029l-13.9-4.93a.5.5 0 0 1 0-.942l13.9-4.94a.505.505 0 0 1 .335 0l13.89 4.94a.5.5 0 0 1 0 .942l-13.89 4.93a.5.5 0 0 1 -.168.029zm-12.406-5.431 12.406 4.4 12.4-4.4-12.4-4.408z"/>
                    <path d="m37 33.881a.492.492 0 0 1 -.5-.491v-.018a.5.5 0 0 1 1 0 .508.508 0 0 1 -.5.509z"/>
                    <path d="m37 24a.5.5 0 0 1 -.5-.5.507.507 0 0 1 .5-.509.492.492 0 0 1 .5.491v.018a.5.5 0 0 1 -.5.5z"/>
                    <path d="m43.094 50.75a.5.5 0 0 1 -.167-.971l6.546-2.325a.5.5 0 0 1 .334.942l-6.546 2.325a.5.5 0 0 1 -.167.029z"/>
                    <path d="m40.705 51.657a.5.5 0 0 1 -.168-.971l.48-.171a.5.5 0 0 1 .336.942l-.48.171a.506.506 0 0 1 -.168.029z"/>
                    <path d="m37 50.406a.5.5 0 0 1 -.5-.5v-16.516a.5.5 0 0 1 .332-.471l13.892-4.954a.507.507 0 0 1 .456.063.5.5 0 0 1 .212.409v16.515a.5.5 0 0 1 -.332.471l-13.895 4.954a.51.51 0 0 1 -.165.029zm.5-16.664v15.458l12.89-4.6v-15.455z"/>
                    <path d="m37 50.406a.51.51 0 0 1 -.168-.029l-13.894-4.954a.5.5 0 0 1 -.332-.471v-16.516a.5.5 0 0 1 .212-.409.509.509 0 0 1 .456-.062l13.892 4.954a.5.5 0 0 1 .332.471v16.517a.5.5 0 0 1 -.5.5zm-13.394-5.806 12.894 4.6v-15.455l-12.892-4.6z"/>
                    <path d="m57.87 15.507a5.5 5.5 0 1 1 5.5-5.5 5.507 5.507 0 0 1 -5.5 5.5zm0-10a4.5 4.5 0 1 0 4.5 4.5 4.507 4.507 0 0 0 -4.5-4.507z"/>
                    <path d="m13.946 67.991a5.5 5.5 0 1 1 5.5-5.5 5.508 5.508 0 0 1 -5.5 5.5zm0-10a4.5 4.5 0 1 0 4.5 4.5 4.507 4.507 0 0 0 -4.5-4.504z"/>
                </g>
                <path d="m25.469 38.766a.546.546 0 0 1 -.546-.546v-5.07a.546.546 0 0 1 1.091 0v5.07a.546.546 0 0 1 -.545.546z"
                      fill="#fff"/>
                <path d="m25.469 40.762a.546.546 0 0 1 -.546-.546v-.286a.546.546 0 1 1 1.091 0v.286a.546.546 0 0 1 -.545.546z"
                      fill="#fff"/>
            </svg>
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="p-8">
                @if($code == '00')
                    @include('partials.table', ['items' => $items])
                @elseif($item !== '00')
                    @include('partials.verify', ['item' => $item])
                @else
                    @include('partials.qrcode', ['item' => $item])
                @endif
            </div>
        </div>

        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center">
                </div>
            </div>

            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Build v0.1
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>

    $(document).ready(function () {

        var table = $('#example').DataTable({
            responsive: true
        })
            .columns.adjust()
            .responsive.recalc();
    });

</script>
</body>
</html>
