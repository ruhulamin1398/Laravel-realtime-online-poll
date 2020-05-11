<!DOCTYPE html>
<html>

<head>
  <title>Poll Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('css/custom.css')}}">  
</head>

<body>


<nav class="navbar   justify-content-between">
  <a class="navbar-brand"></a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="poll id" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">GO</button>
  </form>
</nav>



@yield('content')







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>

</html>