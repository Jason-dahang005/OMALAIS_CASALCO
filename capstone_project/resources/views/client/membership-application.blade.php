@extends('client.index')

@section('client_content')


<div class="contact-form">
		<form id="contact" action="" method="post">
			<div class="row pt-5">
				<div class="col-lg-2">
						
				</div>

				<div class="col-lg-8 border">
					<div class="row">
					<div class="col-lg-12">
						<h4 class="pt-5">Casalco Membership Form</h4>
						<hr class="line">
						<h5 class ="font-weight-bold">Personal Information</h5>
						<p class="font-weight-lighter">We require your personal information to ensure calidty of you memnbership application</p>
						<hr>
						
					</div>
				
				
				
						
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="Fname" type="text" id="Fname" placeholder="First Name" required="">
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="Mname" type="text" id="Mname" placeholder="Middle Name" required="">
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="Lname" type="text" id="Lname" placeholder="Last Name" required="">
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="suffix" type="text" id="suffix" placeholder="Suffix" required="">
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<select name="gender" id="gender">
						<option value="" disabled selected >Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						
					</select>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="birhday" type="date" id="birhday" placeholder="Birthday" required="">
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="brth-place" type="text" id="brth-place" placeholder="Birth Place" required="">
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<select name="Unit" id="Unit">
						<option value="" disabled selected >Unit</option>
						<option value="CU(main)">CU(main)</option>
						<option value="CUMC">CUMC</option>
						<option value="CUBE">CUBE</option>
						<option value="Support Zebra">Support Zebra</option>
						<option value="Associate">Associate</option>
					</select>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="occ" type="text" id="occ" placeholder="Occupation" required="">
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="educ" type="text" id="educ" placeholder="Educ. Attianment" required="">
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="mic" type="text" id="mic" placeholder="Monthly Income" required="">
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<select name="cs" id="cs">
						<option value="" disabled selected >Civil Status</option>
						<option value="Single">Single</option>
						<option value="Married">Married</option>
						<option value="Divorce">Divorced</option>
						<option value="Siparated">Siparated</option>
						<option value="Widowed">Widowed</option>
					</select>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="rlg" type="text" id="rlg" placeholder="Religion" required="">
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="cn" type="text" id="cn" placeholder="Contact Number" required="">
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="email" type="email" id="email" placeholder="Email Address" required="">
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="nod" type="text" id="nod" placeholder="Number of Dependents" required="">
					</fieldset>
				</div>
				<div class="col-lg-12">
						<h5 class ="font-weight-bold">Spuose Personal Information</h5>
						<hr>	
				</div>
					
					<div class="col-lg-8 col-sm-12">
					<fieldset>
						<input name="name" type="text" id="name" placeholder="Full Name" required="">
					</fieldset>
					</div>
					<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="age" type="text" id="age" placeholder="Age" required="">
					</fieldset>
					</div>
					<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="socc" type="text" id="socc" placeholder="Occupation" required="">
					</fieldset>
					</div>
					<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="smi" type="text" id="smi" placeholder="Monthly Income" required="">
					</fieldset>
					</div>
					<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="em" type="text" id="em" placeholder="Employer's Name" required="">
					</fieldset>
					</div>
					<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="scn" type="text" id="scn" placeholder="Contact Number" required="">
					</fieldset>
					</div>
					<div class="col-lg-12">
						<h5 class ="font-weight-bold">Nomination of Benificiary</h5>
						<hr>	
					</div>
					<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="b-name" type="text" id="b-name" placeholder="Full Name" required="">
					</fieldset>
					</div>
					<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="rls" type="text" id="rls" placeholder="Relationship" required="">
					</fieldset>
					</div>
					<div class="col-lg-8 col-sm-12">
					<fieldset>
						<input name="b-add" type="text" id="badd" placeholder="Address" required="">
					</fieldset>
					</div>
					<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="b-age" type="text" id="bage" placeholder="Age" required="">
					</fieldset>
					</div>
					
					<div class="col-lg-12">
						<p >Mother's Maiden Name</p>
							
					</div>
					<div class="col-lg-4 col-sm-12">
						<fieldset>
							<input name="b-Lname" type="text" id="b-Lname" placeholder="Last Name" required="">
						</fieldset>
					</div>
					<div class="col-lg-4 col-sm-12">
						<fieldset>
							<input name="b-Fname" type="text" id="b-Fname" placeholder="First Name" required="">
						</fieldset>
					</div>
					<div class="col-lg-4 col-sm-12">
						<fieldset>
							<input name="b-Mname" type="text" id="b-Mname" placeholder="Middle Name" required="">
						</fieldset>
					</div>
					<div class="col-lg-12 pb-3">
					<fieldset>
						<!-- <button type="submit" id="form-submit" class="main-button-icon w-25 mr-5">Add a Benificiary</button> -->
						<a class="button" href="#" role="button">Add a Benificiary</a>
					</fieldset>
					
				</div> 
					<div class="col-lg-12">
						<h5 class ="font-weight-bold mt-2">Government ID Number</h5>
						<p class="font-weight-lighter">The fields below are optional but we encourageyou to provide the information</p>
						<hr>	
					</div>
					<div class="col-lg-4 col-sm-12">
						<fieldset>
							<input name="tin" type="text" id="tin" placeholder="Tax Identification Number" required="">
						</fieldset>
					</div>
					<div class="col-lg-4 col-sm-12">
						<fieldset>
							<input name="sss" type="text" id="sss" placeholder="SSS Number" required="">
						</fieldset>
					</div>
					<div class="col-lg-12">
						<h5 class ="font-weight-bold">Attach File</h5>
						<hr>	
					</div>
					<div class="col-lg-12">
						<fieldset>
						<label class="form-label" for="customFile">Attach Selfie Picture</label>
						<input type="file" class="w-28 mt-2" id="customFile" >
						</fieldset>
					</div>
					<div class="col-lg-12">
						<fieldset>
						<label class="form-label" for="customFile">Attach Employee ID</label>
						<input type="file" class="w-28 mt-2" id="customFile" >
						</fieldset>
					</div>

					
					
				<div class="col-lg-12 pb-3">
					<fieldset>
						
					<button type="button" id="form-submit" class="main-button-icon w-25 mt-5 ">Validate</button>
					<!-- <a class="btn btn-primary main-button-icon w-25 mt-5 " href="#" role="button">Validate</a> -->
					</fieldset>
				</div> 
			
				
				</div>
				
				</div>
				
				

				
				
				<!-- <div class="col-lg-3 col-sm-12">
					<fieldset>
					<input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
				</fieldset>
				</div> -->
				<!-- {{-- <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
					</fieldset>
				</div>
				<div class="col-md-6 col-sm-12">
					<fieldset>
						<select value="number-guests" name="number-guests" id="number-guests">
								<option value="number-guests">Number Of Guests</option>
								<option name="1" id="1">1</option>
								<option name="2" id="2">2</option>
								<option name="3" id="3">3</option>
								<option name="4" id="4">4</option>
								<option name="5" id="5">5</option>
								<option name="6" id="6">6</option>
								<option name="7" id="7">7</option>
								<option name="8" id="8">8</option>
								<option name="9" id="9">9</option>
								<option name="10" id="10">10</option>
								<option name="11" id="11">11</option>
								<option name="12" id="12">12</option>
						</select>
					</fieldset>
				</div>
				<div class="col-lg-6">
						<div id="filterDate2">    
							<div class="input-group date" data-date-format="dd/mm/yyyy">
								<input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
								<div class="input-group-addon" >
									<span class="glyphicon glyphicon-th"></span>
								</div>
							</div>
						</div>   
				</div>
				<div class="col-md-6 col-sm-12">
					<fieldset>
						<select value="time" name="time" id="time">
								<option value="time">Time</option>
								<option name="Breakfast" id="Breakfast">Breakfast</option>
								<option name="Lunch" id="Lunch">Lunch</option>
								<option name="Dinner" id="Dinner">Dinner</option>
						</select>
					</fieldset>
				</div> --}} -->
				<!-- <div class="col-lg-12">
					<fieldset>
						<textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
					</fieldset>
				</div>
				<div class="col-lg-12">
					<fieldset>
						<button type="submit" id="form-submit" class="main-button-icon">Send A Message</button>
					</fieldset>
				</div> -->
			</div>
		</form>
</div>



@endsection