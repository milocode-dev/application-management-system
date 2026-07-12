<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
</head>
<body>
    <div class="login-form">
        <h1>Login</h1>

        @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-input">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Fill ur correct mail..">
            </div>

            <div class="form-input">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Fill correct password..">
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>