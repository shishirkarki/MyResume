@extends('layouts.app')
@section('title','Work')
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
                     <a href="{{url('/work/index')}}" class="btn btn-success btn-sm"><i class="material-icons">View Personal Details</i></a>
                </div>
                <div class="card-body">
                    <h3>Fill your work experience</h3>
                    <form method="post" action="{{route('work_store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Company Name* </label>
                                    <input type="text" class="form-control @error('company') is-invalid @enderror" name="company" placeholder="Eg: XYZ Pvt. Ltd" value="">
                                    @error('company')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Position* </label>
                                    <input type="text" class="form-control @error('position') is-invalid @enderror" name="position" placeholder="Eg. Manager" value="">
                                    @error('position')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">
                                    <label for="">Start Date* </label>
                                    <input type="text" class="form-control @error('startDate') is-invalid @enderror" name="startDate" placeholder="Eg: 2018" value ="">
                                    @error('startDate')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">End Date* </label>
                                    <input type="text" class="form-control @error('endDate') is-invalid @enderror" name="endDate" placeholder="Eg: 2020" value ="">
                                    @error('endDate')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">
                                    <label for="">Website* </label>
                                    <input type="text" class="form-control @error('website') is-invalid @enderror" name="website" placeholder="Eg. https://www.shishirkarki.com" value ="">
                                    @error('website')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Other Experience* </label>
                                    <input type="text" class="form-control @error('summary') is-invalid @enderror" name="summary" placeholder="Eg. web developer " value ="">
                                    @error('summary')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="row ">
                                <div class="col-md-6">
                                    <!-- <a href="#" class="btn btn-info">Back</a> -->
                                    <a href="{{url('/volunteer/create')}}" class="btn btn-success btn-sm"><i class="material-icons">Skip</i></a>
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
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
@endpush




