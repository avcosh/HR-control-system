<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div>
<p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Created At</th>
	  <th scope="col">User id</th>
	  <th scope="col">Message</th>
	</tr>
  </thead>
  <tbody>
  <?php if(!empty($logs)):?>
   <?php foreach($logs as $log):?>
    <tr>
      <td><?=$log->created_at ?></td>
      <td><?=$log->user_id ?></td>
	  <td><?=$log->message ?></td>
	  <td><a href = "<?= site_url('LogController/view/'.$log->id)?>">View</a></td>
	  <td><a href = "<?= site_url('LogController/edit/'.$log->id)?>">Edit</a></td>
	  <td><a href = "<?= site_url('LogController/delete/'.$log->id)?>">Delete</a></td>
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
<a href = "<?= site_url('log/create')?>" class = "btn btn-primary">Create new log</a>
</p>
</div>

<?= $this->endSection() ?>