<?php
$id = $_REQUEST['id'];
$model = new Person();
$rs = $model->getPerson($id);
?>
 <div class="content-body">

<div class="row page-titles mx-0">
    
</div>
 <div class="container-fluid">
<div class="col-md-6 col-lg-6">
    <div class="card">
    <?php
  if(!empty($rs['foto'])){
  ?>
	<img src="image/<?= $rs['foto'] ?>" class="img-fluid" />
  <?php
  }
  else{
  ?>
  <img src="image/nophoto.jpg" class="img-fluid" />
  <?php } ?>
        <div class="card-body">
          <h5 class="card-title"><?= $rs['nama'] ?></h5>
          <p class="card-text">
            Gender : <?= $rs['gender']?> <br>
            TTL : <?= $rs['tempatlahir']?> , <?=date('d-m-Y', strtotime( $rs['tgllahir']));?> <br>
            Alamat : <?= $rs['alamat']?> <br>
            Asal Univ : <?= $rs['univ']?> <br>
            Agama : <?= $rs['agama']?> <br>
            No. HP : <?= $rs['telp']?> <br>
            Email : <?= $rs['email']?> <br>
            Sosial Media : <?= $rs['sosmed']?> <br>
            Quotes : "<?= $rs['quotes']?>" <br>

          </p>
    </div>
  </div>
  
</div>
</div>

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <a href="index.php" class="btn btn-info" >Kembali</a>
        </ol>
    </div>
</div>
   </div>