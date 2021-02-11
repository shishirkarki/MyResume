<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <style>
            .page-break {
                page-break-after: always;
            }
        </style>
        <title>Make you Resume as PDF</title>
    </head>
    <body>
        <div class="container " >
            <!-- <div class="main-content mt-4" style="border: 1px solid;padding:15px; margin:30px 0"> -->
                <div class="row justify-content-center">
                    <div class="offset ">
                        <table>
                            <tr>
                                <h4 style="text-transform:uppercase;text-align:center"><H1>Curriculum Vitae</H1></h4>
                            </tr>
                        </table>

                    </div>
                </div>

                <div class="row justify-content-center mt-3">
                    <div class="col-11">
                        <div class="row">
                        @foreach ($basics as $basic)
                            <table>
                                <tr>
                                <td style="float:right;">
                                    <!-- <img src="{{ asset('uploads/basic/'.$basic->image) }}" width="100" height="100"> -->
                                    </td> 
                                        <td><span style="margin:0 50px"></span></td>
                                        <td >
                                                <div class="name">
                                                    <h5 style="font-weight:700" class="m-0 p-0">{{ $basic->name}}</h5>
                                                    <span class="m-0 p-0">{{$basic->label }}</span>
                                                </div>
                                                <span class="d-block">{{$basic->post_code }},{{$basic->address }}</span>
                                                <span class="d-block">{{$basic->city }},{{$basic->country }}</span>
                                        </td>
                                         <td><span style="margin:0 50px"></span></td>
                                            <td style="float:right;">
                                                <h6><b>Email : </b> {{$basic->email }}</h6>
                                                <h6><b>Website : </b> {{$basic->website }}</h6>
                                                <h6><b>Phone : </b> {{$basic->phone }}</h6>
                                            </td> 
                                </tr>
                            </table>
                        @endforeach
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-center">
                    @foreach ($basics as $basic)
                    <div class="col-md-11">
                        <h4>PERSONAL SUMMARY</h4>
                        <p>{{$basic->summary }}</p>
                    </div>
                    @endforeach

                </div>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <h4>Work Experience</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Website</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">End Date</th>
                                    <th scope="col">Other Work</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($works as $work)
                                <tr>
                                    <td>{{$work->company }}</td>
                                    <td>{{$work->position }}</td>
                                    <td>{{$work->website }}</td>
                                    <td>{{$work->startDate }}</td>
                                    <td>{{$work->endDate }}</td>
                                    <td>{{$work->summary }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <h4>Education</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Degree / High School</th>
                                    <th scope="col">Study Type</th>
                                    <th scope="col">Start year</th>
                                    <th scope="col">End year</th>
                                    <th scope="col">GPA</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach ($educations as $education)
                                <tr>
                                    <td>{{$education->institution }}</td>
                                    <td>{{$education->studyType }}</td>
                                    <td>{{$education->startDate }}</td>
                                    <td>{{$education->endDate }}</td>
                                    <td>{{$education->gpa }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <h4>Volunteering</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Organization</th>
                                    <th scope="col">Pasition</th>
                                    <th scope="col">Website</th>
                                    <th scope="col">Start date</th>
                                    <th scope="col">End date </th>
                                    <th scope="col">Others</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach ($volunteers as $volunteer)
                                <tr>
                                    <td>{{$volunteer->organization }}</td>
                                    <td>{{$volunteer->position }}</td>
                                    <td>{{$volunteer->website }}</td>
                                    <td>{{$volunteer->startDate }}</td>
                                    <td>{{$volunteer->endDate }}</td>
                                    <td>{{$volunteer->summary }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <h4>Skills</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Skills</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach ($skills as $skill)
                                <tr>
                                    <td><li>{{ $skill->skill}}</li></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <!-- <a href="#" class="btn btn-warning">Back</a> -->
                    </div>
                    <div class="col-6 text-right">
                        <a href="{{ url('Resume_download')}}" class="btn btn-primary" onclick="return confirm('Are you Sure ?')">Download</a>
                    </div>
                </div>
        </div> 
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>