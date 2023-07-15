<?php
require_once ('../public/layout/partials/header.php');

?>
    <main>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <a href="../" class="d-flex align-items-center text-body-emphasis text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-through-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.854 15.854A.5.5 0 0 1 2 15.5V14H.5a.5.5 0 0 1-.354-.854l1.5-1.5A.5.5 0 0 1 2 11.5h1.793l3.103-3.104a.5.5 0 1 1 .708.708L4.5 12.207V14a.5.5 0 0 1-.146.354l-1.5 1.5ZM16 3.5a.5.5 0 0 1-.854.354L14 2.707l-1.006 1.006c.236.248.44.531.6.845.562 1.096.585 2.517-.213 4.092-.793 1.563-2.395 3.288-5.105 5.08L8 13.912l-.276-.182A23.825 23.825 0 0 1 5.8 12.323L8.31 9.81a1.5 1.5 0 0 0-2.122-2.122L3.657 10.22a8.827 8.827 0 0 1-1.039-1.57c-.798-1.576-.775-2.997-.213-4.093C3.426 2.565 6.18 1.809 8 3.233c1.25-.98 2.944-.928 4.212-.152L13.292 2 12.147.854A.5.5 0 0 1 12.5 0h3a.5.5 0 0 1 .5.5v3Z"/>
                    </svg>
                    <span class="fs-4">RESTfull API</span>
                </a>
            </header>

            <div class="p-5 mb-4 bg-body-tertiary rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">REST API with PHP Native</h1>
                    <p class="col-md-8 fs-4">Sebelum menggunakan REST API ini, atur konfigurasi database anda di dalam file <strong>.env</strong>, lalu klik migrate untuk membuat schema table yang sudah di sesuaikan dengan REST API ini, <strong>Data akan kosong saat pertama kali melakukan migrations, </strong>tapi jangan khawatir, REST API sudah siap digunakan!</p>
                    <a href="../database/createDatabase.php" class="btn btn-primary btn-lg" type="button">Migrate</a>
                </div>
            </div>

            <?php
            require_once ('./dummy/table.php');
            ?>

            <footer class="pt-3 mt-4 text-body-secondary border-top">
                &copy; Rizki Iqbal Muladi 2023
            </footer>
        </div>
    </main>


<?php
require_once ('../public/layout/partials/footer.php');

?>