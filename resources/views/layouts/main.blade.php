<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Top Reseller - {{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        .btn-primary {
            background-color: #ffac54 !important;
            color: black;
        }

        @media (max-width: 576px) {
            .my-custom-container {
                width: 100%;
                /* margin-left: 0%; */
                margin-left: calc(var(--bs-gutter-x) * .5);
                background-color: #ffac54;
            }
        }

        @media (min-width: 576px) {
            .my-custom-container {
                width: 600px;
                /* margin-left: 0%; */
                margin-left: calc(var(--bs-gutter-x) * .5);
                background-color: #ffac54;
            }
        }

        @media (min-width: 768px) {
            .my-custom-container {
                width: 600px;
                /* margin-left: 0%; */
                margin-left: calc(var(--bs-gutter-x) * .5);
                background-color: #ffac54;
            }
        }

        @media (min-width: 992px) {
            .my-custom-container {
                width: 960px;
                /* margin-left: 0%; */
                margin-left: calc(var(--bs-gutter-x) * .5);
                background-color: #ffac54;
            }
        }

        @media (min-width: 1200px) {
            .my-custom-container {
                width: 1140px;
                /* margin-left: 0%; */
                margin-left: calc(var(--bs-gutter-x) * .5);
                background-color: #ffac54;
            }
        }

        @media (min-width: 1400px) {
            .my-custom-container {
                width: 1320px;
                /* margin-left: 0%; */
                margin-left: calc(var(--bs-gutter-x) * .5);
                background-color: #ffac54;
            }
        }

        .pagination {
            --bs-pagination-active-bg: #ffac54;
            --bs-pagination-color: #ffac54;
            --bs-pagination-disabled-color: #ffac54;
            --bs-pagination-active-border-color: #ffac54;
            --bs-pagination-hover-color: #ffac54;
            --bs-pagination-focus-color: #ffac54;
        }

        .navbar-nav,
        .mr-auto {
            flex: 1;
            margin: auto !important;
            display: flex;
            justify-content: space-evenly;
        }

        #top-header{
            background-color: #afc9e9;
        }

        #navbar-wrapper {
            background-color: #fadf54;
        }

        .dropdown-menu {
            --bs-dropdown-link-active-bg: #ffac54;
        }

        #title-color {
            color: #be8c41;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="text-center py-4" id="top-header">
        <h1>Top Reseller</h1>
    </div>

    <div id="navbar-wrapper">

        @include('partials.navbar')
    </div>


    <div class="container mt-4">
        @yield('container')
    </div>

    
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
