<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Login WANTOwash</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<style>

body{

background:#111;

display:flex;

justify-content:center;

align-items:center;

height:100vh;

font-family:Segoe UI;

}

.card-login{

width:420px;

border:none;

border-radius:20px;

overflow:hidden;

box-shadow:0 10px 35px rgba(0,0,0,.4);

}

.card-header{

background:#dc3545;

color:white;

text-align:center;

padding:25px;

}

.card-header h2{

font-weight:bold;

margin:0;

}

.card-body{

padding:30px;

}

.btn-login{

background:#dc3545;

color:white;

font-weight:bold;

}

.btn-login:hover{

background:#bb2d3b;

color:white;

}

.logo{

font-size:55px;

margin-bottom:10px;

}

</style>

</head>

<body>

<div class="card card-login">

<div class="card-header">

<div class="logo">

<i class="fa-solid fa-motorcycle"></i>

</div>

<h2>WANTO<span style="color:#00d4ff;">wash</span></h2>

<p>Sistem Manajemen Cuci Motor</p>

</div>

<div class="card-body">

@if(session('error'))

<div class="alert alert-danger">

{{ session('error') }}

</div>

@endif

<form action="{{ route('login.post') }}" method="POST">

@csrf

<div class="mb-3">

<label>Username</label>

<input
type="text"
name="username"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Password</label>

<input
type="password"
name="password"
class="form-control"
required>

</div>

<button class="btn btn-login w-100">

<i class="fa-solid fa-right-to-bracket"></i>

LOGIN

</button>

</form>

</div>

</div>

</body>

</html>
