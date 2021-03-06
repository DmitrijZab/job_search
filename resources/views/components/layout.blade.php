<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="images/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
            crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}" defer type="application/javascript"></script>

    <title>Find Jobs & Projects</title>
</head>

<body style=" min-height: 100%; min-width: 100%">
<nav class="navbar navbar-expand-lg mt-3 flex position-relative " style="min-width: 100vh">
    <h2><a href="/" class="ms-lg-5 me-lg-5 d-none d-md-block" style="font-size: xx-large; text-decoration: none">Find
            Jobs & Projects</a></h2>
    <a href="/"><img class="m-3 ms-lg-5 me-lg-5 ms-md-1" src="{{asset('images/fj-logo.webp')}}" alt="logo"
                     style="width: 90px"/></a>

    <ul class="navbar-nav m-3 ms-lg-5 ms-md-1 row justify-content-end m">
        @auth
            <li class="nav-item mt-3 col">
        <span>
          Welcome {{auth()->user()->name}}
        </span>
            </li>
            <li class="nav-item col">
                <a href="/listings/manage" class="nav-link" style="text-decoration: none">
                    <button type="button" class="btn btn-outline-primary me-2 shadow-sm" style="width: 150px"
                    >Manage Listings
                    </button>
                </a>
            </li>
            <li class="nav-item col">
                <form class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary me-2 mt-2 shadow-sm" style="width: 150px"
                    >Logout
                    </button>
                </form>
            </li>

        @else

            <li class="nav-item col ">
                <a href="/register" class="nav-link" style="text-decoration: none">
                    <button type="button" class="btn btn-outline-primary me-2 mt-1 shadow-sm" style="width: 150px;"
                    >Register
                    </button>
                </a>
            </li>
            <li class="nav-item col">
                <a href="/login" class="nav-link" style="text-decoration: none">
                    <button type="button" class="btn btn-outline-primary me-2 mt-1 shadow-sm" style="width: 150px; "
                    >Login
                    </button>
                </a>
            </li>
        @endauth
    </ul>
</nav>

<main style="min-height: calc(100vh - 160px); min-width: 100vh">
    {{$slot}}
</main>

<footer
    class="fixed-bottom text-white  position-relative mt-5 bg-primary bg-gradient"
    style=" min-height: 160px; min-width: 100vh"
>
    <p class="text-center m-3 p-3">
        Copyright &copy; 2022, All Rights reserved
    </p>
    <a href="/listings/create" class=" position-absolute end-0">
        <button class="btn btn-outline-light  me-5 mb-5 shadow-sm" type="button" style="width: 150px"
        >Post Job
        </button>
    </a>
</footer>

<x-flash-message/>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
