<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Surat Masuk</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM surat_masuk WHERE id='" . $_GET ['id'] . "'";
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
                        <h3>Data Surat Masuk</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
                                <tr>
                                    <th = width="30%">No.Surat</th> <td><?= $data['no_surat'] ?></td>
                                </tr>
                                <tr>
                                     <th>Asal Surat</th> <td><?= $data['asal_surat'] ?></td>
                                </tr>
                                <tr>
                                   <th>Tanggal Masuk</th> <td><?= $data['tgl_masuk'] ?></td>
                                </tr>
								<tr>
                                    <th>Penerima</th> <td><?= $data['penerima'] ?></td>
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