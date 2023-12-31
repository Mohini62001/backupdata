@extends('company.Layout.main_layout') 	
@section('main_container')
<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">My Appointment</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">My Appointment</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table id="table" class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>App.ID</th>
													<th>Doctor Name</th>
													<th>Slot time</th>
													<th></th>
													
												</tr>
											</thead>
											<tbody>
												@if(!$myappointment_arr->isEmpty())
											   @foreach($myappointment_arr as $data)
												<tr>
													<td><?php echo $data->id?></td>

													<td>Dr.  <?php echo $data->first_name?>  <?php echo $data->last_name?></td>

													<td><?php echo $data->start_time?>  to  <?php echo $data->end_time?></td>
                                                    
                                                    <td class="text-right">
														<div class="actions">
															<a  href="{{url('destroy/'.$data->id)}}" class="btn btn-sm bg-danger-light">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
												    </td>
													
												</tr>
												
												@endforeach
												@else
													<p class="text-danger mt-2">No Appointments Available</p>
												@endif
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        
		<!-- Bootstrap Core JS -->
        <script src="{{url('Backend/assets/js/popper.min.js')}}"></script>
        <script src="{{url('Backend/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{url('Backend/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script  src="{{url('Backend/assets/js/script.js')}}"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin-blank-page')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->
</html>
@endsection