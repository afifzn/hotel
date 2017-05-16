<?php include"header.php"?>

                            <!-- Left Menu Start -->
                            <?php include"navbar_fo.php"?>
                <!--left navigation end-->
                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

				
				<div class="container">
                        
		<!-- Modal Reservasi -->
		
			<!--batas Modal -->
						<script>
function myFunction1() {
    var x = document.getElementById("harga1").value;
    var z = document.getElementById("selisih2").value;
    var b = document.getElementById("saldo1").value;
    var a = eval("x * z");
    var tot = eval(a) + eval(b);

    var res = tot;
    document.getElementById("total1").value = res;
}
</script>
                        <!-- end row -->
                    <div class="container">
					<?php 
					$rx="SELECT * FROM kamar,type_kamar WHERE id_kamar='$_GET[room]' AND kamar.id_type=type_kamar.id_type";
					$exe_rx=mysqli_query($konek,$rx);
					while($as=mysqli_fetch_array($exe_rx)){
					
				   ?>
                  <form  action="core_hannah.php?p=reservation_fo" method="post" name='autoSumForm' enctype="multipart/form-data" role="form">
                                            <div class="content">
                                                <div class="header">
                                                    
                                                    <h4 class="modal-title" id="myLargeModalLabel">Walk In / Reservation</h4>
                                                </div>
                                                <div class="modal-body">
              <div class="row">

              <div class="panel panel-default col-lg-4">
                <div class="panel-heading">Guest Reservation</div>
                    <br>
                    <p>
                    
                    <div class="form-group row">
                                          <label for="sel1" class="col-sm-3 form-control-label">Name</label>
                                          <div class="col-sm-3">
                                          <select class="form-control" id="sel1" name="gelar">
                                            
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Mss">Mss</option>
                                            
                                          </select>
                                          </div>
                                          <div class="col-xs-6" >
                                                <input type="text" class="form-control ks-default" id="default-input-rounded"
                                                placeholder="Name" name="nama" required></input>
                                            </div>
                                        </div>
                       <div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label">Address</label>
                                            
                                            <div class="col-sm-9">
                                                     <input type="text" class="form-control" name="alamat" placeholder="Address">                 
                                                </div>
                                                 </div>
										<div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label" >ID Number</label>
                                          <div class="col-sm-9">
                                                     <input type="text" class="form-control" name="no_id" placeholder="Identity Number" required >                 
                                                </div>
                                                 </div>

                                        
                                
                          <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-3 form-control-label">Country</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="negara">
                                                    <option value="Indonesia">Indonesia</option>
													<?php
													include"koneksi.php";
														$co="SELECT * FROM apps_countries";
														$xc=mysqli_query($konek,$co);
														while($negara=mysqli_fetch_array($xc)){
													?>
                                                    <option value="<?php echo $negara['country_name']?>"><?php echo $negara['country_name']?></option>
														<?php } ?>
                                                </select>
                                            </div>
                                        </div>  
							<div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label">Request</label>
                                          <div class="col-sm-9">
                                                     <input type="text" class="form-control" name="request" placeholder="Guest Request">                 
                                                </div>
                                                 </div>


                                            
                </div>    
                                   
                <div class="panel panel-default col-lg-4">
                <div class="panel-heading">Room Reservation</div>
                    <br>
                    <p>
                   
                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Room(s)</label>
                                        <div class="col-sm-9">
                                        <input type="text" value="<?php echo $as['nomor_kamar']?>"  class="form-control ks-default" id="room" name="kamar" readonly>
										 <input type="hidden" value="<?php echo $as['id_kamar']?>"  class="form-control ks-default" id="rooms" name="id_kamar" readonly>
										
                                                 
                                        </div>
                                            
                                            
                                        </div>
                        
                                       <div class="form-group row">
									   <label class="col-sm-3 form-control-label" >ARR Date</label>
                                                        <div class="col-sm-9">
                                                           
					
					<div class="input-group date" id="tgla">
						<input type="text" class="form-control ks-default" name="tgl_masuk" required />	
							<span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
					</div>
				
                                                        </div>
                                                    </div> 
													
													<div class="form-group row">
                                                       
                                                            
					<label for="default-input" class="col-sm-3  form-control-label">DEP Date</label>
					 <div class="col-sm-9">
					<div class="input-group date" id="tglb">
						<input type="text" class="form-control" name="tgl_keluar" required />	
							<span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
					</div>
				
                                                        </div>
                                                    </div>
													
													
													


                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">Night</label>
                                            <div class="col-sm-4">
                                                      <input type="text" class="form-control" id="selisih2" name="selisih" onchange="MyFuntcion1()" >                                       </div>
                                            
                                               <div class="col-sm-5"> 
                                                <input type="number" class="form-control" name="qty" placeholder="Quantity Guest">
                                               
                                                                                            </div>
                                            </div>
                                
                          <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-3 form-control-label">Reservation type</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="reservasi_tipe">
                                                    <option value="">-Select-</option>
                                                    <option value="Front Office Reservation">Front Office Reservation</option>
                                                    <option value="Website">Website</option>
                                                    <option value="Agent">Agent</option>
                                                </select>
                                            </div>
                                        </div>              


                                            
                </div>    
 

              
                      
<div class="panel panel-default col-lg-4">
                <div class="panel-heading">Payment</div>
                    <br>
                    <p>
                    
                            <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-3 form-control-label"> Room Rate</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="harga1" id="harga1" onchange="myFunction1()">
												
													<option value="">-Select-</option>
													<?php
													include"koneksi.php";
													$id_km = $as['id_type'];
													$rad = "SELECT * FROM rate_harga where id_type='$_GET[type]'";
													$x_rad = mysqli_query($konek,$rad);
													while($rate=mysqli_fetch_array($x_rad)){
													?>
													<option value="<?php echo $rate['rate']?>"><?php echo $rate['nama_rate']?></option>
													<?php } ?>
                                                </select>
                                            </div>
                                        </div>  
                                    

                                
                                            
												 <div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label">Saldo</label>
                                            
                                            <div class="col-sm-9">
                                                     <input type="number" class="form-control" id="saldo1" value="0" name="saldo" onkeyup="myFunction1()">                 
                                                </div>
                                                 </div>

                           <div class="form-group row">            
                                    <label for="default-input" class="col-sm-3  form-control-label">Total</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="total1" name="total" readonly>
                                        </div>

                                                
                                            </div>
							<div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-3 form-control-label">Type Of Payment</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="tipe_bayar">
                                                    <option value="Cash">Cash</option>
                                                    <option value="Voucher">Voucher</option>
                                                    <option value="Credit Card">Credit Card</option>
                                                    <option value="Company Account">Company Account</option>
                                                    <option value="Credit Card">Credit Card</option>
                                                </select>
                                            </div>
                                        </div>  
                                            
                                    </div>  
 </div>
                        <div class="modal-header"></div>
                        <div class="row">
</div>
 <div class="modal-footer">
                
                <button type="submmit" class="btn btn-primary">Save changes</button>
            </div>
          <!--  Modal content for personal-reservation1 -->
                                    
                                                </div>
                                            </div>
											</form>
											
					<?php } ?>

                                
                            
                            <!-- end col-12 -->
                        <!-- end row -->

                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            Hotem Management System <strong class="text-custom">| Nama Hotel</strong>.
                        </div>
                        <div>
                            <strong>Mahakarya Teknologi</strong> - Copyright &copy; 2017
                        </div>
                    </div> <!-- end footer -->

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- Jquery-Ui -->
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- BEGIN PAGE SCRIPTS -->
        <script src="assets/plugins/moment/moment.js"></script>
        <script src='assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
        <script src="assets/pages/jquery.fullcalendar.js"></script>


        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>
        <script src="assets/js/moment-with-locales.js"></script>
        <script src="assets/js/bootstrap-datetimepicker.js"></script>
		
		<!-- Menu Tab -->
		<script>
		function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

<script>
$(function() { 
  $('#tgla').datetimepicker({
   locale:'id',
    format:'YYYY-MM-DD'
   });
   
  $('#tglb').datetimepicker({
   useCurrent: false,
   locale:'id',
    format:'YYYY-MM-DD'
   });
   
   $('#tgla').on("dp.change", function(e) {
    $('#tglb').data("DateTimePicker").minDate(e.date);
  });
  
   $('#tglb').on("dp.change", function(e) {
    $('#tgla').data("DateTimePicker").maxDate(e.date);
      CalcDiff1()
   });
  
});

function CalcDiff1(){
var a=$('#tgla').data("DateTimePicker").date();
var b=$('#tglb').data("DateTimePicker").date();
    var timeDiff=0
     if (b) {
            timeDiff = (b - a) / 1000;
        }
	
	$('#selisih2').val(Math.floor(timeDiff/(86400)))   
}
</script>	


<script>
// Fungsi untuk pengiriman form baca dokumentasinya di https://github.com/malsup/form/
	function set_ajax(identifier){
		
		var options = {
			beforeSend: function() {

				$(".progress-container").show();
				$(".btn-submit").attr("disabled",""); // Membuat button submit jadi tidak bisa terklik
			 
			},
			uploadProgress: function(event, position, total, percentComplete) {

				$(".progress-bar").attr('style','width'+percentComplete+'%');

			},
			success:function(data, textStatus, jqXHR,ui) {

				if ( data.trim() == "Sukses" ) {

					$(".progress-bar").attr('style','width:100%');
					setTimeout(function(){ location.reload() }, 2000);

				} else {

					$(".progress-container").hide();
					$("#pesan-required-field").html(data);
					$("#modal-peringatan").modal('show');
					$(".btn-submit").removeAttr('disabled','');
				}

			},
			error: function(jqXHR, textStatus, errorThrown){

				$(".progress-container").hide();
				$("#pesan-required-field").html('Gagal Memproses data<br/> textStatus='+textStatus+', errorThrown='+errorThrown);
				$("#modal-peringatan").modal('show');
			}
		 
		};
		 
		// kirim form dengan opsi yang telah dibuat diatas
		$("#"+identifier).ajaxForm(options);
	}
$(function(){

		// Untuk pengiriman form tambah
		set_ajax('tambah-data');

		// Untuk pengiriman form sunting
		set_ajax('room');

		// Hapus
		$('#modal-konfirmasi').on('show.bs.modal', function (event) {
			var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

			// Untuk mengambil nilai dari data-id="" yang telah kita tempatkan pada link hapus
			var id = div.data('id') 

			var modal = $(this)

			// Mengisi atribut href pada tombol ya yang kita berikan id hapus-true pada modal.
			modal.find('#hapus-true').attr("href","engine.php?p=hapus&id="+id); 

		});


		// Untuk sunting
		$('#room').on('show.bs.modal', function (event) {
			var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

			var id 		= div.data('id_kamar');
			var nomor 	= div.data('nomor_kamar');
			

			var modal 	= $(this)

			// Isi nilai pada field
			modal.find('#id_kamar').attr("value",id);
			modal.find('#rooms').attr("value",nomor);
			

			// Membuat combobox terpilih berdasarkan jenis kelamin yg tersimpan saat pengeditan
			modal.find('#jenkel option').each(function(){
				  if ($(this).val() == jenkel )
				    $(this).attr("selected","selected");
			});

		});

	});
</script>



<style>
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>



    </body>
</html>