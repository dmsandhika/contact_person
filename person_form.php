<?php
$obj_agama = new Agama();
$rs = $obj_agama->index();
$ar_gender = ['L', 'P'];

$id = $_REQUEST['id'];
$obj_person = new Person();
if(!empty($id)){
    $row = $obj_person-> getPerson($id);
}
else{
    $row =[];
}
if(isset($_SESSION['AKUN'])){
?>
<div class="content-body">
<div class="container px-5 my-5">
    <h3>Form Person</h3>
    <form id="contactForm" method="POST" action="person_controller.php">
        <div class="form-floating mb-3">
            <label for="nama">Nama</label>
            <input class="form-control" id="nama" type="text" name="nama" placeholder="Nama" data-sb-validations="required" value="<?=$row['nama']?>"/>
            <div class="invalid-feedback" data-sb-feedback="nama:required">Nama is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Gender</label>
            <?php 
            foreach($ar_gender as $gender){
                $cek = ($gender == $row['gender']) ? "checked" : "" ;
                ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="<?=$gender?>" type="radio"   value="<?=$gender?>" name="gender" data-sb-validations="required" <?=$cek?>/>
                <label class="form-check-label" for="<?=$gender?>"><?=$gender?></label>
            </div>

                <?php
            }
            ?>
            <div class="invalid-feedback" data-sb-feedback="gender:required">One option is required.</div>
        </div>
        <div class="form-floating mb-3">
            <label for="asalUniv">Tempat Lahir</label>
            <input class="form-control" id="tempatLahir" type="text" name="tempatlahir" placeholder="Tempat Lahir" data-sb-validations="required" value="<?=$row['tempatlahir']?>"/>
            <div class="invalid-feedback" data-sb-feedback="tempatlahir:required">Tempat Lahir is required.</div>
        </div>
        <div class="form-floating mb-3">
            <label for="asalUniv">Tanggal Lahir</label>
            <input class="form-control" id="tglLahir" type="date" name="tgllahir" placeholder="Tanggal Lahir" data-sb-validations="required" value="<?=$row['tgllahir']?>"/>
            <div class="invalid-feedback" data-sb-feedback="tgllahir:required">Tanggal Lahir is required.</div>
        </div>
        <div class="form-floating mb-3">
            <label for="asalUniv">Alamat</label>
            <input class="form-control" id="alamat" type="text" name="alamat"  style="height: 10rem;" placeholder="Alamat" data-sb-validations="required" value="<?=$row['alamat']?>"/>
            <div class="invalid-feedback" data-sb-feedback="alamat:required">Alamat is required.</div>
        </div>
        <div class="form-floating mb-3">
            <label for="agama">Agama</label><br>
            <select class="form-select" id="agama" name="idagama" aria-label="Agama">
                <option value="">--Pilih Agama--</option>
                <?php foreach($rs as $agama) { 
                     $sel = ($agama['id'] == $row['idagama']) ? "selected" : "" ;?>
                    <option value="<?= $agama['id'] ?>" <?=$sel?>><?= $agama['nama'] ?></option>
                    <?php } ?>
            </select>
        </div>
        <div class="form-floating mb-3">
            <label for="noHp">No. Hp</label>
            <input class="form-control" id="noHp" name="telp" value="<?=$row['telp']?>" type="text" placeholder="No. Hp" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="noHp:required">No. Hp is required.</div>
        </div>
        <div class="form-floating mb-3">
            <label for="emailAddress">Email Address</label>
            <input class="form-control" id="emailAddress" type="email" name="email" value="<?=$row['email']?>" placeholder="Email Address" data-sb-validations="required,email" />
            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
        </div>
        <div class="form-floating mb-3">
            <label for="mediaSosial">Media Sosial</label>
            <input class="form-control" id="mediaSosial" type="text" name="sosmed" value="<?=$row['sosmed']?>" placeholder="Media Sosial" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="mediaSosial:required">Media Sosial is required.</div>
        </div>
        <div class="form-floating mb-3">
            <label for="asalUniv">Asal Univ</label>
            <input class="form-control" id="asalUniv" type="text" name="univ" placeholder="Asal Univ" data-sb-validations="required" value="<?=$row['univ']?>"/>
            <div class="invalid-feedback" data-sb-feedback="asalUniv:required">Asal Univ is required.</div>
        </div>
        <div class="form-floating mb-3">
            <label for="foto">Foto</label>
            <input class="form-control" id="foto" name="foto" value="<?=$row['foto']?>" type="text" placeholder="Foto" data-sb-validations="" />
        </div>
        <div class="form-floating mb-3">
            <label for="asalUniv">Quotes</label>
            <input class="form-control" id="quotes" type="text" name="quotes"  style="height: 10rem;" placeholder="quotes" data-sb-validations="required" value="<?=$row['quotes']?>"/>
            <div class="invalid-feedback" data-sb-feedback="Quotes:required">Quotes is required.</div>
        </div>
        <div class="d-grid">
                <?php 
                if(empty($id)){
                    ?>
                    <button class="btn btn-success" id="submitButton" name="proses" value="simpan" type="submit">Submit</button>
                    <?php
                }
                else{
                    ?>
                    <button class="btn btn-success" name="proses" type="submit" value="ubah">Ubah</button>
                    <input type="hidden" name="idx" value="<?= $id ?>" />
                    <?php
                }
                ?>
                <a href="index.php?hal=person_list" class="btn btn-info" name="unproses">Kembali</a>
        </div>
    </form>
    <?php
}
else{
    include_once 'access_denied.php';
} ?>
</div>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>