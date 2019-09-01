<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from base5builder.com/livedemo/quillpro/v1.7/html/profiles-member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 22:05:16 GMT -->
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-41035904-17"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-41035904-17');
	</script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="assets/img/favicon.png">

	<title>QuillPro - Bootstrap 4 Dashboard Template</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&amp;subset=latin-ext" rel="stylesheet">

	<!-- CSS - REQUIRED - START -->
	<!-- Batch Icons -->
	<link rel="stylesheet" href="assets/fonts/batch-icons/css/batch-icons.css">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap/mdb.min.css">
	<!-- Custom Scrollbar -->
	<link rel="stylesheet" href="assets/plugins/custom-scrollbar/jquery.mCustomScrollbar.min.css">
	<!-- Hamburger Menu -->
	<link rel="stylesheet" href="assets/css/hamburgers/hamburgers.css">

	<!-- CSS - REQUIRED - END -->

	<!-- CSS - DEMO - START -->
	<link rel="stylesheet" href="assets/demo/css/ui-icons-batch-icons.css">
	<!-- CSS - DEMO - END -->

	<!-- CSS - OPTIONAL - START -->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">

	<!-- CSS - OPTIONAL - END -->

	<!-- QuillPro Styles -->
	<link rel="stylesheet" href="assets/css/quillpro/quillpro.css">

      <!-- Start of Async Drift Code -->
      <script>
      !function() {
        var t;
        if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0,
        t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
        t.factory = function(e) {
          return function() {
            var n;
            return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
          };
        }, t.methods.forEach(function(e) {
          t[e] = t.factory(e);
        }), t.load = function(t) {
          var e, n, o, i;
          e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"),
          o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js",
          n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
        });
      }();
      drift.SNIPPET_VERSION = '0.3.1';
      drift.load('4n2u4hcda3nb');
      </script>
      <!-- End of Async Drift Code -->

    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
          '../../../../../connect.facebook.net/en_US/fbevents.js');
        fbq('init', '344529832785462');
        fbq('track', 'PageView');
        fbq('track', 'ViewContent', {
          content_ids : 'quillpro_demo',
          content_name : 'quillpro_demo_frontend_version_all',
          content_type : 'product'
        });
      </script>
      <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=344529832785462&amp;ev=PageView&amp;noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body>

  <div class="container-fluid">
		<div class="row">
			<nav id="sidebar" class="px-0 bg-dark bg-gradient sidebar">
				<ul class="nav nav-pills flex-column">
					<li class="logo-nav-item">
						<a class="navbar-brand" href="#">
							<img src="assets/img/logo.png" width="145" height="32.3" alt="QuillPro">
						</a>
					</li>
					<li>
						<h6 class="nav-header">General</h6>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="index.html">
							<i class="batch-icon batch-icon-home"></i>
							Inicio <span class="sr-only">(current)</span>
						</a>
					</li>
						</ul>
					</li>

				<ul class="nav nav-pills flex-column">
					<li>
						<h6 class="nav-header">Aplicativos</h6>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-parent" href="#">
							<i class="batch-icon batch-icon-store"></i>
							Materiales
						</a>
						<ul class="nav nav-pills flex-column">
							<li class="nav-item">
								<li class="nav-item">
									<a class="nav-link" href="logos-more.php">Logos y Demas</a>
								</li>
								<a class="nav-link" href="gallery.html">
									<i class="batch-icon batch-icon-image"></i>
									Gallería de Imágenes <span class="badge badge-danger">Nuevo*</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="task-list.html">Vídeos</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="task-list.html">Formatos Ofimáticos</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-parent" href="#">
							<i class="batch-icon batch-icon-list"></i>
							Proyectos
						</a>
						<ul class="nav nav-pills flex-column">
							<li class="nav-item">
								<a class="nav-link" href="task-list.html">Lista de proyectos</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="task-manager.html">Administrador de proyectos</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="task-list.html">Entregas</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="task-list.html">Soporte de Enttrega</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-parent" href="#">
							<i class="batch-icon batch-icon-mail"></i>
							Correo
						</a>
						<ul class="nav nav-pills flex-column">
							<li class="nav-item">
								<a class="nav-link" href="mail-inbox.html">Inbox</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="mail-message.html">Message</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="mail-compose.html">Compose</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="calendar.html">
							<i class="batch-icon batch-icon-calendar"></i>
							Calendario
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="profiles-member-profile.html">
							<i class="batch-icon batch-icon-users"></i>
							Perfil
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="profiles-member-profile.html">
							<i class="batch-icon batch-icon-speech-bubble-right-tip-chat"></i>
							Chat
						</a>
					</li>
				</ul>
			</nav>
<!-- termina la barra de botones lateral -->

			<div class="right-column">
				<nav class="navbar navbar-expand-lg navbar-light bg-white">
					<a class="navbar-brand d-block d-sm-block d-md-block d-lg-none" href="#">
						<img src="assets/img/logo-dark.png" width="145" height="32.3" alt="QuillPro">
					</a>
					<button class="hamburger hamburger--slider" type="button" data-target=".sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle Sidebar">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
					<!-- Added Mobile-Only Menu -->
					<ul class="navbar-nav ml-auto mobile-only-control d-block d-sm-block d-md-block d-lg-none">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="navbar-notification-search-mobile" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
								<i class="batch-icon batch-icon-search"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-fullscreen" aria-labelledby="navbar-notification-search-mobile">
								<li>
									<form class="form-inline my-2 my-lg-0 no-waves-effect">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search for..." aria-label="Search for..." aria-describedby="basic-addon2">
											<div class="input-group-append">
												<button class="btn btn-primary btn-gradient waves-effect waves-light" type="button">
													<i class="batch-icon batch-icon-search"></i>
												</button>
											</div>
										</div>
									</form>
								</li>
							</ul>
						</li>
					</ul>

					<!--  DEPRECATED CODE:
						<div class="navbar-collapse" id="navbarSupportedContent">
					-->
					<!-- USE THIS CODE Instead of the Commented Code Above -->
					<!-- .collapse added to the element -->
					<div class="collapse navbar-collapse" id="navbar-header-content">
						<ul class="navbar-nav navbar-language-translation mr-auto">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" id="navbar-dropdown-menu-link" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
									<i class="batch-icon batch-icon-book-alt-"></i>
									Español
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbar-dropdown-menu-link">
									<li><a class="dropdown-item" href="#">Français</a></li>
									<li><a class="dropdown-item" href="#">Deutsche</a></li>
									<li><a class="dropdown-item" href="#">Ingles</a></li>
								</ul>
							</li>
						</ul>
						<ul class="navbar-nav navbar-notifications float-right">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" id="navbar-notification-search" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
									<i class="batch-icon batch-icon-search"></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-fullscreen" aria-labelledby="navbar-notification-search">
									<li>
										<form class="form-inline my-2 my-lg-0 no-waves-effect">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search for..." aria-label="Search for..." aria-describedby="basic-addon2">
												<div class="input-group-append">
													<button class="btn btn-primary btn-gradient waves-effect waves-light" type="button">Buscar</button>
												</div>
											</div>
										</form>
									</li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle no-waves-effect" id="navbar-notification-calendar" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
									<i class="batch-icon batch-icon-calendar"></i>
									<span class="notification-number">6</span>
								</a>
								<ul class="dropdown-menu dropdown-menu-right dropdown-menu-md" aria-labelledby="navbar-notification-calendar">
									<li class="media">
										<a href="task-list.html">
											<i class="batch-icon batch-icon-calendar batch-icon-xl d-flex mr-3"></i>
											<div class="media-body">
												<h6 class="mt-0 mb-1 notification-heading">Meeting with Project Manager</h6>
												<div class="notification-text">
													Cras sit amet nibh libero
												</div>
												<span class="notification-time">Right now</span>
											</div>
										</a>
									</li>
									<li class="media">
										<a href="task-list.html">
											<i class="batch-icon batch-icon-calendar batch-icon-xl d-flex mr-3"></i>
											<div class="media-body">
												<h6 class="mt-0 mb-1 notification-heading">Sales Call</h6>
												<div class="notification-text">
													Nibh amet cras sit libero
												</div>
												<span class="notification-time">One hour from now</span>
											</div>
										</a>
									</li>
									<li class="media">
										<a href="task-list.html">
											<i class="batch-icon batch-icon-calendar batch-icon-xl d-flex mr-3"></i>
											<div class="media-body">
												<h6 class="mt-0 mb-1 notification-heading">Email CEO new expansion proposal</h6>
												<div class="notification-text">
													Cras sit amet nibh libero
												</div>
												<span class="notification-time">In 3 days</span>
											</div>
										</a>
									</li>
									<li class="media">
										<a href="task-list.html">
											<i class="batch-icon batch-icon-calendar batch-icon-xl d-flex mr-3"></i>
											<div class="media-body">
												<h6 class="mt-0 mb-1 notification-heading">Team building exercise</h6>
												<div class="notification-text">
													Cras sit amet nibh libero
												</div>
												<span class="notification-time">In one week</span>
											</div>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle no-waves-effect" id="navbar-notification-misc" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
									<i class="batch-icon batch-icon-bell"></i>
									<span class="notification-number">4</span>
								</a>
								<ul class="dropdown-menu dropdown-menu-right dropdown-menu-md" aria-labelledby="navbar-notification-misc">
									<li class="media">
										<a href="task-list.html">
											<i class="batch-icon batch-icon-bell batch-icon-xl d-flex mr-3"></i>
											<div class="media-body">
												<h6 class="mt-0 mb-1 notification-heading">General Notification</h6>
												<div class="notification-text">
													Cras sit amet nibh libero
												</div>
												<span class="notification-time">Just now</span>
											</div>
										</a>
									</li>
									<li class="media">
										<a href="task-list.html">
											<i class="batch-icon batch-icon-cloud-download batch-icon-xl d-flex mr-3"></i>
											<div class="media-body">
												<h6 class="mt-0 mb-1 notification-heading">Your Download Is Ready</h6>
												<div class="notification-text">
													Nibh amet cras sit libero
												</div>
												<span class="notification-time">5 minutes ago</span>
											</div>
										</a>
									</li>
									<li class="media">
										<a href="task-list.html">
											<i class="batch-icon batch-icon-tag-alt-2 batch-icon-xl d-flex mr-3"></i>
											<div class="media-body">
												<h6 class="mt-0 mb-1 notification-heading">New Order</h6>
												<div class="notification-text">
													Cras sit amet nibh libero
												</div>
												<span class="notification-time">Yesterday</span>
											</div>
										</a>
									</li>
									<li class="media">
										<a href="task-list.html">
											<i class="batch-icon batch-icon-pull batch-icon-xl d-flex mr-3"></i>
											<div class="media-body">
												<h6 class="mt-0 mb-1 notification-heading">Pull Request</h6>
												<div class="notification-text">
													Cras sit amet nibh libero
												</div>
												<span class="notification-time">3 day ago</span>
											</div>
										</a>
									</li>
								</ul>
							</li>
						</ul>
						<ul class="navbar-nav ml-5 navbar-profile">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" id="navbar-dropdown-navbar-profile" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
									<div class="profile-name">
										Camilo Rivera
									</div>
									<div class="profile-picture bg-gradient bg-primary has-message float-right">
										<img src="assets/img/camilo-perf.jpg" width="44" height="44">
									</div>
								</a>
								<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-dropdown-navbar-profile">
									<li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
									<li>
										<a class="dropdown-item" href="mail-inbox.html">
											Messages
											<span class="badge badge-danger badge-pill float-right">3</span>
										</a>
									</li>
									<li><a class="dropdown-item" href="profiles-member-profile.html">Configuraciones</a></li>
									<li><a class="dropdown-item" href="sisu-lock-screen.html">Salir</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
				<main class="main-content p-5" role="main">
					<div class="row mb-4">
						<div class="col-md-12">
							<div class="card">
								<img class="card-img" src="assets/img/bg-image-1-horizontal.jpg" alt="Feature Image">
								<div class="card-user-profile">
									<div class="profile-page-left">
										<div class="row">
											<div class="col-lg-12 mb-4">
												<div class="profile-picture profile-picture-lg bg-gradient bg-primary mb-4">
													<img src="assets/img/camilo-perf.jpg" width="144" height="144">
												</div>
												<a class="btn btn-primary btn-block btn-gradient" href="#">
													<i class="batch-icon batch-icon-user-alt-add-2"></i>
													Seguir
												</a>
											</div>
											<div class="col-sm-6">
												<h5 class="my-0">Seguidores</h5>
												<div class="h3 my-0">
													<a href="#">682</a>
												</div>
											</div>
											<div class="col-sm-6">
												<h5 class="my-0">Siguiendo</h5>
												<div class="h3 my-0">
													<a href="#">341</a>
												</div>
											</div>
										</div>
										<hr />
										<h5>
											<i class="batch-icon batch-icon-users"></i>
											Amigos
										</h5>
										<div class="profile-page-block-outer clearfix">
											<div class="profile-page-block">
												<div class="profile-picture bg-gradient bg-primary">
													<img src="assets/img/profile-pic-2.jpg" width="44" height="44">
												</div>
											</div>
											<div class="profile-page-block">
												<div class="profile-picture bg-gradient bg-primary">
													<img src="assets/img/profile-pic-3.jpg" width="44" height="44">
												</div>
											</div>
											<div class="profile-page-block">
												<div class="profile-picture bg-gradient bg-primary">
													<img src="assets/img/profile-pic-4.jpg" width="44" height="44">
												</div>
											</div>
											<div class="profile-page-block">
												<div class="profile-picture bg-gradient bg-primary">
													<img src="assets/img/profile-pic-5.jpg" width="44" height="44">
												</div>
											</div>
											<div class="profile-page-block">
												<div class="profile-picture bg-gradient bg-secondary">
													<img src="assets/img/profile-pic-6.jpg" width="44" height="44">
												</div>
											</div>
											<div class="profile-page-block">
												<div class="profile-picture bg-gradient bg-primary">
													<img src="assets/img/profile-pic-2.jpg" width="44" height="44">
												</div>
											</div>
											<div class="profile-page-block">
												<div class="profile-picture bg-gradient bg-primary">
													<img src="assets/img/profile-pic-3.jpg" width="44" height="44">
												</div>
											</div>
											<div class="profile-page-block">
												<div class="profile-picture bg-gradient bg-secondary">
													<img src="assets/img/profile-pic-4.jpg" width="44" height="44">
												</div>
											</div>
											<div class="profile-page-block">
												<div class="profile-picture bg-gradient bg-primary">
													<img src="assets/img/profile-pic-5.jpg" width="44" height="44">
												</div>
											</div>
											<div class="profile-page-block">
												<div class="profile-picture bg-gradient bg-secondary">
													<img src="assets/img/profile-pic-6.jpg" width="44" height="44">
												</div>
											</div>
											<div class="profile-page-block">
												<div class="profile-picture bg-gradient bg-secondary">
													<img src="assets/img/profile-pic-2.jpg" width="44" height="44">
												</div>
											</div>
											<div class="profile-page-block">
												<div class="profile-picture bg-gradient bg-primary">
													<img src="assets/img/profile-pic-3.jpg" width="44" height="44">
												</div>
											</div>
											<a class="float-right mt-2" href="#">mas</a>
										</div>
										<hr />
										<h5>
											<i class="batch-icon batch-icon-image"></i>
											Album
										</h5>
										<a href="#">
											<img src="assets/img/album-image.jpg" class="img-fluid img-thumbnail" />
										</a>
										<a class="float-right mt-2" href="#">mas</a>
									</div>
									<div class="profile-page-center">
										<h1 class="card-user-profile-name">Camilo Rivera</h1>
										<div class="comment-block">
											<div class="form-group">
												<textarea class="form-control" id="comment-textarea" rows="2" placeholder="Escribe algo que quieras comentar aquí..."></textarea>
												<div class="media-feed-control clearfix">
													<button type="button" class="btn btn-secondary btn-sm comment-reply float-right">publicar</button>
													<a href="#" data-toggle="tooltip" title="Add Picture">
														<i class="batch-icon batch-icon-image"></i>
													</a>
												</div>
											</div>
										</div>
										<hr />
										<ul class="list-unstyled mt-5">
											<li class="media">
												<div class="profile-picture bg-gradient bg-primary mb-4">
													<img src="assets/img/camilo-perf.jpg" width="44" height="44">
												</div>
												<div class="media-body">
													<div class="media-title mt-0 mb-1">
														<a href="#">Camilo Rivera</a> <small> 1 hour ago</small>
													</div>
													Empezamos trabajando con paso firme para alcanzar nuestras metas, y tú? haces lo mismo?
													<div class="media-feed-control">
														<a href="#">
															<i class="batch-icon batch-icon-heart-full"></i>
															Me Gusta (4)
														</a>
														<a href="#">
															<i class="batch-icon batch-icon-speech-bubble-left-tip"></i>
															Comentar (2)
														</a>
														<a href="#">
															<i class="batch-icon batch-icon-flag"></i>
															Reportar
														</a>
													</div>
													<div class="media-body-reply-block">
														<ul class="list-unstyled">
															<li class="media mt-4">
																<div class="profile-picture bg-gradient bg-primary mb-4">
																	<img src="assets/img/profile-pic-2.jpg" width="44" height="44">
																</div>
																<div class="media-body">
																	<div class="media-title mt-0 mb-1">
																		<a href="#">Samantha Carter</a> <small>Hace 45 mins</small>
																	</div>
																	Esa es la actitud compañero, vamos con paso lento, pero firme.
																	<div class="media-feed-control">
																		<a href="#">
																			<i class="batch-icon batch-icon-heart-full"></i>
																			Me gusta
																		</a>
																		<a href="#">
																			<i class="batch-icon batch-icon-speech-bubble-left-tip"></i>
																			Comentar
																		</a>
																		<a href="#">
																			<i class="batch-icon batch-icon-flag"></i>
																			Reportar
																		</a>
																	</div>
																</div>
															</li>
															<li class="media mt-4">
																<div class="profile-picture bg-gradient bg-primary mb-4">
																	<img src="assets/img/profile-pic-3.jpg" width="44" height="44">
																</div>
																<div class="media-body">
																	<div class="media-title mt-0 mb-1">
																		<a href="#">Teal'c Jaffa</a> <small>Hace 7 mins</small>
																	</div>
																	Lo mejor de todo es la actitud con la que trabajemos y como vamos, vamos super bien, arriba! ail aidra!
																	<div class="media-feed-control">
																		<a href="#">
																			<i class="batch-icon batch-icon-heart-full"></i>
																			Me gusta
																		</a>
																		<a href="#">
																			<i class="batch-icon batch-icon-speech-bubble-left-tip"></i>
																			Comentar
																		</a>
																		<a href="#">
																			<i class="batch-icon batch-icon-flag"></i>
																			Reportar
																		</a>
																	</div>
																</div>
															</li>
															<li class="comment-reply-block mt-4">
																<div class="form-group clearfix">
																	<textarea class="form-control comment-reply-textarea" rows="2" placeholder="Enter your comment here..."></textarea>
																	<button type="button" class="btn btn-secondary btn-sm comment-reply float-right">Responder</button>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</li>
											<li class="media">
												<div class="profile-picture bg-gradient bg-primary mb-4">
													<img src="assets/img/camilo-perf.jpg" width="44" height="44">
												</div>
												<div class="media-body">
													<div class="media-title mt-0 mb-1">
														<a href="#">Camilo Rivera</a> <small> Hace 1 hora</small>
													</div>
													<a href="#">
														<img src="assets/img/album-image.jpg" class="img-fluid img-thumbnail">
													</a>
													<div class="media-feed-control">
														<a href="#">
															<i class="batch-icon batch-icon-heart-full"></i>
															Like (57)
														</a>
														<a href="#">
															<i class="batch-icon batch-icon-speech-bubble-left-tip"></i>
															Comment
														</a>
														<a href="#">
															<i class="batch-icon batch-icon-flag"></i>
															Report
														</a>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col-md-12">
							<footer>
								Powered by - <a href="http://base5builder.com/?click_source=quillpro_footer_link" target="_blank" style="font-weight:300;color:#ffffff;background:#1d1d1d;padding:0 3px;">Base<span style="color:#ffa733;font-weight:bold">5</span>Builder</a>
							</footer>
						</div>
					</div>
				</main>
			</div>
		</div>
	</div>

	<!-- SCRIPTS - REQUIRED START -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- Bootstrap core JavaScript -->
	<!-- JQuery -->
	<script type="text/javascript" src="assets/js/jquery/jquery-3.1.1.min.js"></script>
	<!-- Popper.js - Bootstrap tooltips -->
	<script type="text/javascript" src="assets/js/bootstrap/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="assets/js/bootstrap/mdb.min.js"></script>
	<!-- Velocity -->
	<script type="text/javascript" src="assets/plugins/velocity/velocity.min.js"></script>
	<script type="text/javascript" src="assets/plugins/velocity/velocity.ui.min.js"></script>
	<!-- Custom Scrollbar -->
	<script type="text/javascript" src="assets/plugins/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- jQuery Visible -->
	<script type="text/javascript" src="assets/plugins/jquery_visible/jquery.visible.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script type="text/javascript" src="assets/js/misc/ie10-viewport-bug-workaround.js"></script>

	<!-- SCRIPTS - REQUIRED END -->

	<!-- SCRIPTS - OPTIONAL START -->
	<!-- Image Placeholder -->
	<script type="text/javascript" src="assets/js/misc/holder.min.js"></script>
	<!-- SCRIPTS - OPTIONAL END -->

	<!-- QuillPro Scripts -->
	<script type="text/javascript" src="assets/js/scripts.js"></script>
	<!-- Fullstory Session - Start -->
	<script>
	window['_fs_debug'] = false;
	window['_fs_host'] = 'fullstory.com';
	window['_fs_org'] = '626JC';
	window['_fs_namespace'] = 'FS';
	(function(m,n,e,t,l,o,g,y){
	    if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');} return;}
	    g=m[e]=function(a,b,s){g.q?g.q.push([a,b,s]):g._api(a,b,s);};g.q=[];
	    o=n.createElement(t);o.async=1;o.src='https://'+_fs_host+'/s/fs.js';
	    y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
	    g.identify=function(i,v,s){g(l,{uid:i},s);if(v)g(l,v,s)};g.setUserVars=function(v,s){g(l,v,s)};g.event=function(i,v,s){g('event',{n:i,p:v},s)};
	    g.shutdown=function(){g("rec",!1)};g.restart=function(){g("rec",!0)};
	    g.consent=function(a){g("consent",!arguments.length||a)};
	    g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
	    g.clearUserCookie=function(){};
	})(window,document,window['_fs_namespace'],'script','user');
	</script>
	<!-- Fullstory Session - End -->
</body>

<!-- Mirrored from base5builder.com/livedemo/quillpro/v1.7/html/profiles-member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 22:05:18 GMT -->
</html>
