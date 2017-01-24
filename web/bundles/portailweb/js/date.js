$(function() {
	// Ajoute un calendrier
	$('#portail_webbundle_observations_dateObservation').datepicker({
		//format de la date
		dateFormat: 'dd-mm-yy',
		//pour changer le mois et l'année plus facilement
		changeMonth: true,
			changeYear: true,
			//interdiction de sélectionner une date future ou une date supérieur à un an en arrière
			minDate: '-1Y',
			maxDate: '0',
	});


	var dt = new Date();
	var day = dt.getDate();
	var month = ("0" + (dt.getMonth() + 1)).slice(-2);
	var year = dt.getFullYear();

	//Utilise la date actuelle comme date par défaut dans le select
	$('#portail_webbundle_observations_dateObservation').val(day + "-" + month + "-" + year);

	//Utilise l'heure actuelle comme heure par défaut dans le select
	var hour = dt.getHours();
	var minute = dt.getMinutes();
	$('#portail_webbundle_observations_heureObservation_hour').val(hour);
	$('#portail_webbundle_observations_heureObservation_minute').val(minute);


	//Photo
	var fileInput  = document.querySelector( ".input-file-container input[type='file']" ),  
		button     = document.querySelector( ".input-file-trigger" ),
		the_return = document.querySelector(".file-return");

	// action lorsque la "barre d'espace" ou "Entrée" est pressée
	button.addEventListener( "keydown", function( event ) {
	    if ( event.keyCode == 13 || event.keyCode == 32 ) {
	        fileInput.focus();
	    }
	});
	 
	// action lorsque le label est cliqué
	button.addEventListener( "click", function( event ) {
	   fileInput.focus();
	   return false;
	});
	 
	// affiche un retour visuel dès que input:file change
	fileInput.addEventListener( "change", function( event ) {  
	    the_return.innerHTML = this.value;  
	});

	$(".input-file-trigger").click(function() {
		$("#portail_webbundle_observations_photo").click();
	});
});