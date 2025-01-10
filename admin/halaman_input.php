<?php include("inc_header.php")?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">
<?php
$judul        ="";
$kutipan      ="";
$isi          ="";
$error        ="";
$sukses       ="";

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = "";
}

if($id != ""){
    $sql1   = "select * from halaman where id = '$id'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $judul  = $r1['judul'];
    $kutipan    = $r1['kutipan'];
    $isi        = $r1['isi'];

    if($isi == ''){
        $error  = "Data tidak ditemukan";
    }
}

if(isset($_POST['simpan'])){
    $judul      =$_POST['judul'];
    $isi        =$_POST['isi'];
    $kutipan    =$_POST['kutipan'];

    if($judul == '' or $isi == ''){
        $error = "Silakan Masukan Data";
    }

    if(empty($error)){
        if($id != ""){
            $sql1   = "update halaman set judul = '$judul',kutipan='$kutipan',isi='$isi',tgl_isi=now() where id = '$id'";
        }else{
            $sql1       = "insert into halaman(judul,kutipan,isi) values ('$judul','$kutipan','$isi')";
        }
        
        $q1 = mysqli_query($koneksi, $sql1);
        if($q1){
            $sukses  ="Data sukses dimasukkan";
        }else{
            $error = "Data gagal dimasukkan";
        }
    }
}
?>
<h1>Halaman Admin Input Data</h1>
<div class="mb-3row">
    <a href="halaman.php"><< Kembali Ke Halaman Admin</a>
</div>
<?php
if($error){
?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
    </div>
<?php
}
?>
<?php
if($sukses){
?>
    <div class="alert alert-primary" role="alert">
        <?php echo $sukses ?>
    </div>
<?php
}
?>
<form action="" method="post">
    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Judul" placeholder="<?php echo $judul?>" name="judul">
        </div>
        <div class="mb-3">
        <label for="kutipan" class="form-label">Kutipan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Kutipan" placeholder="<?php echo $kutipan?>" name="kutipan">
        </div>
        <div class="mb-3">
        <label for="isi" class="form-label">Isi</label>
        <div class="col-sm-10">
           <textarea name="isi" class="form-control" id="summernote"><?php echo $isi?></textarea>
        </div>
    </div>
    <div class="mb-3">
       <div class="col-sm-2"></div>
       <div class="col-sm-10">
           <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary"/>
        </div>
    </div>
    
</form>
<?php include("inc_footer.php")?>
