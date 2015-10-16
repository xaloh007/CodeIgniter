<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="http://localhost/codeigniter/css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://localhost/codeigniter/fonts/fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

<!--MENU-->
</head>
<body>
	
</body>	
<div id="header-wrapper">
	<div id="header" >
		
		<div id="menu">
			<img src="http://localhost/codeigniter/images/fichas.jpg" width="300" height="50" alt="" />
			<ul>
				<li><a href="http://localhost/codeigniter/index.php/controlador1" accesskey="1" title="">Inicio</a></li>
				<li><a href="http://localhost/codeigniter/index.php/controlador1/login" accesskey="2" title="">Iniciar Sesion</a></li>
				<li class="active"><a href="http://localhost/codecodeigniter/index.php/controlador1/ingreso" accesskey="3" title="">Ingreso de Ficha</a></li>
				<li><a href="http://localhost/codeigniter/index.php/controlador1/consulta" accesskey="4" title="">Consultar Ficha</a></li>
				<li><a href="http://localhost/codeigniter/index.php/controlador1/modificar" accesskey="5" title="">Modificar Ficha</a></li>
				<li><a href="http://localhost/codeigniter/index.php/controlador1/preguntas" accesskey="6" title="">Ficha de Tratamiento</a></li>

			</ul>
		</div>
	</div>
</div>

<center>
<div class="wrapper">
<body>


	<h1>Ingreso Niño</h1><br/>

	
	<?= form_open('controlador1/validar', array('name'=>'mi_form','id'=>'form'));?>
	

	Nombre: <br/>
	<?= form_input('nombre',@set_value('nombre'),'class="input"');?><br/>
	
	Edad:	<br/>
	<?= form_input('edad',@set_value('rut'),'class="input"');?><br/>
	
	Fecha de nacimiento: <br/>
	<input type="date" name="nacimiento"><br/>
	
	Masculino<?= form_radio('sexo','M',false,'class="radio"');?>
	Femenino<?= form_radio('sexo','F',false,'class="radio"');?><br/>
	
	Familia: <br/>
	Padre:<?= form_checkbox('padre', 'aceptar', FALSE);?> 
	Madre:<?= form_checkbox('padre', 'aceptar', FALSE);?>
	Hermanos:<?= form_checkbox('padre', 'aceptar', FALSE);?>
	Cuantos: <?= form_dropdown('seleccione',array('1'=>'1','2'=>'2','3'=>'3','4'=>'4' ),array('1'),'class="select"');?><br/>

	RUT:	<br/>
	<?= form_input('rut',@set_value('rut'),'class="input"');?><br/> 
	
	Fecha de nacimiento: <br/>
	<input type="date" name="nacimiento"><br/>
	
	
	Escolaridad:	<br/>
	<?= form_input('escolaridad',@set_value('rut'),'class="input"');?><br/>
	Colegio:	<br/>
	<?= form_input('colegio',@set_value('rut'),'class="input"');?><br/>
	Direccion:	<br/>
	<?= form_input('direccion',@set_value('rut'),'class="input"');?><br/>
	Tratamientos previos:	<br/>
	<?= form_textarea('tratamiento',@set_value('rut'),'class="input"');?><br/>
	Notas:	<br/>
	<?= form_textarea('notas',@set_value('rut'),'class="input"');?><br/>
	
	
	<?= form_submit('submit','Enviar Datos','class="submit"');?>
	
	<?= form_close(); ?>

	<hr/>
	
	<h3>Posibles  Errores</h3>

	<?= validation_errors();?>

</body>
</div>
</center>


</html>

