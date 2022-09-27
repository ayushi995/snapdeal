<script>
$(document).ready(function(){
	$("#login").click(function(){
		var email = $("#email").val();
		var pass = $("#pass").val();
		
		$.ajax({
			url: 'ajax/login.php',
			type: 'POST',
			data: {f_email: email, f_pass: pass},
			succcess: function(resp){;
			if(resp == 1){
				//window.location.href = "index.php";
				window.history.go(-1);
			}else{
				
				window.location.href = 'login.php';
			}
			}
		});
	})
	
});	
</script>

<?php

	include "..config/config.php";
	
	$file = $_FILES['file'];
	$name = $_POST['u_name'];
	$mobile = $_POST['u_mobile'];
	$date = $POST["yy-m-d"];
 ?>