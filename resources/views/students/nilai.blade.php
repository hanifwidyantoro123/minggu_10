@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header" align="center"><b>{{ __('JURUSAN TEKNOLOGI INFORMASI POLITEKNIK NEGERI MALANG') }}</b></div>

            <!DOCTYPE html>
<html>
<head>
<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
<style type="text/css">
table tr td,
table tr th{
font-size: 9pt;
}
</style>
<h4 align="center">STUDENT REPORT</h4>
Name : {{ $student->name }} <br>
NIM : {{ $student->nim }} <br> 
Class : {{ $student->kelas->class_name }} <br>
 <table class="table table-responsive table-striped">
 <thead>
 <tr>
    <th>Course Name</th> 
    <th>Semester</th>
    <th>SKS</th>
    <th>Score</th>
 </tr>
 </thead>
 <tbody>
 @foreach ($student->courses as $sc)
 <tr>
    <td>{{ $sc->course_name }}</td>
    <td>{{ $sc->semester }}</td>
    <td>{{ $sc->sks }}</td>
    <td>{{$sc->pivot->nilai}}</td>
 </tr>
 @endforeach
 </tbody>
 </table>
 <a href="/students/{{$student->id}}/report" class="btn btn-primary" target="_blank">PRINT PDF</a>
</body>
</html>
            </div>
        </div>
    </div>
</div>
@endsection