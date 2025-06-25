


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Add New Slider</h3>
							</div>
							<div class="module-body">

									
								

								

									<form class="form-horizontal row-fluid" method="POST" action="<?php echo base_url();?>admin/new_slider" enctype="multipart/form-data">

										<div class="control-group">
											<label class="control-label" for="basicinput">On Screen</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select Here...." class="span8" name="on_screen" required>
													<option value="">Select Here....</option>
													<option value="Y">Yes</option>
													<option value="N">No</option>
												
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Slider Title</label>
											<div class="controls">
												<input type="text" id="basicinput" name="slider_title" placeholder="Slider Title Here...." class="span8" pattern="[a-zA-Z\s]+" required>
												
											</div>
										</div>

										

										

										
										<div class="control-group">
											<label class="control-label" for="basicinput">Description</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="description" required></textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Slider Image</label>
											<div class="controls">
												<input type="file" id="basicinput" name="image"  class="span8" required>
												
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

