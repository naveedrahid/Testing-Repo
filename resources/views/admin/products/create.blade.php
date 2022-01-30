@extends('admin.layouts.master')
@section('content')
    
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Add Product</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <form class="px-5" action="{{route('addproduct')}}" method="POST">
                            @csrf
                            <div class="row">
                              <div class="form-group col-md-6 mb-3">
                                <label>Product Name</label>
                                <input type="text" class="form-control border" id="inputEmail4" name="product_title" placeholder="Product Name" value="{{old('product_title')}}">
                              </div>
                              <div class="form-group col-md-6 mb-3">
                                <label>Product Image</label>
                                <input type="file" class="form-control border" name="product_img" id="product_img">
                              </div>
                              <div class="form-group col-md-6 mb-3">
                                <label>Product Price</label>
                                <input type="text" class="form-control border" id="price" placeholder="Product Price" name="price" value="{{old('price')}}">
                              </div>
                              <div class="form-group col-md-6 mb-3">
                                <label for="inputState">Product Status</label>
                                <select id="status" class="form-control border">
                                  <option selected>Choose...</option>
                                  <option>Active</option>
                                  <option>Deactive</option>
                                </select>
                              </div>
                              <div class="form-group col-md-12 mb-3">
                                <label for="inputState">Product Category</label>
                                <select id="status" class="form-control border">
                                  <option selected>Choose...</option>
                                  <option>Men</option>
                                  <option>Women</option>
                                </select>
                              </div>
                              <div class="form-group col-md-12 mb-3">
                                <label>Product Description</label>
                                <textarea name="description" id="description" class="form-control border" name="description" cols="30" rows="10" style="width:100%;">{{old('description')}}</textarea>
                              </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Product</button>
                          </form>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection