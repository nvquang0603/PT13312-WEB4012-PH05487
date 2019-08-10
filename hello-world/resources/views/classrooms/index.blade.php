@extends('layouts.studentLayout')

@section('title', 'Class')

@section('content')
    <h1>Classes</h1>
    <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
        <table class="table table-striped table-hover">
            <caption>List of classes</caption>
            <thead class="thead-dark|thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Họ tên</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Trường</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($classes as $class)
                <tr class="{{$class->id % 2 ? 'bg-danger' : 'bg-success'}}">
                    <th scope="row">{{$class->id}}</th>
                    <td>{{$class->name}}</td>
                    <td>{{$class->teacher_name}}</td>
                    <td>{{$class->major}}</td>
                    <td>{{$class->max_student}}</td>
                    <td>
                        <a href="{{route('classes.edit', $item -> id)}}">Sửa</a>
                        <a href="">Xóa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
