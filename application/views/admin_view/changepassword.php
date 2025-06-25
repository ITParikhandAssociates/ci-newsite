
      
				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Chanage Password</h3>
							</div>
							<div class="module-body">
				<form class="login100-form validate-form flex-sb flex-w" method="post" >
					

					<span class="txt1 p-b-11">
						Old Password
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Old Password is required">
						<input class="input100" type="password" name="oldpassword" value="" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						New Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="newpass" value="" id="newpass"  >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Confirm Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="confpass" value="" id="confpass"  >
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type = submit value = "Submit" onclick="return Validate()"></td> 
					</div>					
				</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<script> 
          
            // Function to check Whether both passwords 
            // is same or not. 
function Validate() {
        var password = document.getElementById("newpass").value;
        var confirmPassword = document.getElementById("confpass").value;

		// If password not entered 
		if (password == '') 
		alert ("Please enter new Password"); 

		// If confirm password not entered 
		else if (confirmPassword == '') 
		alert ("Please enter confirm password"); 

        else if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
     
    </script>