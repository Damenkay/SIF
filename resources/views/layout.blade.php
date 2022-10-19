<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/layout.css')}}">
    <link rel="stylesheet" href="{{url('css/index.css')}}">
    <link rel="stylesheet" href="{{url('css/create.css')}}">
    <link rel="stylesheet" href="{{url('css/show.css')}}">
    <link rel="stylesheet" href="{{url('css/edit.css')}}">
    <title>Student Information System</title>
</head>
<body>
    <header>
        <div class="nav-bar">
                <div class="pull-left">
                    <h2>STUDENT MANAGEMENT SYSTEM</h2>
                </div>
                @if (!Auth::user())
                <div class="pull-right">
                    <a class="btn-top1" href="{{route('loin')}}"> Login</a>
                </div>   
                @endif
                <div class="pull-right">
                    <a class="btn-top" href="{{ route('create') }}"> Create New Student</a>
                </div>
                <div class="pull-right">
                    <a class="btn-top1" href="{{ route('index') }}"> Logout</a>
                </div>
        </div>
    </header>
    @yield('content')
    <footer>
        <div class="footer-bar">
            
        </div>
    </footer>
</body>
</html>