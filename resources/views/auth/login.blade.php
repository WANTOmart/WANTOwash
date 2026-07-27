<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - WANTO Wash</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>

        body{
            background:linear-gradient(135deg,#dc3545,#0d6efd);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            font-family:Segoe UI;
        }

        .login-box{

            width:400px;
            background:white;
            border-radius:20px;
            padding:35px;
            box-shadow:0 10px 30px rgba(0,0,0,.3);

        }

        .logo{

            text-align:center;
            margin-bottom:25px;

        }

        .logo i{

            font-size:70px;
            color:#dc3545;

        }

        .logo h2{

            margin-top:10px;
            font-weight:bold;

        }

        .btn-login{

            background:#dc3545;
            color:white;
            font-weight:bold;

        }

        .btn-login:hover{

            background:#b02a37;
            color:white;

        }

    </style>

</head>
<body>

<div class="login-box">

    <div class="logo">

        <i class="fas fa-motorcycle"></i>

        <h2>WANTO Wash</h2>

        <small>Sistem Kasir Cuci Motor</small>

    </div>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login.post') }}">

        @csrf

        <div class="mb-3">

            <label>Username</label>

            <input
                type="text"
                name="username"
                class="form-control"
                placeholder="Masukkan Username"
                required>

        </div>

        <div class="mb-3">

            <label>Password</label>

            <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Masukkan Password"
                required>

        </div>

        <button class="btn btn-login w-100">

            <i class="fas fa-sign-in-alt"></i>

            LOGIN

        </button>

    </form>

    <hr>

    <center>

        <small>

            © {{ date('Y') }} WANTO Wash

        </small>

    </center>

</div>

</body>
</html>
