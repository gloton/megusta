<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<!--
  JAGL
   PAGINA DE REFERENCIA PARA AGREGAR BOTON
  http://www.debubuntu.com/como-agregar-el-boton-me-gusta-de-facebook-en-tu-sitio-web/
  EN ESTA PAGINA NO SE AGREGA ESE JAVASCRIPT Y FUNCIONA IGUAL

ADICIONALMENTE PUEDO INGRESAR PASANDO PARAMETROS Y TAMBIEN ME LOS TOMA EN LA URL QUE ENVIARA EL ME GUSTA
ES DECIR SI TENGO http://jorge.w7.cl/megusta/pagina3.php?a=34
EL BOTON ME GUSTA HARA REFERENCIA A LA PAGINA http://jorge.w7.cl/megusta/pagina3.php?a=34

-->
<head>
<title>Free Css Layout 1</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<div id="container">
<div id="header"><h1><a href="http://www.free-css.com/free-css-layouts.php">Free CSS Layouts</a></h1></div>
  <div id="wrapper">
    <div id="content">
      <p><strong>Content here.<?php echo "hola desde php"; ?></strong></p>
            <h1>Codigo para el facebook</h1>
<!--inicio codigo facebook (solo agregando este codigo funciona)-->
  <!--coloca el boton me gusta y referencia a la url actual-->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<div class="fb-like" data-send="false" data-layout="standard" data-width="450" data-show-faces="false" data-colorscheme="light" data-action="like"></div>
<!--fin codigo facebook-->
      <p>Sapibulumnibh phasellus nulla egestibulum enim pretium elit tincidunt estiquam ultrisque donectetur. Sedcondimentumsan odio hendrerit proin vitae dignis nibh ac justo id congue. Amesintesque vel curabitae volutpat donec alique nasceleifendimentesque montesque rhoncus quis eros. Vestnunc nonummy</p>
      <p>Montegeraliquam sed pede in cursus praesenec vestas rhoncus wisi at wisi. Condisseloborttis enim et ipsum mauristie id felit adipiscipit ac auctortorttitor sempor. Vitantesqueat sempus non sed et mus sit vivamus purus netus hendiment. Pretiuma diam et id tempus dolor por wisi sed volutpat facilisi.</p>
      <p>Wisiet sus adipit phasellentum elit condissim consecteturpiscing sapien vivamus et congue. Utvel tris quismod cursus liberos elit nisse curabitur tur parturpis tellenterdum. Semperligula curabitae tellentesque nulla trices vestas ristibulum id justo auctor facinia. Natisdonec consequat nibh pellus.</p>
      <p>Vestibusodio euisque id elerisus lacus tincidunt sit malesuada lacus pellus parturpiscing. Pellenterdumat maecenatoque cras a magna nibh et quis diam ames et. Laoremvolutpat ac dolor eget eget temper lacus vestibus velit lacus venean. Magnaipsum tellus morbi leo aliquat nulla convallis pellentesque.</p>

    </div>
  </div>
  <div id="navigation">
    <p><strong>Navigation Here</strong></p>
    <ul>
      <li><a href="http://www.free-css.com/">Free CSS Templates</a></li>
      <li><a href="http://www.free-css.com/free-css-layouts.php">Free CSS Layouts</a></li>
    </ul>
  </div>
  <div id="extra">
    <p><strong>More stuff here.</strong></p>
    <p>sit malesuada lacus pellus parturpiscing. Pellenterdumat maecenatoque cras a magna nibh et quis diam ames et. Laoremvolutpat ac dolor eget eget temper lacus vestibus velit lacus venean. Magnaipsum tellus morbi leo aliquat nulla convallis pellentesque.</p>
  </div>
  <div id="footer">
    <p>Footer</p>
  </div>
</div>
</body>
</html>
