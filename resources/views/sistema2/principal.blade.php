<HTML>
<heAd>

</head>
<BODY>
<Table border= 1>
<tr><td colspan = 2><div id = 'logo'>SISTEMA DE PRODUCCION
<br>
@yield('bienvenida')</td></tr>
<tr><td><div id = 'menu'>
Empleados
<br>
Productos
<BR>
Sucursales
<br>
----->Alta
<br>
----->Consulta
</div>
</td><td><div id = 'contenido'>
@yield('contenido')
</div>
</td></tr>
<tr><td colspan = 2><div id = 'pie'>
Aqui va el pie del sistema
</div></td></tr>
</table>
</body>
</html>
