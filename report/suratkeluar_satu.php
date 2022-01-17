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
        $sql = "SELECT * FROM surat_keluar WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
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
								<tr>
                                    <th>No.Surat</th> <td><?= $data['no_surat'] ?></td>
                                </tr>
                                <tr>
                                    <th>Tujuan Surat</th> <td><?= $data['tujuan_surat'] ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Surat</th> <td><?= $data['tgl_keluar'] ?></td>
                                </tr>
                                <tr>
                                    <th>Pengirim</th> <td><?= $data['pengirim'] ?></td>
                                </tr>
								<tr>
                                    <th>Perihal</th> <td><?= $data['perihal'] ?></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Hukum, S.Hum<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
