<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container py-5">
    <h1 class="mb-4 text-center">Tentang Kami</h1>
    <p>Kami adalah tim pengembang aplikasi yang berfokus pada solusi digital untuk UMKM dan ritel. Melalui inovasi teknologi, kami berupaya menghadirkan sistem yang mampu membantu pemilik usaha dalam mengelola toko secara praktis, efisien, dan terintegrasi. Aplikasi ini dikembangkan khusus untuk mendukung operasional Toko Mainan Cahaya, serta dapat disesuaikan dengan kebutuhan toko lainnya.</p>

    <div class="row mb-5">
        <div class="col-md-7">
            <h3>Tentang Aplikasi</h3>
            <p>Aplikasi sistem kasir berbasis web ini dikembangkan menggunakan CodeIgniter 4 dan database terpisah untuk menjamin performa dan keamanan data. Aplikasi ini memfasilitasi pengelolaan produk, pemasok, pelanggan, stok, transaksi penjualan, serta laporan keuangan secara real-time dan user-friendly.
Dapat diakses melalui jaringan lokal maupun online, aplikasi ini dirancang responsif untuk digunakan di berbagai perangkat seperti PC, tablet, dan smartphone.</p>
            
            <h3>Tujuan Aplikasi</h3>
            <p>
                Aplikasi ini bertujuan untuk:
                <br>
                1. Mempermudah proses transaksi penjualan di kasir secara cepat dan akurat
                <br>
                2. Mengurangi risiko kesalahan pencatatan yang sering terjadi pada sistem manual
                <br>
                3. Meningkatkan efisiensi pengelolaan data seperti stok barang, pelanggan, dan pemasok
                <br>
                4. Menyediakan laporan penjualan dan data statistik yang membantu dalam pengambilan keputusan bisnis
                <br>
                5. Mempercepat proses pelayanan kepada pelanggan dan memperbaiki manajemen toko secara keseluruhan
            </p>
            <br>
            <h2 class="h4 mb-3">Kontak Kami</h2>
                <p>Email: <a href="mailto:info@toko-mainan.com">info@toko-mainan.com</a></p>
                <p>Telepon: 0812-3456-7890</p>
                <p>Alamat: Jl. Blauran B-14, Surabaya, Jawa Timur</p>

        </div>
        <div class="col-md-5">
            <img src="<?= base_url('uploads/about/toko.jpg') ?>" 
                class="img-fluid rounded shadow" 
                alt="Manajemen Toko">
        </div>
    </div>

    <div class="team-section py-5 bg-light rounded">
        <h3 class="mb-4 text-center">Anggota Tim</h3>
        <div class="row">
            <div class="col-md-3 text-center mb-4">
                <div class="card p-3 shadow-sm">
                    <img src="<?= base_url('uploads/about/sintia.jpeg') ?>" class="img-fluid rounded-circle mb-3" alt="Sintia">
                    <h5>Sintia Agustin Yasa</h5>
                    <p>Frontend Developer</p>
                </div>
            </div>
            <div class="col-md-3 text-center mb-4">
                <div class="card p-3 shadow-sm">
                    <img src="<?= base_url('uploads/about/revian.jpeg') ?>" class="img-fluid rounded-circle mb-3" alt="Revian">
                    <h5>Revian Atheylla</h5>
                    <p>Project Manager / Tester</p>
                </div>
            </div>
            <div class="col-md-3 text-center mb-4">
                <div class="card p-3 shadow-sm">
                    <img src="<?= base_url('uploads/about/jihan.jpeg') ?>" class="img-fluid rounded-circle mb-3" alt="Jihan">
                    <h5>Jihan Adisti Rizki Insyirah</h5>
                    <p>Database Administrator</p>
                </div>
            </div>
            <div class="col-md-3 text-center mb-4">
                <div class="card p-3 shadow-sm">
                    <img src="<?= base_url('uploads/about/vania.jpeg') ?>" class="img-fluid rounded-circle mb-3" alt="Vania">
                    <h5>Vania Rusprameswari</h5>
                    <p>Backend Developer</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
