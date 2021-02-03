<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LAYOUT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link href="<?=base_url('bootstrap/css/bootstrap.css')?>" rel="stylesheet">
</head>
<body>
<h1>Layout</h1>
<hr>
<?= $this->renderSection('content') ?>
<hr>
<?= $this->renderSection('footer') ?>
</body>
</html>