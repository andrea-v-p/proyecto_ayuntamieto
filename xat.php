<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/xat_style.css">
	<title>Xat</title>
</head>
<body>
	<?php
		session_start();

		$nick = $_SESSION["nick"];
		echo ('<p id="nick" name="'.$nick.'" hidden="true"></p>');
	?>
	<script type="text/javascript">
		function nuevoMensaje(){
			var nick = $('#nick').attr('name');
			var inicial = nick.slice(0, 1);

			var mensaje = $('#texto').val();

			var tiempo = new Date();
			var hora = tiempo.getHours();
			var minuto = tiempo.getMinutes();

			var tr = "<tr><td><img src='http://via.placeholder.com/50x50?text="+inicial+"' />"+nick+"</td><td>"+mensaje+"</td><td>"+hora+":"+minuto+"</td></tr>";

			$('#xat tr:last').after(tr);
		}

	</script>
<div class="container">


	<div class="row">
                 <div class="col-sm-4">
                  <a href="?msg=15" class="chatperson">
                    <span class="chatimg">
                        <img src="http://via.placeholder.com/50x50?text=A" alt="" />
                    </span>

                    <div class="namechat">
                        <div class="pname">A</div> 
                    </div>
                </a>

                <a href="?msg=16" class="chatperson">
                    <span class="chatimg">
                        <img src="http://via.placeholder.com/50x50?text=B" alt="" />
                    </span>
                    <div class="namechat">
                        <div class="pname">B</div>
                    </div>
                </a>

                <a href="?msg=17" class="chatperson">
                    <span class="chatimg">
                        <img src="http://via.placeholder.com/50x50?text=C" alt="" />
                    </span>
                    <div class="namechat">
                        <div class="pname">C</div> 
                    </div>
                </a>

                 </div>
                 <div class="col-sm-8">
                  <div class="chatbody">

                  <table class="table" id="xat">
                    <tr>
                      <td><img src="http://via.placeholder.com/50x50?text=C" />Ajuntament de Cornella</td>
                      <td>Hola, bienvenido al chat del Ajuntament de Cornella</td>
                      <td>--:--</td>
                    </tr>

                  </table>

                  </div>

                  <div class="row">
                    <div class="col-xs-9">
                      <input type="text" placeholder="Escribir mensaje..." class="form-control" id="texto"/>
                    </div>
                    <div class="col-xs-3">
                      <button class="btn btn-info btn-block" onclick="nuevoMensaje()">Send</button>
                    </div>
                  </div>

                 </div>
             </div>
</div>
</body>
</html>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>