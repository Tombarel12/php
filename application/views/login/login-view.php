<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Zoky Manoro - Login</title>
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
<link href="<?php echo base_url('assets/zoky_manoro.jpg'); ?>" rel="icon">


<style>
	body {
		font-family: Arial, Helvetica, sans-serif;
		background-color: #f2f2f2;
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		margin: 0;
		padding: 0;
		height: 100vh;
	}

	/* Full-width input fields */
	input[type=text], input[type=password] {
	width: 100%;
	padding: 10px 15px;
	margin: 6px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	font-size: 14px;
	transition: border 0.3s ease, box-shadow 0.3s ease;
	}
	
	input[type=text]:focus, input[type=password]:focus {
		border-color: #2C4D6A;
		box-shadow: 0 0 5px rgba(44, 77, 106, 0.5);
		outline: none;
	}

	/* Set a style for all se connecter */
	.btn-connecter{
	background-color: #2C4D6A; /*couleur bleu */
	color: white;
	padding: 10px 15px;
	margin: 6px 0;
	border: none;
	border-radius: 25px;
	cursor: pointer;
	width: 100%;
	font-size: 14px;
	font-weight: bold;
	transition: all 0.3s ease;
	position: relative;
	overflow: hidden;
	}
	
	.btn-connecter:hover {
		background-color: #3a5f80;
		transform: translateY(-2px);
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
	}
	
	.btn-connecter:active {
		transform: translateY(0);
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
	}
	
	/* Set a style for annuler */
	.btn-annuler {
	background-color: #CE5E10; /*couleur orange */
	color: white;
	padding: 10px 15px;
	margin: 10px 0;
	border: none;
	border-radius: 25px;
	cursor: pointer;
	width: 100%;
	font-size: 14px;
	font-weight: bold;
	transition: all 0.3s ease;
	position: relative;
	overflow: hidden;
	}
	
	.btn-annuler:hover {
		background-color: #e06c1a;
		transform: translateY(-2px);
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
	}
	
	.btn-annuler:active {
		transform: translateY(0);
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
	}
	
	/* Button ripple effect */
	.btn-connecter::after, .btn-annuler::after {
		content: '';
		position: absolute;
		top: 50%;
		left: 50%;
		width: 5px;
		height: 5px;
		background: rgba(255, 255, 255, 0.5);
		opacity: 0;
		border-radius: 100%;
		transform: scale(1, 1) translate(-50%);
		transform-origin: 50% 50%;
	}
	
	.btn-connecter:focus:not(:active)::after, .btn-annuler:focus:not(:active)::after {
		animation: ripple 1s ease-out;
	}
	
	@keyframes ripple {
		0% {
			transform: scale(0, 0);
			opacity: 0.5;
		}
		20% {
			transform: scale(25, 25);
			opacity: 0.3;
		}
		100% {
			transform: scale(50, 50);
			opacity: 0;
		}
	}

	/* Center the image and position the close button */
	.imgcontainer {
	text-align: center;
	margin: 15px 0 8px 0;
	position: relative;
	}

	img.avatar {
	width: 30%;
	border-radius: 50%;
	}

	.container {
	padding: 12px;
	}

	span.psw {
	float: right;
	padding-top: 12px;
	font-size: 14px;
	}

	/* The Modal (background) */
	.modal {
	position: fixed; /* Stay in place */
	z-index: 1; /* Sit on top */
	left: 0;
	top: 0;
	width: 100%; /* Full width */
	height: 100%; /* Full height */
	overflow: auto; /* Enable scroll if needed */
	background-color: rgba(0,0,0,0.3); /* Black w/ opacity */
	padding-top: 40px;
	}

	/* Modal Content/Box */
	.modal-content {
	background-color: #fefefe;
	margin: 3% auto; /* Centered */
	border: none;
	width: 35%; /* Reduced width from 50% to 35% */
	max-width: 400px; /* Maximum width added */
	border-radius: 12px;
	box-shadow: 0 10px 25px rgba(0,0,0,0.2);
	overflow: hidden;
	}

	/* The Close Button (x) */
	.close {
	position: absolute;
	right: 20px;
	top: 0;
	color: #000;
	font-size: 30px;
	font-weight: bold;
	}

	.close:hover,
	.close:focus {
	color: red;
	cursor: pointer;
	}

	/* Add Zoom Animation */
	.animate {
	-webkit-animation: animatezoom 0.5s;
	animation: animatezoom 0.5s
	}

	@-webkit-keyframes animatezoom {
	from {-webkit-transform: scale(0)} 
	to {-webkit-transform: scale(1)}
	}
	
	@keyframes animatezoom {
	from {transform: scale(0)} 
	to {transform: scale(1)}
	}

	/* Label styling */
	label {
		font-size: 14px;
		font-weight: 600;
		color: #333;
		display: block;
		margin-bottom: 3px;
	}
	
	/* Form header */
	.form-header {
		background-color: #2C4D6A;
		color: white;
		text-align: center;
		padding: 15px 0;
		margin-bottom: 15px;
		font-size: 18px;
		font-weight: bold;
	}

	/* Change styles for span and cancel button on extra small screens */
	@media screen and (max-width: 768px) {
	.modal-content {
		width: 70%;
	}
	}

	@media screen and (max-width: 480px) {
	.modal-content {
		width: 90%;
	}
	span.psw {
		display: block;
		float: none;
	}
	.cancelbtn {
		width: 100%;
	}
	}
</style>
</head>
<body>

<div id="id01" class="modal">  
	<form class="modal-content animate" action="<?php echo site_url("verifier-login") ?>" method="POST">
		<div class="form-header">
			<i class="fas fa-user-lock"></i> Loging
		</div>
		
		<?php echo $this->session->flashdata('errorMessage') ?>

		<div class="container">
            <label for="uname"><i class="fas fa-user"></i> Nom utilsateur</label>
            <input type="text" placeholder="nom utilisateur" name="login" required>

            <label for="psw"><i class="fas fa-key"></i> Mot de passe</label>
            <input type="password" placeholder="mot de passe" name="pass" required>
                
            <button type="submit" class="btn-connecter"><i class="fas fa-sign-in-alt"></i> Se connecter</button>
			<a href="#" onclick="location.href='<?php echo site_url('accueil') ?>'"><input class="btn-annuler" type="button" value="Annuler"></a>
		</div>
	</form>
</div>

<script>
	// Afficher automatiquement la modal au chargement de la page
	window.onload = function() {
		document.getElementById('id01').style.display = 'block';
	}
	
	// Ajouter un effet de clic pour les boutons
	document.addEventListener('DOMContentLoaded', function() {
		const buttons = document.querySelectorAll('.btn-connecter, .btn-annuler');
		
		buttons.forEach(button => {
			button.addEventListener('mousedown', function() {
				this.style.transform = 'scale(0.95)';
			});
			
			button.addEventListener('mouseup', function() {
				this.style.transform = '';
			});
			
			button.addEventListener('mouseleave', function() {
				this.style.transform = '';
			});
		});
	});
</script>

</body>
</html>