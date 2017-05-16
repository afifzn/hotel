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
					<form action="core_hannah.php?p=reservation_group1" method="post">
					<div class="row">
						<div class="panel panel-default col-lg-12">
						 <div class="panel-heading">Guest Information</div>
							<br>						 
						 
						 <div class="form-group row">
                                          <label for="sel1" class="col-sm-3 form-control-label">Name</label>
                                          <div class="col-sm-2">
                                          <select class="form-control" id="sel1" name="gelar">
                                            
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Mss">Mss</option>
                                            
                                          </select>
                                          </div>
                                          <div class="col-xs-7" >
                                                <input type="text" class="form-control ks-default" id="default-input-rounded"
                                                placeholder="Name" name="nama" required></input>
                                            </div>
                                        </div>
						
						<div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label" >Addres</label>
                                          <div class="col-sm-9">
                                                     <input type="text" class="form-control" name="alamat" placeholder="Addres" required >                 
                                                </div>
                                                 </div>						 
						
						<div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label" >ID Number</label>
                                          <div class="col-sm-9">
                                                     <input type="text" class="form-control" name="no_id" placeholder="ID Number" required >                 
                                                </div>
                                                 </div>
						<div class="form-group row">
											<label for="default-input" class="col-sm-3  form-control-label" >Country</label>
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
											<label for="default-input" class="col-sm-3  form-control-label" >Request</label>
                                          <div class="col-sm-9">
                                                     <input type="text" class="form-control" name="request" placeholder="Request" required >                 
                                                </div>
                                                 </div>
												 
							</div>		


						
						 
				
							 <div class="modal-footer">
                
                <button type="submmit" class="btn btn-primary">Save</button>
            </div>

                                
                            
                            <!-- end col-12 -->
                        <!-- end row -->
						</form>
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










    </body>
</html>