<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
    body {
        background: Black;
        color: #ecf0f1;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
        flex-direction: column;
    }

    .card-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
        flex-direction: column;
    }

    .card {
        background: linear-gradient(45deg, #f8f9fa, #2c3e50, #f8f9fa);
        border: none;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(236, 240, 241, 0.2);
        display: flex;
        flex-direction: row;
        overflow: hidden;
        width: 80%;
        margin-top: 20px;
    }

    .image-container {
        flex: 1;
        overflow: hidden;
        border-radius: 15px 0 0 15px;
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-body {
        flex: 1;
        padding: 2rem;
        background: #8b4513;
        border-radius: 0 15px 15px 0;
    }

    .card-title,
    .register-link {
        color: #ecf0f1;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-control {
        border: none;
        border-bottom: 1px solid #ecf0f1;
        color: #ecf0f1;
        background-color: transparent;
        font-size: 1.2rem;
        padding: 0.8rem;
        width: 100%;
        transition: border-color 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
    }

    .form-control:focus,
    .form-control:valid {
        border-color: #3498db;
        box-shadow: none;
        background-color: rgba(236, 240, 241, 0.2);
    }

    .btn-primary {
        background: #fd7e14;
        /* Set the background color to the specified color */
        color: #fff;
        /* Text color, adjust as needed */
        border: none;
        transition: background-color 0.3s ease, transform 0.2s ease-in-out;
        font-size: 1.2rem;
        cursor: pointer;
        width: 100%;
        padding: 1rem;
        border-radius: 50px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
    }

    .btn-primary:hover {
        background-color: #ff9f49;
        /* Adjust hover color if needed */
        transform: scale(1.05);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
    }


    .btn-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(#fff, transparent 50%);
        transition: all 0.3s ease;
        transform: scaleX(0);
        transform-origin: right;
        z-index: 1;
    }

    .btn-primary:hover::before {
        transform: scaleX(1);
        transform-origin: left;
    }

    .register-link {
        color: #45a049 !important;
        text-decoration: none;
        font-size: 1.2rem;
    }

    .register-link:hover {
        color: #2980b9 !important;
        text-decoration: underline;
    }

    .welcome-text {
        font-size: 2.5rem;
        margin-bottom: 10px;
        letter-spacing: 2px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        font-weight: bold;
        text-align: center;
    }

    .photography-text {
        font-size: 2rem;
        margin-top: 10px;
        letter-spacing: 2px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        font-weight: bold;
        text-align: center;
    }
    </style>
    <title>Login</title>
</head>

<body>
    <div class="container text-center">
        <div class="welcome-text">Alreaday have an account?</div>
        <div class="photography-text">Log In Here</div>
        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="{{ asset('image/stud.jpg') }}" alt="Image">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Sign In</h3>
                    <form action="{{ route('postLogin') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email address" required
                                value="{{ old('email') }}">
                            <span class="text-danger">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                            <span class="text-danger">
                                @error('password')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <p class="mt-3">Not a member?
                        <a href="{{ route('auth.register') }}" class="register-link">Signup now</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>