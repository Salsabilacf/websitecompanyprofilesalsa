<?php include_once("inc_header.php")?>
        <!-- untuk home -->
        <section id="home">
            <img src="<?php echo ambil_gambar('5')?>"/>
            <div class="kolom">
                <p class="deskripsi"><?php echo ambil_kutipan('5')?></p>
                <h2><?php echo ambil_judul('5')?></h2>
                <?php echo maximum_kata(ambil_isi('5'),10)?></h2>
                <p><a href="<?php echo buat_link_halaman('5')?>" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>

        <!-- untuk About Us -->
        <section id="About Us">
            <div class="kolom">
                <p class="deskripsi"><?php echo ambil_kutipan('6')?></p>
                <h2><?php echo ambil_judul('6')?></h2>
                <?php echo maximum_kata(ambil_isi('6'),20)?></h2>
                <p><a href="<?php echo buat_link_halaman('6')?>" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
            </div>
            <img src="<?php echo ambil_gambar('6')?>"/>
        </section>

        <!-- untuk Our Services -->
<section id="ourservices">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">Our Services</p>
            <h2>Our Services</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, optio!</p>
        </div>

        <div class="ourservices-list">
            <?php
            $sql1       = "select * from ourservices order by id asc";
            $q1         = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_array($q1)) {
            ?>
                <div class="kartu-ourservices">
                    <a href="<?php echo buat_link_ourservices($r1['id']) ?>">
                        <img src="<?php echo url_dasar() . "/gambar/" . ourservices_foto($r1['id']) ?>" />
                        <p><?php echo $r1['nama'] ?></p>
                    </a>
                </div>
            <?php
            }
            ?>


        </div>
    </div>
</section>


        <!-- untuk Our Products -->
        <section id="ourproducts">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Products</p>
                    <h2>Our Products</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi magni tempore expedita sequi. Similique rerum doloremque impedit saepe atque maxime.</p>
                </div>

                <div class="ourproducts-list">
                <a href="<?php echo buat_link_ourproducts($r1['id']) ?>">
                        <img src="<?php echo url_dasar() . "/gambar/" . ourproducts_foto($r1['id']) ?>" />
                        <p><?php echo $r1['nama'] ?></p>




                        <img src="https://www.designevo.com/res/templates/thumb_small/black-wheat-and-mortarboard.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-63.jpg"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-62.jpg"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://www.designevo.com/res/templates/thumb_small/encircled-branches-and-book.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-64.jpg"/>
                    </div>
                </div>
            </div>
        </section>
<?php include_once("inc_footer.php")?>