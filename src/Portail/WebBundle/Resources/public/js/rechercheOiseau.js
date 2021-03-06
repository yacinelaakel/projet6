if(navigator.geolocation) {
	navigator.geolocation.getCurrentPosition(function(position) {
			// Valeur par défaut de la carte
		var myOptions = {
		    zoom: 7, //Plus le zoom est élevé plus la carte est rapproché
		    //Position par défaut de la carte
		    center: new google.maps.LatLng(47.91701135319529, 2.35107421875),
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

		if(document.getElementById('tabObservations') != null) {
			//On récupère les observations au format JSON
			var observations = JSON.parse(document.getElementById('tabObservations').value);

			//Infobulle qui s'ouvre au clic sur une observation
			var infowindow = new google.maps.InfoWindow({});

			//Il y a un marqueur pour chaque observation
	 		var markers = [];
			var nbObservations = observations.length;

			var affichageObservations = function(cb) {
				var arrayImg = [];
				for (var i = 0; i < nbObservations; i++) {
					var marker = markers[i];
					//Remplace "null" par ""
					if(observations[i].commentaire == null) {
						observations[i].commentaire = "Pas de commentaire";
					}

					//Si il y a une photo on stock son url, sinon on stock l'url de la photo "no-image"
					if (observations[i].photo != null) {
					 	var imgSrc = upimage + observations[i].photo + "";
					} else {
						var imgSrc = noimage;
					}
					arrayImg.push(imgSrc);

					marker = new google.maps.Marker({
						position:{lat: Number(observations[i].latitude), lng: Number(observations[i].longitude)},
						map: map,
						info: '<div id="container"><div class="infoContent"><h3>Position</h3><hr>Latitude : ' + observations[i].latitude + ' <br>Longitude : ' + observations[i].longitude + '</div><div class="infoContent"><h3>Nombre</h3><hr>' + observations[i].nbIndividus + ' individu(s)</div><div class="infoContent"><h3>Commentaire</h3><hr>' + observations[i].commentaire + '</div><div class="infoContent"><h3>Photo</h3><hr><img id="photo' + i + '" src="' + imgSrc + '" class="photoOiseau" /></div></div>',
						icon : window.locator
						});
						marker.addListener('click', function() {
							infowindow.setContent(this.info);
							infowindow.open(map, this);
						});
				}
				//Callback pour faire des traitements lorsque les marqueurs ont été placé
				cb(arrayImg);
			}

			affichageObservations(function(arrayImg) {
				document.addEventListener('click', function(e) {
					for (var i = 0; i < arrayImg.length; i++) {
						if (e.target.id == 'photo' + i) {
							document.getElementById('imagepreview').setAttribute('src', document.getElementById('photo' + i).getAttribute('src'));
 							$('#imagemodal').modal('show');
						}
					}
				});
			});

		}

	});

}
