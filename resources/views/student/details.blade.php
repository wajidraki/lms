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
{{--                <th>Institation</th>--}}
                <th>Action</th>
                <th>Action</th>

            </tr>

        </thead>
       <tbody>

       <tr>
           <td>{{$students->id}}</td>
           <td>{{$students->name}}</td>
           <td>{{$students->father_name}}</td>
           <td>{{$students->contact}}</td>
           <td>{{$students->department->name}}</td>
{{--           <td>{{$student->instuate->name}}</td>--}}
{{--           {{Route('studnetno.show',$student->id)}}--}}

       </tr>

       </tbody>
    </table>


@endsection
