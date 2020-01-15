<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      
        <div class="col-md-10 offset-md-1">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand" href="#">eShop</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/upload') }}">Upload Item</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>             
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </div>
       
        </nav>
        <div class="row">
        <div id="app" class="col-md-10 offset-md-1">

            @yield('content')
            
        </div>
    </div>
    </body>
</html>