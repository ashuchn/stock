@extends('backend.layouts.master')
@section('title', 'Edit User')


@section('content')
    <div class="content-wrapper">
      @if($errors->any())
          {{ implode('', $errors->all('<div>:message</div>')) }}
      @endif
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User Details</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        @if (session('success'))
            <div class="card-body">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5>{{ Session::get('success') }}</h5>
                    <?php Session::forget('success'); ?>
                </div>
            </div>
        @endif
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">{{ $user->fullName }}</h3>
                        <div class="card-tools">
                            <a href="javascript:void()" data-toggle="modal" data-target="#profile"><i
                                    class="fa fa-edit"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4></h4>


                        <section class="content">
                            <div class="container-fluid">
                                <!-- SELECT2 EXAMPLE -->
                                <div class="card card-default ">
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <p><label>First Name </label></p>
                                                    <p>{{ $user->first_name }}</p>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <p><label>Last Name </label></p>
                                                    <p>{{ $user->last_name }}</p>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <p><label>Email</label></p>
                                                    <p>{{ $user->email }}</p>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <p><label>Role</label></p>
                                                    <p>{{ $user->roles->pluck('name')[0] }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <p><label>Joined On</label></p>
                                                    <p>{{ $user->created_at }}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->


                                </div>

                                <!-- /.row -->
                            </div>

                        </section>
                    </div>
                    <!-- /.card -->
                </div>

                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <div class="card-title">
                            Change approval status
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.updateApprovalStatus') }}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <div class="row">
                                <div class="col-md-4">
                                    <select name="approved" class="form-control">
                                        <option value="">Choose an option...</option>
                                        <option value="1" @if($user->approved == 1) selected @endif>Yes</option>
                                        <option value="0" @if($user->approved == 0) selected @endif>No</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="remarks" class="form-control" value="{{ $user->remarks ?? "" }}" placeholder="Enter remarks..." required>
                                </div>
                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-primary" value="Update status!">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- <div class="card card-success card-outline">
                    <div class="card-header">Change Password</div>
                    <form method="post" action="{{ route('admin.user.changePassword', ['id'=>$user->id]) }}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 form-group" >
                                    <label for="password">New Password:</label>
                                    <input type="password" id="password" class="form-control" name="password" placeholder="New Password">
                                </div>
                                <div class="col-md-6 form-group" >
                                    <label for="confirm_password">Confirm Password:</label>
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Update Password" class="btn btn-primary btn-sm">
                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
                        <span class="text-danger">Password Last changed at: {{ $user->password_last_changed_at }}</span>
                    </div>
                </div> --}}
                <!-- /.card -->


                <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <div class="modal fade" id="profile">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Profile</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">



                    <!-- SELECT2 EXAMPLE -->
                    <form action="{{ route('users.update', ['user' => encrypt($user->id)]) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" name="firstName" id="exampleInputEmail1"
                                        value="{{ $user->first_name }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control" name="lastName" id="exampleInputEmail1"
                                        value="{{ $user->last_name }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                        value="{{ $user->email }}">
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
@endsection

@section('script')
<script>
  $( function() {
    $( "#datepicker" ).datepicker({
      dateFormat: 'dd/mm/yy',
      showButtonPanel: true,
      changeMonth: true,
      changeYear: true,
      yearRange: "-100:+0",
    });
  } );
  </script>
@endsection
