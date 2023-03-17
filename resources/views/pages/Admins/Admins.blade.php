@extends('layouts')
@section("content")
    <div class="users-list-table">
        <div class="card">
            <div class="card-body">
                <div class="page-list">
                    <a href="{{route('Admin')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
                    @include('alerts.success')
                    @include('alerts.errors')
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($admins as $admin)
                                <tr>
                                    <td>
                                        <span class="td-data">{{$admin->name}}</span>
                                    </td>
                                    <td>
                                        <span class="td-data">{{$admin->email}}</span>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$admins->links()}}

                </div>
            </div>
        </div>
    </div>
@endsection
