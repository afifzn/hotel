<?php include"header.php"?>

                            <!-- Left Menu Start -->
                            <?php include"navbar-hc.php"?>
                <!--left navigation end-->
                <!-- START PAGE CONTENT -->
				
                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
                            
                                <a href="#tambah_rate" data-toggle="modal"><button type="button" class="btn btn-success btn-bordered">Add House Type</button></a>
								
                        
                                <div class="m-b-20 table-responsive"></br>

                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
											
											<th>House Type</th>
                                           
                                            <th>Action</th>
                                        </tr>
                                        </thead>


                                        <tbody>
										<?php
											$gu="SELECT * FROM type_kamar";
											$xgu=mysqli_query($konek,$gu);
											while($data=mysqli_fetch_array($xgu)){
											
										?>
                                        <tr>
                                            
                                            <td><?php echo $data['nama_type']?></td>
                                           
                                           
                                            <td><div class="btn-group">
  <a class="btn btn-success btn-bordered" data-toggle="dropdown" href="#">
    Action
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu">
  <li><a href="price-room.php"></a></li>
    <li><a href="price-room.php?id=<?php echo $data['id_type']?>&name=<?php echo $data['nama_type']?>" data-toggle="modal">Price(s)</a></li>
    <li><a href="#edit_rate<?php echo $data['id_type']?>" data-toggle="modal">Edit</a></li>
    <li><a href="#hapus_rate<?php echo $data['id_type']?>" data-toggle="modal">Hapus</a></li>
    
    
  </ul>
</div></td>
                                            
                                        </tr>
										
										<div id="edit_rate<?php echo $data['id_type']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
										<form action="core_hannah.php?p=edit_type" method="post" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Edit House Rate</h4>
                                                </div>
                                                <div class="modal-body">
                                                   <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">Type Name</label>
                                                                <input type="text" class="form-control" id="field-3" value="<?php echo $data['nama_type']?>" placeholder="Name Rate" name="nama">
                                                                <input type="hidden" class="form-control" id="field-3" value="<?php echo $data['id_type']?>" placeholder="Name Rate" name="id_type">
                                                            </div>
                                                        </div>
                                                    </div>
													
													
													
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
                                                </div>
                                            </div>
											</form>
                                        </div>
                                    </div>
									
									<div id="hapus_rate<?php echo $data['id_type']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
										<form action="core_hannah.php?p=hapus_type" method="post" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Delete Data</h4>
                                                </div>
                                                <div class="modal-body">
                                                   <input type="hidden" class="form-control" id="field-3" value="<?php echo $data['id_type']?>" name="id_type">
                                                   Are you sure want to delete this data ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">No</button>
                                                    <button type="submit" class="btn btn-danger waves-effect waves-light">Yes</button>
                                                </div>
                                            </div>
											</form>
                                        </div>
                                    </div>
											<?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            
                        <!-- end row -->

             
                    <!-- end container -->
					
					<div id="tambah_rate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
										<form action="core_hannah.php?p=tambah_type" method="post" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Add House Type</h4>
                                                </div>
                                                <div class="modal-body">
                                                   
                                                    
                                                    
                                                   
													 <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">Type Name</label>
                                                                <input type="text" class="form-control" id="field-3" placeholder="Name Rate" name="nama">
                                                            </div>
                                                        </div>
                                                    </div>
													
													
													
													
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                                </div>
                                            </div>
											</form>
                                        </div>
                                    </div>

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