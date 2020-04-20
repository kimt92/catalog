<?php


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if ($_POST["ajouter"]) {
            var_dump($_POST);
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <div>
   <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Catalogue</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Biens</a>
      </li>
    </ul>
  </div>
</nav>
   </div>
   <div class="container">
       <div class="mt-2">
           <form action="new.html.php" method="post">
               <input type="hidden" name="ajouter" value="catalog">
               <div class="form-row">
                    <div class="col-sm-3">
                        <label for="reference">Réference</label>
                        <input type="text" id="reference" name="reference" class="form-control">
                    </div>
                    <div class="col-sm-3">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" class="form-control">
                    </div>
                    
               </div>
               <div class="form-row">
                     <div class="col-sm-3">
                        <label for="prix">Prix</label>
                        <input type="number" id="prix" name="prix" class="form-control">
                    </div>
               </div>
               <div class="form-row">
                   <div class="col-auto mt-1">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                   </div>
                   
               </div>

           </form>
       </div>
       
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>