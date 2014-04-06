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
 <div class="jumbotron">
        <h1>Hello, laravel!</h1>
        <p>This is a sample website created in laravel, with a touch of <b>twitter bootstrap</b>.</p>
        <p>{{ link_to_route('users.index', ' Sample Data Manipulation Using Laravel', '', 'class="btn btn-info"') }}</p>
        <p><a href="/laravel/public/email" class="btn btn-info" role="button">Email features using Laravel</a></p>
        <p><a href="/laravel/public/login" class="btn btn-info" role="button">Users Authentications</a></p>
      </div>
</div>
</body>
</html>
