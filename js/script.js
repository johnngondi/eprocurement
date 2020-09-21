$(document).ready(function() {
	$('select').material_select();
	$('.modal').modal();
	$(".button-collapse").sideNav();
	$(".dropdown-button").dropdown();

	$('.dropdown-button').dropdown({
		inDuration: 300,
		outDuration: 225,
		constrainWidth: false, // Does not change width of dropdown to that of the activator
		hover: false, // Activate on hover
		gutter: 20, // Spacing from edge
		belowOrigin: true, // Displays dropdown below the button
		alignment: 'right', // Displays dropdown with edge aligned to the left of button
		stopPropagation: false // Stops event propagation
	});
});

function showPopup(id) {
	$('#'+id).show();
}
	
function closePopup(id) {
			
	$('#'+id).hide();
}