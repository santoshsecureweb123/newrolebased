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
                                            <th>Skill Name</th>
                                            <th>Action</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $i=1; ?>
                                    	@foreach($getskill as $skills)
                                        <tr>
                                            <th scope="row">{{$i}}</th>
                                            <td>{{$skills->skills_name}}</td>
                                            <td>
<button type="button" class="btn btn-info waves-effect waves-light" onClick="editskill({{$skills->skills_id}})">Edit</button>
<button type="button" class="btn btn-danger waves-effect waves-light" onClick="deletskill({{$skills->skills_id}})">Delete</button>
                                            </td>
                                            <td>
@if($skills->status == 1) <button type="button" class="btn btn-info waves-effect waves-light" onClick="statuscheck(0,{{$skills->skills_id}})">Active</button>
@else
<button type="button" class="btn btn-danger waves-effect waves-light" onClick="statuscheck(1,{{$skills->skills_id}})">InActive</button>
@endif

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


              <div class="row">
	                <div class="col-12">
	                    <div class="card">
	                        <div class="card-body">

	                           <form class="" action="{{ route('allskill')}}" method="post">
	                           	@csrf
	                           	 <div class="row">
                                	<div class="form-group">
                                        <label>Enter Skil Name</label>
                                        <input type="hidden" name="skill_id" id="skill_id" value="">
                                        <input type="text" id="skill_name" name="skill_name" class="form-control" required placeholder="Enter Skil Name"/>
                                    </div>
	                     
                                     <div class="form-group mb-0 ">
                                       <button type="submit" class="btn btn-primary waves-effect waves-light mr-1"> Submit
                                       </button>		
                                    </div>
                                
                                </div>
                                </form>
	                           
	                         
	                        </div>
	                    </div>
	                </div> <!-- end col -->
	            </div> <!-- end row -->


            </div>
        </div>
    </div>
</div>

<script>
	
	function editskill(skillID) {
		$.ajax({
			url:"{{route('getskill')}}",
			type:'post',
			data:{_token: "{{ csrf_token() }}", skillID:skillID},
			success:function(res)
			{
				if(res.success == true)
				{
					$('#skill_id').val(res.skill_id);
					$('#skill_name').val(res.skill_name);
				}
			}
		});
	}

	function deletskill(skillID) {

		if (confirm("Are you sure delete skill")){
			$.ajax({
				url:"{{route('deleteskill')}}",
				type:'post',
				data:{_token: "{{ csrf_token() }}", skillID:skillID},
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

	function statuscheck(status,id){
		$.ajax({
				url:"{{route('skillStatus')}}",
				type:'post',
				data:{_token: "{{ csrf_token() }}", status:status,id:id},
				success:function(res)
				{
					console.log(res);
					if(res.success == true)
					{
						location.reload(true);
					}
				}
			});
	}

</script>
@endsection
