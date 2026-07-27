<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<title>Dashboard WANTOwash</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-dark bg-danger">

<div class="container">

<span class="navbar-brand">

WANTOwash

</span>

<form action="{{ route('logout') }}" method="POST">

@csrf

<button class="btn btn-light">

Logout

</button>

</form>

</div>

</nav>

<div class="container mt-5">

<div class="alert alert-success">

<h2>Selamat Datang di WANTOwash</h2>

<p>Dashboard siap dikembangkan.</p>

</div>

</div>

</body>

</html>
