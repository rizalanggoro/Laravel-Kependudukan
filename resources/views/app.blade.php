<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Kependudukan Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Kependudukan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @php
                        $menus = [
                            [
                                'title' => 'Dashboard',
                                'href' => '/',
                            ],
                            [
                                'title' => 'Penduduk',
                                'href' => '/penduduk',
                            ],
                            [
                                'title' => 'Keluarga',
                                'href' => '/keluarga',
                            ],
                            [
                                'title' => 'Wilayah',
                                'href' => '/wilayah',
                            ],
                            [
                                'title' => 'Laporan Sensus',
                                'href' => '/laporan-sensus',
                            ],
                            [
                                'title' => 'Catatan Khusus',
                                'href' => '/catatan-khusus',
                            ],
                            [
                                'title' => 'Disabilitas',
                                'href' => '/disabilitas',
                            ],
                        ];
                    @endphp

                    @foreach ($menus as $menu)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $menu['href'] }}">{{ $menu['title'] }}</a>
                        </li>
                    @endforeach

                    {{-- mobilitas --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Mobilitas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/mobilitas/transmigrasi">Transmigrasi</a></li>
                            <li><a class="dropdown-item" href="/mobilitas/imigrasi">Imigrasi</a></li>
                            <li><a class="dropdown-item" href="/mobilitas/emigrasi">Emigrasi</a></li>
                        </ul>
                    </li>

                    {{-- pekerjaan --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pekerjaan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/pekerjaan/asn">ASN</a></li>
                            <li><a class="dropdown-item" href="/pekerjaan/swasta">Swasta</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
