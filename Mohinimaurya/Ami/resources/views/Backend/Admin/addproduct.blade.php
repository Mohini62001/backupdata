@extends('Backend.Admin.Layout.mainlayout')
@section('remaining_content')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Product Advertisement</h4>
                    </div>
                </div>
                <form method="post" action="{{url('/addproduct')}}">
                    @csrf
					<div class="card-box">
                        <h3 class="card-title">Add Product</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap">
                                    <img class="inline-block"  type="file" name="img">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file">
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
									
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="focus-label">Product Name</label>
                                                <input type="text" class="form-control floating" name="productname"  >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="focus-label">Product Price</label>
                                                <input type="text" class="form-control floating" name="productprice">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="focus-label">Quantity</label>
                                                
                                                    <input class="form-control floating " type="number" name="quantity">
                                               
                                            </div>
                                        </div>
										
										 <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <select  name="cate_id" class="select form-control floating">
                                                        <option>Select Category</option>
														<?php foreach($category_id_arr as $cat)
							                              {
								                        ?>
                                                        <option value="<?php echo $cat->cate_id;?>">
                                                       <?php echo $cat->category_name;?></option>
								                       <?php 
							                              }
														?>
                                                    </select>
                                                </div>
                                            </div>
										
										<div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="focus-label">Prouct Description</label>
                                                <textarea name="Description" class="form-control floating" name="description"></textarea>
                                            </div>
                                        </div>
										
									 <div class="col-md-6">
										 <div class="form-group row">
                                         <label class="focus-label">Product Link</label>
                                            <div class="col-md-10">
                                           <div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text">https://</span>
											</div>
                                            <input type="text" class="form-control" name="productlink">
                                        </div>
                                    </div>
                                </div>
								</div>
								
										
										 
										
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
                    
                 
                    <div class="text-center m-t-20">
                        <button class="btn btn-primary submit-btn" type="submit" name="submit" value="Send">Add Product</button>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
        @endsection