@extends('layouts.app')
@section('content')
<div class="breadcrumbbar border">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Qoida</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Qoida</a></li>
                    <li class="breadcrumb-item"><a href="table-editable.html#">list</a></li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i></button>
            </div>
        </div>
    </div>
</div>

<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h6>Qoida yaratish</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Qisqa Sharx</th>
                                <th>To'liq sharx</th>
                                <th>BTN</th>

                              </tr>
                            </thead>
                            <tbody>
                                @isset($qoidaEdit)
                                    <form action="{{ route('qoida.update',$qoidaEdit->id) }}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <tr>
                                            <td>#</td>
                                            <td><input placeholder="qoida full name" value="{{ $qoidaEdit->title }}" type="text" name="title" class="form-control m-0" required="required"></td>
                                            <td><input placeholder="qoida's shorts"  value="{{ $qoidaEdit->short_data }}" type="text" name="short_data" class="form-control m-0" required="required"></td>
                                            <td><input placeholder="qoida's data"  value="{{ $qoidaEdit->data }}" type="text" name="data" class="form-control m-0" required="required"></td>

                                            <td><button class="btn btn-primary">Update</button></td>
                                    </form>
                                @endisset
                                {{-- @if(!$studentEdit) --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('qoida.store') }}" method="post">
                                    @csrf
                                    @method('POST')
                                    <tr>
                                        <td>#</td>
                                        <td><input placeholder="qoida  name" type="text" name="title" class="form-control m-0" required="required"></td>
                                        <td><input placeholder="qoida's shorts"  type="text" name="short_data" class="form-control m-0" required="required"></td>
                                        <td><input placeholder="qoida's data"  type="text" name="data" class="form-control m-0" required="required"></td>

                                        <td><button class="btn btn-primary">Create</button></td>
                                </form>
                                {{-- @endif --}}
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Hamma Qoida ro'yxati</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive form-control">
                        <table class="table table-striped table-bordered " id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Qisqa Sharx</th>
                                <th>To'liq sharx</th>
                                <th>Button</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse($qoidas as $qoida)
                                <tr>
                                    <td  class="seconds" scope="row">{{ $qoida->id }}</th>
                                    <td>{{ $qoida->title }}</td>
                                    <td class="seconds">{{ $qoida->short_data }}</td>
                                    <td class="seconds">{{ $qoida->data }}</td>
                                    <td  class="d-flex align-center justify-content-around p-2">
                                        <a href="{{ route('qoida.edit',$qoida->id) }}" class="m-2 p-3"><i class="bi bi-pencil btn-success w-100 p-2" style='border-radius:5px'>Edit</i></a>
                                        <a href="{{ route('qoida.show',$qoida->id) }}" class="m-2 p-3"><i class="bi bi-pencil btn-primary w-100 p-2" style='border-radius:5px'>Show</i></a>
                                        <form action="{{ route('qoida.destroy',$qoida->id) }}" method="post" class="d-flex align-center ">
                                            @csrf
                                            @method('delete')
                                        <button class="btn-danger w-100 p-3 m-2"style='border-radius:5px' onclick="delet()"><i class="bi bi-trash-fill " >Delete</i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <h6>Qoida mavjud emas!</h6>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <!-- End col -->
    </div>
    <!-- End row -->
</div>


@endsection
