@extends('template.template')
@section('content')

{{-- <div class="content table-responsive table-full-width">
    <table class="table table-hover table-striped">
        @foreach ($features as $key => $feature)
        <thead>
        <tr>
          <th>No</th>
          <th>Feature</th>
          <th>Action</th>
          </tr>
        </thead>
        <tbody>
              <tr>
                  <td>{{$key +1}}</td>
                  <td>
                    {{$feature->features_name}}
                    <a class="btn btn-primary" href="/featureList/{{$feature->id}}/createActionForm">Add Action</a>
                  <a class="btn btn-primary" href="/actionList/{{$feature->id}}/createCaseForm">Add Case</a>
                  </td>
                  @foreach ($feature->actions as $action)
                  <td>{{$action->action_name}}</td>
              
                      
                  @endforeach
              </tr>

              

            @endforeach
        </tbody>
    </table>
</div> --}}


@foreach ($features as $key => $feature)
<div class="content table-responsive table-full-width">
    <div class="row">
        <div class="col-md-6">
            <h3 class="mt-0">{{ $key+1 }} Feature : {{ $feature->features_name }}</h3>
            <p>
                {{ $feature->description }}
            </p>
        </div>
        <div class="col-md-6 text-right">
            <a class="btn btn-primary" href="/featureList/{{$feature->id}}/createActionForm">Add Feature</a>
            <a class="btn btn-danger" href="/featureList/{{$feature->id}}/createActionForm">Delete Feature</a>
        </div>
    </div>
    
    <table class="table table-hover table-striped mt-1">
        <thead>
            <tr>
                <td>No</td>
                <td>Action Name</td>
                <td>Type</td>
                <td>Case</td>
                <td></td>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($feature->actions as $key => $action)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>
                        {{ $action->action_name }}
                        
                        <br>

                        <a class="btn btn-primary" href="/featureList/{{$feature->id}}/createActionForm">Add Action</a>
                        <a class="btn btn-danger" href="/featureList/{{$feature->id}}/createActionForm">Delete Action</a>
                    </td>
                    <td>{{ $action->type }}</td>
                    <td>
                        @foreach ($action->cases as $key => $case)
                            <b>Steps : </b> <br>
                            {{ $case->steps }}
                            
                            <br><br>

                            <b>Expectation : </b> <br>
                            {{ $case->expectation }}

                            <br><br>

                            <b>Status : </b> <br>
                            {{ $case->status }}
                        @endforeach
                    </td>
                    <td>
                        <a class="btn btn-primary" href="/actionList/{{$action->id}}/createCaseForm">Add Case</a>
                        <a class="btn btn-danger" href="/actionList/{{$action->id}}/ganti-aku">Delete Case</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endforeach

<div style="margin-top: 30rem;"></div>

<div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped mt-1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Feature Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($features as $feature_no => $feature)
                    <tr>
                        <td>{{ $feature_no+1 }}</td>
                        <td>
                            {{ $feature->features_name }}

                            <br>

                            <a class="btn btn-primary" href="/featureList/{{$feature->id}}/createActionForm">Add Feature</a>
                            <a class="btn btn-danger" href="/featureList/{{$feature->id}}/createActionForm">Delete Feature</a>
                        </td>
                        <td>
                            <table class="table table-hover table-striped mt-1">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Action Name</td>
                                        <td>Case and Expectation</td>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($feature->actions as $action_no => $action)
                                    <tr>
                                        <td>{{ $action_no+1 }}</td>
                                        <td>
                                            <h6>{{ $action->type }}</h6>

                                            {{ $action->action_name }}

                                            <br>

                                            <a class="btn btn-primary" href="/featureList/{{$feature->id}}/createActionForm">Add Action</a>
                                            <a class="btn btn-danger" href="/featureList/{{$feature->id}}/createActionForm">Delete Action</a>
                                        </td>
                                        <td>
                                            <table class="table table-hover table-striped mt-1">  
                                                    <thead>
                                                        <tr>
                                                            <td>No</td>
                                                            <td>Steps</td>
                                                            <td>Expectation</td>
                                                            <td>Status</td>
                                                            <td></td>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach ($action->cases as $case_no => $case)
                                                        <tr>
                                                            <td>{{ $case_no+1 }}</td>
                                                            <td>{{ $case->steps }}</td>
                                                            <td>{{ $case->expectation }}</td>
                                                            <td>{{ $case->status }}</td>
                                                            <td>
                                                                <a class="btn btn-primary" href="/featureList/{{$feature->id}}/createActionForm">Add Case</a>
                                                                <a class="btn btn-danger" href="/featureList/{{$feature->id}}/createActionForm">Delete Case</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
