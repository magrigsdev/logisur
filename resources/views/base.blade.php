
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logisur</title>
    <!-- Inclure Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Inclure Bootstrap JS (optionnel) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <style>
     .banner {
            position: relative;
            height: 100vh; /* Prend la hauteur totale de l'écran */
            background-image: url('https://img.freepik.com/photos-premium/architecte-ouvrier-du-batiment-ingenieur-civil-contremaitre-casque-gilet-securite_868783-10880.jpg?w=900'); /* Remplacez 'votre-image.jpg' par le chemin de votre image */
            background-size: cover; /* Ajuste la taille de l'image pour couvrir toute la bannière */
            background-position: center; /* Centre l'image horizontalement et verticalement */
            color: #ffffff; /* Couleur du texte sur la bannière (blanc dans cet exemple) */
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* Calque sombre semi-transparent */


        /* Style du texte de la bannière */
        .banner h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .banner p {
            font-size: 18px;
        }

        .active{
            color: darkorange !important;
        }
        .couleur{
            color: darkorange !important;
        }

        .shop_container{
          display: flex;
          align-content: center;
          justify-content: center;
        }
        .mymg{
          max-width: 25%;
          height: auto;
        }

        
    </style>
</head>
<body>

<!-- Barre de navigation Bootstrap -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container"> <!-- Enveloppeur pour centrer les éléments -->
    <!-- Logo ou Marque -->
    <a class="navbar-brand couleur" href="#">Logisur</a>
    <img src="https://th.bing.com/th/id/OIP.48XeWhk-IeadJVNW55IDegHaE8?pid=ImgDet&rs=1" alt="logo" width="30" height="24">
    <!-- Bouton pour mobile (peut être masqué sur les grands écrans) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- Éléments de la barre de navigation -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">        
            <a class="nav-link  {{ request()->is('/')? 'active': ''}}" href="{{url('/')}} ">Accueil</a>
        </li>

        @if (session('shop'))
        <li class="nav-item">        
            <a class="nav-link  {{ request()->is('shop')? 'active': ''}}" href="#">Shop</a>
        </li>
        @endif

        <li class="nav-item">
          <a class="nav-link {{ request()->is('contact') ? 'active': ''}}" href="{{url('contact')}}">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

@yield('body')

<!-- Inclure jQuery via CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Inclure Popper.js via CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>

<!-- Inclure Bootstrap.js via CDN -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
