// set a loading image
function ajax_loading_image(div) {
	$(div).html('<img src="/Jobportel/img/ajax_loading.gif" alt="Ajax Loading Image"/>');
}

// remove loading image
function ajax_remove_loading_image(div) {
	$(div).html('');
}