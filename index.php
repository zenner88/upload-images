<?php 
    require 'header.php'; 
    require "curlApi.php"; 
// echo isset($output);
?>
<script src="callapi.js"></script>
<div class="container-fluid sticky-sm-top container800" style="position: absolute; top: 0px;">
<div class="row my-2">
    <div class="col-2">
        <ul class="nav flex-column rounded" style="background-color: #0C4152;">
            <li class="nav-item">
                <a class="nav-link text-white" id="beranda">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" id="heystack">List Heystack</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" id="potrait">List Potrait</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Upload
                </a>
                <ul class="dropdown-menu nav-item" aria-labelledby="dropdownMenuButton1" style="background-color: #0C4152;">
                    <li>
                        <a class="nav-link text-white" data-bs-toggle="modal" href="#modalHeystack">Upload Heystack</a>
                    </li>
                    <li>
                        <a class="nav-link text-white" data-bs-toggle="modal" href="#modalPotrait">Upload Potrait</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="col-10">
        <div class="border text-center bg-dark px-1 py-1 rounded" id="foto-upload" style="display:block;">
            <div id="fotoo">
            <img onload="callfoto()" class="rounded" style="max-height: 360px;"
                src="luxand/output/output.jpeg" 
                onError="this.onerror=null;this.src='assets/images.png';"
            alt="">
            </div>
            <a href="#" class="float">
            <button class="btn btn-primary text-center" onclick="callfoto()" data-bs-toggle="modal" data-bs-target="#showIdentification">SHOW</button>
            </a>
        </div>
        <div class="border text-center bg-dark px-1 py-1 rounded" id="heystack-galery" style="display:none;">
            <?php include "heystack-galery.php";?>
        </div>
        <div class="border text-center bg-dark px-1 py-1 rounded" id="potrait-galery" style="display:none;">
            <?php include "potrait-galery.php";?>
        </div>
    </div>
</div>
</div>


<!-- The Modal -->
<div class="modal fade" id="showIdentification">
    <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
    <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h6 class="modal-title">Identification</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
           <div class="row">
                <!-- Foto list  -->
                <div class="col">
                    <div class="card" style="width: 100%;" id="fotokecil1">
                        <img onclick="myFunction1()" src="luxand/needle/portrait1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body py-1">
                            <p class="card-text">94.22</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 100%;" id="fotokecil2">
                        <img onclick="myFunction2()" src="luxand/needle/portrait2.jpeg" class="card-img-top" alt="...">
                        <div class="card-body py-1">
                            <p class="card-text">94.22</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 100%;" id="fotokecil3">
                        <img onclick="myFunction3()" src="luxand/needle/portrait3.jpeg" class="card-img-top" alt="...">
                        <div class="card-body py-1">
                            <p class="card-text">94.22</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 100%;" id="fotokecil4">
                        <img onclick="myFunction4()" src="luxand/needle/portrait4.jpeg" class="card-img-top" alt="...">
                        <div class="card-body py-1">
                            <p class="card-text">94.22</p>
                        </div>
                    </div>
                </div>
           </div>
           <div class="row">
            <div class="col">
                <div class="border rounded px-1 py-1 mt-1" style="width:100%;">
                    <div id="biodata1">
                    <h5 class="card-title">EKA JAYA</h5>
                    <h6 class="card-subtitle mb-2 text-muted">NIK : 3174032608740002 </h6>
                    <p class="" style="font-size: 12px; line-height: 2;">
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
                    <div id="biodata2">
                    <h5 class="card-title">ADI PUTRA</h5>
                    <h6 class="card-subtitle mb-2 text-muted">NIK : 3174032608740003 </h6>
                    <p class="" style="font-size: 12px; line-height: 2;">
                        <b>No.KK:</b> 3174031401093496 <br>
                        <b>TTL:</b> JAKARTA, 26-08-1974 <br>
                        <b>Alamat:</b> JL.KEMANG UTARA I B 013/001, Kelurahan BANGKA, Kecamatan MAMPANG PRAPATAN, Kabupaten JAKARTA SELATAN, Provinsi DKI JAKARTA <br>
                        <b>Jenis Kelamin:</b> LAKI-LAKI <br>
                        <b>Gol. Darah:</b> AB <br>
                        <b>Agama:</b> ISLAM <br>
                        <b>Status:</b> KAWIN <br>
                        <b>Pekerjaan:</b> KARYAWAN SWASTA
                    </p>        
                    </div> 
                    <div id="biodata3">
                    <h5 class="card-title">EK0 WIJOYO</h5>
                    <h6 class="card-subtitle mb-2 text-muted">NIK : 3174032608740004 </h6>
                    <p class="" style="font-size: 12px; line-height: 2;">
                        <b>No.KK:</b> 3174031401093497 <br>
                        <b>TTL:</b> JAKARTA, 26-08-1974 <br>
                        <b>Alamat:</b> JL.KEMANG UTARA I B 013/001, Kelurahan BANGKA, Kecamatan MAMPANG PRAPATAN, Kabupaten JAKARTA SELATAN, Provinsi DKI JAKARTA <br>
                        <b>Jenis Kelamin:</b> LAKI-LAKI <br>
                        <b>Gol. Darah:</b> AB <br>
                        <b>Agama:</b> ISLAM <br>
                        <b>Status:</b> KAWIN <br>
                        <b>Pekerjaan:</b> KARYAWAN SWASTA
                    </p>        
                    </div> 
                    <div id="biodata4">
                    <h5 class="card-title">FIRMAN</h5>
                    <h6 class="card-subtitle mb-2 text-muted">NIK : 3174032608740005 </h6>
                    <p class="" style="font-size: 12px; line-height: 2;">
                        <b>No.KK:</b> 3174031401093498 <br>
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
    </div>
    </div>
</div>
<!-- End The Modal -->
<!--  modal upload -->
<div class="modal fade" id="modalHeystack" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="background-color: #103552;">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content" style="background-color: #0C4152;">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalToggleLabel">Heystack Uplaod</h5>
        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="text-center">
            <form enctype="multipart/form-data" action="" method="POST">
            <input class="file-input" type="file" name="file" accept="image/*" hidden>
            <i class="fas fa-cloud-upload-alt text-white"></i>
            <!-- <p>Browse Images</p> -->
            </form>
            <section class="progress-area"></section>
            <section class="uploaded-area"></section>

            <form enctype="multipart/form-data" action="upload-heystack.php" method="POST">
                <!-- Name of input element determines name in $_FILES array -->
                Send this file: <input name="file" type="file" id="uploads"/>
                <input type="submit" value="Send File" id="submitUpload"/>
            </form>


        </div>
        <?php
        if(isset($resp['url'])){
            echo '<img src="'.$resp['url'].'"/>';
        }
        ?>
      </div>
    </div>
  </div>
</div>

<!-- end modal upload -->
<!--  modal upload -->
<div class="modal fade" id="modalPotrait" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="background-color: #103552;">
<div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content" style="background-color: #0C4152;">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalToggleLabel">Potrait Uplaod</h5>
        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="text-center">
            <form action="#">
            <input class="file-input" type="file" name="file" accept="image/*" hidden>
            <i class="fas fa-cloud-upload-alt text-white"></i>
            <!-- <p>Browse Images</p> -->
            </form>
            <section class="progress-area"></section>
            <section class="uploaded-area"></section>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- end modal upload -->
<script type="text/javascript"> 
// display menu
$(document).ready(function(){
   $("#heystack").click(function heyhey(){
       $("#heystack-galery").css("display","block");
       $("#potrait-galery").css("display","none");
       $("#foto-upload").css("display","none");
   });
});
$(document).ready(function(){
   $("#potrait").click(function(){
       $("#potrait-galery").css("display","block");
       $("#heystack-galery").css("display","none");
       $("#foto-upload").css("display","none");
   });
});
$(document).ready(function(){
   $("#beranda").click(function(){
       $("#heystack-galery").css("display","none");
       $("#potrait-galery").css("display","none");
       $("#foto-upload").css("display","block");
   });
});
// end display menu

// info identifikasi dan foto 
    var x1 = document.getElementById("fotokecil1");
    var x2 = document.getElementById("fotokecil2");
    var x3 = document.getElementById("fotokecil3");
    var x4 = document.getElementById("fotokecil4");
    x1.style.display = "none";
    x2.style.display = "none";
    x3.style.display = "none";
    x4.style.display = "none";

    function callfoto(){
    var x1 = document.getElementById("fotokecil1");
    var x2 = document.getElementById("fotokecil2");
    var x3 = document.getElementById("fotokecil3");
    var x4 = document.getElementById("fotokecil4");
    x1.style.display = "block";
    x2.style.display = "block";
    x3.style.display = "block";
    x4.style.display = "block";
  }

    var biodata = document.getElementById("biodata");
    biodata1.style.display = "none";
    biodata2.style.display = "none";
    biodata3.style.display = "none";
    biodata4.style.display = "none";
    var x = document.getElementById("biodata1");
    var y = document.getElementById("biodata2");
    var z = document.getElementById("biodata3");
    var a = document.getElementById("biodata4");
    function myFunction1() {
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
    } else {
        x.style.display = "none";
    }
    }
    function myFunction2() {
    if (y.style.display === "none") {
        y.style.display = "block";
        x.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
    } else {
        y.style.display = "none";
    }
    }
    function myFunction3() {
    if (z.style.display === "none") {
        z.style.display = "block";
        y.style.display = "none";
        x.style.display = "none";
        a.style.display = "none";
    } else {
        z.style.display = "none";
    }
    }
    function myFunction4() {
    if (a.style.display === "none") {
        a.style.display = "block";
        y.style.display = "none";
        z.style.display = "none";
        x.style.display = "none";
    } else {
        a.style.display = "none";
    }
    }
// end info identifikasi dan foto

// galery
    // $('.portfolio-item').isotope({
    //  	itemSelector: '.item',
    //  	layoutMode: 'fitRows'
    //  });
    $('.portfolio-menu ul li').click(function(){
        $('.portfolio-menu ul li').removeClass('active');
        $(this).addClass('active');
        
        var selector = $(this).attr('data-filter');
        $('.portfolio-item').isotope({
            filter:selector
        });
        return  false;
        });
        $(document).ready(function() {
        var popup_btn = $('.popup-btn');
        popup_btn.magnificPopup({
        type : 'image',
        gallery : {
        enabled : true
        }
        });
        });
// end galery
</script>
<?php require 'footer.php'; ?>
