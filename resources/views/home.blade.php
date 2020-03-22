@extends('layouts.app')

@section('content')
    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Hai un esercizio commerciale che offre consegna a domicilio o ritiro in negozio?</h1>
        <p class="lead text-muted">Questo sito vuole aiutare a mettere in relazione negozianti e persone in questo momento così difficile.</p>
        <p>
          <a href="{{ route('stores.register') }}" class="btn btn-primary my-2">Inserisci il tuo negozio</a>
        </p>
        <h1 class="jumbotron-heading">Cerchi un negozio nel tuo quartiere che offra consegna a domicilio o ritiro su ordinazione?</h1>
        <p>
          <a href="{{ route('stores') }}" class="btn btn-primary my-2">Cerca nella tua zona</a>
        </p>
      </div>
    </section>
    <div class="container">
        <div class="col-md-12">
            @include('partials.stores.storesMap')
        </div>
    </div>
    </div>
@endsection
