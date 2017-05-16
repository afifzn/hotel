<ul class="metisMenu nav" id="side-menu">
                                <li><a href="reservation.php"><i class="ti-layers-alt"></i> Dashboard </a></li>

                               
								<li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-paint-roller"></i> Reservation<span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="#room1" data-toggle="modal">Walk In / Reservation</a></li>
                                        <li><a href="group-reservation.php">Group Reservation</a></li>
                                        <li><a href="#extra-bed" data-toggle="modal">Extra Bed(s)</a></li>
                                        <li><a href="" data-toggle="">Extra Room(s)</a></li>
                                        <li><a href="#">Check Out</a></li>
										
                                    </ul>
                                </li>
								
								<li><a href="reservation_list.php"><span class="label label-custom pull-right"></span> <i class="ti-align-justify"></i>Reservation List </a></li>
								<li><a data-toggle="modal" data-target="#con-close-modal"><span> <i class="ti-share"></i>Booking Rooms </a></li>
								<li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-paint-roller"></i> House Keeping <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="house_status.php">House Status</a></li>
                                        <li><a href="#">Maintenance block list</a></li>
                                        <li><a href="#">Pendapatan Lainnya</a></li>
										<li><a href="#">Grafik Pendapatan</a></li>
										<li><a href="#">Report Pendapatan</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-rss-alt"></i>Guest Acces Control<span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
										<li><a href="#">Acces Doors</a></li>
                                        <li><a href="#">Internet Acces</a></li>
                                    </ul>
                                </li>
								
								<li><a href="#"><span class="label label-custom pull-right"></span> <i class="ti-settings"></i>Setting & support</a></li>
								
                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
				<!--Modal reservasi-->
				<div id="room1" class="modal fade personal-reservation" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog" style="width:90%;">
										<script>
function myFunction() {
    var x = document.getElementById("harga").value;
    var z = document.getElementById("selisih").value;
    var b = document.getElementById("saldo").value;
	var c = document.getElementById("harga_bed").value;
	
    var a = eval("x * z");
    var tot = eval(a) + eval(b);
	var totall = eval(tot) + eval(c);

    var res = totall;
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
                                   
                <div class="panel panel-default col-lg-6">
                <div class="panel-heading">Room Reservation</div>
                    <br>
                    <p>
                    <script>
function showUser(str) {
  if (str=="") {
    document.getElementById("harga").innerHTML="";
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
      document.getElementById("harga").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getdata_rate.php?q="+str,true);
  xmlhttp.send();
}
</script>
                    <div class="form-group row">
					
                                        <label class="col-sm-3 form-control-label">Room(s)</label>
                                        <div class="col-sm-9">
                                        <select  class="form-control ks-default" id="rooms" name="id_kamar" onchange="showUser(this.value)">
										<option value="">-Select-</option>
										<?php 
											include"koneksi.php";
											$r="SELECT * FROM kamar,type_kamar WHERE status_kamar='VR' AND kamar.id_type=type_kamar.id_type";
											$o=mysqli_query($konek,$r);
											while($rom=mysqli_fetch_array($o)){
										?>
										
											<option value="<?php echo $rom['id_kamar']?>"><?php echo $rom['nomor_kamar']?> (<?php echo $rom['nama_type']?>)</option>
											
											
											<?php } ?>
										</select>
                                                 
                                        </div>
                                            
                                            
                                        </div>
                        
                                       <div class="form-group row">
									   <label class="col-sm-3 form-control-label" >ARR Date</label>
                                                        <div class="col-sm-9">
                                                           
					
					<div class="input-group date" id="tgl1">
						<input type="text" class="form-control ks-default" name="tgl_masuk" required />	
							<span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
					</div>
				
                                                        </div>
                                                    </div> 
													
													<div class="form-group row">
                                                       
                                                            
					<label for="default-input" class="col-sm-3  form-control-label">DEP Date</label>
					 <div class="col-sm-9">
					<div class="input-group date" id="tgl2">
						<input type="text" class="form-control" name="tgl_keluar" required />	
							<span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
					</div>
				
                                                        </div>
                                                    </div>
													
													
													


                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">Night</label>
                                            <div class="col-sm-4">
                                                      <input type="text" class="form-control" id="selisih" name="selisih" onchange="MyFuntcion()" readonly>                                       </div>
                                            
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
										 <script>
function showUserb(str) {
  if (str=="") {
    document.getElementById("bed_harga").innerHTML="";
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
      document.getElementById("bed_harga").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getdata_bed.php?q="+str,true);
  xmlhttp.send();
}
</script>
										
										<div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">Extra Bed</label>
                                            <div class="col-sm-4">
                                                      <select class="form-control" id="bed" name="bed" onchange="showUserb(this.value)">
														<option value="">-Select-</option>
														<?php
															$b="SELECT * FROM extra_bed";
															$e=mysqli_query($konek,$b);
															while($bed=mysqli_fetch_array($e)){
														?>
														<option value="<?php echo $bed['id_bed']?>"><?php echo $bed['nama_bed']?></option>
															<?php } ?>
													  </select>
													  </div>
                                            
                                               <div class="col-sm-5" id="bed_harga"> 
                                                
                                               
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
													<option value="">-Select-</option>
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
			
			<div id="extra-bed" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog" style="width:55%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="custom-width-modalLabel">Modal Heading</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>Text in a modal</h4>
                                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                    <hr>
                                                    <h4>Overflowing text to show scroll behavior</h4>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div>
			