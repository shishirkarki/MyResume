@extends('layouts.app')
@section('title','Education')
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
                     <a href="{{url('/education/index')}}" class="btn btn-success btn-sm"><i class="material-icons">View Personal Details</i></a>
                </div>
                <div class="card-body">
                    <h3>Fill Your Education level.</h3>
                    <form method="post" action="{{route('education_store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Institution Name * </label>
                                    <input type="text" class="form-control @error('institution') is-invalid @enderror" name="institution" placeholder="Eg: Herald College Kathmandu" value="">
                                    @error('institution')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Study Type*  </label>
                                    <input type="text" class="form-control @error('studyType') is-invalid @enderror" name="studyType" placeholder="Eg. Bachlor/+2" value="">
                                    @error('studyType')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">
                                    <label for="">Start Date* </label>
                                    <input type="text" class="form-control @error('startDate') is-invalid @enderror" name="startDate" placeholder="Eg: 2018/Running" value ="">
                                    @error('startDate')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">End Date*  </label>
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
                                    <label for="">GPA* : </label>
                                    <input type="text" class="form-control @error('gpa') is-invalid @enderror" name="gpa" placeholder="Eg. 4gpa" value ="">
                                    @error('gpa')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="row ">
                                <div class="col-md-6">
                                    <!-- <a href="#" class="btn btn-info">Back</a> -->
                                    <a href="{{url('/skill/create')}}" class="btn btn-success btn-sm"><i class="material-icons">Skip</i></a>
                                  
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




