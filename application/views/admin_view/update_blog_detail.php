<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Update Blog Detail</h3>
							</div>
							<div class="module-body">
									<form class="form-horizontal row-fluid" method="POST" action="<?php echo base_url();?>blog/update_blog_data" enctype="multipart/form-data">

										<?php foreach ($blog_once_detail as $value) {?>
										<input type="hidden" name="blog_id" value="<?php echo $value->blog_id;?>">
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
											<label class="control-label" for="basicinput">Title</label>
											<div class="controls">
												<input type="text" id="basicinput" name="title" placeholder="Title Here..." class="span8" pattern="[a-zA-Z\s]+" maxlength="50" value="<?php echo $value->title;?>" required>
											<!-- 	<span class="help-inline">Minimum 5 Characters</span> -->
											</div>

										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Date</label>
											<div class="controls">
												<input type="date"  name="now_date"  class="span8" value="<?php echo $value->now_date;?>" required> 
												
											</div>
										</div>
											<div class="control-group">
											<label class="control-label" for="basicinput">Short Description</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="short_description" maxlength="200" required><?php echo $value->description1;?></textarea>
											</div>
										</div>
										<div class="control-group">
												<textarea class="span8" rows="5" name="description" id="description"><?php echo $value->description2;?></textarea>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput"> Image</label>
											<div class="controls">
												<input type="file" id="basicinput" name="image"  class="span8">
											</div>
										</div>

										<div class="control-group">
											
											<div class="controls">
												 <img  align="center" src="<?php echo base_url().'blog_image/'.$value->blog_img;?>" height="150" width="150" /> 
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