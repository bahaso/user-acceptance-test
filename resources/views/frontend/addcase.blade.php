@extends('template.template')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">
                        <h4 style="text-align: center">Create New Case </h4>
                </div>
    
                    <div class="card-body">
                    <form method="POST" action="">
                            @csrf
                            <div class="form-group row">
                                <label for="steps" class="col-md-4 col-form-label text-md-right">{{ __('Case Steps') }}</label>
    
                                <div class="col-md-6">
                                    <textarea id="steps" name="steps" class="form-control" required>

                                    </textarea>
    
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="expectation" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
    
                                <div class="col-md-6">
                                        <textarea id="expectation" rows = "5" cols = "50" name = "expectation" class="form-control" required>
                                               
                                        </textarea>

                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                       Create Case
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection