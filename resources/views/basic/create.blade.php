@extends('layouts.app')
@section('title','Personal Information')
@push('css')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
@endpush
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>Hello, Sir/Ma'aM</h5>
                     <a href="{{url('/basic/index')}}" class="btn btn-success btn-sm"><i class="material-icons">View Personal Details</i></a>
                </div>
                <div class="card-body">
                    <h3>Give Your Personal Information</h3>

                    <!-- <form action="{{ route('store') }}" enctype="multipart/form-data" method="post"> -->
                    <form method="post" action="{{route('store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Frist Name : </label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter First Name" value="{{ Auth::user()->name }}">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Label : </label>
                                    <input type="text" class="form-control @error('label') is-invalid @enderror" name="label" placeholder="Eg. Student" value="">
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
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Your Email" value ="{{ Auth::user()->email }}">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Phone : </label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Enter Your Phone Number" value ="">
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
                                    <input type="text" class="form-control @error('website') is-invalid @enderror" name="website" placeholder="Eg. https://www.shishirkarki.com" value ="">
                                    @error('website')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Country : </label>
                                    <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" placeholder="Eg. Nepal " value ="">
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
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Enter Your Address" value ="">
                                    @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Post Code : </label>
                                    <input type="text" class="form-control @error('post_code') is-invalid @enderror" name="post_code" placeholder="Enter Your Post Code" value ="">
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
                                    <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="Eg: Kathmandu" value ="">
                                    @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Short summary  : </label>
                                    <input type="text" class="form-control @error('summary') is-invalid @enderror" name="summary" placeholder="Introduce Your Self" value ="">
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
                                    <!-- <a href="#" class="btn btn-info">Back</a> -->
                                    <a href="{{url('/work/create')}}" class="btn btn-success btn-sm"><i class="material-icons">Skip</i></a>
                                  
                                </div>
                                <div class="col-md-6 text-right">
                                    <input type="submit"class="btn btn-success" value="Continue">
                                    
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




