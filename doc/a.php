<?php
	$title = "Exsa - soluciones";
	$descripcion = "";
	$keywords = "Exsa, soluciones";
	if (!isset($_GET['sec'])){
		$title = "Exsa - soluciones exactas para fragmentación de roca, voladuras, minería subterránea y de tajo abierto";
		$descripcion = "Conoce más de Exsa, nuestros productos y servicios orientados a las necesidades de nuestros clientes";
		$keywords = "Exsa, soluciones exactas, fragmentación de roca, industria minera, minería, infraestructura, servicios, productos, responsabilidad social, La Tecnología Quantex, presencia regional, asistencia técnica";
	}else{
		switch ($_GET['sec']) {
		    case "nosotros":
		        $title = "Exsa soluciones exactas – nosotros";
				$descripcion = "Exsa es la empresa peruana líder en la oferta de soluciones exactas en fragmentación de roca, para las industrias de minería e infraestructura";
				$keywords = "Exsa, Soluciones exactas, fragmentación de roca, industria minera, minería, infraestructura, voladuras, tajo abierto, minería subterránea, foco en el cliente, gestión proactiva, manejo de riesgos externos, excelencia, colaboradores";
		        break;
		    case "peru":
		        $title = "Exsa, soluciones para fragmentación – Presencia Regional";
				$descripcion = "Exsa está presente a nivel regional en Perú, Chile, Colombia y Panamá";
				$keywords = "Exsa, Soluciones exactas, fragmentación de roca, industria minera, minería, infraestructura, voladuras, tajo abierto, minería subterránea, foco en el cliente, Exsa Perú, Exsa Colombia, Exsa Chile, Exsa Panamá, INBLAST, Lurín, Trujillo, Tacna, Arequipa, Cusco. Silos de emulsión, tanques cisternas, camiones fábricas, grúas, mini cargadores, módulos UBT, sistema integrado de gestión, gestión de calidad, gestión ambiental, gestión de seguridad";
		        break;
		    case "servicio-integral-de-voladura-exsa-sive":
		        $title = "Exsa Soluciones Exactas – Servicio Integral de Voladura";
				$descripcion = "Exsa es la empresa peruana líder en la oferta de soluciones exactas en fragmentación de roca, para las industrias de minería e infraestructura";
				$keywords = "SIVE, servicio integral de voladura, tajo abierto, procesos de voladura, accidente, uso de explosivos, explosivos, emulsiones, nitrato de amonio, calibración de camiones fábrica, transporte de explosivos, estaqueado, taladro, profundidad, accesorios de voladura, primado y carguío de taladros, áreas de influencia, volquetes, minicargadores";
		        break;
		    case "productos":
		        $title = "Exsa Soluciones Exactas – Dinamitas, emulsiones encartuchadas, emulsiones a granel, accesorios de voladura";
				$descripcion = "Exsa ofrece una gama de productos enfocados en sus clientes";
				$keywords = "Productos, dinamitas, booster, emulsiones, accesorios, anfo examon, Exsablock, Semexsa, Exadit, Gelatina especial, emulex, exagel, semexsa, plastex, slurrex, nitrato de amonio, quantex, mecha de seguridad, mecha rápida, detonador, ensamblado, booster pentolita, cordon detonante, plastex - e";
		        break;
		    case "programa-ctve-2016-lima":
		        $title = "Exsa – Centro tecnológico de voladuras Exsa (CTVE)";
				$descripcion = "Se dictan capacitaciones respecto al correcto y seguro uso y manipuleo de nuestros productos y criterios de selección de explosivos, con el fin evitar posibles accidentes";
				$keywords = "CTVE, 2016, programa 2016, cursos, mejorar operaciones, seguridad, evitar accidentes, accidente, cero accidentes, explosivos, cursos gratuitos, sector minería";
		        break;
		    case "noticias":
		        $title = "Exsa – principales noticias de Exsa en el sector minero";
				$descripcion = "Exsa participa activamente de los principales eventos del sector, lee nuestras principales noticias";
				$keywords = "Exsa, responsabilidad social, RSE, Quantex, Karl Maslo, cursos gratuitos, CTVE, sector minero, La Tecnología Quantex, noticias";
		        break;
		}
	}
?>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="author" content="http://mediaimpact.pe/  -  http://scdsistemas.com/es/">
	<meta name="description" content="<?php echo $descripcion; ?>" id="metaDesc">
	<meta content="<?php echo $keywords; ?>" name="keywords" />
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<!--link rel="stylesheet" href="css/bootstrap.css"-->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/fontsawesome/css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
	<!--link rel="stylesheet" type="text/css" href="imagenes/banners/engine1/style.css" /-->
	<!--script type="text/javascript" src="imagenes/banners/engine1/jquery.js"></script-->
	<link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon" id="lnkIcono"/>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400">
	<link rel="stylesheet" href="css/responsive.css">

	<script type="text/javascript" src="js/utiles/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/utiles/bootstrap.js"></script>
	<script type="text/javascript" src="js/utiles/collapse.js"></script>
	<script type="text/javascript" src="js/utiles/menuresponsive.js"></script>
	
	<script type="text/javascript" src="js/F.js"></script>
	<script type="text/javascript" src="js/app/control/Helper.js"></script>
	<script type="text/javascript" src="js/proceso/proceso.js"></script>
	<script type="text/javascript" src="js/secciones/Sidebar.js"></script>
	<script type="text/javascript" src="js/secciones/Menu.js"></script>
	<script type="text/javascript" src="js/secciones/MapadeSitio.js"></script>
	<script type="text/javascript" src="js/secciones/Contenido.js"></script>

	<script type="text/javascript" src="js/AppIni.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  	var js, fjs = d.getElementsByTagName(s)[0];
	  	if (d.getElementById(id)) return;
	  		js = d.createElement(s); js.id = id;
	  		js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=737326289633298";
	  		fjs.parentNode.insertBefore(js, fjs);
		}
		(document, 'script', 'facebook-jssdk'));
	</script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69938576-1', 'auto');
  ga('send', 'pageview');

</script>
	<title id="titleApp"><?php echo $title; ?></title>
</head>