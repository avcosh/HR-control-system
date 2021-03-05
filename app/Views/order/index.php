<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div>
<p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Order_id</th>
	  <th scope="col">Date</th>
	</tr>
  </thead>
  <tbody>
  <?php if(!empty($orders)):?>
   <?php foreach($orders as $order):?>
    <tr>
      <td><?=$order->id ?></td>
      <td><?=$order->date ?></td>
	
	  <td><a href = "<?= site_url('OrderController/view/'.$order->id)?>">View</a></td>
	  <td><a href = "<?= site_url('OrderController/edit/'.$order->id)?>">Edit</a></td>
	  <td><a href = "<?= site_url('OrderController/delete/'.$order->id)?>">Delete</a></td>
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
<a href = "<?= site_url('order/create')?>" class = "btn btn-primary">Create new order</a>
</p>
</div>

<?= $this->endSection() ?>