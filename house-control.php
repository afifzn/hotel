<?php include"header.php"?>

                            <!-- Left Menu Start -->
                            <?php include"navbar-hc.php"?>
                <!--left navigation end-->
                <!-- START PAGE CONTENT -->
				
                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
                            
                                <a href="#tambah_kamar" data-toggle="modal"><button type="button" class="btn btn-success btn-bordered">Add House</button></a>
								
                        
                                <div class="m-b-20 table-responsive"></br>

                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>House Number</th>
                                            <th>House Type</th>
                                            
                                            <th>House Status</th>
                                          <th>Action</th>
                                        </tr>
                                        </thead>


                                        <tbody>
										<?php
											$gu="SELECT * FROM kamar,type_kamar WHERE kamar.id_type=type_kamar.id_type";
											$xgu=mysqli_query($konek,$gu);
											while($data=mysqli_fetch_array($xgu)){
											
										?>
                                        <tr>
                                            <td><?php echo $data['nomor_kamar']?></td>
                                            <td><?php echo $data['nama_type']?></td>
                                            <td><?php echo $data['status_kamar']?></td>
                                            <td><div class="btn-group">
  <a class="btn btn-success btn-bordered" data-toggle="dropdown" href="#">
    Action
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu">
  <li><a href="price-room.php">Price(s)</a></li>
    <li><a href="#edit_kamar<?php echo $data['id_kamar']?>" data-toggle="modal">Edit</a></li>
    <li><a href="#hapus_kamar<?php echo $data['id_kamar']?>" data-toggle="modal">Hapus</a></li>
    
    
  </ul>
</div></td>
                                            
                                        </tr>
										
										<div id="edit_kamar<?php echo $data['id_kamar']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
										<form action="core_hannah.php?p=edit_kamar" method="post" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Edit House</h4>
                                                </div>
                                                <div class="modal-body">
                                                   <input type="hidden" class="form-control" id="field-3" value="<?php echo $data['id_kamar']?>" name="id_kamar">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">House Number</label>
                                                                <input type="text" class="form-control" id="field-3" value="<?php echo $data['nomor_kamar']?>" placeholder="House Number" name="nomor_kamar">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group no-margin">
                                                                <label for="field-7" class="control-label">House Type</label>
																<select class="form-control" id="field-3"  name="tipe_kamar">
																	<option value="<?php echo $data['id_type']?>"><?php echo $data['nama_type']?></option>
																	<?php
																		include"koneksi.php";
																		$type="SELECT * FROM type_kamar";
																		$x_type=mysqli_query($konek,$type);
																		while($tipe=mysqli_fetch_array($x_type)){
																	?>
																	<option value="<?php echo $tipe['id_type']?>"><?php echo $tipe['nama_type']?></option>
																		<?php } ?>
																</select>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">House Description</label>
                                                                <textarea  class="form-control" id="field-3"  name="desk">
																<?php echo $data['deskripsi']?>
																</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                               <img src="assets/gambar/<?php echo $data['gambar']?>" width="150" height="150">
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">House Pict</label>
                                                                <input type="hidden" class="form-control" id="field-3"  name="images" value="<?php echo $data['gambar']?>">
                                                                <input type="file" class="form-control" id="field-3"  name="gambar">
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">House Status</label>
                                                                <input type="text" class="form-control" id="field-3" value="<?php echo $data['status_kamar']?>" placeholder="House Number" name="status_kamar">
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
									
									<div id="hapus_kamar<?php echo $data['id_kamar']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
										<form action="core_hannah.php?p=hapus_kamar" method="post" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Hapus Data</h4>
                                                </div>
                                                <div class="modal-body">
                                                   <input type="hidden" class="form-control" id="field-3" value="<?php echo $data['id_kamar']?>" name="id_kamar">
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
					
					<div id="tambah_kamar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
										<form action="core_hannah.php?p=tambah_kamar" method="post" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Add House</h4>
                                                </div>
                                                <div class="modal-body">
                                                   <input type="hidden" class="form-control" id="field-3" value="<?php echo $_SESSION['nama']?>" name="id_admin">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">House Number</label>
                                                                <input type="text" class="form-control" id="field-3" placeholder="House Number" name="nomor_kamar">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group no-margin">
                                                                <label for="field-7" class="control-label">House Type</label>
																<select class="form-control" id="field-3"  name="tipe_kamar">
																	<option value="">-Select-</option>
																	<?php
																		include"koneksi.php";
																		$type="SELECT * FROM type_kamar";
																		$x_type=mysqli_query($konek,$type);
																		while($tipe=mysqli_fetch_array($x_type)){
																	?>
																	<option value="<?php echo $tipe['id_type']?>"><?php echo $tipe['nama_type']?></option>
																		<?php } ?>
																</select>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">House Description</label>
                                                                <textarea  class="form-control" id="field-3"  name="desk">
																</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">House Pict</label>
                                                                <input type="file" class="form-control" id="field-3"  name="gambar">
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