<?php include"header.php"?>

                            <!-- Left Menu Start -->
                            <?php include"navbar_fo.php"?>
                <!--left navigation end-->
                <!-- START PAGE CONTENT -->
				
                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="m-t-0 header-title">Reservation List</h4>
								
                        <div class="row p-t-50">
                            <div class="col-sm-12">
                                <div class="m-b-20 table-responsive">

                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Reservation Type</th>
                                            <th>Guest</th>
                                            <th>Rooms Number</th>
                                            <th>Arrival</th>
                                            <th>Deposito</th>
                                        </tr>
                                        </thead>


                                        <tbody>
										<?php
											$gu="SELECT * FROM kamar,tamu,reservasi WHERE reservasi.id_tamu=tamu.id_tamu AND reservasi.id_kamar=kamar.id_kamar AND kamar.status_kamar='OC' AND tamu.status='In'";
											$xgu=mysqli_query($konek,$gu);
											while($guest=mysqli_fetch_array($xgu)){
											
										?>
                                        <tr>
                                            <td><?php echo $guest['nama_tamu']?></td>
                                            <td><?php echo $guest['tipe_reservasi']?></td>
                                            <td><?php echo $guest['qty']?></td>
                                            <td><?php echo $guest['nomor_kamar']?></td>
                                            <td><?php echo $guest['tgl_masuk']?></td>
                                            <td>Rp <?php echo $guest['saldo']?></td>
                                        </tr>
											<?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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

        <!-- Datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.colVis.js"></script>
        <script src="assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <!-- init -->
        <script src="assets/pages/jquery.datatables.init.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>
<script src="assets/js/moment-with-locales.js"></script>
        <script src="assets/js/bootstrap-datetimepicker.js"></script>
		
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
    </body>
</html>