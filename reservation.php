<?php include"header.php"?>

                            <!-- Left Menu Start -->
                            <?php include"navbar_fo.php"?>
                <!--left navigation end-->
                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

				
				<div class="container">
                        <div class="row">
                            <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Vr')">Vacant Rooms</button>
  <button class="tablinks" onclick="openCity(event, 'Oc')">Occupied Clean Rooms</button>
  <button class="tablinks" onclick="openCity(event, 'Vm')">Vacant Maintenance</button>
</div>

<div id="Oc" class="tabcontent">
  <div class="row">
                            <div class="col-lg-12">
  <?php
							include"koneksi.php";
							$r="SELECT * FROM kamar,tamu,reservasi WHERE reservasi.id_tamu=tamu.id_tamu AND reservasi.id_kamar=kamar.id_kamar AND kamar.status_kamar='OC' AND tamu.status='In'";
							$o=mysqli_query($konek,$r);
							while($room=mysqli_fetch_array($o)){
								if($room['status_kamar']=='OC'){
									$l="card-box3";
								}else if($room['status_kamar']=='VM'){
									$l="card-box2";
								}
								
						?> 
							<a href="#oc<?php echo $room['id_kamar']?>" data-toggle="modal">
							<div class="col-sm-2">
						<div class="<?php echo $l?>">
                                <h6 class="text-muted m-t-0 text-uppercase"><?php echo $room['nomor_kamar']?></h6>
                                    <h3 class="ti-home"> <?php echo $room['status_kamar']?></h3>
                                   </div>
                            </div>
							</a>
							<!-- BEGIN MODAL ROOM-->
							<div id="oc<?php echo $room['id_kamar']?>" class="modal fade personal-reservation" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog" style="width:90%;">
										

										<form  action="" method="post" name='autoSumForm' enctype="multipart/form-data" role="form">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="myLargeModalLabel">Walk In / Reservation</h4>
                                                </div>
                                                <div class="modal-body">
              <div class="row">

              <div class="panel panel-default col-lg-6">
                <div class="panel-heading">Guest Information</div>
                    <br>
                    <p>
                    
                    <div class="form-group row">
                                          <label for="sel1" class="col-sm-3 form-control-label">Name</label>
                                         
                                          <div class="col-xs-9" >
                                                <input type="text" class="form-control ks-default" id="default-input-rounded"
                                                placeholder="Name" value="<?php echo $room['nama_tamu']?>" name="nama" readonly></input>
                                            </div>
                                        </div>
                       <div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label">Address</label>
                                            
                                            <div class="col-sm-9">
                                                     <input type="text" class="form-control" value="<?php echo $room['alamat']?>" name="alamat" readonly>                 
                                                </div>
                                                 </div>
										<div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label" >ID Number</label>
                                          <div class="col-sm-9">
                                                     <input type="text" class="form-control" value="<?php echo $room['nomor_id']?>" name="no_id" placeholder="Identity Number" readonly >                 
                                                </div>
                                                 </div>
												 <div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label" >Country</label>
                                          <div class="col-sm-9">
                                                     <input type="text" class="form-control" value="<?php echo $room['negara']?>" name="no_id" placeholder="Identity Number" readonly >                 
                                                </div>
                                                 </div>

                                        
                                
                          
							<div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label">Request</label>
                                          <div class="col-sm-9">
                                                     <input type="text" class="form-control" value="<?php echo $room['request']?>" name="request" placeholder="Guest Request" readonly >                 
                                                </div>
                                                 </div>


                                            
                </div>    
                                   
                <div class="panel panel-default col-lg-6">
                <div class="panel-heading">Room Reservation</div>
                    <br>
                    <p>
                    
                     <div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label" >Room(s)</label>
                                          <div class="col-sm-9">
                                                     <input type="text" class="form-control" value="<?php echo $room['nomor_kamar']?>" name="no_id" placeholder="Identity Number" readonly >                 
                                                </div>
                                                 </div>
                        
                                       <div class="form-group row">
									   <label class="col-sm-3 form-control-label" >ARR Date</label>
                                                        <div class="col-sm-9">
                                                           
					
					<div class="input-group date" id="tgl1">
						<input type="text" class="form-control ks-default" name="tgl_masuk"  value="<?php echo $room['tgl_masuk']?>" readonly />	
							<span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
					</div>
				
                                                        </div>
                                                    </div> 
													
													<div class="form-group row">
                                                       
                                                            
					<label for="default-input" class="col-sm-3  form-control-label">DEP Date</label>
					 <div class="col-sm-9">
					<div class="input-group date" id="tgl2">
						<input type="text" class="form-control" name="tgl_keluar" value="<?php echo $room['tgl_keluar']?>"  readonly />	
							<span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
					</div>
				
                                                        </div>
                                                    </div>
													
													
													


                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">Night</label>
                                            <div class="col-sm-4">
                                                      <input type="text" class="form-control" id="selisih" name="selisih" value="<?php echo $room['lama_inap']?>"  readonly>                                       </div>
                                            
                                               <div class="col-sm-5"> 
                                                <input type="number" class="form-control" name="qty" placeholder="Quantity Guest" value="<?php echo $room['qty']?>" readonly >
                                               
                                                                                            </div>
                                            </div>
											  <div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label">reservation Type</label>
                                            
                                            <div class="col-sm-9">
                                                     <input type="text" class="form-control" value="<?php echo $room['tipe_reservasi']?>" name="alamat" placeholder="Address" readonly>                 
                                                </div>
                                                 </div>
                                
                                    


                                            
                </div>    
 

              
                      
  
 </div>
                        <div class="modal-header"></div>
                        <div class="row">
</div>
 <div class="modal-footer">
                <button type="button" class="btn btn-primary-outline ks-light" data-dismiss="modal">Close</button>
               
            </div>
          <!--  Modal content for personal-reservation1 -->
                                    
                                                </div>
                                            </div>
											</form>
                                        </div>
                                    </div>
                                <!-- /.modal -->

                                    
									<?php } ?>
</div>
</div>
</div>

<div id="Vr" class="tabcontent active">
<div class="row">
                            <div class="col-lg-12">
  <?php
							include"koneksi.php";
							$r="SELECT * FROM kamar,type_kamar WHERE status_kamar='VR' AND kamar.id_type=type_kamar.id_type";
							$o=mysqli_query($konek,$r);
							while($room=mysqli_fetch_array($o)){
								if($room['status_kamar']=='VR'){
									$l="card-box1";
								}else if($room['status_kamar']=='VM'){
									$l="card-box2";
								}
								
						?> 
							<a href="form-reservation.php?room=<?php echo $room['id_kamar']?>&type=<?php echo $room['id_type']?>">
							<div class="col-sm-2">
						<div class="<?php echo $l?>">
                                <h6 class="text-muted m-t-0 text-uppercase"><?php echo $room['nomor_kamar']?> | <small><?php echo $room['nama_type']?></small></h6>
                                    <h3 class="ti-home"> <?php echo $room['status_kamar']?></h3>
                                   </div>
                            </div>
							</a>
							<!-- BEGIN MODAL ROOM-->
							
                                <!-- /.modal -->

                                     
									<?php } ?>
</div>
</div>
</div>

<div id="Vm" class="tabcontent">
  <div class="row">
                            <div class="col-lg-12">
  <?php
							include"koneksi.php";
							$r="SELECT * FROM kamar WHERE status_kamar='VM'";
							$o=mysqli_query($konek,$r);
							while($room=mysqli_fetch_array($o)){
								if($room['status_kamar']=='OC'){
									$l="card-box3";
								}else if($room['status_kamar']=='VM'){
									$l="card-box2";
								}
								
						?> 
							<a href="#room<?php echo $room['id_kamar']?>" data-toggle="modal">
							<div class="col-sm-2">
						<div class="<?php echo $l?>">
                                <h6 class="text-muted m-t-0 text-uppercase"><?php echo $room['nomor_kamar']?></h6>
                                    <h3 class="ti-home"> <?php echo $room['status_kamar']?></h3>
                                   </div>
                            </div>
							</a>
							<!-- BEGIN MODAL ROOM-->
                                <!-- /.modal -->

                                    <div id="room<?php echo $room['id_kamar']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog" style="width:55%;">
										
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="full-width-modalLabel">ROOM <?php echo $room['nomor_kamar']?></h4>
                                                </div>
												<form action="" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
												<input type="hidden" name="id_kamar" value="<?php echo $room['id_kamar'];?>">
												
													<div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">Guest Name</label>
                                                                <input type="text" class="form-control" id="field-3" placeholder="Guest Name" value="<?php echo $room['nama_tamu']?>" name="nama_tamu" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
													
													
													
												
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Close</button>
                                                    
                                                </div>
                                            </div>
											</form><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div>
									<?php } ?>
</div>
</div>
</div>

                        </div>
		<!-- Modal Reservasi -->
		<div id="room" class="modal fade personal-reservation" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog" style="width:90%;">
										<script>
function myFunction() {
    var x = document.getElementById("harga").value;
    var z = document.getElementById("selisih").value;
    var b = document.getElementById("saldo").value;
    var a = eval("x * z");
    var tot = eval(a) + eval(b);

    var res = tot;
    document.getElementById("total").value = res;
}
</script>
										<form  action="core_hannah.php?p=reservation_fo" method="post" name='autoSumForm' enctype="multipart/form-data" role="form">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="myLargeModalLabel">Walk In / Reservation</h4>
                                                </div>
                                                <div class="modal-body">
              <div class="row">

              <div class="panel panel-default col-lg-3">
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
                                                placeholder="Name" name="nama"></input>
                                            </div>
                                        </div>
                       <div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label">Address</label>
                                            
                                            <div class="col-sm-9">
                                                     <input type="text" class="form-control" name="alamat" placeholder="Address">                 
                                                </div>
                                                 </div>
										<div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label">ID Number</label>
                                          <div class="col-sm-9">
                                                     <input type="text" class="form-control" name="no_id" placeholder="Identity Number">                 
                                                </div>
                                                 </div>

                                        
                                
                          <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-3 form-control-label">Country</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="negara">
                                                    <option>Indonesia</option>
                                                    <option>Malaysia</option>
                                                    <option>Singapore</option>
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
                                   
                <div class="panel panel-default col-lg-6">
                <div class="panel-heading">Room Reservation</div>
                    <br>
                    <p>
                    
                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Room(s)</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control ks-default" id="rooms"
                                                 value="<?php echo $room['nomor_kamar']?>" readonly>
												
												<input type="text" class="form-control ks-default" id="id_kamar"
                                                  name="id_kamar">
                                        </div>
                                            
                                            
                                        </div>
                        
                                       
													
													
													


                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">Night</label>
                                            <div class="col-sm-4">
                                                      <input type="text" class="form-control" id="selisih" name="selisih" onchange="MyFuntcion()" readonly>                                       </div>
                                            
                                               <div class="col-sm-5"> 
                                                <select class="form-control" name="adult">
                                                    <option>Adult</option>
                                                    <option>Child</option>
                                                    
                                                </select>                                                </div>
                                            </div>
                                
                          <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-3 form-control-label">Reservation type</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="reservasi_tipe">
                                                    <option value="Front Office Reservation">Front Office Reservation</option>
                                                    <option value="Website">Website</option>
                                                    <option value="Agent">Agent</option>
                                                </select>
                                            </div>
                                        </div>              


                                            
                </div>    
 

              
                      
<div class="panel panel-default col-lg-3">
                <div class="panel-heading">Payment</div>
                    <br>
                    <p>
                    
                            <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-3 form-control-label"> Room Rate</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="harga" id="harga" onchange="myFunction()">
													<option value="">--Choice--</option>
													<option value="<?php echo $room['harga_kamar']?>">Publish</option>
                                                    <option value="<?php echo $room['hrg_corporate']?>">Corporate</option>
                                                    <option value="<?php echo $room['hrg_agent']?>">Agent</option>
                                                    <option value="<?php echo $room['hrg_government']?>">Government</option>
                                                    <option value="<?php echo $room['hrg_family']?>">Family/Owner</option>
                                                </select>
                                            </div>
                                        </div>  
                                    

                                
                                            
												 <div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label">Saldo</label>
                                            
                                            <div class="col-sm-9">
                                                     <input type="number" class="form-control" id="saldo" value="0" name="saldo" onkeyup="myFunction()">                 
                                                </div>
                                                 </div>

                           <div class="form-group row">            
                                    <label for="default-input" class="col-sm-3  form-control-label">Total</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="total" name="total" readonly>
                                        </div>

                                                
                                            </div>
							<div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-3 form-control-label">Type Of Payment</label>
                                            <div class="col-sm-9">
                                                <select class="form-control">
                                                    <option value="">Cash</option>
                                                    <option value="">Voucher</option>
                                                    <option value="">Credit Card</option>
                                                    <option value="">Company Account</option>
                                                    <option value="">Credit Card</option>
                                                </select>
                                            </div>
                                        </div>  
                                            
                                    </div>  
 </div>
                        <div class="modal-header"></div>
                        <div class="row">
</div>
 <div class="modal-footer">
                <button type="button" class="btn btn-primary-outline ks-light" data-dismiss="modal">Close</button>
                <button type="submmit" class="btn btn-primary">Save changes</button>
            </div>
          <!--  Modal content for personal-reservation1 -->
                                    
                                                </div>
                                            </div>
											</form>
                                        </div>
                                    </div>
			<!--batas Modal -->
						
                        <!-- end row -->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="header-title m-t-0"></h4>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-lg-12">

                               

                                
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->

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
  $('#tgl1').datetimepicker({
   locale:'id',
    format:'YYYY-MM-DD'
   });
   
  $('#tgl2').datetimepicker({
   useCurrent: false,
   locale:'id',
    format:'YYYY-MM-DD'
   });
   
   $('#tgl1').on("dp.change", function(e) {
    $('#tgl2').data("DateTimePicker").minDate(e.date);
  });
  
   $('#tgl2').on("dp.change", function(e) {
    $('#tgl1').data("DateTimePicker").maxDate(e.date);
      CalcDiff()
   });
  
});

function CalcDiff(){
var a=$('#tgl1').data("DateTimePicker").date();
var b=$('#tgl2').data("DateTimePicker").date();
    var timeDiff=0
     if (b) {
            timeDiff = (b - a) / 1000;
        }
	
	$('#selisih').val(Math.floor(timeDiff/(86400)))   
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