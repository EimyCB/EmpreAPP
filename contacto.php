<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script
			src="https://kit.fontawesome.com/b47b3084cb.js"
			crossorigin="anonymous"
		></script>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/estilos.css" />
        <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="/img/favicon/site.webmanifest">
		<title>EmpreApp - Contacto</title>
	</head>
	<body>
		<!-- Navegacion -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img src="img/logo.png" alt="logo EmpreApp" height="45" />
				</a>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="index.html"
							>Inicio</a
						>
					</li>
					<span>|</span>
					<li class="nav-item">
						<a class="nav-link" href="Pages/emprendedores.html"
							>Emprendedores</a
						>
					</li>
					<span>|</span>
					<li class="nav-item">
						<a class="nav-link active" href="Pages/contacto.php">Contacto</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- Form contact -->
		<div class="container-fluid justify-content-center">
			<img
				class="img-fluid mx-auto d-block empre_img"
				src="img/Ilustraciones/Dayflow - Torso.svg"
				alt=""
			/>
			<h2>No dudes en escribirnos</h2>
			<h3>Deja tu mensaje y pronto te responderemos!</h3>
		</div>
		<div class="container">
			<form class="form" id="form" method="post" action="php/form.php" enctype="multipart/form-data">
				<div>
					<input type="text" name="name" required />
					<label for="name">Nombre</label>
				</div>
				<div>
					<input type="email" name="email" required />
					<label for="email">Correo electr贸nico</label>
				</div>
				<table class="table table-borderless">
					<tr class="d-flex justify-content-center">
						<th scope="col">
							<span
								><input
									class="inputfile"
									type="file"
									name="attachment"
									id="attachment"
								/><label for="attachment"><i class="fas fa-folder-plus"></i></label>
							</span>
						</th>
						<th scope="col">
							<textarea
								type="text"
								name="message"
								placeholder="Escribe un mensaje"
								required
							></textarea>
						</th>
						<th scope="col">
							<span
								><input
									class="inputfile"
									type="submit"
									name="submit"
									id="submit" /><label for="submit"
									><i class="fas fa-paper-plane" aria-hidden="true"></i></label
							></span>
						</th>
					</tr>
				</table>
			</form>
		</div>

		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-6">
						<h3 class="font-medium">Redes Sociales</h3>
					</div>
					<div class="col-6">
						<h3>Descarga nuestra App</h3>
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col-3">
						<a href="https://www.facebook.com/Empreappmap/"
							><img
								src="img/footer/facebook-logo.png"
								class="social-icon"
								alt=""
						/></a>
						<h3>Facebook</h3>
					</div>
					<div class="col-3">
						<a href="https://www.instagram.com/empre.app/"
							><img
								src="img/footer/instagram-logo.png"
								class="social-icon"
								alt=""
						/></a>
						<h3>Instagram</h3>
					</div>
					<div class="col-3">
						<a
							href="https://play.google.com/store/apps/details?id=com.app_r3777.layout"
							><img
								src="img/footer/google-play.svg"
								class="social-icon"
								alt=""
						/></a>
						<h3>Playstore</h3>
					</div>
					<div class="col-3">
						<a
							href="https://apps.apple.com/ar/app/empre-app-emprendedores-cerca/id1566962202?l=en"
							><img
								src="img/footer/app-store.svg"
								class="social-icon"
								alt=""
						/></a>
						<h3>Appstore</h3>
					</div>
				</div>
			</div>
        </div>
		</footer>
		<script src="js/jquery.js"></script>
		<script>
		    $(function() {
    $('.submit').click(function() {
        $('#registerform').submit();
        return false;
    }); 
});

		</script>
	</body>
</html>
