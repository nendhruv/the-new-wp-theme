

var $j = jQuery.noConflict();

$j(document).ready(function(){
    var img = 'wp-content/themes/new/img/a.png';
    setTimeout(function() {

    	$j('.nel').attr("src", img);
    	}, 5000);
});
