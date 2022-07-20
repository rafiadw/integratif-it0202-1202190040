<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Integratif News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none;
            color: rgb(12, 110, 196)
        }
    </style>
  </head>
  <body>
    <!--Navigasi -->
    <nav class="navbar navbar-dark bg-primary navbar-expand-lg " style="height: 70px; ">
      <div class="container-fluid container">
        <a class="navbar-brand" href="#">Integratif News</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="https://github.com/rafiadw/integratif-it0202-1202190040">Github</a>
            <a class="nav-link active" aria-current="page" href="/pokemon">Pokemon</a>
          </div>
        </div>
      </div>
    </nav>
    <!--carousel-->
    <div id="carouselExampleControls" class="carousel slide container pt-5" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" ">
          <a href={{ $posts[8]->link }}>
            <img src={{ $posts[8]->image }} class="d-block w-100" alt="{{ $posts[8]->title }}" style="height: 600px">
            <div class="carousel-caption d-none d-md-block shadow-lg">
              <h3>{{ $posts[8]->title }}</h3>
            </div>
          </a>
        </div>
        <div class="carousel-item">
          <a href={{ $posts[4]->link }}>
            <img src={{ $posts[4]->image }} class="d-block w-100" alt="{{ $posts[4]->title }}" style="height: 600px">
            <div class="carousel-caption d-none d-md-block shadow-lg">
              <h3>{{ $posts[4]->title }}</h3>
            </div>
          </a>
        </div>
        <div class="carousel-item">
          <a href={{ $posts[14]->link }}>
            <img src={{ $posts[14]->image }} class="d-block w-100" alt="{{ $posts[14]->title }}" style="height: 600px">
            <div class="carousel-caption d-none d-md-block shadow-lg">
              <h3>{{ $posts[14]->title }}</h3>
            </div>
          </a>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--content-->
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