<HTML>
<head>

</head>
<BODY>
	<DIV id='logo'>
	Sistema de produccion
	</DIV>
	<tr>
	    <td>
	<DIV id='menu'>
	SECCION DEL MENU
	<a href= ''>reporte productos</a>
	<a href= ''>alta estado</a>
	<a href= ''>alta productos</a>
	</DIV>
	<div id="contenido">
           @yield('contenido')
    </div>	
	<div>
	<table border= 1>
	<tr>
	    <td>
		<div class="container">
           @yield('foto')
        </div>
	    </td>
		<td>
		<div class="container">
           @yield('usuario')
        </div>
		</td>
    </tr>
	</table>
	</div>
	<DIV id=pie>
	SECCION DE PIE DE PAGINA
	</DIV>
</BODY>
</HTML>


