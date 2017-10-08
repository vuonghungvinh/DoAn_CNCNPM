@extends('layouts.app')
@section('css')
    <link href="{{ asset('css/student.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="title">List students</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>MSSV</td>
                        <td>Tên</td>
                        <td>Ngày Sinh</td>
                        <td>Giới Tính</td>
                        <td>Lớp</td>
                        <td>Địa Chỉ</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->mssv}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->ngaysinh}}</td>
                            <td>{{$student->gioitinh}}</td>
                            <td>{{$student->lop}}</td>
                            <td>{{$student->diachi}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection