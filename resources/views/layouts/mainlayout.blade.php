<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan Digital | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<style>
    .main {
        height: 100vh;
    }

    .sidebar {
        background: rgb(5, 13, 47);
        color : #fff;
    }

    
    .sidebar a {
       color: #fff;
       display: block;
       padding: 20px 10px;
       text-decoration: none;
    
    }

    .sidebar a:hover {
        background: #ffe96bb9;
    }

    .active {
        background: black;
    }
</style>
<body>
   
    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Perpustakaan Digital</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav>
          <div class="body-content h-100">
             <div class="row g-0 h-100" >
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo03">
                    
                        @if (Auth::user()->role_id == 1 )
                            
                       
                       <a href="dashboard" class="active"><i class="bi bi-border-all me-1"></i> Dashboard</a>                        
                       <a href="books"><i class="bi bi-book-fill me-1"></i> Books</a>
                       <a href="categories"><i class="bi bi-list me-1"></i> Categories</a>
                       <a href="users"><i class="bi bi-person-fill me-1"></i> Users</a>
                       <a href="rentlogs"><i class="bi bi-box-fill me-1"></i> Rent Log</a>
                       <a href="logout"><i class="bi bi-door-open-fill me-1"></i> Logout</a>
                        @else
                       <a href="profile"><i class="bi bi-person-circle"></i> Profile</a>
                       <a href="logout"><i class="bi bi-door-open-fill me-1"></i> Logout</a>
                        @endif
                        
                        
                </div>
                <div class="content p-5 col-lg-10">
                @yield('content')
                </div>
             </div>
          </div>
    </div>
    <div>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>