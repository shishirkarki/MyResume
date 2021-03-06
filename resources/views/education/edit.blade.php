@extends('layouts.app')
@section('title','Education Edit')
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
                    <h3 class="text-info">Edit your Education</h3>

                    <!-- <form action="{{ route('store') }}" enctype="multipart/form-data" method="post"> -->
                    <form method="post" action="{{ url('education-update/'.$education->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Institution name : </label>
                                    <input type="text" class="form-control @error('institution') is-invalid @enderror" name="institution" value="{{$education->institution}}">
                                    @error('institution')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Study Type : </label>
                                    <input type="text" class="form-control @error('studyType') is-invalid @enderror" name="studyType" value="{{$education->studyType}}">
                                    @error('studyType')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">
                                    <label for="">Start Date : </label>
                                    <input type="text" class="form-control @error('startDate') is-invalid @enderror" name="startDate" value="{{$education->startDate}}">
                                    @error('startDate')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">End Date : </label>
                                    <input type="text" class="form-control @error('endDate') is-invalid @enderror" name="endDate" value="{{$education->endDate}}">
                                    @error('endDate')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">
                                    <label for="">GPA : </label>
                                    <input type="text" class="form-control @error('gpa') is-invalid @enderror" name="gpa" value="{{$education->gpa}}">
                                    @error('gpa')
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
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
@endpush




