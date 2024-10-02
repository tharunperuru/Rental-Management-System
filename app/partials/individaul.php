			
  <div class="col-md-11 col-xs-12 col-sm-12">
  	<div class="alert alert-info" role="alert">
  		
  		<h2 class="text-center">Add House<sup style="color:red">*</sup></h2>
		  <h4><sup style="color:red">*</sup>Mark Fields are Required</h4>
  		<form action="" method="post" enctype="multipart/form-data">
		  	 <div class="row">
		  	 	<div class="col-md-4">
			  	  <div class="form-group">
				    <label for="fullname">Full Name<sup style="color:red">*</sup></label>
				    <input type="text" class="form-control" id="fullname" placeholder="Full Name" name="fullname" required>
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
				    <input type="text" class="form-control" pattern="^(\d{10})$" id="alternat_mobile" title="10 digit mobile number" placeholder="10 digit mobile number" name="alternat_mobile">
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

				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="rooms">Available Rooms<sup style="color:red">*</sup></label>
				    <input type="text" class="form-control" id="rooms" placeholder="1BHK/2BHK/3BHK/1RK" name="rooms" required>
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
			 	<div class="col-md-2">
			 <div class="form-group">
			    <label for="rent">Rent<sup style="color:red">*</sup></label>
			    <input type="rent" class="form-control" id="rent" placeholder="Rent" name="rent" required>
			  </div>
			  </div>

			  <div class="col-md-2">
			 <div class="form-group">
			    <label for="sale">Sale<sup style="color:red">*</sup></label>
			    <input type="sale" class="form-control" id="sale" placeholder="Sale" name="sale">
			  </div>
			  </div>

			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="deposit">Deposit<sup style="color:red">*</sup></label>
			    <input type="deposit" class="form-control" id="deposit" placeholder="Deposit" name="deposit" required>
			  </div>
			  </div>
			  <div class="col-md-4">

			  <div class="form-group">
			    <label for="accommodation">Facilities<sup style="color:red">*</sup></label>
			    <input type="accommodation" class="form-control" id="accommodation" placeholder="Facilities" name="accommodation">
			  </div>
			  </div>
			  </div>

			   <div class="row">
			 	<div class="col-md-4">
			  <div class="form-group">
			    <label for="description">Description<sup style="color:red">*</sup></label>
			    <input type="description" class="form-control" id="description" placeholder="Description" name="description">
			  </div>
			   </div>
			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="landmark">Landmark<sup style="color:red">*</sup></label>
			    <input type="landmark" class="form-control" id="landmark" placeholder="landmark" name="landmark">
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
			   	<div class="col-4">
			 		 <div class="form-group">
					    <label for="vacant">Vacant/Occupied<sup style="color:red">*</sup></label>
					    <select class="form-control" id="vacant" name="vacant">
					      <option value="1">Vacant</option>
					      <option value="0">Occupied</option>
					    </select>
					  </div>
			 	</div>
				<div class="col-md-4">
			  <div class="form-group">
			    <label for="description">Image<h4><sup style="color:red">*</sup></label>
			    <input type="file" name="image" id="image">
			  </div>
			  </div>
			  </div>			
			  <button type="submit"  id="submitt" class="btn btn-success" name='register_individuals' value="register_individuals" onclick="showSuccessMessage()">Submit</button>
			</form>	
			</div>			
  	</div>
	  <script>
function showSuccessMessage() {
  alert("House Added successfully!");
}
</script>
