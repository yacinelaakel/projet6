$(function() {
	// Googlemap
	// navigator.geolocation permet de récupérer la position d'un utilisateur
	if(navigator.geolocation) {
  		navigator.geolocation.getCurrentPosition(function(position) {
  			// Valeur par défaut de la carte
			var myOptions = {
		    zoom: 14, //Plus le zoom est élevé plus la carte est rapproché
		    //Position par défaut de la carte : celle de l'utilisateur
		    center: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
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
		//marqueur
		var marker;
		//Icône de l'oiseau qui fera office de marqueur
		var locator = "/projet-6/web/images/locator.png"; 
		document.getElementById("portail_webbundle_observations_latitude").value = position.coords.latitude;
		document.getElementById("portail_webbundle_observations_longitude").value = position.coords.longitude;
		//Au clic sur un endroit de la carte
		google.maps.event.addListener(map, 'click', function(event) {
			//Récupère la position du clic et crée un marqueur
			placeMarker(event.latLng.lat(), event.latLng.lng());
			//Affecte aux champs Latitude et longitude les coordonnées sur lesquelles la personne a cliqué
			document.getElementById("portail_webbundle_observations_latitude").value = event.latLng.lat();
			document.getElementById("portail_webbundle_observations_longitude").value = event.latLng.lng();
		});
		//Fonction qui crée un marqueur
		function placeMarker(latitude, longitude) {
			//On autorise qu'un marqueur à la fois
			if (marker) {
				marker.setPosition({lat: latitude, lng: longitude});
			} else {
				marker = new google.maps.Marker({
					position: {lat: latitude, lng: longitude},
					map: map,
					icon: locator,
				});
			}
		}
  		});
	}
});