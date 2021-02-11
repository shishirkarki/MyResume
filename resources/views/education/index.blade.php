@extends('layouts.app')
@section('title','Education Show')
@push('css')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">
                <div class="card-header"><h5>Hello, Sir/Ma'aM</h5></div>
                <div class="card-body">
                    <h3>Your Education</h3>
                        <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Institution Name</th>
                                    <th>Study Type</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th>GPA</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($educations as $education)
                                <tr>
                                    <td>{{ $education->institution}}</td>
                                    <td>{{ $education->studyType}}</td>
                                    <td>{{ $education->startDate}}</td>
                                    <td>{{ $education->endDate}}</td>
                                    <td>{{ $education->gpa}}</td>
                                    <td>
                                    <a href="{{ url('education-edit/'.$education->id) }}" class="btn btn-info btn-sm"><i class="material-icons">Edit</i></a>
                                    <a href="{{ url('education-delete/'.$education->id) }}" class="btn btn-danger btn-sm"><i class="material-icons">Delete</i></a>
                                    
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="form-group">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <a href="{{url('/education/create')}}" class="btn btn-info btn-sm"><i class="material-icons">Add More</i></a>
                                    
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="{{url('/skill/create')}}" class="btn btn-success btn-sm"><i class="material-icons">Next</i></a>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-3 align-self-center">
           <h5 class="text-info">This is a Demo Resume.</h5>
            <img src="{{asset('images/cv.jpg')}}" alt="" class="img-fluid">
        </div> -->
    </div>
</div>
@endsection

@push('scripts')
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
@endpush


