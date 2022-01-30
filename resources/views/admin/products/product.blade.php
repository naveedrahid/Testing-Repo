@extends('admin.layouts.master')
@section('content')
    
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Product Page</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Title</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Category</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Description</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Price</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Edit</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ProductAdd</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Delete</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                @if (count($products) > 0)
                                @foreach ($products as $key => $singleTask)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$singleTask->product_title}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{$singleTask->category_id}}</p>
                                    </td>
                                    <td class="align-middle overflow-text text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$singleTask->description}}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$singleTask->price}}</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success"><a href="#" class="text-white">{{$singleTask->status}}</a></span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <a href="{{route('editproduct', ['id' => $singleTask->id ])}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <a href="{{route('productcreate')}}" class="badge badge-sm bg-gradient-success">Add</a>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm alert-primary text-white">Delete</span>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                
                                <table class="table align-items-center mb-0">.
                                    <tbody>
                                        <tr>
                                            <td><h2>No Task Found!</h2></td>
                                            <td><a href="{{route('productcreate')}}" class="badge badge-sm bg-gradient-success">Add Product</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                @endif
                               
                            </tbody>
                        </table>
                        {{ $products->links() }}
                       
                    </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection