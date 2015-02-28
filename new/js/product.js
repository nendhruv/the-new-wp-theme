


var $j = jQuery.noConflict();

$j(document).ready(function(){
	var j=0;
	var q=0;
	/*var product = [ 'wp-content/themes/new/img/a.png',
	             'wp-content/themes/new/img/avyam.png',
	             'wp-content/themes/new/img/avyam_fb.jpg',
	             'wp-content/themes/new/img/dhruv.jpg',
	             //'wp-content/themes/new/img/1.jpg',
	             'wp-content/themes/new/img/logo.gif'];*/

  var service = ['wp-content/themes/new/img/cloudsol.png',
	             'wp-content/themes/new/img/ecom.jpg',
	             'wp-content/themes/new/img/mo.jpg',
	             'wp-content/themes/new/img/solution.jpg'

                 ];


	//$j('#two').attr('src', product[0]);
	//$j('#one').attr('src', product[1]);

	$j('#three').attr('src' , service[0]);


  //change();
  change1();


function change1(){
	var check = q;
	var calc = (service.length)-1;

if(check>=calc){
	q=-1;

}

setTimeout(function(){
	for(var i=q+1; i<service.length; i++){
		q=i;
		break;
	}
$j('#three').attr('src', service[i]);

change1();

}, 5000);

}  

/*function change(){
	var check = j;
	var calc = (product.length)-2;

	if(check >= calc){
j=-2;
	
}
setTimeout(function(){

 for (var i = j+2; i <product.length; i++) {
 	
 	j=i;
 	break;

 }
$j('#two').attr('src', product[i]);
 $j('#one').attr('src', product[i+1]);
 

 change();

} ,5000);

	
}*/
});

