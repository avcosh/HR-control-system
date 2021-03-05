<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $meta_title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link href="<?=base_url('bootstrap/css/bootstrap.css')?>" rel="stylesheet">
   
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url()?>">HR Control System | </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?= base_url()?>">Home</a>
        <a class="nav-link" href="<?= base_url('employee')?>">Employees</a>
        <a class="nav-link" href="<?= base_url('assignment')?>">Assignments</a>
        <a class="nav-link" href="<?= base_url('bonus')?>">Bonuses</a>
        <a class="nav-link" href="<?= base_url('contract')?>">Contracts</a>
		<a class="nav-link" href="<?= base_url('dismiss')?>">Dismisses</a>
        <a class="nav-link" href="<?= base_url('interview')?>">Interviews</a>
		<a class="nav-link" href="<?= base_url('order')?>">Orders</a>
        <a class="nav-link" href="<?= base_url('position')?>">Positions</a>
		<a class="nav-link" href="<?= base_url('recruit')?>">Recruits</a>
		<a class="nav-link" href="<?= base_url('vacation')?>">Vacantions</a>
        <a class="nav-link" href="<?= base_url('log')?>">logs</a>
      </div>
    </div>
  </div>
</nav>
<hr>
<?= $this->renderSection('content') ?>
<footer>
<hr>
<p>HR Control System</p>
</footer>		
<script src = "<?=base_url('bootstrap/js/bootstrap.js')?>">
</body>
</html>