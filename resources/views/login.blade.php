<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan | Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
    body {
     
    background-image: linear-gradient(-120deg, #4caf50 0%, #009688 100%, #ff0000 200%);
    }
    .main{
        height: 100vh;
        box-sizing: border-box;
    }
    .login-box{
        width: 500px;
        /* filter: blur(8px);
        -webkit-filter: blur(8px); */

        background-color: white;
        border: solid 1px white;
        padding: 30px;

    }
    form div {
        margin-bottom: 15px;
    }
</style>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        @if (session('status'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>            
        @endif
      <div class="login-box">
<form action="" method="post">
@csrf
<div>
    <label for="username" class="form-label">Username</label>
    <input type="text" name="username" id="username" class="form-control" required>
</div>
<div>
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="Password"  required>
</div>
<div>
    <button type="submit" class="btn btn-primary form-control">Login</button>
</div>
<div class="text-center">
    Don't have account? <a href="register">Sign Up</a>
</div>
</form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
