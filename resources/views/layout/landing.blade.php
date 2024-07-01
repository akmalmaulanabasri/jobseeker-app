<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-FARMER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 1rem;
            margin-top: auto;
        }


        .bg-custom {
            background-color: #1c2745 !important;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMTc3IiBmaWxsPSJub25lIiB2aWV3Qm94PSIwIDAgMjY0NiAxNzciPjxwYXRoIGZpbGw9IiMwNzI0NjIiIGQ9Ik03ODkuMDkxIDE1OC42NzdjMC0zMi44MTEtMjYuMDc3LTU5LjQxLTU4LjI0NS01OS40MS0uMzg5IDAtLjc3OC4wMDUtMS4xNjQuMDEydjU5LjM5OWw1OS40MDktLjAwMVpNMzk2Ljk4OSA3Ny43MzJjMzIuODExIDAgNTkuNDA4LTI2LjA3NyA1OS40MDgtNTguMjQ0IDAtLjM5LS4wMDMtLjc3OC0uMDExLTEuMTY1aC01OS4zOTd2NTkuNDA5WiIvPjxwYXRoIGZpbGw9IiNFNjAyNzgiIGQ9Ik02NzAuMjcgMTc2LjVjMC02NC44MDItNTIuNTMxLTExNy4zMzMtMTE3LjMzMy0xMTcuMzMzLTY0LjgwMiAwLTExNy4zMzMgNTIuNTMxLTExNy4zMzMgMTE3LjMzM2wuMDAxLjI1OXYtLjI1OWg3OC4yMjJjLjAwMS0yMS41OTkgMTcuNTExLTM5LjExIDM5LjExMS0zOS4xMSAyMS41OTkgMCAzOS4xMTEgMTcuNTExIDM5LjExMSAzOS4xMWg3OC4yMjFaIi8+PHBhdGggZmlsbD0iIzA3MjQ2MiIgZD0iTTE4OC4zMTQgNzcuNzI5Yy4wMDEgNDQuNzAzIDM2LjI0MSA4MC45NDQgODAuOTQ1IDgwLjk0NCA0NC43MDYgMCA4MC45NDUtMzYuMjQxIDgwLjk0NS04MC45NDZ2LS4xODYuMTg4aC01My45NjNjMCAxNC45MDEtMTIuMDggMjYuOTgyLTI2Ljk4MSAyNi45ODItMTQuOTAyIDAtMjYuOTgyLTEyLjA4LTI2Ljk4Mi0yNi45ODFsLTUzLjk2NC0uMDAxWm04MS40MjItODAuOTQ2YTgyLjQ0IDgyLjQ0IDAgMCAwLS45NTMgMGguOTUzWiIvPjxwYXRoIGZpbGw9IiNFNjAyNzgiIGQ9Ik0yMjk3LjQ0IDk5LjI3Mmg1My45NmMwLTE0LjkwMiAxMi4wOC0yNi45ODMgMjYuOTktMjYuOTgzIDE0LjkgMCAyNi45OCAxMi4wOCAyNi45OCAyNi45ODJoNTMuOTZ2LjE2NC0uMTYzYzAtNDQuNzA1LTM2LjI0LTgwLjk0NS04MC45NC04MC45NDUtNDQuNzEgMC04MC45NSAzNi4yNC04MC45NSA4MC45NDVabTgwLjk1IDgwLjk0NWgtLjQ3Ljk0LS40N1oiLz48cGF0aCBmaWxsPSIjMDcyNDYyIiBkPSJNMTg1OC41NSAxOC4zMjNjMCAzMi44MSAyNi4wOCA1OS40MDkgNTguMjUgNTkuNDA5LjM5IDAgLjc4LS4wMDQgMS4xNi0uMDExVjE4LjMyMmgtNTkuNDFaIi8+PHBhdGggZmlsbD0iIzA3MjQ2MiIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNMTk0Ny42NyAxNTguNjc3YzE2LjQgMCAyOS43LTEzLjI5OSAyOS43LTI5LjcwNSAwLTE2LjQwNS0xMy4zLTI5LjcwNC0yOS43LTI5LjcwNC0xNi40MSAwLTI5LjcxIDEzLjI5OS0yOS43MSAyOS43MDQgMCAxNi40MDYgMTMuMyAyOS43MDUgMjkuNzEgMjkuNzA1Wm0wLTE5LjgwNWM1LjQ2IDAgOS45MS00LjQzMyA5LjkxLTkuOTAxIDAtNS40NjktNC40NS05LjkwMi05LjkxLTkuOTAyLTUuNDcgMC05LjkgNC40MzMtOS45IDkuOTAyIDAgNS40NjggNC40MyA5LjkwMSA5LjkgOS45MDFaIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiLz48cGF0aCBmaWxsPSIjMDcyNDYyIiBkPSJNMTk3Ny4zNy41YzAgNjQuODAxIDUyLjU0IDExNy4zMzMgMTE3LjMzIDExNy4zMzMgNjQuODEgMCAxMTcuMzQtNTIuNTMxIDExNy4zNC0xMTcuMzMzaC0yMzQuNjdaIi8+PGNpcmNsZSBjeD0iNjk5Ljg1NCIgY3k9IjQ4LjQ3NyIgcj0iMjkuNzAzIiBmaWxsPSIjRTYwMjc4Ii8+PHBhdGggZmlsbD0iI0U2MDI3OCIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNMjI1MC43MyA5OC41OTh2NTkuNDA3aC01OS40MWMwLTMyLjgxIDI2LjYtNTkuNDA3IDU5LjQxLTU5LjQwN1oiIGNsaXAtcnVsZT0iZXZlbm9kZCIvPjwvc3ZnPg==');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;


        }

        .search-input {
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .search-input:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .search-container {
            max-width: 800px;
            margin: auto;
        }

        .btn-app {
            background-color: #10b981;
            color: #ffffff;
        }

        .square {
            object-fit: cover;
            aspect-ratio: 1/1;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('landing') }}">
                <img src="{{ asset('assets/image/logo.png') }}" alt="JobStreet" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cari-jasa') }}">
                            Daftar jasa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cari-pekerja') }}">
                            Daftar pekerja
                        </a>
                    </li>
                </ul>
                <div class="d-flex">
                    @if (Auth::check())
                        <div class="nav-item dropdown me-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('profile-user') }}">Profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('list-pesanan-landing') }}">Lamaran
                                        Kerja</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                    @else
                        <a class="fs-6 btn btn-app" href="{{ route('login') }}">Login</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-fill">
        @auth
            @if (count(Auth::user()->orderCountWhereUnpaid) > 0)
                <div class="container py-3">
                    <div class="alert alert-danger">
                        <h3>Anda memiliki pesanan yang belum dibayar</h3>
                        <a href="{{ route('list-pesanan-landing') }}" class="btn btn-danger">Lihat pesanan</a>
                    </div>
                </div>
            @endif
        @endauth
        @yield('landing')
    </main>

    <footer class="bg-light text-center p-3 mt-auto">
        <p>&copy; 2021 JobSeeker</p>
    </footer>
    <x-alert />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
