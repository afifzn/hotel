<?php include"header.php"?>

                            <!-- Left Menu Start -->
                            <?php include"navbar.php"?>
                <!--left navigation end-->
                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

				
				<div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card-box">
                                    <a href="#" class="btn btn-sm btn-default pull-right">View</a>
                                    <h6 class="text-muted m-t-0 text-uppercase">Kamar terisi</h6>
                                    <h2 class="m-b-20"><span>10| Kamar</span></h2>
                                    <div class="progress progress-sm m-0">
									<?php 
										$bar="SELECT COUNT(*)FROM kamar";
										$xbar=mysqli_query($konek,$bar);
										$prog=mysqli_fetch_row($xbar);
										
										  $oc="SELECT COUNT (*) FROM kamar WHERE status_kamar='OC'";
										  $xoc=mysqli_query($konek,$oc);
										  $poc=mysqli_fetch_row($xoc);
										  
										  $progress= ($poc[0]/$prog[0]) * 100;
									?>
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="10" style="width: <?php echo ceil($progress)?>%;">
                                            <span class="sr-only">10% Complete <?php echo ceil($progress)?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card-box">
                                    <a href="#" class="btn btn-sm btn-default pull-right">View</a>
                                    <h6 class="text-muted m-t-0 text-uppercase">Kamar Tersedia <?php echo $poc[0]?></h6>
                                    <h2 class="m-b-20"><span>7| Kamar <?php echo $prog[0]?></span></h2>
                                    <div class="progress progress-sm m-0">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card-box">
                                    <a href="#" class="btn btn-sm btn-default pull-right">View</a>
                                    <h6 class="text-muted m-t-0 text-uppercase">Kamar Siap Dijual</h6>
                                    <h2 class="m-b-20">3| Kamar</h2>
                                    <div class="progress progress-sm m-0">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="header-title m-t-0"></h4>
                            </div>
                        </div> <!-- end row -->
						<?php
							include"koneksi.php";
							$r="SELECT * FROM kamar WHERE status_kamar='VR'";
							$o=mysqli_query($konek,$r);
							while($room=mysqli_fetch_array($o)){
								
						?> 
							<a href="#room<?php echo $room['id_kamar']?>" data-toggle="modal">
							<div class="col-sm-2">
						<div class="card-box1">
                                <h6 class="text-muted m-t-0 text-uppercase"><?php echo $room['nomor_kamar']?></h6>
                                    <h3 class="ti-home"> <?php echo $room['status_kamar']?></h3>
                                   </div>
                            </div>
							</a>
							<!-- BEGIN MODAL ROOM-->
                                <!-- /.modal -->

                                    <div id="room<?php echo $room['id_kamar']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-full">
										
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="full-width-modalLabel">ROOM <?php echo $room['nomor_kamar']?></h4>
                                                </div>
												<form action="engine.php?p=reservasi" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
												<input type="hidden" name="id_kamar" value="<?php echo $room['id_kamar'];?>">
												<div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label"> Price Room</label>
                                                                <input type="text" class="form-control" id="field-3" placeholder="Guest Name " name="harga" readonly value="<?php echo $room['harga_kamar']?>">
                                                            </div>
                                                        </div>
                                                    </div>
													
												
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                                </div>
                                            </div>
											</form><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div>
                                <!-- END MODAL -->
							<?php } ?>
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
<script>
$(function() { 
  $('#tgl1').datetimepicker({
   locale:'id',
   format:'DD/MMMM/YYYY'
   });
   
  $('#tgl2').datetimepicker({
   useCurrent: false,
   locale:'id',
   format:'DD/MMMM/YYYY'
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
    </body>
</html>