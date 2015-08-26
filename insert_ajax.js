$(document).on('click', '#submitButton', function(event){
	event.preventDefault();
	//get the form data and create a serialized list i.e. userName=Bruce,etc
	var values = $("#insert_form").serialize();
	console.log('clicked submitButton: '+ values )
    //post the data to the insert.php
    $( "#formArea" ).fadeOut( "slow", function() {
		    // Animation complete.
		 $.post( "insert.php", values, function( data ) {
	    	//once complete, anything "echoed" in insert.php will replace whatever is in the #formArea
			$( "#formArea" ).html( data );
			$( "#formArea" ).fadeIn( "slow", function() {
			    // Animation complete.
			  });
		});   
	});
    
});

$(document).on('click', '#updateButton', function(event){
	event.preventDefault();
	//get the form data and create a serialized list i.e. userName=Bruce,etc
	var values = $("#update_form").serialize();
	console.log('clicked updateButton: '+ values )
    //post the data to the insert.php
    $( "#formArea" ).fadeOut( "slow", function() {
		    // Animation complete.
		 $.post( "update.php", values, function( data ) {
	    	//once complete, anything "echoed" in insert.php will replace whatever is in the #formArea
			$( "#formArea" ).html( data );
			$( "#formArea" ).fadeIn( "slow", function() {
			    // Animation complete.
			  });
		});   
	});
    
});