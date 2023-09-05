@extends('base')

@section('body')


    <div class="container shop_container">
        <div class="row p-4">
            <div class="">
                <img src="https://th.bing.com/th/id/OIP.48XeWhk-IeadJVNW55IDegHaE8?pid=ImgDet&rs=1" class="img-thumbnail float-center" alt="logo">
            </div>
            
        </div>
    </div>

    <div class="container text-center couleur text-uppercase mt-5">
        <h1>Achat</h1>
        <hr class="hr hr-diagonal hr-diagonal-left bg-warning ">

    </div>
    <div class="container shop_container">
       
        <div class="row p-4">

            <form action=" {{url('panier')}} " method="post"></form>
                <div class="card mb-1" style="max-width: 900px;">
                    <div class="row g-0 p-2">
                        
                            <div class="col-md-4">
                                <img src=" {{$img}}" class="img-fluid rounded-start" alt="...">
                            </div>

                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase">{{$titre}}</h5>

                                    <div class="form-group mb-2">
                                        <label for="nom" class="text-capitalize">materiel : {{$titre}}</label>

                                        <input type="text" class="form-control" id="nom" value="{{$titre}}"   hidden name="materiel">
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="desc" class="text-capitalize"> {{$desc}}</label>
                                        
                                        <input type="text" class="form-control" id="nom" value=" {{$desc}}" hidden >
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="price" class="text-capitalize">price : {{$price}} € </label>
                                        <input type="email" class="form-control" id="email" value="Entrez votre email" hidden>
                                    </div>

                                    @if ($titre == 'cloture' or $titre == 'guerit' or $titre == 'separateur')
                                        <div class="form-group mb-2">
                                            <label for="item" class="mb-1 text-capitalize">nombres : </label>
                                            <input type="text" class="form-control" id="email"  name="item" required>
                                        </div>
                                    @endif

                                    @if ($titre == 'toles' or $titre == 'gaine' )
                                        <div class="form-group mb-2">
                                            <label for="mettre" class="mb-1 text-capitalize"> le mettre  : </label>
                                            <input type="text" class="form-control" id="email"  name="mettre" required>
                                        </div>
                                    @endif

                                    <div class="form-group mb-2">
                                        <input type="submit" class="form-control btn btn-outline-success" id="email" value="Panier" >
                                    </div>
                                    
                                    <div class="form-group mb-2">
                                        <a href=" {{url('/')}} " class="form-control btn btn-outline-danger" > Retour</a>
                                    </div>

                                    
                                    
                                </div>
                            </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection