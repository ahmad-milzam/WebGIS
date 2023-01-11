<?php 

$title = "Form Penyedia Jasa Web";
include_once 'header.php'; 

?>

<style>
    .btn-submit-map {
        box-shadow:inset 0px 1px 0px 0px #ffffff;
        background:linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);
        background-color:#ffffff;
        border-radius:6px;
        border:1px solid #dcdcdc;
        display:inline-block;
        cursor:pointer;
        color:#666666;
        font-family:Arial;
        font-size:15px;
        font-weight:bold;
        padding:6px 24px;
        text-decoration:none;
        text-shadow:0px 1px 0px #ffffff;
    }
    .btn-submit-map:hover {
        background:linear-gradient(to bottom, #f6f6f6 5%, #ffffff 100%);
        background-color:#f6f6f6;
    }
    .btn-submit-map:active {
        position:relative;
        top:1px;
    }
    .w-50 {
        width: 30%;
    }
</style>

<!-- form insert data -->
<div class="row">
    <div class="col-md-12">
            <div class="panel panel-info panel-dashboard">
                <div class="panel-heading centered">
                    <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
                </div> 
                <div class="panel-body">
                    <div>
                        <form action="insert.php" method="post">
                            <div class="form-group">
                                <label>Nama Perusahaan</label>
                                <input type="text" class="form-control" name="namaPerusahaan" id="namaPerusahaan">
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <input type="text" class="form-control" name="kategori" id="kategori">
                            </div>
                            <div class="form-group">
                                <label>Website</label>
                                <input type="text" class="form-control" name="website" id="website">
                            </div>
                            <div class="form-group">
                                <label>Nomor HP</label>
                                <input type="number" class="form-control" name="nomorHp" id="nomorHp">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat">
                            </div>
                            <div class="form-group">
                                <label>Kota</label>
                                <input type="text" class="form-control" name="kota" id="kota">
                            </div>
                            <div class="form-group">
                                <label>Provinsi</label>
                                <input type="text" class="form-control" name="provinsi" id="provinsi">
                            </div>
                            <div class="form-group">
                                <label>Latitude</label>
                                <input type="text" class="form-control" name="latitude" id="latitude">
                            </div>
                            <div class="form-group">
                                <label>Longitude</label>
                                <input type="text" class="form-control" name="longitude" id="longitude">
                            </div>
                            
                            <input type="submit" class="btn-submit-map" value="Submit">
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="about2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <!-- <h4 class="modal-title" id="myModalLabel">About</h4> -->
            </div>
            <div class="modal-body text-center">
                <h3 class="text-center">RECORD ADDED SUCCESSFULLY</h3>
                <img src="img/check-modal2.png" class="w-50 mx-auto d-block" alt="" srcset="">
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-close">Close</button>
            </div>
        </div>
    </div>
</div>

<script language='javascript'>
    $( document ).ready(function() {
        // $('#about2').modal('show');
        $("#btn-close").on("click", function() {
            $('#about2').modal('hide');
        })
    });
</script>

<?php include_once 'footer.php'; ?>

