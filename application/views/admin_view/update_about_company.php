

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Update About Company Profile</h3>
							</div>
							<div class="module-body">

									

									<form class="form-horizontal row-fluid" method="POST" action="<?php echo base_url();?>about/update_ab_company_profile" enctype="multipart/form-data">

										<?php foreach ($ab_profile_company as $key) {
										?>
										<input type="hidden" name="about_id" value="<?php echo $key->about_id;?>">
										<input type="hidden" name="old_img" value="<?php echo $key->abou_img;?>">
										<div class="control-group">
											<label class="control-label" for="basicinput">On Screen </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select Here....." class="span8" name="on_screen" required>
													<option value="">Select Here.....</option>
													<option value="Y" <?php if($key->on_screen == 'Y'){?>selected="selected"<?php }?>>Yes</option>
													<option value="N" <?php if($key->on_screen == 'N'){?>selected="selected"<?php }?>>No</option>
													
												</select>
											</div>
										</div>

											

										

									

										

										<div class="control-group">
											
											
												<textarea class="span8" rows="5" name="description" id="description"><?php echo $key->description;?></textarea>
											
										</div>


									<div class="control-group">
											<label class="control-label" for="basicinput"> Image</label>
											<div class="controls">
												<input type="file" id="basicinput" name="image"  class="span8" >
												
											</div>
										</div>

										<div class="control-group">
										<div class="controls">
								 <img src="<?php echo base_url().'company_about_img/'.$key->abou_img;?>" height="150" width="150"/> 
								</div>
							</div>

											<?php } ?>

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn" value='Upload' name='upload'>Submit</button>
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

	 <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
          <script type="text/javascript">

         CKEDITOR.replace('description');
        
        
        
        
      
        $("form").submit( function(e) {
            var messageLength = CKEDITOR.instances['description'].getData().replace(/<[^>]*>/gi, '').length;
          
            
            
            if( !messageLength ) {
                alert( 'Please Enter Deatil' );
                e.preventDefault();
            }
            
        });
          
       
    </script>