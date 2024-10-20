<?php

session_start();

if(isset($_SESSION['sesi'])){

$header = "- Pendaftaran";

// import header
include 'header.php';

$id_siswa = $_SESSION['sesi'];

?>

<!-- container -->
<div class="container">
    <form class="card m-4 p-4 o-hidden border-0 shadow-lg" method="post" action="proses/proses_pendaftaran.php" enctype="multipart/form-data">
        
        <!-- heading -->
        <h2 class="text-center">Formulir Pendaftaran</h2>
        <fieldset>
            <legend>Data Diri Calon Siswa</legend>
            <div class="card p-3">

            <input type="number" name="id" value="<?php echo $id_siswa; ?>" hidden>

                <!-- input nama -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap" required />
                </div>

                <!-- input nisn -->
                <div class="mb-3">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="number" class="form-control" name="nisn" placeholder="Masukkan NISN" required />
                </div>

                <!-- input jenis kelamin -->
                <div class="mb-3">
                    <label for="kelamin" class="form-label">Jenis Kelamin</label>
                    <select id="kelamin" name="kelamin" class="custom-select" aria-label="Default select example">
                        <option selected disabled>Pilih salah satu</option>
                        <option value="Laki-laki">Laki laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <!-- input tempat tanggal lahir -->
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="tempat" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat" placeholder="Masukkan Nama Kota">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="tanggal" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal">
                    </div>
                </div>

                <!-- input Asal Sekolah -->
                <div class="mb-3">
                    <label for="tempat" class="form-label">Asal Sekolah</label>
                    <input type="text" class="form-control" name="asal" placeholder="Masukkan Asal Sekolah" required />
                </div>

                <!-- input alamat -->
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Lengkap" required />
                </div>

                <!-- tombol submit -->
                <button type="submit" name="simpan" class="btn btn-secondary font-weight-bold">Simpan</button>
            </div>        
        </fieldset>
    </form>
</div>

<?php

// import footer
include 'footer.php';

} else {
    echo "<script>
            alert('Silahkan Login Terlebih Dahulu!');
            window.location = 'login.php';
        </script>";
}

?>