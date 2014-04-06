<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<style>
table form { margin-bottom: 0; }
form ul { margin-left: 0; list-style: none; }
.error { color: red; font-style: italic; }
body { padding-top: 20px; }
</style>
</head>
<body>
<div class="container">
@if (Session::has('message'))
<div class="flash alert">
<p>{{ Session::get('message') }}</p>
</div>
@endif
@yield('main')
</div>
</body>
</html>