@extends('manager.manager.header')

@section('dashboard_content')
   <div class="content-page">
   	<div class="content">
			<div class="container-fluid">
				<div class="page-title-box">
					<h2>Add New User</h2>
					@if(Session::has('success'))
					    {{ Session::get('success') }}
					@endif
					   <form id="data" method="post" enctype="multipart/form-data" action="{{route('addnew')}}">
      					@csrf
						<div class="form-group">
							<label for="u_name">Name:</label>
							<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{ old('name') }}">

						</div>
						@error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="email" class="form-control" id="email" placeholder="Enter Email Address" name="email" value="{{ old('email') }}">
						</div>
						@error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<div class="form-group">
							<label for="pass">Password:</label>
							<input type="password" class="form-control" id="pass" placeholder="Enter Password" name="password">
						</div>
						@error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<div class="form-group">
							<label for="dob">DOB:</label>
							<input type="date" class="form-control" id="datepicker" placeholder="Enter Date of birth" name="dob" value="{{ old('dob') }}">
						</div>
						@error('dob')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<div class="form-group">
							<label for="address">Address:</label>
							<input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="{{ old('address') }}">
						</div>
						@error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
				
						<div class="form-group">
							<label for="phone_number">Phone Number:</label>
							<input type="text" class="form-control" id="phone_number" placeholder="Enter Phone Number" name="phone_number" value="{{ old('phone_number') }}">
						</div>
						@error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror					
						
						<div class="form-group">
							<label for="u_skills">Skills:</label>
							<select class="form-control skills" name="skills[]" id="skills" multiple="multiple" value="{{ old('skills[]') }}">
								@foreach($getskill as $skill)
								<option value="{{$skill->skills_id}}">{{$skill->skills_name}}</option>
								@endforeach
							</select>
						</div>
						@error('skills')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<div class="form-group">
							<label for="experience">Experience:</label>
							<input type="text" class="form-control" id="experience" placeholder="Enter Experience" name="experience" value="{{ old('experience') }}">
						</div>
						@error('experience')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<div class="form-group">
							<label for="designation">Designation:</label>
							<input type="text" class="form-control" id="designation" placeholder="Enter Designation" name="designation" value="{{ old('designation') }}">
						</div>
						@error('designation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

						<div class="form-group">
							<label for="u_name">Image:</label>
							<input type="file" class="form-control" id="image" placeholder="Enter Image" name="image" value="{{ old('image') }}">
						</div>
						@error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

						<button type="submit" id="saveEmployee" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>

 <script>

	
	/*$(document).ready(function() {
		
		$( "#datepicker" ).datepicker(); 
		jQuery.browser = {};
		jQuery.browser.msie = false;
	}); */

 </script>
@endsection