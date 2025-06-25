				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Add Sub Header Menu</h3>
							</div>
							<div class="module-body">
							<form class="form-horizontal row-fluid" method="POST" action="<?php echo base_url();?>admin/sub_child_header_menu">
										<div class="control-group">
											<label class="control-label" for="basicinput">On Screen </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select Here....." class="span8" name="on_screen" required>
													<option value="">Select Here.....</option>
													<option value="Y">Yes</option>
													<option value="N">No</option>
													
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Header Main Menu </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select Here....." class="span8" name="header_manu_id" id="header_main_menu" required>
													<option value="">Select Here.....</option>
													<?php foreach ($headre_main_menu as  $value) {?>
													
													<option value="<?php echo $value->main_header_id;?>"><?php echo $value->main_header_name;?></option>
													<?php } ?>
													
												</select>
											</div>
										</div>


											<div class="control-group">
											<label class="control-label" for="basicinput">Header Sub Menu </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select Here....." class="span8" name="header_sub_menu_id" id="sub_menu" required>
													<option value="">Select Here.....</option>
													
													
												</select>
											</div>
										</div>






										<div class="control-group">
											<label class="control-label" for="basicinput">Header Child Menu Name</label>
											<div class="controls">
												<input type="text" id="basicinput" name="header_sub_child_name" placeholder="Header Sub Menu Name Here..." class="span8" pattern="[a-zA-Z\s]+" required>
											<!-- 	<span class="help-inline">Minimum 5 Characters</span> -->
											</div>

										</div>

											

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn">Submit</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
 $('#header_main_menu').change(function(){
  var header_menu = $('#header_main_menu').val();


  if(header_menu != '')
  {
     $.ajax({
                    url: "<?php echo base_url();?>admin/get_sub_menu/",
                     dataType:'json',
                    method: "POST",
                    data:{header_menu:header_menu},
                    success: function (data) {

                            
                            
                              var z='';
                              var z='<option value="">Select Here.....</option>';
          
            for(var i =0;i<data.length; i++) {
                 z += 
             '<option value="' + data[i].sub_menu_id + '">' + data[i].sub_menu_name + '</option>';
            } 

                       
                        $('#sub_menu').html(z);
                    }
                });
  
   
  }
 
  
  else
  {
$('#sub_menu').html('<option value="">Select Here.....</option>');
  }
 });
 
});
 </script>