<?php 
function url_dasar(){
    //$_SERVER['SERVER_NAME'] : alamat website, misalkan websitemu.com
    // $_SERVER['SCRIPT_NAME'] : directory website, websitemu.com/blog/ $_SERVER['SCRIPT_NAME'] : blog
    $url_dasar  = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']);
    return $url_dasar;
}
function ambil_gambar($id_tulisan){
    global $koneksi;
    $sql1 = "select * from halaman where id = '$id_tulisan'";
    $q1   = mysqli_query($koneksi,$sql1);
    $r1   = mysqli_fetch_array($q1);
    $text = $r1['isi'];

    preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);
    $gambar = $img[1]; // ../gambar/filename.jpg
    $gambar = str_replace("../gambar/",url_dasar()."/gambar/",$gambar);
    return $gambar;
}

function ambil_kutipan($id_tulisan){
    global $koneksi;
    $sql1   = "select * from halaman where id = '$id_tulisan'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $text   = $r1['kutipan'];
    return $text;
}

function ambil_judul($id_tulisan){
    global $koneksi;
    $sql1   = "select * from halaman where id = '$id_tulisan'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $text   = $r1['judul'];
    return $text;
}

function ambil_isi($id_tulisan){
    global $koneksi;
    $sql1   = "select * from halaman where id = '$id_tulisan'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $text   = strip_tags($r1['isi']);
    return $text;
}

function bersihkan_judul($judul){
    $judul_baru     = strtolower($judul);
    $judul_baru     = preg_replace("/[^a-zA-Z0-9\s]/","",$judul_baru);
    $judul_baru     = str_replace(" ","-",$judul_baru);
    return $judul_baru;
}

function buat_link_halaman($id){
    global $koneksi;
    $sql1    = "select * from halaman where id = '$id'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $judul  = bersihkan_judul($r1['judul']);
    // http://localhost/website_companyprofile/halaman.php/8/judul
    return url_dasar()."/halaman.php/$id/$judul";
}

function dapatkan_id(){
    $id     ="";
    if(isset($_SERVER['PATH_INFO'])){
        $id = dirname($_SERVER['PATH_INFO']);
        $id = preg_replace("/[^0-9]/","",$id);
    }
    return $id;
}

function set_isi($isi){
    $isi    = str_replace("../gambar/",url_dasar()."/gambar/",$isi);
    return $isi;
}

function maximum_kata($isi,$maximum){
    $array_isi = explode(" ",$isi);
    $array_isi = array_slice($array_isi,0,$maximum);
    $isi = implode(" ",$array_isi);
    return $isi;
}

function ourservices_foto($id){
    global $koneksi;
    $sql1   = "select * from ourservices where id = '$id'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $foto   = $r1['foto'];

    if($foto){
        return $foto;
    }else{
        return 'ourservices_default_picture.png';
    }
}

function buat_link_ourservices($id){
    global $koneksi;
    $sql1    = "select * from ourservices where id = '$id'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $nama = bersihkan_judul($r1['nama']);
    // http://localhost/website_companyprofile/halaman.php/8/judul
    return url_dasar()."/ourservices.php/$id/$nama";
}

function ourprodutcs_foto($id){
    global $koneksi;
    $sql1   = "select * from ourprodutcs where id = '$id'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $foto   = $r1['foto'];

    if($foto){
        return $foto;
    }else{
        return 'ourprodutcs_default_picture.png';
    }
}

function buat_link_ourproducts($id){
    global $koneksi;
    $sql1    = "select * from ourproducts where id = '$id'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $nama = bersihkan_judul($r1['nama']);
    // http://localhost/website_companyprofile/halaman.php/8/judul
    return url_dasar()."/ourproducts.php/$id/$nama";
}

function ambil_isi_info($id, $kolom){
    global $koneksi;
    $sql1    = "select * kolom from info where id = '$id'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    return $r1[$kolom];
}



