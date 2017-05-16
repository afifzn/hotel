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
					<div class="row">
								



<script>
function showUser2(str) {
  if (str=="") {
    document.getElementById("room-list").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("room-list").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getdata_group.php?q="+str,true);
  xmlhttp.send();
}
</script>							
						<div class="panel panel-default col-lg-12">
						<?php
						include"koneksi.php";
							$n="SELECT nama_tamu FROM tamu ORDER BY id_tamu DESC LIMIT 1";
							$x_n=mysqli_query($konek,$n);
							$nama=mysqli_fetch_array($x_n);
						?>
						 <div class="panel-heading">Room for  Reservation <?php echo $nama['nama_tamu']?></div>
						 <br>
						 
						  <div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label" >Type Room</label>
                                          <div class="col-sm-9">
                                                     <select class="form-control" name="type" onchange="showUser2(this.value)">                 
													 <option value="">-Select-</option>
													<?php
													include"koneksi.php";
														$co1="SELECT * FROM type_kamar";
														$xc1=mysqli_query($konek,$co1);
														while($negara1=mysqli_fetch_array($xc1)){
													?>
                                                    <option value="<?php echo $negara1['id_type']?>"><?php echo $negara1['nama_type']?></option>
														<?php } ?>
													 </select>
                                                </div>
                                                 </div>
												 <form action="" method="post" class="form-user">
											<div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label" >Room</label>
                                          <div class="col-sm-4">
                                                     <select class="form-control" name="id_kmr" id="room-list" onchange="">                 
													 
													
                                                    
													 </select><br>
													  <div class="col-sm-4">
													 <a class="btn-simpan">Select</a>
                                                </div>
                                                </div>
                                                 </div>
												 </form>
												 <script type="text/javascript">
	$(document).ready(function(){
		$(".btn-simpan").click(function(){
			var data = $('.form-user').serialize();
			$.ajax({
				type: 'POST',
				url: "aksi.php",
				data: data,
				
			});
		});
	});
	</script>
						
						 <div class="form-group row">
									   <label class="col-sm-3 form-control-label" >ARR Date</label>
                                                        <div class="col-sm-9">
                     
									<div class="input-group date" id="tglb1">
										<input type="text" class="form-control ks-default" name="tgl_masuk"  value=""  />	
										<span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
												</div>
				
                                                        </div>
                                                    </div> 				 
						
						<div class="form-group row">
									   <label class="col-sm-3 form-control-label" >DEP Date</label>
                                                        <div class="col-sm-9">
                     
									<div class="input-group date" id="tglb2">
										<input type="text" class="form-control ks-default" name="tgl_masuk"  value=""  />	
										<span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
												</div>
				
                                                        </div>
                                                    </div> 
													
						<div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">Night</label>
                                            <div class="col-sm-4">
                                                      <input type="text" class="form-control" id="selisihb2" name="selisihb2" onchange="MyFuntcion()" readonly>                                       </div>
                                            
                                               <div class="col-sm-5"> 
                                                <input type="number" class="form-control" name="qty" placeholder="Guest Quantity">
                                               
                                                                                            </div>
                                            </div>	

											
						<div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label" >Resevation Type </label>
                                          <div class="col-sm-9">
                                                     <input type="text" class="form-control" name="no_id" placeholder="Request" required >                 
                                                </div>
                                                 </div>
												 
						</div>
						
						 
				
							<div class="panel panel-default col-lg-12">
						 <div class="panel-heading">Payment</div>
						 <br>
						 
						 <div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label" >Room Rate</label>
                                          <div class="col-sm-9">
                                                     <select class="form-control" id="hargaB" onChange="myFunctionB()">
													 
													
													 </select>
                                                </div>
                                                 </div>
						
						<div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label" >Saldo</label>
                                          <div class="col-sm-9">
                                                     <input type="text" class="form-control" name="no_id"  required >                 
                                                </div>
                                                 </div>						 
						
						<div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label" >Total</label>
                                          <div class="col-sm-9">
                                                     <input type="text" class="form-control" name="no_id"  required ReadOnly >                 
                                                </div>
                                                 </div>
						<div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label" >Type Of Payment</label>
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
$(function() { 
  $('#tglb1').datetimepicker({
   locale:'id',
    format:'YYYY-MM-DD'
   });
   
  $('#tglb2').datetimepicker({
   useCurrent: false,
   locale:'id',
    format:'YYYY-MM-DD'
   });
   
   $('#tglb1').on("dp.change", function(e) {
    $('#tglb2').data("DateTimePicker").minDate(e.date);
  });
  
   $('#tglb2').on("dp.change", function(e) {
    $('#tglb1').data("DateTimePicker").maxDate(e.date);
      CalcDiff1()
   });
  
});

function CalcDiff1(){
var a=$('#tglb1').data("DateTimePicker").date();
var b=$('#tglb2').data("DateTimePicker").date();
    var timeDiff=0
     if (b) {
            timeDiff = (b - a) / 1000;
        }
	
	$('#selisihb2').val(Math.floor(timeDiff/(86400)))   
}
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