@extends('layouts.studentLayout')

@section('title', 'Student')

@section('content')
    <h1>Students</h1>
    <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
        <table class="table table-striped table-hover">
            <caption>List of students</caption>
            <thead class="thead-dark|thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Họ tên</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Trường</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->university}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
