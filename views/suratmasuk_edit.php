<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM surat_masuk WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Surat Masuk</h3>
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
                            <label for="asal_surat" class="col-sm-3 control-label">Asal Surat</label>
                            <div class="col-sm-3">
                                <input type="text" name="asal_surat" value="<?=$data['asal_surat']?>" class="form-control" placeholder="Inputkan Asal Surat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_masuk" value="<?=$data['tgl_masuk']?>" class="form-control" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Penerima Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" value="<?=$data['penerima']?>" class="form-control"
                                 placeholder="Inputkan Staff Penerima Surat" required>
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
                                    <span class="fa fa-edit"></span> Update Data Surat</button>
                            </div>
                        </div>

                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=suratmasuk&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Surat Masuk
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
    $asal_surat = $_POST['asal_surat'];
    $tgl_masuk  = $_POST['tgl_masuk'];
    $penerima   = $_POST['penerima'];
    $perihal    = $_POST['perihal'];
    //buat sql
    $sql="UPDATE surat_masuk SET no_surat ='$no_surat',asal_surat='$asal_surat',tgl_masuk='$tgl_masuk',penerima='$penerima',perihal='$perihal' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=suratmasuk&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



