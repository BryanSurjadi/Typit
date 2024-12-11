<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Typit | @yield('title')</title>
    <link rel="icon" href="logo.png" type="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body style="background-color: #FAFBFF">
    <header
        style="background-color: white; display: flex; justify-content: center; align-content: center; position: fixed; width: 100%; z-index: 100;"
        class="border-bottom">
        <nav class="navbar navbar-expand-lg" style="max-width: 95vw; width: 100%;">
            <div class=""
                style="display: flex; justify-content: space-between; align-items: center; width: 100%; height: fit-content;">
                <a class="navbar-brand" href="/" style="font-size: 2rem; font-weight: 700">Typit</a>
                <div class="search_input" id="navbarSupportedContent">
                    <form class="d-flex" role="search" action="/" method="GET"
                        style="position: relative; display: flex; justify-content: center; align-items: center">
                        <input class="form-control me-2"
                            style="background-color: #F5F7FA; border-radius: 1rem; min-width:30rem; width: 100%"
                            type="search" placeholder="Search" aria-label="Search" id="search" name="search">
                        <button class="btn btn-outline-primary"
                            style="position: absolute; right: 1rem; padding: 0 0.6rem; border-radius: 0.75rem"
                            type="submit">Search</button>
                    </form>
                </div>
                <a href="/profile" class="profile border"
                    style="background-color: #FAFBFF; border-radius: 100%; width: fit-content; height: fit-content; padding: 0.4rem 0.8rem; cursor: pointer; text-decoration: none; color: black; font-weight: 500; border: 1px soild black">
                    :P
                </a>
            </div>
        </nav>
    </header>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        @media (max-width: 992px) {
            .search_input {
                visibility: hidden;
                min-width: 0rem;
                width: 00%
            }
        }
    </style>
</body>

</html>
