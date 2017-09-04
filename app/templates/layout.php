<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
 <html>
     <head>
         <title>Información Alimentos</title>
         <meta http-equiv="Content-Type" content="text/html; charset=utf8">
                  <link rel="stylesheet" type="text/css" href="<?php echo 'css/'.Config::$mvc_vis_css ?>" />
     </head>
     <body>
         <div id="cabecera">
             <h1>INFORMACION DE ALIMENTOS</h1>
         </div>
         <div id="menu">
             <hr/>
             <a href="index.php?ctl=inicio">inicio</a> |
             <a href="index.php?ctl=listar">ver alimentos</a> |
             <a href="index.php?ctl=insertar">insertar alimento</a> |
             <a href="index.php?ctl=buscar">buscar por nombre</a> |
             <a href="index.php?ctl=buscarAlimentosPorEnergia">buscar por energia</a> |
             <a href="index.php?ctl=buscarAlimentosCombinada">busqueda combinada</a>
             <hr/>
         </div>
		 <br><br>
         <div id="contenido">
             <?php echo $contenido ?>
         </div>
         <div id="pie">
             <hr/>
             <div align="center">- Esta sencilla aplicación web ha sido diseñada utilizando los conceptos relacionados a la implementación del patrón de diseño conocido como MVC -</div>
         </div>
     </body>
 </html>
