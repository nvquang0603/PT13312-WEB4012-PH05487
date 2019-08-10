@extends('admin.master')

@section('title')
    Class Page
@stop

@section('header')
    Danh sách lớp
@stop

@section('description')
    Trang hiển thị quản trị danh sách các lớp
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Bảng danh sách lớp</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody><tr>
                            <th>ID</th>
                            <th>Mã lớp</th>
                            <th>Giáo viên</th>
                            <th>Admin</th>
                            <th>Ngành</th>
                            <th>Sĩ số</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($classes as $class)
                            <tr class="{{$class->id % 2 ? 'bg-danger' : 'bg-success'}}">
                                <th scope="row">{{$class->id}}</th>
                                <td>{{$class->name}}</td>
                                <td>{{$class->teacher_name}}</td>
                                <td>
                                @if (count($class->admins))
                                    @foreach($class->admins as $admin)
                                            <p>{{$admin->name}}</p>
                                    @endforeach
                                @endif
                                </td>
                                <td>{{$class->major}}</td>
                                <td>{{$class->max_student}}</td>
                                <td>
                                    <a href="{{route('classes.edit', $class -> id)}}">Sửa</a>
                                    <a href="{{route('classes.delete', $class->id)}}">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody></table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    @include('admin.class_detail', ['data' => $classes])
@stop
