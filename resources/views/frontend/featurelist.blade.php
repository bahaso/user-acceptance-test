@extends('template.template')

@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="btn-wrapper">
            <a class="btn btn-primary" href="/projects/{{$project_id}}/createFeatureForm">Create New Features</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Current Features</h4>
                            <p class="category">Features in this Projects</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                        <th>Features</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                @foreach ($features as $feature)
                                <tr>
                                        <td>
                                        {{ $feature->features_name}}
                                        </td>
                                        <td>
                                        {{$feature->description}}
                                        </td>
                                        <td>
                                            <a class="btn btn-danger"  href="deleteFeature/{{ $feature->id }}">Delete</a>
                                            <a class="btn btn-warning">Edit</a>
                                            <a class="btn btn-primary" href="/featureList/{{$feature->id}}/actionList">Action Lists</a>
                                        </td>
                                </tr>
                                
                                 @endforeach
                                </table>
                        </div>
                    </div>
                </div>
@endsection