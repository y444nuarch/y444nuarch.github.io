<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan | Digital | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<style>
    .main {
        height: 100vh
    }

    .register-box{
        width: 500px;
        border: solid 1px;
        padding: 30px;
    }

    form div {
        margin-bottom: 15px;
    }
    </style>
<body>


    <div class="main d-flex flex-column justify-content-center align-items-center">
        @if ($errors->any())
        <div class="alert alert-danger" style="width: 500px">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        <div class="register-box">
            <form action="" method="post">
               @csrf
               <div>
                <label for="username" class="from-label">Username</label>
                <input type="text" name="username" id="username" class="form-control">
               </div>
               <div>
                <label for="password" class="from-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
               </div>
               <div>
                <label for="phone" class="from-label">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control">
               </div>
               <div>
                <label for="address" class="from-label">Address</label>
                <textarea name="address"  id="address" class="form-control" rows="5" required></textarea>
               </div>
               <div>
                <button type ="submit" class="btn btn-primary form-control">Register</button>
               </div>
               <div class="text-center">
                Already have account?  <a href="login"> Login</a>
               </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>