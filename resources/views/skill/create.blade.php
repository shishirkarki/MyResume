@extends('layouts.app')
@section('title','Skills')
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
                     <a href="{{url('/skill/index')}}" class="btn btn-success btn-sm"><i class="material-icons">View Personal Details</i></a>
                </div>
                <div class="card-body">
                    <h3>Fill your Skill.</h3>
                    <form method="post" action="{{route('skill_store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Enter Your Skill * </label>
                                    <input type="text" class="form-control @error('skill') is-invalid @enderror" name="skill" placeholder="Eg: Understand  of Html" value="">
                                    @error('skill')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="row ">
                                <div class="col-md-6">
                                    <!-- <a href="#" class="btn btn-info">Back</a> -->
                                    <a href="{{url('/resume')}}" class="btn btn-success btn-sm"><i class="material-icons">Skip</i></a>
                                  
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




