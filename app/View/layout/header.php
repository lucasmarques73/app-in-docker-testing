<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<div style="margin: 25px 100px 25px 100px">
<div class="row">
	<div class="col">
		<h1>MVC5 - FrontController</h1>
	</div>
	<div class="col">
		<?php if (isset($_SESSION['logged']) && $_SESSION['logged']): ?>
			<a href="?r=logout" class="float-right">Logout</a>	
		<?php endif ?>		
	</div>
</div>
<hr>