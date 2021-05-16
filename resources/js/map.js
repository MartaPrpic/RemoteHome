import Map from "@arcgis-js-api/Map";
/*import Map from "https://js.arcgis.com/4.19/@arcgis/core/Map.js";*/
const map = new Map({
    basemap: "topo"
});

const view = new MapView({
    container: "viewDiv", 
    map: map,
    center: [15.2000, 45.1000 ],
    zoom: 7
});