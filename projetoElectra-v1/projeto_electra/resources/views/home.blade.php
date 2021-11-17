@extends('layouts.app')

@section('content')
<div class="container home_container">
    <div class="container-fluid">
        <div class="row">

            <div class=" col">
                <div class="card" style="width: 18rem;">
                    <a href="{{route('front-end')}}" class="link_areas">
                        <img src="images/formacoes/front-end.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">FRONT-END</h5>
                            <p class="card-text">Realize a sua matricula em nossos cursos e seja capaz de desenvolver interfaces intuitivas, funcionais e lindas para suas aplicações.</p>

                        </div>
                    </a>
                </div>

            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <a href="{{route('back-end')}}" class="link_areas">
                        <img src="images/formacoes/back-end.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BACK-END</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col">

                <div class="card" style="width: 18rem;">
                    <a href="#" class="link_areas">
                        <img src="images/formacoes/engenharia-software.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ENGENHARIA</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        </div>
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
