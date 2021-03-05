<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section>
<hr>
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
	  <th scope="col">Name</th>
	</tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row"><?=$position->id ?></th>
      <td><?=$position->name ?></td>
	 </tr>
   
  </tbody>
</table>
</div>
</section>
<hr>
<div>
<p>   
<a href = "<?= site_url('PositionController/edit/'.$position->id)?>" class = "btn btn-primary">Edit position</a> | 
<a href = "<?= site_url('PositionController/delete/'.$position->id)?>" class = "btn btn-primary">Delete position</a>
</p>
</div>


<?= $this->endSection() ?>