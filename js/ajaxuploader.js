$(document).ready(function()
{
	$("#csv_drop").uploadFile({
	url:"php/mainController.php",
	fileName:"filesArray"
	});
});