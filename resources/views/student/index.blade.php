@extends('layouts.app')
@section('content')
<div class="breadcrumbbar border">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Students</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">student</a></li>
                    <li class="breadcrumb-item"><a href="table-editable.html#">ro'yxati</a></li>
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
                    <h6>Student yaratish</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Image</th>
                                <th>Group</th>
                                <th>Course</th>
                                <th class="w-25">Email</th>
                                <th>password</th>
                                <th>BTN</th>

                              </tr>
                            </thead>
                            <tbody>
                                @isset($studentEdit)
                                    <form action="{{ route('student.update',$studentEdit->id) }}" method="post">
                                    @method('put')
                                        @csrf
                                        <tr>
                                            <td>#</td>
                                            <td><input value="{{ $studentEdit->full_name }}" type="text" name="full_name" class="form-control m-0" required="required"></td>
                                            <td><input value="{{ $studentEdit->phone }}" type="text" name="phone" class="form-control m-0" required="required"></td>
                                            <td><input value="{{ $studentEdit->image }}" type="text" name="image" class="form-control m-0" required="required"></td>
                                            <td>
                                                <select class="form-control" name="group_id">
                                                    <option>Group selected</option>
                                                    @foreach ($groups as $group)
                                                        <option value="{{ $group->id }}">{{ $group->name }}</option>  
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="group_id">
                                                    <option>Course selected</option>
                                                    @foreach ($courses as $course)
                                                        <option value="{{ $course->id }}">{{ $course->full_name }}</option>  
                                                    @endforeach
                                                </select>
                                            </td>

                                            <td><input value="{{ $studentEdit->email }}" type="email" name="email" class="form-control m-0" required="required"></td>
                                            <td><input  type="text" name="password" class="form-control m-0" required="required"></td>


                                            <td><button class="btn btn-primary">Update</button></td>
                                    </form>
                                @endisset
                                {{-- @if(!$studentEdit) --}}
                                <form action="{{ route('student.store') }}" method="post">
                                    @csrf
                                    @method('POST')
                                    <tr>
                                        <td>#</td>
                                        <td><input type="text" name="full_name" class="form-control m-0" required="required"></td>
                                        <td><input type="text" name="phone" class="form-control m-0" required="required"></td>
                                        <td><input type="text" name="image" class="form-control m-0" required="required"></td>
                                        <td>
                                            <select class="form-control" name="group_id">
                                                <option>Group selected</option>
                                                @foreach ($groups as $group)
                                                    <option value="{{ $group->id }}">{{ $group->name }}</option>  
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="group_id">
                                                <option>Course selected</option>
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->full_name }}</option>  
                                                @endforeach
                                            </select>
                                        </td>

                                        <td><input type="email" name="email" class="form-control m-0" required="required"></td>
                                        <td><input type="text" name="password" class="form-control m-0" required="required"></td>


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
                    <h5 class="card-title">Hamma studentlar ro'yxati</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive form-control">
                        <table class="table table-striped table-bordered " id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Image</th>
                                <th>Group</th>
                                <th>Course</th>
                                <th class="w-25">Email</th>
                                <th>Password</th>
                                <th>Button</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse($students as $student)
                                <tr>
                                    <td  class="seconds" scope="row">{{ $student->id }}</th>
                                    <td>{{ $student->full_name }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td class="seconds" style="width:120px;height:80px"> <image src="{{ $student->image }}" class="w-100"> </td>
                                    <td class="seconds">{{ $student->group_id }}</td>
                                    <td class="seconds">{{ $student->course_id }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->password }}</td>
                                    <td  class="d-flex align-center justify-content-around p-2">
                                        <a href="{{ route('student.edit',$student->id) }}" class="m-2 p-3"><i class="bi bi-pencil btn-success w-100 p-2" style='border-radius:5px'>Edit</i></a>
                                        <form action="{{ route('student.destroy',$student->id) }}" method="post" class="d-flex align-center ">
                                            @csrf
                                            @method('delete')
                                        <button class="btn-danger w-100 p-3 m-2"style='border-radius:5px' onclick="delet()"><i class="bi bi-trash-fill " >Delete</i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <h6>Student mavjud emas!</h6>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        {{-- <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Edit with click</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Inline edit like a spreadsheet on two columns only and without identifier column.</h6>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-click">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Email ID</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Mark</td>
                                  <td>CEO</td>
                                  <td>demo@example.com</td>
                                  <td>9898989898</td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Larry</td>
                                  <td>Manager</td>
                                  <td>demo@example.com</td>
                                  <td>9797979797</td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>John</td>
                                  <td>Employee</td>
                                  <td>demo@example.com</td>
                                  <td>9696969696</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End col -->
    </div>
    <!-- End row -->
</div>


@endsection
