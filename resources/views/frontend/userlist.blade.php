@extends('template.template')

@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="row">
                    <a href="/registration" class= "btn btn-primary register">Add New User</a>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">User List</h4>
                            <p class="category">All User Lists</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            {{ $user->name }} 
                                                <td>
                                                    <a class='btn btn-primary' href = '/update/{{ $user->id }}'>
                                                        Modify
                                                    </a>
                                                    
                                                    <a class='btn btn-primary' href = 'delete/{{ $user->id }}'>
                                                        Delete
                                                    </a>
                                                    
                                                </td>
                                        </td>
                                    </tr>
                                     @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
    
