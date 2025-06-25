
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Add Main Header Menu</h3>
							</div>
							<div class="module-body">
									<form class="form-horizontal row-fluid" method="POST" action="<?php echo base_url();?>admin/main_header_menu">
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
											<label class="control-label" for="basicinput">Header Menu Name</label>
											<div class="controls">
												<input type="text" id="basicinput" name="header_name" placeholder="Header Menu Name Here..." class="span8" pattern="[a-zA-Z\s]+" required>
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

	