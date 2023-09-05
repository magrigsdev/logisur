
@extends('base')

@section('body')
  
     <!-- Bannière -->
    <div class="banner">
        <h1 class="text text-uppercase text-white">Logisur</h1>
        <h4 class="text text-uppercase text-white text-align-center"> location et vente du materiel de chantier d'occasion</h4>
    </div>


    <div class="container text-center couleur text-uppercase mt-5">
        <h1>nos materiaux</h1>
        <hr class="hr hr-diagonal hr-diagonal-left bg-warning ">

    </div>
   
    <div class="container mt-5 mb-4">
        <div class="row">
            <!-- Première ligne de cartes -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/pictures/cabine.jpg')}}" class="card-img-top" alt="Image 1">                   
                    <form method="POST" action="{{url('shop')}}">
                        @csrf
                        <input hidden value="assets/pictures/cabine.jpg" name="img"/>
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">guerit</h5>
                            <input hidden value="guerit" name="titre"/>
                            <p class="card-text">Description du produit 1.</p>
                            <input hidden value="Description du produit 1." name="desc"/>
                            <input hidden value="2300" name="price"/>
                            <p class="card-text">2 300 €</p> 
                        </div>
                        <div class="card-footer text-capitalize">
                            <button class="btn btn-outline-primary" type="submit" >plus</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <form method="POST" action="{{url('shop')}}">
                        @csrf
                        <img src="{{ asset('assets/pictures/cloture.jpg')}}" class="card-img-top" alt="Image 2">
                        <input hidden value="assets/pictures/cloture.jpg" name="img"/>
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">Cloture</h5>
                            <input hidden value="cloture" name="titre"/>
                            <input hidden value="Description du produit 2." name="desc"/>
                            <input hidden value="234" name="price"/>
                            <p class="card-text">Description du produit 2.</p>
                            <p class="card-text">234 € /piece</p>
                        </div>
                        <div class="card-footer text-capitalize">
                            <button class="btn btn-outline-primary" type="submit" >plus</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-4">
                <form method="POST" action="{{url('shop')}}">
                    @csrf
                    <div class="card">
                        <img src="{{ asset('assets/pictures/gaine.jpg')}}" class="card-img-top" alt="Image 3">
                        <input hidden value="assets/pictures/gaine.jpg" name="img"/>
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">gaine</h5>
                            <input hidden value="gaine" name="titre"/>
                            <p class="card-text">Description du produit 1. 47€ pour 50m</p>
                            <input hidden value="Description du produit 1." name="desc"/>
                            <input hidden value="47" name="price"/>
                            <p class="card-text">47€ / 50m</p> 
                        </div>
                        <div class="card-footer text-capitalize">
                            <button class="btn btn-outline-primary" type="submit" >plus</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <!-- Deuxième ligne de cartes  47 /50M-->
            <div class="col-md-4">
                <div class="card">
                    <form method="POST" action= "{{url('shop')}}">
                        @csrf
                        <img src="{{ asset('assets/pictures/separateur.jpg')}}" class="card-img-top" alt="Image 4">

                        <input hidden value="assets/pictures/separateur.jpg" name="img"/>
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">separateur</h5>
                            <input hidden value="separateur" name="titre"/>
                            <p class="card-text">Description du produit 1.</p>
                            <input hidden value="Description du produit 1." name="desc"/>
                            <input hidden value="263.99" name="price"/>
                            <p class="card-text">263.99</p> 
                        </div>
                        <div class="card-footer text-capitalize">
                            <button class="btn btn-outline-primary" type="submit" >plus</button>
                        </div>
                    </form>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/pictures/toles.jpg')}}" class="card-img-top" alt="Image 5">
                    <form method="POST" action= "{{url('shop')}}">
                        @csrf
                        <input hidden value="assets/pictures/toles.jpg" name="img"/>
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">toles</h5>
                            <input hidden value="toles" name="titre"/>
                            <p class="card-text">Description du produit 1.</p>
                            <input hidden value="Description du produit 1." name="desc"/>
                            <input hidden value="9" name="price"/>
                            <p class="card-text">9€ / 2m</p> 
                        </div>
                        <div class="card-footer text-capitalize">
                            <button class="btn btn-outline-primary" type="submit" >plus</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Scripts JavaScript Bootstrap (optionnel) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    
@endsection