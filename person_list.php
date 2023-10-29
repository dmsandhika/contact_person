<?php
$ar_judul = ['NO', 'NAMA', 'NO HP', 'EMAIL', 'SOSIAL MEDIA', 'ASAL KAMPUS','AGAMA', 'ACTION'];
$obj_person = new Person();

$keyword = $_GET['keyword'];
if (!empty($keyword)) {

  $rs = $obj_person->cari($keyword);
}
  else{
  $rs = $obj_person->index();}
  ?>
<div class="content-body">

            <div class="row page-titles mx-0">
               
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Table Person</h4>
                                <?php
                                if(isset($_SESSION['AKUN'])){
                                ?>
                                <a href="index.php?hal=person_form" class="btn btn-info">Tambah</a>
                                <?php } ?>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                            <?php
                                              foreach($ar_judul as $jdl){
                                                echo '<th>'.$jdl.'</th>';
                                              }
                                            ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                          $no = 1;
                                          foreach($rs as $person){
                                              ?>  
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $person['nama'] ?></td>
                                                <td><?= $person['telp'] ?></td>
                                                <td><?= $person['email'] ?></td>
                                                <td><?= $person['sosmed'] ?></td>
                                                <td><?= $person['univ'] ?></td>
                                                <td><?= $person['agama'] ?></td>
                                                <td>
                                                <form method="POST" action="person_controller.php">
                                                  <a href="index.php?hal=person_detail&id=<?= $person['id'] ?>" 
                                                    title="Detail Person" class="btn btn-info btn-sm">
                                                    <i class="bi bi-eye"></i>
                                                  </a>
                                                  <?php
                                                  if(isset($_SESSION['AKUN'])){
                                                  ?>
                                                  <a href="index.php?hal=person_form&id=<?= $person['id'] ?>" 
                                                    title="Ubah Person" class="btn btn-success btn-sm">
                                                    <i class="bi bi-pencil"></i>
                                                  </a>
                                                  <?php
                                                  if($_SESSION['AKUN']['role'] != 'member'){
                                                  ?>
                                                  <button type="submit" title="Hapus Person" class="btn btn-danger btn-sm"
                                                    name="proses" value="hapus" onclick="return confirm('Anda Yakin diHapus?')">
                                                    <i class="bi bi-trash"></i>
                                                  </button>
                                                  <?php } ?>
                                                  <input type="hidden" name="id" value="<?= $person['id'] ?>" /> 
                                                  <?php } ?>
                                                </form>
                                                </td>
                                              </tr>
                                            <?php    
                                          $no++;
                                          }	
                                          ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <?php
                                              foreach($ar_judul as $jdl){
                                                echo '<th>'.$jdl.'</th>';
                                              }
                                            ?>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        