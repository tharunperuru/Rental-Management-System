<div class="col-md-11 col-xs-12 col-sm-12"><br>  	
  	<div class="alert alert-info" role="alert">
  		
  		<h2 class="text-center">Apartment Room</h2>
		<h4><sup style="color:red">*</sup>Mark Fields are Required</h4>
  		<form action="" method="post" enctype="multipart/form-data">
		  	 <div class="row">
		  	 	<div class="col-md-4">
				  <div class="form-group">
				    <label for="apartment_name">Apartment Name<sup style="color:red">*</sup></label>
				    <input type="text" class="form-control" id="apartment_name" placeholder="Apartment Name" name="apartment_name" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="mobile">Mobile<sup style="color:red">*</sup></label>
				    <input type="text" class="form-control" pattern="^(\d{10})$" id="mobile" title="10 digit mobile number" placeholder="10 digit mobile number" name="mobile" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="alternat_mobile">Alternate Mobile<sup style="color:red">*</sup></label>
				    <input type="text" class="form-control" pattern="^(\d{10})$" id="alternat_mobile" title="10 digit mobile number" placeholder="10 digit mobile number" name="alternat_mobile" required>
				  </div>
				</div>
			</div>

			<div class="row">
		  	 	<div class="col-md-4">
				  <div class="form-group">
				    <label for="email">Email<sup style="color:red">*</sup></label>
				    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="plot_number">Plot Number/Home Number<sup style="color:red">*</sup></label>
				    <input type="text" class="form-control" id="plot_number" placeholder="Plot Number/Home Number" name="plot_number" required>
				  </div>
				 </div>				 
			</div>

			<div class="row">
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="country">Country<sup style="color:red">*</sup></label>
				    <input type="country" class="form-control" id="country" placeholder="Country" name="country" required>
				  </div>
			  	</div>

			 	<div class="col-md-4">
				  <div class="form-group">
				    <label for="state">State<sup style="color:red">*</sup></label>
				    <input type="state" class="form-control" id="state" placeholder="State" name="state" required>
				  </div>
			  	</div>
			  	<div class="col-md-4">
				  <div class="form-group">
				    <label for="city">City<sup style="color:red">*</sup></label>
				    <input type="city" class="form-control" id="city" placeholder="City" name="city" required>
				  </div>
			 	 </div>
			</div>

			<div class="row">
				<div class="col-md-4"> 
					<div class="form-group"> 
						<label for="landmark">Landmark<sup style="color:red">*</sup></label> 
						<input type="landmark" class="form-control" id="landmark" placeholder="landmark" name="landmark" required> 
					</div> 
				</div> 
				<div class="col-md-4"> 
					<div class="form-group"> 
						<label for="address">Address<sup style="color:red">*</sup></label> 
						<input type="address" class="form-control" id="address" placeholder="Address" name="address" required> 
					</div> 
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="description">Image<sup style="color:red">*</sup></label>
				    <input type="file" name="image" id="image">
				  </div>
				</div>
			</div>

			 <div class="row">			 	
				<div class="col-md-12"> 
					<div class="form-group">
						<a onclick="addMoreRows(this.form);" class="btn btn-info btn-sm">Add More(Plot Number/Description)</a>
						<div id="addedRows"></div>
					</div>
				</div>
			</div>			
			 <button type="submit" id="submitt" class="btn btn-success" name='register_apartment' value="register_apartment" onclick="showSuccessMessage()">Submit</button>
			</form>	
		</div>			
  	</div>
	  <script>
function showSuccessMessage() {
  alert("House Added successfully!");
}
</script>