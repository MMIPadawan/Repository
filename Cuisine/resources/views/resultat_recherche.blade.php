

 <!DOCTYPE html>
  <html>
    <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/font/roboto/Roboto-Regular.woff" rel="stylesheet">
       
      <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/font/roboto/Roboto-Regular.woff2" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/font/roboto/Roboto-Regular.ttf" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

   <body class= "teal lighten-4">
  <header>  
  <nav>
    <div class="nav-wrapper grey lighten-4">
      <img class="activator" src="images/logo.png" style="
    width: 120px;">


     <a href="#" data-activates="mobile-demo" class="button-collapse red darken-3"><i class="material-icons">menu</i></a>
     
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="http://vsp149406.nfrance.com/~16_courcelle/cuisineL/public/liste" class="black-text">Les recettes</a></li>
        <li><a href="badges.html" class="black-text">Chercher une recette</a></li>
        <li><a href="http://vsp149406.nfrance.com/~16_courcelle/cuisineL/public/ajout" class="black-text">Ajouter une recette</a></li>
         <li><a href="mobile.html" class="black-text">Mon compte</a></li>

      </ul>
    
   <ul class="side-nav" id="mobile-demo">
   
        <li><a href="http://vsp149406.nfrance.com/~16_courcelle/cuisineL/public/liste">Les recettes</a></li>
        <li><a href="badges.html">Chercher une recette</a></li>
       <a href="http://vsp149406.nfrance.com/~16_courcelle/cuisineL/public/ajout"><li class="large material-icons">add</li>Ajouter une recette</a>
        <a href="mobile.html"><li class="large material-icons">perm_identity</li>Mon compte</a>
      </ul>
    </nav>
    </div>
  </header>



<body class="teal lighten-4"> 


@section('section') <!-- contenu = liste des recettes -->


<html>
  <body>
  <h1>Résultats de la recherche :</h1>


@foreach($recettes as $recette)


<div class = "container">
    
  <div class="small card">
  <div class = "row">
    <div class="col s12 m12 l12" style="
    background-size: cover;
">
  <div class="card" style="
    height: 300px;
">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/{{$recette->photo}}">



    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">{{$recette->nom}}  {{$recette->prix}}</br>   {{$recette->temps}}    <i class="material-icons right">more_vert</i></span>
      
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">{{$recette->nom}}<i class="material-icons right">close</i></span>
      <p>{{$recette->description}}</p>
    </div>
  </div>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="js/script.js"></script>
</br>
@endforeach
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
  <!--<script>
    $( document ).ready(function(){
      $(".button-collapse").sideNav();
    
    })

  </script>-->
    </body>
  </html>
<!--<center><?php echo $recettes->render(); ?></center>-->

@stop




