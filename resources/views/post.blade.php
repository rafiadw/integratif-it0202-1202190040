<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none;
            color: rgb(12, 110, 196)
        }
    </style>
  </head>
  <body>
    <nav class="navbar bg-light container ">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1 text-center">Integratif News</span>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col">
                <div class="card mb-3" style="width: 400px; height: 600px">
                    <img src={{ $post->image }} class="card-img-top" alt="..." style="width: 100%; height: 300px;">
                    <div class="card-body">
                        <h5 class="card-title"><a href={{ $post->link }}>{{ $post->title }}</a></h5>
                        <p class="card-text">{{ $post->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>