<!DOCTYPE html>
<html>

<head>
  <title>Poll Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('css/custom.css')}}">  
</head>

<body>
  <input type="text"  id="indexLink" value="{{route('index')}}" hidden >


<nav class="navbar   justify-content-between">
  <a class="navbar-brand"></a>
 <span>

 <form class="form-inline">
 <span class="btn btn-success mr-4"> <a href="{{route('index')}}" class="text-light">Create a poll</a></span>
    <input class="form-control mr-sm-2" id="searchText"   type="number" placeholder="poll id" aria-label="Search"> <span class="btn btn-success "> <a id="searchLink"   class="text-light" > GO</a></span>
  </form>

 </span>
</nav>

<nav class="navbar justify-content-center   mb-4">
                <a class="navbar-brand" href="{{route('index')}}" > <img   src="{{asset('Abasas.com logo.png')}}" alt="{{route('index')}}" style="height:80px;"> </a>

</nav>



@yield('content')







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>

</html>