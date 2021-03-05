<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div>
<p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
	  <th scope="col">Name</th>
	</tr>
  </thead>
  <tbody>
  <?php if(!empty($positions)):?>
   <?php foreach($positions as $position):?>
    <tr>
      <td><?=$position->id ?></td>
      <td><?=$position->name ?></td>
	
	  <td><a href = "<?= site_url('PositionController/view/'.$position->id)?>">View</a></td>
	  <td><a href = "<?= site_url('PositionController/edit/'.$position->id)?>">Edit</a></td>
	  <td><a href = "<?= site_url('PositionController/delete/'.$position->id)?>">Delete</a></td>
    </tr>
   	<?php endforeach ?>
	<?php else :?>
	<tr>
	<td>Данных нет</td>
	</tr>
	<?php endif ?>
  </tbody>
</table>
</p>
</div>
<hr>
<div>
<p>   
<a href = "<?= site_url('position/create')?>" class = "btn btn-primary">Create new Position</a>
</p>
</div>

<?= $this->endSection() ?>