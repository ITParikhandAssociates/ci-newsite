				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Update About Blog</h3>
							</div>
							<div class="module-body">
						
						<form class="form-horizontal row-fluid" method="POST" action="<?php echo base_url();?>about/update_ab_blog" enctype="multipart/form-data">


							<?php foreach ($blog_data as $value) {?>
							<input type="hidden" name="ab_blog_id" value="<?php echo $value->blog_id;?>">
							<input type="hidden" name="old_img" value="<?php echo $value->blog_img;?>">
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
												<input type="text" id="basicinput" name="blog_title" placeholder="Title Here...." class="span8" pattern="[a-zA-Z\s]+" value="<?php echo $value->blog_title;?>" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Description</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="description" maxlength="150" required><?php echo $value->description;?></textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput"> Image</label>
											<div class="controls">
												<input type="file" id="basicinput" name="image"  class="span8">
												
											</div>
										</div>

										<div class="control-group">
											
											<div class="controls">
												<img src="<?php echo base_url().'company_about_img/'.$value->blog_img;?>"  height="150" width="150"  alt="" >
												
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

						
						

