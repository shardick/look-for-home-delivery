class MapManager {

    constructor() {
        this._map = L.map("map", { maxZoom: 35 }).setView([51.505, -0.09], 13);
        this._markers = L.layerGroup();
        this._markers.addTo(this._map);
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution:
                '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(this._map);
        this._map.locate({ setView: true, maxZoom: 16 });
        this._map.on("locationfound", this.onLocationFound.bind(this));
        this._map.on("locationerror", this.onLocationError.bind(this));
        this._map.on("dragend", this.onMapChange.bind(this));
        this._map.on("zoomend", this.onMapChange.bind(this));
    }
    onLocationFound(e) {
        this.getStores(e.bounds);
    };
    onMapChange() {
        this._markers.clearLayers();
        this.getStores(this._map.getBounds());
    };
    getStores(bounds) {

        $('#store-list-container').empty();

        var instance = this;
        var ne = bounds.getNorthEast();
        var sw = bounds.getSouthWest();

        $('#map-results-message').addClass('d-none');

        $('#store-list-container').empty();

        $.get(
            "/stores/locate",
            { ne_lat: ne.lat, ne_lon: ne.lng, sw_lat: sw.lat, sw_lon: sw.lng },
            function(response) {
                $(response).each(function(index, el) {
                    var marker = L.marker([el.lat, el.lng]);
                    marker.bindPopup(
                        "<b>" +
                            el.name +
                            "</b><br/>" +
                            el.address +
                            "<br/>" +
                            el.telephone_number +
                            " - " +
                            el.email
                    );

                    marker.addTo(instance._markers);
                });

                if (response.length == 0)
                {
                    $('#map-results-message').removeClass('d-none');
                }
                else
                {
                    var template = document.getElementById('store-template').innerHTML;
                    var rendered = Mustache.render(template, { stores: response });
                    document.getElementById('store-list-container').innerHTML = rendered;
                }
            }
        );
    };
    onLocationError(e) {};
}

export default MapManager;
