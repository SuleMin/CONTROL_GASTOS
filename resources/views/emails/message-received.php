<html>
<head>
<title>mensaje recibido</title>
</head>
<body>
<p>Recibiste un mensaje de: {{ $msg['nombrecontacto' ] }} </p>
<p>email: {{ $msg['mail'] }}</p>
<p> Asunto: {{ $msg['asunto' ] }}</p>
<p> Contenido: {{ $msg['contenido' ] }}</p>
</body>
</html>
