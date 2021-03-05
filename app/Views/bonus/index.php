<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div>
<p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Order_id</th>
	  <th scope="col">Employee_id</th>
	  <th scope="col">Cost</th>
	</tr>
  </thead>
  <tbody>
  <?php if(!empty($bonuses)):?>
   <?php foreach($bonuses as $bonus):?>
    <tr>
      <td><?=$bonus->order_id ?></td>
      <td><?=$bonus->employee_id ?></td>
	  <td><?=$bonus->cost ?></td>
	  <td><a href = "<?= site_url('BonusController/view/'.$bonus->id)?>">View</a></td>
	  <td><a href = "<?= site_url('BonusController/edit/'.$bonus->id)?>">Edit</a></td>
	  <td><a href = "<?= site_url('BonusController/delete/'.$bonus->id)?>">Delete</a></td>
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
<a href = "<?= site_url('bonus/create')?>" class = "btn btn-primary">Create new Bonus</a>
</p>
</div>

<?= $this->endSection() ?>