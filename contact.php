<!doctype html>
<html lang="pt-br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/icon.png" type="image/png">
	<title>Orbt - Contatos</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>

<body>

	<!--================ Barra de Navegação =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">

					<a class="navbar-brand logo_h" href="index.html"><img src="img/orbtwh.svg" height="50" alt=""></a>


					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
							<li class="nav-item"><a class="nav-link" href="index.php">Preços</a></li>
							<li class="nav-item"><a class="nav-link" href="index.php">Trabalhos</a></li>
							<li class="nav-item"><a class="nav-link" href="contact.php">Contato</a></li>
						</ul>
					</div>
					<div class="right-button">
						<ul>

							<li><a class="sign_up" href="">Acessar</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ Final Barra de Navegação =================-->



	<!--================Hero Banner Area Start =================-->
	<section class="hero-banner d-flex align-items-center">
		<div class="container text-center">
			<h2>Contact</h2>
			<nav aria-label="breadcrumb" class="banner-breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Inicio</a></li>
					<li class="breadcrumb-item active" aria-current="page">Contato</li>
				</ol>
			</nav>
		</div>
	</section>
	<!--================Hero Banner Area End =================-->


	<!-- ================ contact section start ================= -->
	<section class="contact-section area-padding">
		<div class="container">
			<div class="d-none d-sm-block mb-5 pb-4">
				<div id="map" style="height: 480px;"></div>
				<script>
					function initMap() {
						var uluru = {
							lat: -25.363,
							lng: 131.044
						};
						var grayStyles = [{
								featureType: "all",
								stylers: [{
										saturation: -90
									},
									{
										lightness: 50
									}
								]
							},
							{
								elementType: 'labels.text.fill',
								stylers: [{
									color: '#ccdee9'
								}]
							}
						];
						var map = new google.maps.Map(document.getElementById('map'), {
							center: {
								lat: -31.197,
								lng: 150.744
							},
							zoom: 9,
							styles: grayStyles,
							scrollwheel: false
						});
					}
				</script>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>

			</div>


			<div class="row">
				<div class="col-12">
					<h2 class="contact-title">Enviar um orçamento</h2>
				</div>
				<div class="col-lg-8">


					<form class="form-contact contact_form">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<textarea class="form-control w-100" name="mensagem" id="mensagem" cols="30" rows="9" placeholder="Nome da empresa:
										Qual serviços gostaria de solicitar: 
										Valor Pretendido:
										Cupom Promocional:">
									</textarea>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input class="form-control" name="nome" id="name" type="text" placeholder="Seu nome">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input class="form-control" name="email" id="email" type="email" placeholder="Seu e-mail">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<input class="form-control" name="assunto" id="subject" type="text" placeholder="Titulo">
								</div>
							</div>
						</div>
						<div class="form-group mt-3">
							<button type="submit" id="enviarEmail" class="button button-contactForm">Enviar
							</button>
						</div>
					</form>


				</div>

				<div class="col-lg-4">
					<div class="media contact-info">
						<span class="contact-info__icon"><i class="ti-home"></i></span>
						<div class="media-body">
							<h3>Indefinido.</h3>
							<p>Indefindo</p>
						</div>
					</div>
					<div class="media contact-info">
						<span class="contact-info__icon"><i class="ti-tablet"></i></span>
						<div class="media-body">
							<h3><a href="tel:+5516993112543">+55 (16) 99311 2543</a></h3>
							<p>Seg a Sex 8:00 as 17:00</p>
						</div>
					</div>
					<div class="media contact-info">
						<span class="contact-info__icon"><i class="ti-email"></i></span>
						<div class="media-body">
							<h3><a href="mailto:atendimento@orbt.com.br">atendimento@orbt.com.br</a></h3>
							<p>Envie a qualquer momento!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ================ contact section end ================= -->

	<!-- ================ Rodapé ================= -->


	<footer class="footer-section">
		<div class="container">
			<div class="footer-cta pt-5 pb-5">
				<div class="row">
					<div class="col-xl-4 col-md-4 mb-30">
						<div class="single-cta">
							<i class="fas fa-map-marker-alt"></i>
							<div class="cta-text">
								<h4>Endereço</h4>
								<span>Indefinido</span>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-4 mb-30">
						<div class="single-cta">
							<i class="fab fa-whatsapp"></i>
							<div class="cta-text">
								<h4>Whatsapp</h4>
								<span>+55 (16) 99311-2543</span>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-4 mb-30">
						<div class="single-cta">
							<i class="far fa-envelope-open"></i>
							<div class="cta-text">
								<h4>E-mail</h4>
								<span>atendimento@orbt.com.br</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-content pt-5 pb-5">
				<div class="row">
					<div class="col-xl-4 col-lg-4 mb-50">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="index.html"><img src="img/orbtwh.svg" class="img-fluid" alt="logo"></a>
							</div>
							<div class="footer-text">
								<p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
									elit,Lorem ipsum dolor sit amet.</p>
							</div>
							<div class="footer-social-icon">
								<span>Follow us</span>
								<a href="https://www.facebook.com/orbtofc">
									<i class="fab fa-facebook-f facebook-bg"></i></a>
								<a href="https://www.instagram.com/orbt.com.br/">
									<i class="fab fa-instagram twitter-bg"></i></a>
								<a href="https://github.com/Orbt2001">
									<i class="fab fa-github google-bg"></i></a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 mb-30">
						<div class="footer-widget">
							<div class="footer-widget-heading">
								<h3>Useful Links</h3>
							</div>
							<ul>
								<li><a href="#">Inicio</a></li>
								<li><a href="#">Trabalhos</a></li>
								<li><a href="#">Preços</a></li>
								<li><a href="#">Contato</a></li>
								<li><a href="#">Sobre nós</a></li>
								<li><a href="#">Outros Serviços</a></li>
								<li><a href="#">Orçamentos</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="copyright-area">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6 text-center text-lg-left">
						<div class="copyright-text">
							<p>Copyright &copy; 2020, Todos direitos reservados <a href="https:orbt.com.br">Orbt</a></p>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
						<div class="footer-menu">
							<ul>
								<li><a href="#">Inicio</a></li>
								<li><a href="#">Trabalhos</a></li>
								<li><a href="#">Preços</a></li>
								<li><a href="#">Contato</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- ================ Final Rodapé ================= -->


	<!--================Contact Success and Error message Area =================-->
	<div id="success" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fas fa-times"></i>
					</button>
					<h2>Thank you</h2>
					<p>Your message is successfully sent...</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals error -->

	<div id="error" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fas fa-times"></i>
					</button>
					<h2>Sorry !</h2>
					<p> Something went wrong </p>
				</div>
			</div>
		</div>
	</div>
	<!--================End Contact Success and Error message Area =================-->




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/jquery.form.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/theme.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
<script>
	$("#enviarEmail").click(function() {
		$.ajax({
			type: "POST",
			url: "emailto.php",
			data: {
				p1: $("#name").val(),
				p2: $("#email").val(),
				p3: $("#subject").val(),
				p4: $("#mensagem").val(),
			},
			success: function() {
				Swal.fire({
					icon: 'success',
					title: 'Sucesso',
					text: 'Ficamos gratos pelo seu contato, retornaremos em breve!',
				})
			},
		});
	});
</script>

</html>