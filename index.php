<?php
require_once('./public/layout/partials/header.php');

?>


    <body>
    <?php
    if ($_GET['status'] == 'success'){
        echo ('<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> Database anda dengan nama '.'<strong>'.$_GET['database'].'</strong>'. ' berhasil di buat. Rest API siap digunakan :D
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
    }
    if ($_GET['status'] == 'error') {
        echo('<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Kesalahan!</strong> Database anda dengan nama ' . '<strong>' . $_GET['database'] . '</strong>' . ' mungkin terdapat duplikasi dalam MYSQL mu, coba klik tombol drop terlebih dahulu.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
    }
    if ($_GET['status'] == 'dropSuccess'){
        echo ('<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> Database anda dengan nama '.'<strong>'.$_GET['database'].'</strong>'. ' berhasil di hapus.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
    }
    if ($_GET['status'] == 'dropError') {
        echo('<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Kesalahan!</strong> Database anda dengan nama ' . '<strong>' . $_GET['database'] . '</strong>' . ' mungkin tidak tersedia lagi dalam MYSQL mu, coba klik tombol migrate terlebih dahulu.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
    }

    ?>

    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="./public/images/iqbal.jpg" alt="" width="200" height="200">
        <h1 class="display-5 fw-bold text-body-emphasis">Rest API Server</h1>
        <div class="col-lg-6 mx-auto">

            <!--      Instruksi, Jalanin aja dulu ke localhost/rest-api-native nanti di index.php nya ada fungsi migrate dll     -->
            <p class="lead mb-4">Hallo, Terimakasih sudah berkenan memeriksa tugas saya ^-^, sebelum test Rest API nya, udah aku sedia in buat migrasi ke database nya loh, biar gak usah cape cape bikin database dan tabel sendiri hehe, tinggal klik aja tombol migrate di bawah, otomatis database dan tabel nya di buatkan loh, oh iya, jangan lupa ya sesuaikan config MYSQL yang ada di <b class="fw-bold">.env</b>, sesuai config MYSQL yg kamu punya ya</p>
            <button type="button" class="btn btn-success btn-lg px-4 gap-3"><a class="text-decoration-none text-light" href="api/index.php">API Docs <i class="bi bi-book-half"></i></a></button>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-3">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3"> <a class="text-decoration-none text-light" href="database/createDatabase.php">Migrate</a></button>
                <button id="migrateDownButton" class="btn btn-danger btn-lg px-4"> <a class="text-decoration-none text-light" href="database/deleteDatabase.php">Drop</button>
            </div>

        </div>
    </div>
    </body>

<?php
require_once('./public/layout/partials/footer.php');
?>