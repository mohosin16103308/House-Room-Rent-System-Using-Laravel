@extends('dashboard.master')
@section('main_content')
    {{--  <!-- main content start-->  --}}
	<div id="page-wrapper">
		<div class="main-page">
			
		</div>
		<div class="row">
			<h3 class="title1">Add New :</h3>
			<div class="form-three widget-shadow">
				<form class="form-horizontal">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Apartment Name : </label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" id="focusedinput" placeholder="Apartment Name">
						</div>
						<div class="col-sm-2">
							<p class="help-block">Your help text!</p>
						</div>
					</div>
					<div class="form-group">
						<label for="rent" class="col-sm-2 control-label">Rent / Buy : </label>
						<div class="col-sm-8">
							<input  type="number"  class="form-control1" id="rent" min="1" max="1000000" placeholder="Rent / Buy">
						</div>
					</div>
					<div class="form-group">
						<label for="category" class="col-sm-2 control-label">Category Select : </label>
						<div class="col-sm-8"><select name="category" id="category" class="form-control1">
							<option>Select Category</option>
							<option value="Building">Building</option>
							<option value="Tin Shed">Tin Shed</option>
							<option value="Building and Tin Shed" >Building and Tin Shed</option>
						</select></div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Area : </label>
						<div class="col-sm-3">
							<label >Division</label>
							<select name="category" id="category" class="form-control1">
								<option>Select Division</option>
								<option value="Building">Building</option>
								<option value="Tin Shed">Tin Shed</option>
								<option value="Building and Tin Shed" >Building and Tin Shed</option>
							</select>
						</div>
						<div class="col-sm-3">
							<label >District </label>
							<select name="category" id="category" class="form-control1">
								<option>Select District</option>
								<option value="Building" >Building</option>
								<option value="Tin Shed">Tin Shed</option>
								<option value="Building and Tin Shed" >Building and Tin Shed</option>
							</select>
						</div>
						<div class="col-sm-3">
							<label >Gram/ Alaka</label>
							<select name="category" id="category" class="form-control1">
								<option>Select Category</option>
								<option value="Building" >Building</option>
								<option value="Tin Shed">Tin Shed</option>
								<option value="Building and Tin Shed" >Building and Tin Shed</option>
							</select>

						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Type : </label>
						<div class="col-sm-3">
							<label >Residentsial</label>
							<select name="category" id="category" class="form-control1">
								<option>Select Residentsial</option>
								<option value="Building">Building</option>
								<option value="Tin Shed">Tin Shed</option>
								<option value="Building and Tin Shed" >Building and Tin Shed</option>
							</select>
						</div>
						<div class="col-sm-3">
							<label >Commercial</label>
							<select name="category" id="category" class="form-control1">
								<option>Select Commercial</option>
								<option value="Building" >Building</option>
								<option value="Tin Shed">Tin Shed</option>
								<option value="Building and Tin Shed" >Building and Tin Shed</option>
							</select>
						</div>
					</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Bachalor : </label>
							<div class="col-sm-3">
								<label >Genger</label>
								<select name="category" id="category" class="form-control1">
									<option>Select Residentsial</option>
									<option value="Building">Building</option>
									<option value="Tin Shed">Tin Shed</option>
									<option value="Building and Tin Shed" >Building and Tin Shed</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label >Type</label>
								<select name="category" id="category" class="form-control1">
									<option>Select Commercial</option>
									<option value="Building" >Building</option>
									<option value="Tin Shed">Tin Shed</option>
									<option value="Building and Tin Shed" >Building and Tin Shed</option>
								</select>
							</div>
	
						</div>
					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">Start Date : </label>
						<div class="col-sm-8">
							<input type="date" class="form-control1"  id="inputPassword" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="rent" class="col-sm-2 control-label">Number of Room : </label>
						<div class="col-sm-8">
							<input  type="number"  class="form-control1" id="rent" min="1" max="30" placeholder="Number Of Room">
						</div>
					</div>
					<div class="form-group">
						<label for="rent" class="col-sm-2 control-label">Number of Bath Room : </label>
						<div class="col-sm-8">
							<input  type="number"  class="form-control1" id="rent" min="1" max="10" placeholder="Number Of Bath Room">
						</div>
					</div>
					<div class="form-group">
						<label for="rent" class="col-sm-2 control-label">Number of Valcony : </label>
						<div class="col-sm-8">
							<input  type="number"  class="form-control1" id="rent" min="1" max="10" placeholder="Number Of Valcony">
						</div>
					</div>
					<div class="form-group">
						<label for="rent" class="col-sm-2 control-label">Squar Fit : </label>
						<div class="col-sm-8">
							<input  type="number"  class="form-control1" id="rent" min="1" max="1000000" placeholder="Square Fit">
						</div>
					</div>

					<div class="form-group">
						<label for="rent" class="col-sm-2 control-label">Floor Level : </label>
						<div class="col-sm-8">
							<input  type="number"  class="form-control1" id="rent" min="1" max="30" placeholder="Square Fit">
						</div>
					</div>

					<div class="form-group">
						<label for="checkbox" class="col-sm-2 control-label">Services : </label>
						<div class="col-sm-8">
							<div class="checkbox-inline1"><label><input type="checkbox" checked> Gas</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" checked> Electric Bill</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" checked> Water Bill</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" checked> Security</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" checked> Internet</label></div>
						</div>
					</div>

					{{--  <div class="form-group">
						<label for="checkbox" class="col-sm-2 control-label">Checkbox</label>
						<div class="col-sm-8">
							<div class="checkbox-inline1"><label><input type="checkbox"> Unchecked</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" checked=""> Checked</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
						</div>
					</div>  --}}

					<div class="form-group">
						<label for="agent_code" class="col-sm-2 control-label">Agent Code : </label>
						<div class="col-sm-8">
							<input  type="text"  class="form-control1" id="agent_code"  placeholder="Agent Code">
						</div>
					</div>

					<div class="form-group">
						<label for="mobile_number" class="col-sm-2 control-label">Mobile Number : </label>
						<div class="col-sm-8">
							<input  type="text"  class="form-control1" id="mobile_number"  placeholder="Mobile Number">
						</div>
					</div>

					<div class="form-group">
						<label for="advanced" class="col-sm-2 control-label">Advanced (Month): </label>
						<div class="col-sm-8"><select name="advanced" id="advanced" class="form-control1">
							<option>Select Advanced</option>
							<option value="1">1 </option>
							<option value="2">2</option>
							<option value="3" >3</option>
							<option value="4" >4</option>
							<option value="5" >5</option>
							<option value="7" >7</option>
						</select></div>
					</div>

					<div class="form-group">
						<label for="house_code" class="col-sm-2 control-label">House Code : </label>
						<div class="col-sm-8">
							<input  type="text"  class="form-control1" id="house_code"  placeholder="House Code">
						</div>
					</div>


					<div class="form-group">
						<label for="image_upload" class="col-sm-2 control-label">Image/Picture : </label>
						<div class="col-sm-8">
							<input  type="file"  class="form-control1" >
						</div>
					</div>

					
					<div class="form-group">
						<label for="youtube_Video" class="col-sm-2 control-label">Youtube Video Link : </label>
						<div class="col-sm-8">
							<input  type="text"  class="form-control1" id="youtube_Video"  placeholder="Youtube Video Link">
						</div>
					</div>

					<div class="form-group">
						<label for="location_code" class="col-sm-2 control-label">Location: </label>
						<div class="col-sm-8">
							<input  type="text"  class="form-control1" id="location_code"  placeholder="Enter Location ">
						</div>
					</div>



					<div class="form-group">
						<label for="flat_code" class="col-sm-2 control-label">Flat Code: </label>
						<div class="col-sm-8">
							<input  type="text"  class="form-control1" id="flat_code"  placeholder="Enter Flat Code">
						</div>
					</div>

					<div class="form-group">
						<label for="checkbox" class="col-sm-2 control-label">Details : </label>
						<div class="col-sm-8">
							<div class="checkbox-inline1"><label><input type="checkbox" > Gas Line</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" > Furnisher </label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" > Generator</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" > Garage</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" > Generator</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" > Lift</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" > Electricty</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" > Tiles</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" > Drowning</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" > Dining</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" > Thai Glass Windows</label></div>
						</div>
					</div>


					<div class="form-group">
						<label for="checkbox" class="col-sm-2 control-label">Facility Details : </label>
						<div class="col-sm-8">
							<div class="checkbox-inline1"><label><input type="checkbox" > Gard</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" > Roof Top Access</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" > Garden</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" > CCTV</label></div>
						</div>
					</div>


					<div class="form-group">
						<label for="checkbox" class="col-sm-2 control-label">Near By : </label>
						<div class="col-sm-8">
							<div class="checkbox-inline1"><label><input type="checkbox" > Hospital</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" > Educational Institude</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" > Market</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" > Restaurent</label></div>
							<div class="checkbox-inline1"><label><input type="checkbox" > Polic</label></div>
						</div>
					</div>



					<div class="form-group">
						<label for="txtarea1" class="col-sm-2 control-label">Extra Details</label>
						<div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
					</div>

					{{--  <div class="form-group">
						<label for="selector1" class="col-sm-2 control-label">Dropdown Select</label>
						<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
							<option>Lorem ipsum dolor sit amet.</option>
							<option>Dolore, ab unde modi est!</option>
							<option>Illum, fuga minus sit eaque.</option>
							<option>Consequatur ducimus maiores voluptatum minima.</option>
						</select></div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Multiple Select</label>
						<div class="col-sm-8">
							<select multiple="" class="form-control1">
								<option>Option 1</option>
								<option>Option 2</option>
								<option>Option 3</option>
								<option>Option 4</option>
								<option>Option 5</option>
							</select>
						</div>
					</div>
				
					<div class="form-group">
						<label for="radio" class="col-sm-2 control-label">Radio</label>
						<div class="col-sm-8">
							<div class="radio block"><label><input type="radio"> Unchecked</label></div>
							<div class="radio block"><label><input type="radio" checked=""> Checked</label></div>
							<div class="radio block"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>
							<div class="radio block"><label><input type="radio" disabled="" checked=""> Disabled Checked</label></div>
						</div>
					</div>
					<div class="form-group">
						<label for="radio" class="col-sm-2 control-label">Radio Inline</label>
						<div class="col-sm-8">
							<div class="radio-inline"><label><input type="radio"> Unchecked</label></div>
							<div class="radio-inline"><label><input type="radio" checked=""> Checked</label></div>
							<div class="radio-inline"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>
							<div class="radio-inline"><label><input type="radio" disabled="" checked=""> Disabled Checked</label></div>
						</div>
					</div>
					<div class="form-group">
						<label for="smallinput" class="col-sm-2 control-label label-input-sm">Small Input</label>
						<div class="col-sm-8">
							<input type="number" class="form-control1 input-sm" id="smallinput" placeholder="Small Input">
						</div>
					</div>
					<div class="form-group">
						<label for="mediuminput" class="col-sm-2 control-label">Medium Input</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" id="mediuminput" placeholder="Medium Input">
						</div>
					</div>
					<div class="form-group mb-n">
						<label for="largeinput" class="col-sm-2 control-label label-input-lg">Large Input</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1 input-lg" id="largeinput" placeholder="Large Input">
						</div>
					</div>  --}}
					<div class="form-group mb-n">
						<label for="largeinput" class="col-sm-2 control-label label-input-lg">Save</label>
						<div class="col-sm-8">
							<button type="submit"  class="btn-lg btn-primary" id="largeinput" >Save</button>
						</div>
					</div> 
				</form>
			</div>
		</div>
	</div>
@endsection