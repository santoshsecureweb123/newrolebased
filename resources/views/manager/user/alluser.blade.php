@extends('manager.manager.header')

@section('dashboard_content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">

			<div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Email</th>
                                            <th>Skill</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                	<?php $i=1; ?>
                                	@foreach($getUser as $user)
                                    <tr>
                                        <td scope="row">{{$i}}</td>
                                        <td scope="row">{{$user->name}}</td>
                                        <td scope="row">Role</td>
                                        <td scope="row">{{$user->email}}</td>
                                        <td scope="row">
										@foreach(App\Skill::whereIn('skills_id',explode(",",$user->skills))->get() as $skill) 
										{{$skill->skills_name}} ,
										@endforeach                              </td>
                                        <td scope="row">
										<img src="{{ asset('image') }}/{{$user->image}}" height="50px" width="50px" style="border-radius: 50px;"> 
										</td>
 											<td>
<button type="button" class="btn btn-info waves-effect waves-light" onClick="edituser({{$user->id}})" data-toggle="modal" data-target="#myModal">Edit</button>
<button type="button" class="btn btn-danger waves-effect waves-light" onClick="deletuser({{$user->id}})">Delete</button>
                                            </td>
                                        
                                    </tr>
                                    <?php $i++; ?>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
        	 <form id="data" method="post" enctype="multipart/form-data" action="{{route('addnew')}}">
					@csrf
					<input type="hidden" name="user_id" id="user_id">
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
					<label for="dob">DOB:</label>
					<input type="date" class="form-control" id="dob" placeholder="Enter Date of birth" name="dob" value="{{ old('dob') }}">
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
					<label for="skills">Skills:</label>
					<select class="form-control skills" name="skills[]" id="skills" multiple="multiple">
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
</div>
<script>
	
	function edituser(userId) {
		$('#skills option').removeAttr('selected');
		var PRESELECTED_FRUITS = ['2','1'];

		 // $('.skills').select2("val", ["2","1"]);
		 // $('.skills').select2("val", [1]);

		$.ajax({
			url:"{{route('editUser')}}",
			type:'get',
			data:{_token: "{{ csrf_token() }}", userId:userId},
			success:function(res)
			{
				console.log(res);
				if(res.success == true)
				{
					$('#user_id').val(res.uid);
					$('#name').val(res.name);
					$('#email').val(res.email);
					$('#phone_number').val(res.phone_no);
					$('#address').val(res.address);
					$('#dob').val(res.dob);
					$('#experience').val(res.experience);
					$('#designation').val(res.designation);
					$('#skills').select2('val', res.skill);
					
					/*$.each(res.skill, function(key,value) {
						// alert(value);
					  $('.skills option').select2("val", value);
					  // $('#skills').select2({}).select2('val', res.skill);
					});*/
					
				}
			}
		});
	}

	function deletuser(userId) {

		if (confirm("Are you sure delete skill")){
			$.ajax({
				url:"{{route('deleteUser')}}",
				type:'get',
				data:{_token: "{{ csrf_token() }}", userId:userId},
				success:function(res)
				{
					if(res.success == true)
					{
						location.reload(true);
					}
				}
			});
		}
		
	}

</script>
@endsection
