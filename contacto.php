<?php include 'header.php';?>
<?php include 'menu.php';?>
<div class="wrapper">  
    <div id="contact_form">
	    <form name="form1" id="ff" method="post" action="insert.php">
		    <h1>PHP contact form with jQuery Validation</h1>
			<p>A working demo of HTML5 and PHP Responsive Contact Form with jQuery field validation. It offers you the opportunity to add different error labels for different fields.</p>	
		     <label>
				<span>Nombre*:</span>
		        <input type="text" placeholder="Porfavor, Ingresa tu nombre" name="nombre" id="name" autofocus>
		    </label>
		        
		    <label>
				<span>Ciudad*:</span>    
				<input type="text" placeholder="Ingresa tu ciudad" name="ciudad" id="city">
		    </label>
		        
		    <label>
				<span>Telefono:</span>
		        <input type="tel" placeholder="Porfavor, ingresa tu telefono" name="telefono" id="phone">
		    </label>
		        
		    <label>
				<span>Email*:</span>
		        <input type="email" placeholder="tuemail@gmail.com" name="email" id="email">
		    </label>
		    <!-- Created by ftutorials.com -->
			<input class="sendButton" type="submit" name="Submit" value="Send">
				
		</form>
	</div>
</div>
<script type="text/javascript">
		$(document).ready(function() {
			$("#ff").validate({
				submitHandler:function(form) {
					SubmittingForm();
				},
				rules: {
					nombre: "required",
					telefono: "required",
					email: {				
						required: true,
						email: true
					},
					ciudad: {
						required: true
					}
				},
				messages: {
					nombre: "Porfavor, especifica tu nombre",
					telefono: "Porfavor, especifica tu telefono",
					email: "Porfavor, especifica tu correo electronico",
					ciudad: "Porfavor, especifica tu ciudad"
				}
			});
		});

		jQuery.validator.addMethod(
			"selectNone",
			function(value, element) {
				if (element.value == "none")
				{
					return false;
				}
				else return true;
			},
			"Please select an option."
		);

</script>
<?php include 'footer.php';?>
