@extends('Backend.Admin.Layout.mainlayout')
@section('remaining_content') 
@push('title')
   <title>Manage Contact</title>
@endpush

 <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Contact</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                                <h6 class="card-title text-bold">Manage Contact</h6>
                               
								<div class="table-responsive">
									<table class="datatable table table-stripped ">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
											<th>Email</th>
											<th>Mobileno</th>
											<th>Message</th>
											<th>Delete</th>
											
                                        
                                            
                                            
                                        </tr>
                                    </thead>
									
									<tbody>
							         
									
									<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									
								    <td><a href="" class="btn btn-danger">Delete</td>
									</tr>
									
									
								
									</tbody>
									
									
									   @endsection