<?php
$ar_judul = ['NO', 'NAMA'];
$obj_agama = new Agama();
$rs = $obj_agama->index();
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
                                <h4 class="card-title">Data Table Agama</h4>
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
                                          foreach($rs as $agama){
                                              ?>  
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $agama['nama'] ?></td>
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