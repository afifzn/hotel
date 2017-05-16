<?php include"header.php";
include "koneksi.php";
include "navbar-bo.php";
?>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        <div class="row p-t-50">
                            <div class="col-sm-12">
                                <div class="m-b-20 table-responsive">

                                    
                                   <a href="#id_hutanglainlain" data-toggle="modal"> <button class="btn btn-primary waves-effect waves-light" >Tambah hutang</button></a>
										<br><br><div id="id_hutanglainlain" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Tambah Hutang Lainnya</h4>
                                                </div>
                                               <form name="id_hutanglain" action="engine_AZ.php?p=tambah_hutanglain" method="post" >
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="nabar" class="control-label">Nama Hutang</label>
                                                                <input type="text" class="form-control" name="nama" placeholder="Nama hutang">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group" >
                                                                <label for="jabar" class="control-label">Jumlah hutang</label>
                                                                <input type="text" class="form-control" name="jumlah" placeholder="Jumlah hutang">
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group" >
                                                                <label for="jabar" class="control-label">Tanggal Jatuh Tempo</label>
                                                                <input type="date" class="form-control" name="tanggal" placeholder="Jumlah hutang">
                                                            </div>
                                                        </div>
                                                    </div>
                                             
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button  type="submit" id="simpan" name="simpan" value="simpan" class="btn btn-info waves-effect waves-light">Save changes</button>
													
												</div>
												</form>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->

                                    <table id="datatable-responsive"
                                           class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                           width="100%">
                                        <thead>
                                        <tr>
                                            <th>Debt Name</th>
                                            <th>Value</th>
                                            <th>Out Of Date</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql="select * from hutang_lain";
										$exe=mysqli_query($konek,$sql);
										while ($data=mysqli_fetch_array($exe))
										{
										
										?>
										<tr>
                                            <td><?php echo $data['nama']?></td>
                                            <td><?php echo $data['jumlah']?></td>
                                            <td><?php echo $data['tanggal']?></td>
                                            
											<td><a href="#edit_hutanglain<?php echo $data['id_hutanglain'] ?>" data-toggle="modal">
                                            <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal"><i class="mdi mdi-pencil"></i></button> </a> 
                                            
											<a href="#hapus_hutanglain<?php echo $data['id_hutanglain']?>" data-toggle="modal"> 
                                             <button class="btn btn-primary waves-effect waves-effect" id="sa-warning">
											<i class="mdi mdi-delete-forever"></i></button> </a>
                                        
										</tr>
										<div id="edit_hutanglain<?php echo $data['id_hutanglain'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content" >
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Tabel Edit Hutang Supplier</h4>
                                                </div>
                                               <form name="edit_hutanglain" action="engine_AZ.php?p=edit_hutanglain" method="post" >
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="nabar" class="control-label">Nama hutang</label>
                                                                <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>" placeholder="Nama hutang">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group" >
                                                                <label for="jabar" class="control-label">Jumlah hutang</label>
                                                                <input type="text" class="form-control" name="jumlah" value="<?php echo $data['jumlah'] ?>" placeholder="Jumlah hutang">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="habar" class="control-label"> tanggal</label>
                                                                <input type="date" class="form-control" name="tanggal" value="<?php echo $data['tanggal'] ?>" placeholder="Harga hutang">
                                                            </div>
                                                        </div>
                                                    </div>
                                                             <input type="hidden" class="form-control" name="id_hutanglain" value="<?php echo $data['id_hutanglain'] ?>" placeholder="Nama hutang">
                                                       
													<div class="row">
														</div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button  type="submit" id="simpan" name="simpan" value="simpan" class="btn btn-info waves-effect waves-light">Save changes</button>
													
												</div>
												</form>
                                            </div>
                                        </div>
                                    </div>
									
									
									
									<!-- HAPUS HUTANG -->

									
									<div id="hapus_hutanglain<?php echo $data['id_hutanglain'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content" >
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Delete Data</h4>
                                                </div>
                                               <form name="hapus_hutanglain" action="engine_AZ.php?p=hapus_hutanglain" method="post">
                                                <div class="modal-body">
                                                    
                                                             <input type="hidden" class="form-control" name="id_hutanglain" value="<?php echo $data['id_hutanglain'] ?>">
                                                       
													are you sure want to delete this data ?   
													
													<div class="row">
														</div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">NO</button>
                                                    <button  type="submit" id="hapus" name="hapus" value="hapus" class="btn btn-danger waves-effect waves-light">YES</button>
													
												</div>
												</form>
                                            </div>
                                        </div>
									</div>
									
									<!-- HAPUS HUTANG -->
									
									
                                        <?php 
										}
										?>                        
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
                            Project Completed <strong class="text-custom">39%</strong>.
                        </div>
                        <div>
                            <strong>Simple Admin</strong> - Copyright &copy; 2017
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

		<!-- Sweet-Alert  -->
        <script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="assets/pages/jquery.sweet-alert.init.js"></script>
        <!-- init -->
        <script src="assets/pages/jquery.datatables.init.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>