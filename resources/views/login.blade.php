<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Typit | Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #FAFBFF"> 
    <section style="display: flex; justify-content: center; align-items: center; width: 100%; height:100vh; padding: 0 1rem;">
        <div style="background-color: white; width: 30rem; height: fit-content; padding: 1.25rem; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: start; border-radius: 10px;"
            class="shadow-sm">
            <h2 class="" style="width: 100%; margin-bottom: 1rem">Typit - Login Form</h2>
            <form action="/login" method="POST" class=""
                style="display: flex; flex-direction: column; justify-content: center; align-items: center; width: 100%;">
                @csrf
                <div class="mb-3" style="width: 100%;">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="name@example.com">
                </div>
                <div class="mb-3" style="width: 100%;">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="***********">
                </div>
                @error('email')
                    <div style="text-align: left; width:100%">
                        <p style="color: #ef4444">{{ $message }}</p>
                    </div>
                @enderror
                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 0.5rem">Login</button>
            </form>
            <a href="/register" style="text-decoration: none; color: #6b7280; margin-top: 1rem">Don't have any account?
                <span style="color: black" class="text-primary">Register</span></a>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
