@extends('home')
@section('title','Personal Information')
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
                    <h3>Tell Us About Yourself</h3>
                        <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Label</th>
                                    <th>Email</th>
                                    <th>phone</th>
                                    <th>website</th>
                                    <th>country</th>
                                    <th>address</th>
                                    <th>post_code</th>
                                    <th>summary</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($basics as $basic)
                                <tr>
                                    
                                    <td>{{ $basic->name}}</td>
                                    <td>{{ $basic->label}}</td>
                                    <td>{{ $basic->email}}</td>
                                    <td>{{ $basic->phone}}</td>
                                    <td>{{ $basic->website}}</td>
                                    <td>{{ $basic->country}}</td>
                                    <td>{{ $basic->address}}</td>
                                    <td>{{ $basic->post_code}}</td>
                                    <td>{{ $basic->summary}}</td>
                                    <td>
                                   
                                    <a href="{{ url('Basic-edit/'.$basic->id) }}" class="btn btn-info btn-sm"><i class="material-icons">Edit</i></a>
                                    <a href="{{ url('Basic-delete/'.$basic->id) }}" class="btn btn-danger btn-sm"><i class="material-icons">Delete</i></a>
                                    
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                        </table>
                            <div class="form-group">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <a href="{{url('/basic/create')}}" class="btn btn-info btn-sm"><i class="material-icons">Add More</i></a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="{{url('/work/create')}}" class="btn btn-success btn-sm"><i class="material-icons">Next</i></a>
                                    </div>
                                </div>
                            </div>
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


