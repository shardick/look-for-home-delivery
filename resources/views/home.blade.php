@extends('layouts.app')

@section('content')
    <section class="jumbotron text-center">
      <div class="container">
          <div class="row">
        <div class="col-md-6 col-12">
            <h3><i class="fas fa-shopping-cart fa-2x text-danger"></i><br/>Hai un esercizio commerciale che offre consegna a domicilio o ritiro in negozio?</h3>
            <p>
                <a href="{{ route('stores.register') }}" class="btn btn-danger my-2">Inserisci il tuo negozio</a>
            </p>
        </div>
        <div class="col-md-6 col-12">
            <h3><i class="fas fa-search-location fa-2x text-primary"></i><br/>Cerchi un negozio nel tuo quartiere che offra consegna a domicilio o ritiro su ordinazione?</h3>
            <p>
                <a href="{{ route('stores') }}" class="btn btn-primary my-2">Cerca nella tua zona</a>
            </p>
        </div>
        @if (config('app.enable_volunteers_registration'))
        <div class="col-md-4 col-12">
            <h3><i class="fas fa-people-carry fa-2x text-success"></i><br/>Vuoi offrirti come volontario per aiutare chi è in difficoltà e non può uscire?</h3>
            <p>
                <a href="{{ route("volunteers.register") }}" class="btn btn-success my-2">{{ __("common.subscribe") }} </a>
            </p>
        </div>
        @endif
        <div class="col-12 lead text-muted text-center"><a href="{{ route('common.page', [ 'view' => 'info' ]) }}"><i class="fas fa-question-circle"></i></i> Cos'è questo sito?</a></div>
          </div>
      </div>
    </section>
    <div class="container">
        <div class="col-md-12">
            @include('partials.stores.storesMap')
        </div>
    </div>
    </div>
@endsection
