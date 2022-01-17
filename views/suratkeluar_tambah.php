<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Surat Keluar</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Nomor Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_surat" class="form-control" placeholder="Inputkan Nomor Surat" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="asal_surat" class="col-sm-3 control-label">Tujuan Surat</label>
                            <div class="col-sm-3">
                                <input type="text" name="tujuan_surat" class="form-control" placeholder="Inputkan Asal Surat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Keluar</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_keluar" class="form-control" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Pengirim Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengirim" class="form-control"
                                 placeholder="Inputkan Staff Penerima Surat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="perihal" class="col-sm-3 control-label">Perihal</label>
                            <div class="col-sm-9">
                                <input type="text" name="perihal" class="form-control"  placeholder="Inputkan Perihal Surat">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Surat</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=suratkeluar&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Surat
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $no_surat   = $_POST['no_surat'];
    $tujuan = $_POST['tujuan_surat'];
    $tgl_keluar  = $_POST['tgl_keluar'];
    $pengirim   = $_POST['pengirim'];
    $perihal    = $_POST['perihal'];
    //buat sql
    $sql="INSERT INTO surat_keluar VALUES ('$no_surat','$tujuan','$tgl_keluar','$pengirim','$perihal','')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Peminjaman Error");
    if ($query){
        echo "<script>window.location.assign('?page=suratkeluar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
