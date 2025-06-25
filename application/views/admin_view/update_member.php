

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Add Team Profile</h3>
							</div>
							<div class="module-body">

									

									<form class="form-horizontal row-fluid" method="POST" action="<?php echo base_url();?>our_team/update_member_profile" enctype="multipart/form-data">


										<?php foreach ($profile_vew as $value) {?>
										<input type="hidden" name="profile" value="<?php echo $value->profile_id;?>">
											<input type="hidden" name="old_img" value="<?php echo $value->profile_img;?>">

										<div class="control-group">
											<label class="control-label" for="basicinput">On Screen </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select Here...." class="span8" name="on_screen" required>
													<option value="">Select Here....</option>
													<option value="Y" <?php if($value->on_screen == 'Y'){?>selected="selected"<?php }?>>Yes</option>
													<option value="N" <?php if($value->on_screen == 'N'){?>selected="selected"<?php }?>>No</option>
												
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Member Name</label>
											<div class="controls">
												<input type="text" id="basicinput" name="member_name" placeholder="Member Name Here..." class="span8" pattern="[a-zA-Z\s]+" maxlength="50" value="<?php echo $value->name_team;?>" required>
											<!-- 	<span class="help-inline">Minimum 5 Characters</span> -->
											</div>

										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Contact Number </label>
											<div class="controls">
												<input type="tel" id="basicinput" name="mobile" placeholder="Contact Number Here..." class="span8" pattern="[7896][0-9]{9}" maxlength="10" value="<?php echo $value->mobile;?>" required>
											<!-- 	<span class="help-inline">Minimum 5 Characters</span> -->
											</div>

										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">E-Mail ID </label>
											<div class="controls">
												<input type="email" id="basicinput" name="email" placeholder="E-Mail ID Here..." class="span8" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" maxlength="50" value="<?php echo $value->email_id;?>" required>
											<!-- 	<span class="help-inline">Minimum 5 Characters</span> -->
											</div>

										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Designation</label>
											<div class="controls">
												<input type="text" id="basicinput" name="designetion" placeholder="Designation Here..." class="span8" pattern="[a-zA-Z\s]+" value="<?php echo $value->designetion;?>" maxlength="50" required>
											<!-- 	<span class="help-inline">Minimum 5 Characters</span> -->
											</div>

										</div>
										
											<div class="control-group">
											<label class="control-label" for="basicinput">Facebook Link/Url</label>
											<div class="controls">
												<input type="url" id="basicinput" name="fac_url" placeholder="Url Here...." value="<?php echo $value->fac_url;?>" class="span8"  required>
												
											</div>
										</div>
										
										
											<div class="control-group">
											<label class="control-label" for="basicinput">Twitter Link/Url</label>
											<div class="controls">
												<input type="url" id="basicinput" name="twitr_url" placeholder="Url Here...." class="span8" value="<?php echo $value->twitr_url;?>"  required>
												
											</div>
										</div>
										
											<div class="control-group">
											<label class="control-label" for="basicinput">Insta Link/Url</label>
											<div class="controls">
												<input type="url" id="basicinput" name="insta_url" placeholder="Url Here...." class="span8" value="<?php echo $value->insta_url;?>"  required>
												
											</div>
										</div>
										
											<div class="control-group">
											<label class="control-label" for="basicinput">Linkedin Link/Url</label>
											<div class="controls">
												<input type="url" id="basicinput" name="linked_url" placeholder="Url Here...." class="span8" value="<?php echo $value->linked_url;?>"  required>
												
											</div>
										</div>

											<div class="control-group">
											<label class="control-label" for="basicinput">Short Description</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="short_description" maxlength="200" required><?php echo $value->short_description;?></textarea>
											</div>
										</div>

										<div class="control-group">
											
											
												<textarea class="span8" rows="5" name="description" id="description"><?php echo $value->description;?></textarea>
											
										</div>


										<div class="control-group">
											<label class="control-label" for="basicinput">Slider Image</label>
											<div class="controls">
												<input type="file" id="basicinput" name="image"  class="span8">
											
											</div>
										</div>
																
											<div class="control-group">
										
											<div class="controls">
												<img src="<?php echo base_url().'our_team/'.$value->profile_img;?>" height="100" width="100">
												
											</div>
										</div>
										
										<?php } ?>

											
											
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn"  value='Upload' name='upload'>Submit</button>
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