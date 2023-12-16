<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Colores</title>
	<!-- Llamado a la fuente Inconsolata y PT Sans -->
	<link href="https://fonts.googleapis.com/css?family=Inconsolata|PT+Sans:400,700" rel="stylesheet"> 
    <style type="text/css">
    body
    {
    	bottom: 0px;
    	font-family: "PT Sans", Arial, sans-serif;
    	font-size: 10px;
    	left: 0px;
    	margin: 0px;
    	padding: 0px;
    	position: absolute;
    	right: 0px;
    	top: 0px;
    }
    .color_palette
    {
    	align-items: center;
    	background-color: #eee;
    	display: flex;
    	flex-direction: column;
        min-height: 100%;
    	justify-content: center;
    	width: 100%;
    }
    .color_palette div
    {
    	align-items: center;
    	display: flex;
    	flex: 1;
    	flex-direction: column;
    	height: 100%;
    	justify-content: center;
    	margin: 0px 0px 0px 0px;
    	padding: 4em 0px;
    	width: 100%;
    }
    .color_palette div p.name
    {
    	color: #fafafa;
    	font-size: 1.6em;
    	font-weight: 400;
    	letter-spacing: 0.05em;
    	margin: 0px 0px 1em 0px;
    	padding: 0px;
    	text-align: center;
    	text-transform: uppercase;
    }
    .color_palette div p.hex
    {
    	color: #fafafa;
    	font-size: 3em;
    	font-weight: 700;
    	letter-spacing: 0.05em;
    	margin: 0px;
    	padding: 0px;
    	text-align: center;
    	text-transform: uppercase;
    }
    @media screen and (min-width:700px){
        .color_palette
        {
            flex-direction: row;
            height: 100%;
        }
        .color_palette div
        {
            padding: 0px;
        }
    }
    </style>
</head>
<body>

<div class="color_palette">
    <div style="background-color: #1a032b;">
    	<p class="name">VIOLETA 1</p>
    	<p class="hex">#1a032b</p>
    </div>
    <div style="background-color: #5e397a;">
    	<p class="name">VIOLETA 2</p>
    	<p class="hex">#5e397a</p>
    </div>
    <div style="background-color: #9058bb;">
    	<p class="name">VIOLETA 3</p>
    	<p class="hex">#9058bb</p>
    </div>
    <div style="background-color: #ff8b1e;">
    	<p class="name">NARANJA 1</p>
    	<p class="hex">#ff8b1e</p>
    </div>
    <div style="background-color: #E97100;">
    	<p class="name">NARANJA 2</p>
    	<p class="hex">#e97100</p>
    </div>
</div>

</body>
</html>