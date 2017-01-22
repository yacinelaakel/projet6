$(document).ready(function(){
	$("#portail_webbundle_oiseaux_nomFr").on('keyup', function() { // everytime keyup event
		var input = $(this).val(); // We take the input value
		if ( input.length >= 3 ) { // Minimum characters = 3 (you can change)
		 //$('#match').html('<img src="' + window.loader + '" />'); // Loader icon apprears in the <div id="match"></div>
			var data = {input: input}; // We pass input argument in Ajax
			$.ajax({
				type: "POST",
				url: ROOT_URL, // call the php file ajax/oiseaux-autocomplete.php (check the routine we defined)
				data: data, // Send dataFields var
				dataType: 'json', // json method
				timeout: 3000,
				success: function(response){ // If success
					$('#match').html(response.oiseauxList); // Return data (UL list) and insert it in the <div id="match"></div>
					$('#matchList li').on('click', function() { // When click on an element in the list
						$('#portail_webbundle_oiseaux_nomFr').val($(this).text()); // Update the field with the new element
						$('#match').text(''); // Clear the <div id="match"></div>
						location.hash = "#myNavbar";
					});
				},
				error: function() { // if error
					$('#match').text('Problème !');
				}
			});
		} else {
			$('#match').text(''); // If less than 2 characters, clear the <div id="match"></div>
		}
	});
 });
