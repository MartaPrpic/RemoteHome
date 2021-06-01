import Map from "https://js.arcgis.com/4.19/@arcgis/core/Map.js";
  import MapView from "https://js.arcgis.com/4.19/@arcgis/core/views/MapView.js";
  import Point from "https://js.arcgis.com/4.19/@arcgis/core/geometry/Point.js";
  import Graphic from "https://js.arcgis.com/4.19/@arcgis/core/Graphic.js";
  import request from "https://js.arcgis.com/4.19/@arcgis/core/request.js";
  import Popup from "https://js.arcgis.com/4.19/@arcgis/core/PopupTemplate.js";
  import FeatureLayer from "https://js.arcgis.com/4.19/@arcgis/core/layers/FeatureLayer.js";
  import GraphicsLayer from "https://js.arcgis.com/4.19/@arcgis/core/layers/GraphicsLayer.js";
  import Legend from "https://js.arcgis.com/4.19/@arcgis/core/widgets/Legend.js";

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
  console.log(result);
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

  function createPoint(lat, lng){
  let point = new Point({
  latitude: lat,
  longitude: lng
  });
  console.log(point);
  return point;
  };

  function geocodeAdresses(address){

  return request("https://www.mapquestapi.com/geocoding/v1/address?key=me2ePEeHXba0AbDx1x5nrGBkWhZXPvyl&outFormat=json&location=" + address, {
  handleAs: "json",
  headers: {
  'Access-Control-Allow-Origin' : '*',
  'Access-Control-Allow-Headers': 'Origin, X-Requested-With, Content-Type, Accept'}
  }).then(function(result){
  console.log(result);
  var lat = result.data.results[0].locations[0].latLng.lat;
  var lng = result.data.results[0].locations[0].latLng.lng;
  createPoint(lat, lng);
  })
  }

  geocodeAdresses(oglas);

  /*let category = Array.from(document.getElementsByName('mapFilter')).forEach(category => category.addEventListener('click', function(e){if(e.checked)return e.value}));*/

  function closestWihinRadius(){
  var point = createPoint(45.432359, 13.52241);
  var query = layer.createQuery();
  query.geometry = point;
  query.units = "meters";
  query.distance = 500;
  query.spatialRelationship = "intersects";  // this is the default
  query.returnGeometry = true;

  view.goTo({
  target: point,
  zoom: 16
  },
  {
  duration: 3000
  });

  layer.queryFeatures(query).then(function(res){

  graphicLayer.removeAll();
  res.features.map(function(feature){

  function category(){
  if(feature.attributes.fclass == "restaurant"){
  return "restaurant"
  }
  else if(feature.attributes.fclass=="atm" || feature.attributes.fclass=="bank"){
  return "atm"
  }
  else if(feature.attributes.fclass=="supermarket" || feature.attributes.fclass=="kiosk" || feature.attributes.fclass=="bakery"){
  return "grocery-store"
  }
  else if(feature.attributes.fclass=="tourist_info"){
  return "information"
  }
  else if(feature.attributes.fclass=="bar" || feature.attributes.fclass=="cafe" || feature.attributes.fclass=="pub"){
  return "coffee-shop"
  }
  else if(feature.attributes.fclass=="clothes" || feature.attributes.fclass=="shoe_shop" || feature.attributes.fclass=="bookshop" || feature.attributes.fclass=="sports_shop" || feature.attributes.fclass=="bicycle_shop"){
  return "shopping-center"
  }
  else if(feature.attributes.fclass=="hospital" || feature.attributes.fclass=="dentist" || feature.attributes.fclass=="doctors"){
  return "hospital"
  }
  else if(feature.attributes.fclass=="pharmacy"){
  return "pharmacy"
  }

  }

  let point = {
  type: "point",  // autocasts as new Point()
  longitude: feature.geometry.longitude,
  latitude: feature.geometry.latitude
  };

  let pointGraphic = new Graphic({
  geometry: point,
  symbol: {
  type: "web-style",
  name: category(),
  styleName: "Esri2DPointSymbolsStyle"
  },
  attributes: feature.attributes
  });

  graphicLayer.add(pointGraphic);
  });
  });

  };

  const map = new Map({
  basemap: "topo-vector"
  });

  const view = new MapView({
  container: "viewDiv2",
  map: map,
  zoom: 7,
  constraints: {
  minScale: 2311104
  },
  popup: {
  defaultPopupTemplateEnabled: true
  }
  });

  const symbolCats = [
  "post-office",
  "atm",
  "place-of-worship",
  "park",
  "school",
  "hospital",
  "fire-station",
  "playground",
  "shopping-center",
  "campground",
  "golf-course",
  "library",
  "city-hall",
  "beach",
  "police-station",
  "subway-station",
  "train-station",
  "cemetery",
  "trail",
  "radio-tower",
  "museum",
  "airport",
  "live-music-venue",
  "sports-complex",
  "ferry"
  ];

  var rendererInfos = symbolCats.map((symCat) => {
  return {
  value: symCat,
  symbol: {
  type: "web-style",
  name: symCat,
  styleName: "Esri2DPointSymbolsStyle"
  },
  label: symCat
  };
  });

  const scale = 36112;

  const renderer = {
  type: "unique-value", // autocasts as new UniqueValueRenderer()
  valueExpression: "post-office",
  valueExpressionTitle: "Symbol Categories",
  uniqueValueInfos: rendererInfos,
  visualVariables: [
  {
  type: "size",
  valueExpression: "$view.scale",
  stops: [
  { value: scale, size: 20 },
  { value: scale * 2, size: 15 },
  { value: scale * 4, size: 10 },
  { value: scale * 8, size: 5 },
  { value: scale * 16, size: 2 },
  { value: scale * 32, size: 1 }
  ]
  }
  ]
  };

  const layer = new FeatureLayer({
  url: "https://gdi-tp.gdi.net/server/rest/services/Students/POI/MapServer/0",
  visible: true,
  renderer: renderer
  });

  let graphicLayer = new GraphicsLayer({
  renderer: renderer,
  popupTemplate: {
  title: "{Name}",
  content: [
  {
  type: "fields",
  fieldInfos: [
  {
  fieldName: "fclass",
  label: "Category"
  },
  {
  fieldName: "name",
  label: "Name"
  }
  ]
  }
  ]
  }
  });

  const legend = new Legend({
  view: view,
  layerInfos: [{
  layer: layer,
  title: "Legend"
  }]
  });

  view.ui.add(legend, "bottom-right");

  let categories = Array.from(document.getElementsByClassName('esri-legend__layer-row'));
  console.log(categories);


  map.add(graphicLayer);

  //Valid values fro criteria: restaurant, supermarket, cafe, pharmacy, library, museum, bank, pub, hospital, atm

  var closestPoints = closestWihinRadius();

  //var filterByCriteria()
  map.layers.add(layer);


  }