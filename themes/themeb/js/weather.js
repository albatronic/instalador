/* 
 * Mapa meteorológico
 * 
 * @author Informática ALBATRONIC, SL <sergio.perez@albatronic.com>
 * @since 23-mar-2014
 */

// for OSM layer
var mapnik = new OpenLayers.Layer.OSM();
// Make weather station layer. Client clastering of markers is using. 
var stations = new OpenLayers.Layer.Vector.OWMStations("Stations");
// Make weather layer. Server clastering of markers is using.
var city = new OpenLayers.Layer.Vector.OWMWeather("Weather");

// Add weather layers to map
map.addLayers([mapnik, stations, city]);

function init() {
	//Center of map
	var lat = 7486473; 
	var lon = 4193332;
	var lonlat = new OpenLayers.LonLat(lon, lat);
        var map = new OpenLayers.Map("basicMap");
	// Create overlays
	//  OSM
        var mapnik = new OpenLayers.Layer.OSM();
	// Stations
	var stations = new OpenLayers.Layer.Vector.OWMStations("Stations");
	// Current weather
	var city = new OpenLayers.Layer.Vector.OWMWeather("Weather");
	//Addind maps
	map.addLayers([mapnik, stations, city]);
	map.setCenter( lonlat, 10 );
}
