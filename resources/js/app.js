require('./bootstrap');
import MapManager from './mapManager';

$(function() {
    if ($('#map').length > 0)
    {
        new MapManager();
    }
});
