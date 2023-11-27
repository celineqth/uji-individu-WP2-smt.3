<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://cdn1.iconfinder.com/data/icons/user-avatar-20/64/26-woman-512.png"
        type="image/x-icon" />
    <title>Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <style>
        body .offcanvas-header {
            background-color: #4D4F50;
            /* Warna abu-abu gelap untuk header offcanvas */
        }

        .offcanvas {
            background-color: #313233;
            /* Warna abu-abu gelap untuk header offcanvas */
        }

        body {
            background-color: #E7E9EA;
            /* Warna abu-abu muda untuk latar belakang body */
        }
    </style>
</head>


<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler ms-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> Home
            </button>
            <a class="navbar-brand" href="#">
                Celine Queenterosa
                <img src="https://cdn1.iconfinder.com/data/icons/user-avatar-20/64/26-woman-512.png" alt="User Avatar"
                    width="25" height="24" class="d-inline-block align-text-top">
            </a>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <h5 class="offcanvas-title mx-auto text-white" id="offcanvasNavbarLabel">
                        <img src="https://cdn1.iconfinder.com/data/icons/user-avatar-20/64/26-woman-512.png"
                            alt="User Avatar" width="25" height="24" class="d-inline-block align-text-top">
                        Celine Uji Individu
                    </h5>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-0 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active fw-bold ps-3 text-white" aria-current="page"
                                href="{{ url('employee') }}"><img <svg
                                    src="https://cdn1.iconfinder.com/data/icons/love-194/512/house_home_love_architecture-256.png"
                                    alt="House Icon" width="25" height="24"></svg>
                                Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#listdata');
    </script>
</body>

</html>
