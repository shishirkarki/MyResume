@extends('home')
@section('title','Personal Information Edit')
@push('css')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
@endpush
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>Hello, Sir/Ma'aM</h5></div>
                <div class="card-body">
                    <h3 class="text-info">Edit youy Personal information here</h3>
                    <!-- <form action="{{ route('store') }}" enctype="multipart/form-data" method="post"> -->
                    <form method="post" action="{{ url('Basic-update/'.$basic->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Frist Name : </label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$basic->name}}">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Label : </label>
                                    <input type="text" class="form-control @error('label') is-invalid @enderror" name="label" value="{{$basic->label}}">
                                    @error('label')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">
                                    <label for="">Email : </label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$basic->email}}">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Phone : </label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$basic->phone}}">
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">
                                    <label for="">Website : </label>
                                    <input type="text" class="form-control @error('website') is-invalid @enderror" name="website" value="{{$basic->website}}">
                                    @error('website')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Country : </label>
                                    <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{$basic->country}}">
                                    @error('country')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="">Address : </label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$basic->address}}">
                                    @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Post Code : </label>
                                    <input type="text" class="form-control @error('post_code') is-invalid @enderror" name="post_code" value="{{$basic->post_code}}">
                                    @error('post_code')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="">city : </label>
                                    <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{$basic->city}}">
                                    @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Short summary  : </label>
                                    <input type="text" class="form-control @error('summary') is-invalid @enderror" name="summary" value="{{$basic->summary}}">
                                    @error('summary')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="image">Select image:</label>
                                    <input type="file" id="image" name="image" accept="image/*">
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="row ">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-info">Back</a>
                                  
                                </div>
                                <div class="col-md-6 text-right">
                                    <input type="submit"class="btn btn-success" value="Continue">
                                    <!-- <button class="btn btn-primary">Add New Post</button> -->
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
@endpush




