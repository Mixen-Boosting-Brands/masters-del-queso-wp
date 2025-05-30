<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo("charset"); ?>">
		<title><?php
  wp_title("");
  if (wp_title("", false)) {
      echo " - ";
  }
  bloginfo("name");
  ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url(
      get_template_directory_uri()
  ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url(
      get_template_directory_uri()
  ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo(
      "name"
  ); ?>" href="<?php bloginfo("rss2_url"); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo("description"); ?>">

		<link
            rel="icon"
            type="image/png"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/favicon-96x96.png"
            sizes="96x96"
        />
        <link rel="icon" type="image/svg+xml" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/favicon.svg" />
        <link rel="shortcut icon" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/favicon.ico" />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/apple-touch-icon.png"
        />
        <meta name="apple-mobile-web-app-title" content="Dinonuggets" />
        <link rel="manifest" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/site.webmanifest" />

        <link rel="stylesheet" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/css/styles.css" />

		<?php wp_head(); ?>
	</head>
	<body>
        <div id="backdrop"></div>
        <div class="menu">
            <a id="cerrar-menu" href="javascript:void(0)">
                <i class="fas fa-times"></i>
            </a>
            <div class="menu-contenido">
                <a class="anchor" id="btn-logo" href="<?php echo esc_url(
                    home_url()
                ); ?>">
                    <img
                        class="logo img-fluid"
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/logo@2x.png"
                        alt=""
                    />
                </a>
                <nav>
                    <ul id="navmenu" class="list-unstyled mb-0">
                        <li>
                            <a class="anchor" id="btn-nav-1" href="<?php echo esc_url(
                                home_url()
                            ); ?>"
                                >Inicio</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-2" href="<?php echo esc_url(
                                get_permalink(8)
                            ); ?>"
                                >Productos</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-3" href="<?php echo esc_url(
                                get_permalink(6)
                            ); ?>"
                                >Beneficios</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-4" href="<?php echo esc_url(
                                home_url()
                            ); ?>/recetas"
                                >Recetas</a
                            >
                        </li>
                    </ul>
                </nav>
                <a
                    href="#contacto"
                    class="anchor btn btn-primary rounded-pill"
                    id="btn-contacto"
                    >Contacto</a
                >
            </div>
        </div>

        <header id="navbar" <?php if (
            !is_home()
        ): ?>class="navbar-interna"<?php endif; ?>>
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-3 my-auto">
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/logo@2x.png"
                                alt=""
                                class="logo img-fluid"
                                id="logo-navbar"
                            />
                        </a>
                    </div>
                    <div class="col-6 col-lg-9 my-auto text-end">
                        <nav class="d-none d-lg-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="active" href="<?php echo esc_url(
                                        home_url()
                                    ); ?>">
                                        Inicio
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url(
                                        get_permalink(8)
                                    ); ?>"> Productos </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url(
                                        get_permalink(6)
                                    ); ?>"> Beneficios </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url(
                                        home_url()
                                    ); ?>/recetas"> Recetas </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#contacto"> Contacto </a>
                                </li>
                            </ul>
                        </nav>
                        <a
                            id="mburger"
                            class="d-lg-none"
                            href="javascript:void(0)"
                        >
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
