
@extends('base')

@section('body')
  
     <!-- Bannière -->
    <div class="banner">
        <h1 class="text text-uppercase text-white">Logisur</h1>
        <h4 class="text text-uppercase text-white text-align-center">votre entreprise de location et vente des materiaux de constructions</h4>
    </div>


    <div class="container text-center couleur text-uppercase mt-5">
        <h1>nos materiaux</h1>
        <hr class="hr hr-diagonal hr-diagonal-left bg-warning ">

    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Première ligne de cartes -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/pictures/cabine.jpg')}}" class="card-img-top" alt="Image 1">
                    <div class="card-body">
                        <h5 class="card-title">Produit 1</h5>
                        <p class="card-text">Description du produit 1.</p>
                        <p class="card-text">$10.00</p> 
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/pictures/cloture.jpg')}}" class="card-img-top" alt="Image 2">
                    <div class="card-body">
                        <h5 class="card-title">Produit 2</h5>
                        <p class="card-text">Description du produit 2.</p>
                        <p class="card-text">$15.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/pictures/gaine.jpg')}}" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h5 class="card-title">Produit 3</h5>
                        <p class="card-text">Description du produit 3.</p>
                        <p class="card-text">$20.00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <!-- Deuxième ligne de cartes -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/pictures/separateur.jpg')}}" class="card-img-top" alt="Image 4">
                    <div class="card-body">
                        <h5 class="card-title">Produit 4</h5>
                        <p class="card-text">Description du produit 4.</p>
                        <p class="card-text">$25.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/pictures/toles.jpg')}}" class="card-img-top" alt="Image 5">
                    <div class="card-body">
                        <h5 class="card-title">Produit 5</h5>
                        <p class="card-text">Description du produit 5.</p>
                        <p class="card-text">$30.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/pictures/')}}" class="card-img-top" alt="Image 6">
                    <div class="card-body">
                        <h5 class="card-title">Produit 6</h5>
                        <p class="card-text">Description du produit 6.</p>
                        <p class="card-text">$35.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts JavaScript Bootstrap (optionnel) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    
@endsection