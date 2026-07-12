<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>
</head>
<body>
    <div class="register-form">
        <h1>Register</h1>

        @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-input">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Fill ur name account..">
            </div>

            <div class="form-input">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Fill ur correct mail..">
            </div>

            <div class="form-input">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Fill new password..">
            </div>

            <div class="form-input">
                <label for="password_confirmation">Confirmation Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm ur password..">
            </div>

            <button type="submit">Create account</button>
        </form>
    </div>
</body>
</html>