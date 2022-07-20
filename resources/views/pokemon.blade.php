<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
      <!-- navbar -->
    <nav class="navbar navbar-dark bg-primary navbar-expand-lg " style="height: 70px; ">
        <div class="container-fluid container">
          <a class="navbar-brand" href="/">Integratif News</a>
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
      <!--navbar end -->

      <!--input bar -->
    <div class="container d-flex justify-content-center">
        <form class="row g-2 mt-5 " id="pokemon-form" >
            <div class="col-auto">
              <input type="text" class="form-control" name="pokemon" placeholder="Pokemon Name">
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3">Search Pokemon</button>
            </div>
        </form>
    </div>

    

    <div class="mb-5" id="pokemon-content"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js" integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const form = document.querySelector("#pokemon-form");
        const pokemonContent= document.querySelector("#pokemon-content")
        const BASE_URI = `https://pokeapi.co/api/v2/pokemon/`;
        form.addEventListener('submit', SearchPokemon);

        function SearchPokemon (e) {
            if(pokemonContent.hasChildNodes()){
                pokemonContent.removeChild(pokemonContent.firstChild)
            }

            e.preventDefault()
            let pokemonName = form.pokemon.value.toLowerCase();
            axios.get(`${BASE_URI}/${pokemonName}`)
            .then(function (response) {
                let data = response.data
               const contentHTML = `<div class="container d-flex justify-content-center mt-5">
        <div class="border border-5 border-primary rounded border-opacity-25 ">
            <div class="p-4">
                <div>
                    <img  style="width: 200px" src="${data.sprites.front_default}">
                    <img  style="width: 200px" src="${data.sprites.back_default}">
                </div>
                <h3 style="text-align: center; margin-bottom: 20px">Pokemon ${data.name}</h3>
                <div>
                    <ul style="font-size: 18px">
                        <li>${data.abilities[0].ability.name}</li>
                        <li>${data.abilities[1].ability.name}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>`
    console.log(data.abilities[1].ability.name);
                pokemonContent.innerHTML += contentHTML;
            })
            .catch(function (error) {
                // handle error
                alert("pokemon not found")
            });
        }
        
    </script>
  </body>
</html>