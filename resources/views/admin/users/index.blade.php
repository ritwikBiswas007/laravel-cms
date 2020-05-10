<!-- Page Heading -->
@extends('layouts.admin')

@section('title')
All Users
@endsection

@section('users')
active
@endsection

@section('view-users')
active
@endsection



@section('body')

<style>
    .avatar {
        background-position: center;
        background-size: cover;
        width: 50px;
        height: 50px;
        border-radius: 50%;

    }
</style>


<h1 class="h3 mb-4 text-gray-800">All Users Page</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Users</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Profile Pic</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Profile Pic</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>

                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>
                            <div class="avatar" style="background-image: url('{{ $user->photo->file }}')"></div>
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->name }}</td>
                        <td class="{{ $user->is_active == 1 ? 'text-success' : 'text-danger' }}">
                            <i class="{{ $user->is_active == 1 ? 'fas fa-check-circle' : 'fas fa-times-circle' }}"></i>
                            {{ $user->is_active == 1 ? 'Active' : 'Inactive' }}</td>
                        <td>{{ date('d-M-y', strtotime($user->created_at)) }}</td>
                        <td>{{ $user->updated_at->diffForHumans() }}</td>
                        <td>
                            <div class="text-center">
                                <a href="{{ route('users.edit', $user->id) }}" target="_blank"><i
                                        class="fas fa-edit mr-2 text-warning"></i></a>
                                <a href="#"><i class=" text-danger fas fa-trash ml-2"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection