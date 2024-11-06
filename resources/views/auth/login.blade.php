<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card login-card p-4" style="width: 100%; max-width: 400px;">
            <div class="card_header m-auto">
                <img src="{{ asset('/img/Laravel-logo.png') }}" alt="Laravel-logo">
            </div>
            
            <div class="card-body">
                <!-- Отображение ошибок -->
               
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email address" value="{{ old('email') }}" required>
                    </div>
                    
                    <div class="form-group mt-3">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    </div>
                    
                    @if ($errors->any())
                        <div class="alert alert-danger mt-3 mb-0">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <div class="d-flex">
                        <button type="submit" class="btn btn-outline-secondary btn-block mt-4 px-4 m-auto">Login</button>
                    </div>
                </form>
                
                <p class="text-center mt-3 forgot-password">
                    <a href="#" class="text-secondary">Forgot your password?</a>
                </p>
            </div>
        </div>
    </div>
    
</body>
</html>