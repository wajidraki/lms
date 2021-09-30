@extends('layout.app_layout')
@section('content')

    <h1 style="text-align: center;">Dashboard</h1>


    <nav class="navbar navbar-light bg-light" style="margin-top: 200px;">
        <div class="container-fluid">
            <a href="#" class="btn btn-primary" name="department">ADD Department</a>
        </div>
    </nav>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="/institation" class="btn btn-primary" name="institution">ADD institution</a>
        </div>
    </nav>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="btn btn-primary" name="student">ADD Student</a>
        </div>
    </nav>


@endsection
