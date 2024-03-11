@extends('backend.layouts.master')
@section('title','Add Stock')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Stock</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Stock</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-header">
                                <a href="{{ route('backend.stock.index') }}">
                                    <button class="btn btn-primary">Go Back</button>
                                </a>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('backend.stock.store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="stock_name">Stock Name</label>
                                            <input required type="text" name="name" value="{{ old('name') }}" placeholder="Enter Stock Name" class="form-control" id="stock_name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="price">Price per stock</label>
                                            <input required type="number" name="price" step=".01" value="{{ old('price') }}" placeholder="Enter Stock price" class="form-control text-right" id="price">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="total">Total Units</label>
                                            <input required type="number" name="total_units" step=".01" value="{{ old('total_units') }}" placeholder="Enter total units" class="form-control text-right" id="total_units">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Save" class="btn btn-success">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
@endsection
@section('script')
    
@endsection
