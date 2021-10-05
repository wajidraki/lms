@extends('layout.app_layout')
@section('content')

    <h1 style="text-align: center;">Details</h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>S.NO</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>contact</th>
                <th>Departemnt/Level</th>
                <th>Institation</th>


            </tr>

        </thead>
       <tbody>

       <tr>
           <td>{{$students->id}}</td>
           <td>{{$students->name}}</td>
           <td>{{$students->father_name}}</td>
           <td>{{$students->contact}}</td>
           <td>{{$students->department->name}}</td>
           <td>{{$students->instituation->name}}</td>

       </tr>

       </tbody>
    </table>


@endsection
