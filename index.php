<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Polices -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Road+Rage&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">

    <!-- Icônes bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <title>SalamecheGit</title>

    <style media="screen">
      body{
        font-family: 'Roboto Mono', monospace;
        background-color: black;
        color: white;
      }

      h1{
        font-family: 'Road Rage', cursive;
        color: white;
        font-size: 8em;
      }

      h2{
        font-family: 'Road Rage', cursive;
        color: white;
        font-size: 4em;
      }

      img{
        display: block;
        margin-left: auto;
        margin-right: auto;
      }



      footer{
        height: 6em;
      }

      .icones {
        display: flex;
        justify-content: center;
        align-items: center;
      }

    </style>
  </head>

  <body>

    <form>
        <fieldset disabled>
        <legend>Salamèche</legend>
        <div class="mb-3">
          <label for="disabledTextInput" class="form-label">De quel type est votre pokémon ?</label>
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
        </div>
        <div class="mb-3">
          <label for="disabledSelect" class="form-label">Quel est son niveau d'évolution ? </label>
          <select id="disabledSelect" class="form-select">
            <option>Disabled select</option>
          </select>
        </div>
        <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
            <label class="form-check-label" for="disabledFieldsetCheck">
              Can't check this
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>



        <div class="container">

          <h1 class="text-center">Salamèche</h1>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="image2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image4.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <br>

          <div>
            <h2>Histoire</h2>
            <img src="image8.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <br>

          <div>
            <h2>Dresseur</h2>
            <img src="image5.png" alt="">
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <br>

          <div>
            <h2>Type : feu</h2>
            <img src="image6.png" alt="">
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <br>

          <div>
            <h2>Evolution</h2>
            <img src="image7.png" alt="">
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <br>
          <br>

          <div class="">
            <form>
                <div class="mb-3 mx-5">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 mx-5">
                  <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 mx-5 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">J'accepte de devenir le dresseur d'un Salamèche !</label>
                </div>
                <button type="submit" class="btn btn-warning">C'est parti !</button>
          </form>
        </div>

    </div>

    <br>
    <br>

    <footer class="bg-warning">
      <div class="icones">
        <i class="my-4 mx-2 bi bi-facebook"></i>
        <i class="my-4 mx-2 bi bi-instagram"></i>
        <i class="my-4 mx-2 bi bi-twitter"></i>
      </div>
    </footer>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
