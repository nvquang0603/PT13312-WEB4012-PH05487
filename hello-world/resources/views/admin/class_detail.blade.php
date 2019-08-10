@foreach ($data as $class)
    @if ($class->id === 2)
        <p>ID: {{ $class->id }}</p>
        <p>Mã lớp: {{ $class->name }}</p>
        <p>Giáo viên: {{ $class->teacher_name }}</p>
        <p>Ngành: {{ $class->major }}</p>
        <p>Sĩ số: {{ $class->max_student }}</p>
    @endif
@endforeach
