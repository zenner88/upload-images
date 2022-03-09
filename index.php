<?php 
require 'header.php'; 
// echo isset($output);
?>

<div class="container-fluid mx-2 sticky-sm-top" style="position: absolute; top: 0px;">
    <div class="row">
        <div class="col-12 col-lg-2">
            <div class="container bg-light px-2 py-1 mt-1 rounded">
                <div class="text-center pt-2">
                    <img src="assets/logo-brimob.png" style="width: 100%; max-width: 100px;" alt="">
                </div>
                <HR>
                <div class="wrapper" style="width: 100%">

                <form action="#">
                <input class="file-input" type="file" name="file" accept="image/*" hidden>
                <i class="fas fa-cloud-upload-alt"></i>
                <!-- <p>Browse Images</p> -->
                </form>
                <section class="progress-area"></section>
                <section class="uploaded-area"></section>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-10">
        <div class="container bg-light px-4 py-2 mt-1 rounded">
            <div class="row">
                <div class="col-12 col-md-9 border text-center bg-secondary px-2 py-2 rounded">
                    <div id="fotoo">
                    <img class="rounded" style="max-height: 390px;"
                        src="luxand/output/output.jpeg" 
                        onError="this.onerror=null;this.src='assets/images.png';"
                    alt="">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="row">
                        <div class="border rounded px-4 py-2 mx-2 my-2" style="width:100%;">
                            <div id="biodata">
                            <h5 class="card-title">Nama : EKA JAYA</h5>
                            <h6 class="card-subtitle mb-2 text-muted">NIK : 3174032608740002 </h6>
                            <hr>
                            <p class="fs-6" style="font-size: 12px; line-height: 2;">
                                <b>No.KK:</b> 3174031401093495 <br>
                                <b>TTL:</b> JAKARTA, 26-08-1974 <br>
                                <b>Alamat:</b> JL.KEMANG UTARA I B 013/001, Kelurahan BANGKA, Kecamatan MAMPANG PRAPATAN, Kabupaten JAKARTA SELATAN, Provinsi DKI JAKARTA <br>
                                <b>Jenis Kelamin:</b> LAKI-LAKI <br>
                                <b>Gol. Darah:</b> AB <br>
                                <b>Agama:</b> ISLAM <br>
                                <b>Status:</b> KAWIN <br>
                                <b>Pekerjaan:</b> KARYAWAN SWASTA
                            </p>        
                            </div>                       
                        </div>
                    </div>               
                </div>
            </div>
            <div class="row border rounded mt-2 py-2">
                <div class="col-6 col-md-2">
                    <div class="card" style="width: 100%;" id="fotokecil1">
                        <img onclick="myFunction()" src="luxand/needle/portrait1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body py-1">
                            <p class="card-text">94.22</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2">
                    <div class="card" style="width: 100%;" id="fotokecil2">
                        <img onclick="myFunction()" src="luxand/needle/portrait2.jpeg" class="card-img-top" alt="...">
                        <div class="card-body py-1">
                            <p class="card-text">94.22</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2">
                    <div class="card" style="width: 100%;" id="fotokecil3">
                        <img onclick="myFunction()" src="luxand/needle/portrait3.jpeg" class="card-img-top" alt="...">
                        <div class="card-body py-1">
                            <p class="card-text">94.22</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2">
                    <div class="card" style="width: 100%;" id="fotokecil4">
                        <img onclick="myFunction()" src="luxand/needle/portrait4.jpeg" class="card-img-top" alt="...">
                        <div class="card-body py-1">
                            <p class="card-text">94.22</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript"> 
    var x1 = document.getElementById("fotokecil1");
    var x2 = document.getElementById("fotokecil2");
    var x3 = document.getElementById("fotokecil3");
    var x4 = document.getElementById("fotokecil4");
    x1.style.display = "none";
    x2.style.display = "none";
    x3.style.display = "none";
    x4.style.display = "none";

    var biodata = document.getElementById("biodata");
    biodata.style.display = "none";

    function myFunction() {
    var x = document.getElementById("biodata");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }
</script>
<?php require 'footer.php'; ?>
