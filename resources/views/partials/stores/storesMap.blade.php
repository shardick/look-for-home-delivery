<div id="map" class="mapbox"></div>
<div id="store-list-container" class="row mt-3 mb-3"></div>
  <script type="x-tmpl-mustache" id="store-template">
    @{{#stores}}
    <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <div class="card-body">
            <p class="text-center"><span class="align-middle"><i class="fas fa-@{{ category.icon }} fa-3x"></i></span> @{{ category.name }}</p>
            <p class="card-title"><b>@{{ name }}</b></p>
            <p class="card-text">
                @{{ address }}
                <br/>
                @{{ telephone_number }}
                <br/>
                @{{ email }}
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="/stores/detail/@{{ id }}" class="btn btn-sm btn-outline-secondary">{{ __('Dettagli') }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @{{/stores}}
  </script>
