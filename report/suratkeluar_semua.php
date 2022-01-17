<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Laporan Surat Keluar</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Surat Masuk Kantor Dinas Pertanian </h2>
                        <h4>Jl. Jend. Gatot Subroto No. 268 , Kisaran, Sentang <br> Kisaran Timur, Kabupaten Asahan, Sumatera Utara, 21223</h4>
                        <hr>
                        <h3>Laporan Surat Keluar</h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								<tr>
									 <th>No.</th>
                                <th>No.Surat</th>
                                <th>Tujuan Surat</th>
                                <th>Tanggal Surat</th>
                                <th>Pengirim</th>
                                <th>Perihal</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM surat_keluar";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['no_surat'] ?></td>
                                    <td><?= $data['tujuan_surat'] ?></td>
                                    <td><?= $data['tgl_keluar'] ?></td>
                                    <td><?= $data['pengirim'] ?></td>
                                    <td><?= $data['perihal'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Pemprograman<strong></u><br>
                                        NIP.198006102009031005
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
