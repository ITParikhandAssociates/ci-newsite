

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Update Contact</h3>
							</div>
							<div class="module-body">

									

									<form class="form-horizontal row-fluid" method="POST" action="<?php echo base_url();?>contact/update_contact_detail" enctype="multipart/form-data">

										
			<?php foreach ($contact_detail as $key) {?>
			
					<input type="hidden" name="contact_id" value="<?php echo $key->contact_id;?>">

										<div class="control-group">
											<label class="control-label" for="basicinput">Contact Number </label>
											<div class="controls">
												<input type="tel" id="basicinput" name="mobile" placeholder="Contact Number Here..." class="span8" pattern="[7896][0-9]{9}" maxlength="10" value="<?php echo $key->mobile;?>" required>
											<!-- 	<span class="help-inline">Minimum 5 Characters</span> -->
											</div>

										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">E-Mail ID </label>
											<div class="controls">
												<input type="email" id="basicinput" name="email" placeholder="E-Mail ID Here..." class="span8" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" maxlength="50" value="<?php echo $key->email_id;?>" required>
											<!-- 	<span class="help-inline">Minimum 5 Characters</span> -->
											</div>

										</div>

										

											<div class="control-group">
											<label class="control-label" for="basicinput"> Address</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="address" maxlength="200" required><?php echo $key->address;?></textarea>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput"> About Company</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="company_desc" maxlength="200" required><?php echo $key->about_comany;?></textarea>
											</div>
										</div>

										<div class="control-group">
											
											
												<textarea class="span8" rows="5" name="map_desc" id="description"><?php echo $key->contact_map;?></textarea>
											
										</div>


									


										<?php } ?>	

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
	
	<script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
<script type="text/javascript">

    CKEDITOR.replace('description');
 


</script>

	<!-- <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
          <script type="text/javascript">

         CKEDITOR.replace('description');
        
        
        
        
      
        $("form").submit( function(e) {
            var messageLength = CKEDITOR.instances['description'].getData().replace(/<[^>]*>/gi, '').length;
          
            
            
            if( !messageLength ) {
                alert( 'Please Enter Deatil' );
                e.preventDefault();
            }
            
        });
          
       
    </script>-->