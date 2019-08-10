@extends('admin.master')

@section('title', 'Create New Class')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route(isset($class) ? 'classes.update' : 'classes.create-post')}}" method="POST">
        @csrf
        @if (isset($class))
            <input type="hidden" name="id" value="{{ $class->id }}"/>
        @endif
        <div class="form-group">
            <label for="name">Name</label>
            <input
                    id="name"
                    type="text"
                    class="form-control"
                    name="name"
                    value="{{isset($class) ? $class->name : ''}}"
            />
        </div>
        <div class="form-group">
            <label for="teacher_name">Teacher Name</label>
            <input
                    id="teacher_name"
                    type="text"
                    class="form-control"
                    name="teacher_name"
                    value="{{isset($class) ? $class->teacher_name : ''}}"
            />
        </div>
        <div class="form-group">
            <label for="major">Major</label>
            <select
                    class="form-control"
                    name="major"
            >
                <option value="CNTT" {{ isset($class) && ($class->major === 'CNTT') ? 'selected' : '' }}>Cong nghe thong tin</option>
                <option value="MUL" {{ isset($class) && ($class->major === 'MUL') ? 'selected' : ''}}>Da phuong tien</option>
                <option value="MKT" {{ isset($class) && ($class->major === 'MKT') ? 'selected' : ''}}>Marketing</option>
                <option value="UD" {{ isset($class) && ($class->major === 'UD') ? 'selected' : ''}}>Ung dung</option>
            </select>
        </div>
        <div class="form-group">
            <label for="max_student">Max student</label>
            <input
                    id="max_student"
                    type="number"
                    class="form-control"
                    name="max_student"
                    value="{{isset($class) ? $class->max_student : ''}}"
            />
        </div>
        <div class="pull-right">
            <button type="submit" class="btn btn-success">Create Class</button>
        </div>
    </form>
@stop
