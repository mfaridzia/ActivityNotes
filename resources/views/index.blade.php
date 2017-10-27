<!DOCTYPE html>
<html lang="en">
<head>
<title> ActivityNotes App </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <style type="text/css">
       /* ---- reset ---- */
        body {
          margin: 0;
          font-family: 'Permanent Marker', cursive;
        }
        canvas {
          display: block;
          vertical-align: bottom;
        }
        /* ---- particles.js container ---- */
        #particles-js {
          position: absolute;
          width: 100%;
          height: 100%;
          background-color: #031c34;
          background-image: url("");
          background-repeat: no-repeat;
          background-size: cover;
          background-position: 50% 50%;
        }
        /* ---- stats.js ---- */
        .count-particles{
          background: #000022;
          position: absolute;
          top: 48px;
          left: 0;
          width: 80px;
          color: #13E8E9;
          font-size: .8em;
          text-align: left;
          text-indent: 4px;
          line-height: 14px;
          padding-bottom: 2px;
          font-family: Helvetica, Arial, sans-serif;
          font-weight: bold;
        }

        .js-count-particles{
          font-size: 1.1em;
        }
        .app {
            color:#fff;
            margin-top:300px;
        }
    </style>
</head>
<body>
    
  <div id="particles-js"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 app">
                <h1 class="text-center"> [/] ActivityNotes App </h1>
                
                @if (Route::has('login'))
                    @if (Auth::check())
                        <center> <a class="btn btn-info btn-sm" href="{{ url('/dashboard') }}">Dashboard</a> </center>
                    @else
                        <center> 
                        <a class="btn btn-info btn-sm" href="{{ url('/login') }}">Login</a> 
                        <a class="btn btn-info btn-sm" href="{{ url('/register') }}">Register</a> 
                        </center>
                    @endif
                @endif

            </div>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="js/particles.js"></script>

</body>
</html>