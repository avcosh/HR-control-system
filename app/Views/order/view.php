<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section>
<hr>
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Order_id</th>
	  <th scope="col">Date</th>
	</tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row"><?=$order->id ?></th>
      <td><?=$order->date ?></td>
	 </tr>
   
  </tbody>
</table>
</div>
</section>
<hr>
<div>
<p>   
<a href = "<?= site_url('OrderController/edit/'.$order->id)?>" class = "btn btn-primary">Edit order</a> | 
<a href = "<?= site_url('OrderController/delete/'.$order->id)?>" class = "btn btn-primary">Delete order</a>
</p>
</div>


<?= $this->endSection() ?>