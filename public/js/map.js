<<<<<<< HEAD
function initialize(){function e(e){var i = [], t = new InfoBox({content:"empty", disableAutoPan:!1, maxWidth:0, pixelOffset:new google.maps.Size( - 250, - 330), zIndex:null, closeBoxURL:"", infoBoxClearance:new google.maps.Size(1, 1), isHidden:!1, isOpen:!1, pane:"floatPane", enableEventPropagation:!1}); t.addListener("domready", function(){$(".infobox-close").on("click", function(){t.close(a, this), t.isOpen = !1})}), $.each(e, function(e, l){var s = new google.maps.LatLng(l.latitude, l.longitude), n = ""; l.verified && (n = '<div class="marker-verified"><i class="fa fa-check"></i></div>'); var o = function(e){return'<div id="marker-' + e.id + '" class="flip-container">' + n + '<div class="flipper"><div class="front"><img src="' + e.thumbnail + '"></div><div class="back"><i class="fa fa-eye"></i></div></div></div>'}(l), r = new RichMarker({id:l.id, data:l, flat:!0, position:s, map:a, shadow:0, content:o, title:"Fábrica de Porcelana da Vista Alegre", is_logged_in:l.is_logged_in}); i.push(r), google.maps.event.addListener(r, "click", function(){var e = '<div class="infobox-close"><i class="fa fa-close"></i></div><a class="list-link" href="listing-details-left.html"><div id="iw-container" style="background-image: url(' + r.data.thumbnail + ');"><div class="iw-content"><ul class="list-inline rating"><li><i class="fa fa-star" aria-hidden="true"></i></li><li><i class="fa fa-star" aria-hidden="true"></i></li><li><i class="fa fa-star" aria-hidden="true"></i></li><li><i class="fa fa-star" aria-hidden="true"></i></li><li><i class="fa fa-star" aria-hidden="true"></i></li></ul><div class="iw-subTitle">' + r.data.title + "</div><p>" + r.data.address + '</p></div><div class="iw-bottom-gradient"></div></div></a>'; t.isOpen?t.markerId == r.id?(t.close(a, this), t.isOpen = !1):(t.close(a, this), t.isOpen = !1, t.setContent(e), t.open(a, this), t.isOpen = !0, t.markerId = r.id):(t.setContent(e), t.open(a, this), t.isOpen = !0, t.markerId = r.id)})})}var i = {center:center, zoom:15, mapTypeId:google.maps.MapTypeId.ROADMAP, styles:mapStyles, scrollwheel:!1}, a = new google.maps.Map(document.getElementById("map-canvas"), i), t = {format:"json"}; $.getJSON("js/listings.json", t, e)}var mapStyles = [{featureType:"administrative", elementType:"labels.text.fill", stylers:[{color:"#444444"}]}, {featureType:"landscape", elementType:"all", stylers:[{color:"#f2f2f2"}]}, {featureType:"poi", elementType:"all", stylers:[{visibility:"off"}]}, {featureType:"road", elementType:"all", stylers:[{saturation: - 100}, {lightness:45}]}, {featureType:"road.highway", elementType:"all", stylers:[{visibility:"simplified"}]}, {featureType:"road.arterial", elementType:"labels.icon", stylers:[{visibility:"off"}]}, {featureType:"transit", elementType:"all", stylers:[{visibility:"off"}]}, {featureType:"water", elementType:"all", stylers:[{color:"#46bcec"}, {visibility:"on"}]}, {featureType:"water", elementType:"geometry.fill", stylers:[{color:"#2196f3"}]}], center = new google.maps.LatLng( - 33.924351, 151.156788), existId = document.getElementById("map-canvas"); existId && google.maps.event.addDomListener(window, "load", initialize);
=======

function initialize()
{
	function e(e)
	{
		var i=[],t=new InfoBox(
		{
		content:"empty",disableAutoPan:!1,maxWidth:0,pixelOffset:new google.maps.Size(-250,-330),zIndex:null,closeBoxURL:"",infoBoxClearance:new google.maps.Size(1,1),isHidden:!1,isOpen:!1,pane:"floatPane",enableEventPropagation:!1}

		);
		t.addListener("domready",function()
		{
			$(".infobox-close").on("click",function()
			{
			t.close(a,this),t.isOpen=!1}

		)}

		),$.each(e,function(e,l)
		{
			var s=new google.maps.LatLng(l.latitude,l.longitude),n="";
			l.verified&&(n='<div class="marker-verified"><i class="fa fa-check"></i></div>');
			var o=function(e)
			{
			return'<div id="marker-'+e.id+'" class="flip-container">'+n+'<div class="flipper"><div class="front"><img src="'+e.thumbnail+'"></div><div class="back"><i class="fa fa-eye"></i></div></div></div>'}

			(l),r=new RichMarker(
			{
			id:l.id,data:l,flat:!0,position:s,map:a,shadow:0,content:o,title:"Fábrica de Porcelana da Vista Alegre",is_logged_in:l.is_logged_in}

			);
			i.push(r),google.maps.event.addListener(r,"click",function()
			{
				var e='<div class="infobox-close"><i class="fa fa-close"></i></div><a class="list-link" href="listing-details-left.html"><div id="iw-container" style="background-image: url('+r.data.thumbnail+');
				"><div class="iw-content"><ul class="list-inline rating"><li><i class="fa fa-star" aria-hidden="true"></i></li><li><i class="fa fa-star" aria-hidden="true"></i></li><li><i class="fa fa-star" aria-hidden="true"></i></li><li><i class="fa fa-star" aria-hidden="true"></i></li><li><i class="fa fa-star" aria-hidden="true"></i></li></ul><div class="iw-subTitle">'+r.data.title+"</div><p>"+r.data.address+'</p></div><div class="iw-bottom-gradient"></div></div></a>';
			t.isOpen?t.markerId==r.id?(t.close(a,this),t.isOpen=!1):(t.close(a,this),t.isOpen=!1,t.setContent(e),t.open(a,this),t.isOpen=!0,t.markerId=r.id):(t.setContent(e),t.open(a,this),t.isOpen=!0,t.markerId=r.id)}

		)}

	)}

	var i=
	{
	center:center,zoom:15,mapTypeId:google.maps.MapTypeId.ROADMAP,styles:mapStyles,scrollwheel:!1}

	,a=new google.maps.Map(document.getElementById("map-canvas"),i),t=
	{
	format:"json"}

	;
$.getJSON("js/listings.json",t,e)}

var mapStyles=[
{
	featureType:"administrative",elementType:"labels.text.fill",stylers:[
	{
	color:"#444444"}

]}

,
{
	featureType:"landscape",elementType:"all",stylers:[
	{
	color:"#f2f2f2"}

]}

,
{
	featureType:"poi",elementType:"all",stylers:[
	{
	visibility:"off"}

]}

,
{
	featureType:"road",elementType:"all",stylers:[
	{
	saturation:-100}

	,
	{
	lightness:45}

]}

,
{
	featureType:"road.highway",elementType:"all",stylers:[
	{
	visibility:"simplified"}

]}

,
{
	featureType:"road.arterial",elementType:"labels.icon",stylers:[
	{
	visibility:"off"}

]}

,
{
	featureType:"transit",elementType:"all",stylers:[
	{
	visibility:"off"}

]}

,
{
	featureType:"water",elementType:"all",stylers:[
	{
	color:"#46bcec"}

	,
	{
	visibility:"on"}

]}

,
{
	featureType:"water",elementType:"geometry.fill",stylers:[
	{
	color:"#2196f3"}

]}

],center=new google.maps.LatLng(-33.924351,151.156788),existId=document.getElementById("map-canvas");
existId&&google.maps.event.addDomListener(window,"load",initialize);
>>>>>>> a8a3395c96cc682bb637e0a35e725fc109756bcb
