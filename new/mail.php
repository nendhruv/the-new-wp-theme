<?php





?>



<div class="row">
	<div class="col-sm-12 cents">
<form action="wp-content/themes/new/send-contact-message.php" method="post">

<p>

<input type="text" id="email" name="mail" placeholder="your email" class="form-input" onblur="validate();"><span id="alert" class="validate wrong">Please Enter A Valid Email Address</span>
</p>

<br>



<p>

<input type="text" id="client_email" name="client_email" placeholder="client email" class="form-input" onblur="validate1();"><span id="alert1" class="validate wrong">Please Enter A Valid Email Address</span>

</p>
<br>

<p>



<textarea  name="message" rows="5" cols="40" class="message-box"></textarea>

</p>

<br>

<p>



<button type="submit" class="refer-btn">Refer</button>

</p>

</form>
</div>



<?php


?>

<script type="text/javascript">


	//alert('ndk');
var j = jQuery.noConflict();
	 
	 function validate(){

	var check = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	var mail = $j('#email').val();
	var client_email = $j('#client_email').val();

	if(mail.match(check)){
		$j('#alert').addClass('wrong');
		$j('#email').removeClass('wrong-border');
		$j('#email').addClass('form-input');
		$j('.refer-btn').attr('disabled', false);
		//console.log(this);
	}

	else{
		$j('#alert').removeClass('wrong');
		$j('#email').removeClass('form-input');
		$j('#email').addClass('wrong-border');
		$j('.refer-btn').attr('disabled','disabled');
		//console.log(this);
	}
}

	function validate1(){

	var check = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	var mail = $j('#client_email').val();
	

	if(mail.match(check)){
		$j('#alert1').addClass('wrong');
		$j('#client_email').removeClass('wrong-border');
		$j('#client_email').addClass('form-input');
		$j('.refer-btn').attr('disabled', false);
	}

	else{
		$j('#alert1').removeClass('wrong');
		$j('#client_email').removeClass('form-input');
		$j('#client_email').addClass('wrong-border');
	    $j('.refer-btn').attr('disabled','disabled');
		//console.log(this);
	}
}

/*function check(){
	var msg = $j('.message-box').val();
	if(msg == ""){
		$j('#alert2').addClass('wrong');
		$j('.message-box').removeClass('wrong-border');
		$j('.message-box').addClass('form-input');
	}

	else{
		$j('#alert2').removeClass('wrong');
		$j('.message-box').removeClass('form-input');
		$j('.message-box').addClass('wrong-border');
	}
}
*/
</script>