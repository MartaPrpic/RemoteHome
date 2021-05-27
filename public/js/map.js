import Map from "https://js.arcgis.com/4.19/@arcgis/core/Map.js";
import MapView from "https://js.arcgis.com/4.19/@arcgis/core/views/MapView.js";
import Point from "https://js.arcgis.com/4.19/@arcgis/core/geometry/Point.js";
import Graphic from "https://js.arcgis.com/4.19/@arcgis/core/Graphic.js";
import request from "https://js.arcgis.com/4.19/@arcgis/core/request.js";
import Popup from "https://js.arcgis.com/4.19/@arcgis/core/PopupTemplate.js";
import FeatureLayer from "https://js.arcgis.com/4.19/@arcgis/core/layers/FeatureLayer.js";

let viewDiv= document.getElementById("viewDiv");
let viewDiv2 = document.getElementById("viewDiv2");
if(viewDiv){function createPoint(lat, lng){
    let point = new Point({
        latitude: lat,
        longitude: lng
    });

    return point;
};

function createGraphic(point, element){
    let symbol = {
    type: "simple-marker",  
    color: "blue",
    size: "8px", 
    outline: {  
        color: [ 255, 255, 0 ],
        width: 1  
        }
    };
    let jsonimg = element.images;
    console.log(jsonimg.search(".jpg"));
    let imgsrc = jsonimg.slice(2,jsonimg.search(".jpg")+4).replaceAll(" ", "%20");
    console.log(imgsrc);
    let popup = new Popup();
    popup.title = `<a style="text-decoration: none;" href="http://127.0.0.1:8000/detail/${element.id}"><h4>${element.name}</h4></a>`;
    popup.content = `<div class="row" style="margin:10px 0px !important;">
                        <div class="col-md-6 popupImg">
                            <img src='http://127.0.0.1:8000/images/${imgsrc}'/>
                        </div>
                        <div class="col-md-6">
                            <h3>Bedrooms: ${element.bedrooms} </h3>
                            <h3>Bathrooms: ${element.bathrooms} </h3>
                            <h3>Price: ${element.price} EUR </h3>
                        </div>
                    </div>`;
    



    var graphic = new Graphic({geometry:point, symbol:symbol, popupTemplate:popup});

    view.graphics.add(graphic);
}

function geocodeAdresses(address, element){
            
    return request("https://www.mapquestapi.com/geocoding/v1/address?key=me2ePEeHXba0AbDx1x5nrGBkWhZXPvyl&outFormat=json&location=" + address, {
    handleAs: "json",
    headers: {
    'Access-Control-Allow-Origin' : '*',
    'Access-Control-Allow-Headers': 'Origin, X-Requested-With, Content-Type, Accept'}
    }).then(function(result){
            var lat = result.data.results[0].locations[0].latLng.lat;
            var lng = result.data.results[0].locations[0].latLng.lng;
            var point = createPoint(lat, lng);
            createGraphic(point, element);
    }), function(err){
        console.log(err);
    };
};

const map = new Map({

    basemap: "topo-vector"
    
});

const view = new MapView({

    container: "viewDiv", 
    center: [15.2000, 45.1000 ],
    zoom: 7,
    map: map 

});
oglasi.forEach(element => {
    geocodeAdresses(element.address, element);

});}
else if(viewDiv2){
    function createPoint_id(lat, lng){
        let point = new Point({
            latitude: lat,
            longitude: lng
        });
    
        return point;
    };

    
function createGraphic_id(point){
    let symbol = {
    type: "simple-marker",  
    color: "blue",
    size: "8px", 
    outline: {  
        color: [ 255, 255, 0 ],
        width: 1  
        }
    };
    var graphic = new Graphic({geometry:point, symbol:symbol});
    view.goTo(point);
    view.graphics.add(graphic);
}
function geocodeAdresses_id(address){
            
    return request("https://www.mapquestapi.com/geocoding/v1/address?key=me2ePEeHXba0AbDx1x5nrGBkWhZXPvyl&outFormat=json&location=" + address, {
    handleAs: "json",
    headers: {
    'Access-Control-Allow-Origin' : '*',
    'Access-Control-Allow-Headers': 'Origin, X-Requested-With, Content-Type, Accept'}
    }).then(function(result){
            var lat = result.data.results[0].locations[0].latLng.lat;
            var lng = result.data.results[0].locations[0].latLng.lng;
            var point = createPoint_id(lat, lng);
            createGraphic_id(point);
    }), function(err){
        console.log(err);
    };
};

const map = new Map({

    basemap: "topo-vector"
    
});



const view = new MapView({

    container: "viewDiv2", 
    center: [15.2000, 45.1000 ],
    zoom: 7,
    map: map 

});

const layer = new FeatureLayer({
    url: "https://gdi-tp.gdi.net/server/rest/services/Students/POI/MapServer/0"
});



function closestWihinRadius(){

    var query = layer.createQuery();
    query.where = "1=1";
    query.outFields = ["*"];
    query.returnGeomatry = true;
    /*query.distance = 0.5;
    query.geometry = new Point(45.81444, 15.97798);
    query.units = "miles";
    query.spatialRelationship = "intersects";  // this is the default
    query.returnGeometry = true;
    */
    layer.queryFeatures(query).then(function(res){
        console.log(res.features);
    });
};

map.layers.add(layer);
closestWihinRadius();
geocodeAdresses_id(oglas);

}
