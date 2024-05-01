<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyShoes - {{ $titlePage }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('img/sneakers.png') }}" type="image/png">
</head>
<body class="bg-dark-subtle d-flex flex-column min-vh-100 justify-content-center align-items-center" style="font-family: 'Poppins', sans-serif;">

    <div class="col-11 col-lg-10 row bg-white p-0 rounded-3 overflow-hidden shadow" style="height: 80vh;">
        <div class="col-6 p-0 d-none d-lg-block" style="background-image: url('{{ asset('img/register.jpg') }}'); background-size: cover;"></div>
        <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center flex-column">
            <h1>Register</h1>
            <form class="container" action="{{ route('storeUser') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="exampleInputEmail1" name="email" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="d-flex border border-1 rounded-2">
                        <input type="password" class="form-control border-0 @error('password') is-invalid @enderror" id="password" name="password" aria-describedby="passwordHelp" required>
                        <p id="showPass" class="btn mb-0"><i id="eye" class="fa-solid fa-eye"></i></p>
                    </div>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @else
                        <div id="passwordHelp" class="form-text">The password must be at least 8 characters long.</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-dark w-100 mb-3">Register</button>
                <p>Already have an account? <a href="{{ route("login") }}" class="fw-medium text-decoration-none text-dark">Login</a></p>
            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="{{ asset('js/showPass.js') }}"></script>
</body>
</html>