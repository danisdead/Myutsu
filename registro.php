<?php require('header.php'); ?>

<body style="background-color:
 #c4e5f6">
    <div id="container" style="background-image:url(img/registro_fondo.png)">
     <?php require('menu.php'); ?>
     <div id="menu">
     </div>
     <div id="video">
      <iframe width="356" height="220" src="//www.youtube.com/embed/YvU7HkLyw6I" frameborder="0" allowfullscreen></iframe>
     </div>
     <div id="registro">
      <form action="upload.php" method="post">
       <div style="width:356px;height:21px;margin-left:677px;margin-top:22px">
        <input id="input" type="text" name="nombre" placeholder="NOMBRE:">
       </div>
       <div style="width:356px;height:21px;margin-left:677px;margin-top:10px">
        <input id="input" type="text" name="correo" width="356px" placeholder="MAIL:">
       </div>
       <div style="width:356px;height:21px;margin-left:677px;margin-top:10px">
        <input id="input" type="text" name="telefono" width="356px" placeholder="TELÉFONO:">
       </div>
       <div style="width:356px;height:21px;margin-left:677px;margin-top:10px">
        <select id="input" name="ciudad">
                    	<option disabled selected>SELECCIONA TU CIUDAD:</option>
                        <option>Acapulco</option>
                        <option>Aguascalientes</option>
                        <option>Apodaca</option>
                        <option>Buenavista</option>
                        <option>Campeche</option>
                        <option>Cancún</option>
                        <option>Celaya</option>
                        <option>Chalco</option>
                        <option>Chetumal</option>
                        <option>Chicoloapan</option>
                        <option>Chihuahua</option>
                        <option>Chilpancingo</option>
                        <option>Chimalhuacán</option>
                        <option>Ciudad Acuña</option>
                        <option>Ciudad de México</option>
                        <option>Ciudad del Carmen</option>
                        <option>Ciudad López Mateos</option>
                        <option>Ciudad Madero</option>
                        <option>Ciudad Obregón</option>
                        <option>Ciudad Valles</option>
                        <option>Ciudad Victoria</option>
                        <option>Coatzacoalcos</option>
                        <option>Colima</option>
                        <option>Córdoba</option>
                        <option>Cuauhtémoc</option>
                        <option>Cuautitlán</option>
                        <option>Cuautitlán Izcalli</option>
                        <option>Cuautla</option>
                        <option>Cuernavaca</option>
                        <option>Culiacán</option>
                        <option>Delicias</option>
                        <option>Durango</option>
                        <option>Ecatepec</option>
                        <option>Ensenada</option>
                        <option>Fresnillo</option>
                        <option>General Escobedo</option>
                        <option>Gómez Palacio</option>
                        <option>Guadalajara</option>
                        <option>Guadalupe</option>
                        <option>Guaymas</option>
                        <option>Hermosillo</option>
                        <option>Hidalgo del Parral</option>
                        <option>Iguala</option>
                        <option>Irapuato</option>
                        <option>Ixtapaluca</option>
                        <option>Jiutepec</option>
                        <option>Juárez</option>
                        <option>La Paz</option>
                        <option>León</option>
                        <option>Los Mochis</option>
                        <option>Manzanillo</option>
                        <option>Matamoros</option>
                        <option>Mazatlán</option>
                        <option>Mérida</option>
                        <option>Mexicali</option>
                        <option>Minatitlán</option>
                        <option>Miramar</option>
                        <option>Monclova</option>
                        <option>Monterrey</option>
                        <option>Morelia</option>
                        <option>Naucalpan</option>
                        <option>Naucalpan de Juárez</option>
                        <option>Navojoa</option>
                        <option>Nezahualcóyotl</option>
                        <option>Nogales</option>
                        <option>Nuevo Laredo</option>
                        <option>Oaxaca</option>
                        <option>Ojo de Agua</option>
                        <option>Orizaba</option>
                        <option>Pachuca</option>
                        <option>Piedras Negras</option>
                        <option>Playa del Carmen</option>
                        <option>Poza Rica de Hidalgo</option>
                        <option>Puebla</option>
                        <option>Puerto Vallarta</option>
                        <option>Querétaro</option>
                        <option>Reynosa</option>
                        <option>Salamanca</option>
                        <option>Saltillo</option>
                        <option>San Cristóbal de las Casas</option>
                        <option>San Francisco Coacalco</option>
                        <option>San Juan de Río</option>
                        <option>San Luis Potosí</option>
                        <option>San Luis Río Colorado</option>
                        <option>San Nicolás de la Garza</option>
                        <option>San Pablo de las Salinas</option>
                        <option>San Pedro Garza García</option>
                        <option>Santa Catarina</option>
                        <option>Soledad de Graciano Sánchez</option>
                        <option>Tampico</option>
                        <option>Tapachula</option>
                        <option>Tehuacán</option>
                        <option>Tepic</option>
                        <option>Texcoco de Mora</option>
                        <option>Tijuana</option>
                        <option>Tlalnepantla</option>
                        <option>Tlaquepaque</option>
                        <option>Toluca</option>
                        <option>Tonalá</option>
                        <option>Torreón</option>
                        <option>Tuxtla</option>
                        <option>Uruapan</option>
                        <option>Veracruz</option>
                        <option>Villa de Álvarez</option>
                        <option>Villa Nicolás Romero</option>
                        <option>Villahermosa</option>
                        <option>Xalapa</option>
                        <option>Xico</option>
                        <option>Zacatecas</option>
                        <option>Zamora</option>
                        <option>Zapopan</option>
                    </select>
       </div>
       <div style="width:356px;height:21px;margin-left:677px;margin-top:10px">
        <input id="input" type="text" name="lote" width="356px" placeholder="NO. DE LOTE:">
       </div>
       <div style="width:356px;height:35px;margin-left:677px;margin-top:10px">
        <input type="image" name="action" src="img/btn_registrar.png">
       </div>
      </form>
     </div>
     <div id="footerv">
      <div id="youtube">
       <a href="http://www.youtube.com/channel/UC3kP5e0DGxfXcUxG62idWeQ"target="_blank">
        <img id="yt_btn" src="img/yt_btn.png"/>
       </a>
      </div>
      <div id="twitter">
       <a href="https://twitter.com/Ades_Mex"target="_blank">
        <img id="twtr_btn" src="img/twitter_btn.png"/>
       </a>
      </div>
      <div id="facebook">
       <a href="https://www.facebook.com/AdeSMexico" target="_blank">
       <img id="fb_btn" src="img/fb_btn.png"/>
       </a>
       </div>
      </div>
    </div>
</body>
</html>
