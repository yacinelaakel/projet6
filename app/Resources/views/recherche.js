$(document).ready(function(){
	var ROOT_URL = "{{ url('portail_web_ajax_autocomplete_recherche')}}";

	var myOptions = {
	    zoom: 14, //Plus le zoom est élevé plus la carte est rapproché
	    //Position par défaut de la carte : celle de l'utilisateur
	    center: new google.maps.LatLng(Number(document.getElementById('lat1').innerHTML), Number(document.getElementById('lon1').innerHTML)),
	    disableDefaultUI: true,
	    scaleControl: true, //Affiche les informations sur l'échelle de distance 
	    zoomControl: true, //Autorise le zoom avec la molette
	    zoomControlOptions: {
	      style: google.maps.ZoomControlStyle.HYBRID
	    },
	    mapTypeId: 'hybrid',
	    draggableCursor:'crosshair', //Remplace la main par une croix pour mieux cibler
	    draggingCursor: 'move'
	}

	//Crée la carte google map et appelle la fonction myOptions pour définir les valeurs par défaut au démarrage
	var map = new google.maps.Map(document.getElementById("map"),myOptions);

	for(var i = 1; i <= document.querySelectorAll('.loop').length; i++) {
		var marker = new google.maps.Marker({
			position: {lat: Number(document.getElementById('lat' + i).innerHTML), lng: Number(document.getElementById('lon' + i).innerHTML)},
			map: map,
			icon : "{{ asset('images/locator.png') }}"
			});
	}
});