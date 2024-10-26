<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Page 1</title>
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="form">
            <div class="form_login">
                <h1><img src="{{ asset('public/assets/images/marinternet.png') }}" alt="Logo" class="logo"></h1>
                <h4>Ship Data Monitoring System</h4>
                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Username" required>
                        <i class='bx bxs-user icon'></i>
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="Password" required>
                        <i class='bx bxs-lock-alt icon'></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        <a href="#" class="text">Forgot Password?</a>
                    </div>
                    <div class="input-field button">
                        <input type="button" value="Login" required>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
