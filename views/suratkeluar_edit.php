<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM surat_keluar WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Surat Keluar</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Nomor Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_surat" value="<?=$data['no_surat']?>" class="form-control" placeholder="Inputkan Nomor Surat" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="asal_surat" class="col-sm-3 control-label">Tujuan Surat</label>
                            <div class="col-sm-3">
                                <input type="text" name="tujuan_surat" value="<?=$data['tujuan_surat']?>" class="form-control" placeholder="Inputkan Tujuan Surat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Keluar</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_keluar" value="<?=$data['tgl_keluar']?>" class="form-control" placeholder="Inputkan Tanggal" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Pengirim Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengirim" value="<?=$data['pengirim']?>" class="form-control"
                                 placeholder="Inputkan Staff Pengirim Surat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="perihal" class="col-sm-3 control-label">Perihal</label>
                            <div class="col-sm-9">
                                <input type="text" name="perihal" value="<?=$data['perihal']?>" class="form-control"  placeholder="Inputkan Perihal Surat">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pinjaman</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=suratkeluar&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Surat Keluar
                    </a>
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
    $sql="UPDATE surat_keluar SET no_surat = '$no_surat', tujuan_surat='$tujuan', tgl_keluar='$tgl_keluar', pengirim='$pengirim', perihal='$perihal' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=suratkeluar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



