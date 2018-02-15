"use strict";function initMap(){var e=new google.maps.Map(id,{center:{lat:-33.91722,lng:151.23064},zoom:14,styles:mapStyles}),t=document.getElementById("listingAddress"),o=new google.maps.places.Autocomplete(t);o.bindTo("bounds",e);var l=new google.maps.InfoWindow,r=document.getElementById("infowindow-content");l.setContent(r);var s=new google.maps.Marker({map:e,anchorPoint:new google.maps.Point(0,-29),icon:"../img/map/marker.png"});o.addListener("place_changed",function(){l.close(),s.setVisible(!1);var t=o.getPlace();if(!t.geometry)return void window.alert("No details available for input: '"+t.name+"'");t.geometry.viewport?e.fitBounds(t.geometry.viewport):(e.setCenter(t.geometry.location),e.setZoom(17)),s.setPosition(t.geometry.location),s.setVisible(!0);var a="";t.address_components&&(a=[t.address_components[0]&&t.address_components[0].short_name||"",t.address_components[1]&&t.address_components[1].short_name||"",t.address_components[2]&&t.address_components[2].short_name||""].join(" ")),r.children["place-icon"].src=t.icon,r.children["place-name"].textContent=t.name,r.children["place-address"].textContent=a,l.open(e,s)})}var mapStyles=[{elementType:"geometry",stylers:[{color:"#f5f5f5"}]},{elementType:"labels.icon",stylers:[{visibility:"off"}]},{elementType:"labels.text.fill",stylers:[{color:"#616161"}]},{elementType:"labels.text.stroke",stylers:[{color:"#f5f5f5"}]},{featureType:"administrative.land_parcel",elementType:"labels.text.fill",stylers:[{color:"#bdbdbd"}]},{featureType:"poi",elementType:"geometry",stylers:[{color:"#eeeeee"}]},{featureType:"poi",elementType:"labels.text.fill",stylers:[{color:"#757575"}]},{featureType:"poi.park",elementType:"geometry",stylers:[{color:"#e5e5e5"}]},{featureType:"poi.park",elementType:"labels.text.fill",stylers:[{color:"#9e9e9e"}]},{featureType:"road",elementType:"geometry",stylers:[{color:"#ffffff"}]},{featureType:"road.arterial",elementType:"labels.text.fill",stylers:[{color:"#757575"}]},{featureType:"road.highway",elementType:"geometry",stylers:[{color:"#dadada"}]},{featureType:"road.highway",elementType:"labels.text.fill",stylers:[{color:"#616161"}]},{featureType:"road.local",elementType:"labels.text.fill",stylers:[{color:"#9e9e9e"}]},{featureType:"transit.line",elementType:"geometry",stylers:[{color:"#e5e5e5"}]},{featureType:"transit.station",elementType:"geometry",stylers:[{color:"#eeeeee"}]},{featureType:"water",elementType:"geometry",stylers:[{color:"#c9c9c9"}]},{featureType:"water",elementType:"labels.text.fill",stylers:[{color:"#9e9e9e"}]}],id=document.getElementById("map-canvas");