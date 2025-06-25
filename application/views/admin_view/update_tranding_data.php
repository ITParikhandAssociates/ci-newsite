<div class="span9">
					<div class="content">
							<div class="module">
							<div class="module-head">
								<h3>Add New Tranding</h3>
							</div>
							<div class="module-body">

									
	<form class="form-horizontal row-fluid" method="POST" action="<?php echo base_url();?>blog/update_tranding_detail" enctype="multipart/form-data">

		<?php foreach ($once_trand as $value) {?>
			<input type="hidden" name="trand_id" value="<?php echo $value->trand_id;?>">
			<input type="hidden" name="old_img" value="<?php echo $value->tra_img;?>">
		

										<div class="control-group">
											<label class="control-label" for="basicinput">On Screen</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select Here...." class="span8" name="on_screen" required>
													<option value="">Select Here....</option>
													<option value="Y" <?php if($value->on_screen == 'Y'){?>selected="selected"<?php }?>>Yes</option>
													<option value="N" <?php if($value->on_screen == 'N'){?>selected="selected"<?php }?>>No</option>
												
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput"> Title</label>
											<div class="controls">
												<input type="text" id="basicinput" name="title" placeholder=" Title Here...." class="span8" value="<?php echo $value->title;?>" required>
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Link/Url</label>
											<div class="controls">
												<input type="url" id="basicinput" name="tra_url" placeholder="Url Here...." class="span8" value="<?php echo $value->tra_url;?>"  required>
												
											</div>
										</div>


										<div class="control-group">
											<label class="control-label" for="basicinput">Blog Image</label>
											<div class="controls">
												<input type="file" id="basicinput" name="image"  class="span8" >
												
											</div>
										</div>

										<div class="control-group">
											
											<div class="controls">
												<img src="<?php echo base_url().'tranding_img/'.$value->tra_img;?>" width="300" height="250" />
												
											</div>
										</div>

								<?php } ?>
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn" value="upload" name="upload">Submit</button>
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

