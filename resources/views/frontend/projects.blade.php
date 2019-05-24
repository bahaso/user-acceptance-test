@extends('template.template')

@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="btn-wrapper">
            <a class="btn btn-primary" href="/createProjectForm">Create New Project</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Current Projects</h4>
                            <p class="category">Currently in Testing Projects</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                        
                                        <th>Project Name</th>
                                        <th>Platform</th>
                                        <th>Version</th>
                                        <th>Tester</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                @foreach ($projects as $project)
                                <tr>
                                        <td>
                                        {{ $project->project_name }}
                                        </td>
                                        <td>
                                        {{$project->platform }}
                                        </td>
                                        <td>
                                        {{$project->version}}
                                        </td>
                                        <td>
                                    
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <a class="btn btn-danger" href="deleteProject/{{ $project->id }}">Delete Project</a>
                                            <a class="btn btn-primary" href="projects/{{$project->id}}/featureList">Write Project</a>
                                        </td>
                                </tr>
                                
                                 @endforeach
                                </table>
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Completed Projects</h4>
                            <p class="category">Already Tested Projects</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection