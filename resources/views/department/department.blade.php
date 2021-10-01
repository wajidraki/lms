@extends('layout.app_layout')
@section('content')

    <h1 style="text-align: center;">Department</h1>

    <div class="row">
        <div class="col-md-4 offset-4">
            <form action="{{route('department.store')}}" method="post">
                @csrf
                <input type="text"name="department" class="form-control" placeholder="Department Name">
                <button class="btn btn-primary"type="submit">save</button>
                <button class="btn btn-danger"type="reset">Reset</button>
            </form>

        </div>
    </div>




    <table class="table table-hover">
        <thead>
            <tr>
                <th>S.NO</th>
                <th>name</th>
            </tr>

        </thead>
       <tbody>
       @forelse($departments as $department)
       <tr>
           <td>{{$loop->iteration}}</td>
           <td>{{$department->name}}</td>
       </tr>
       </tbody>
    </table>
    @empty
        <td colspan="3">NO Data found</td>

    @endforelse

@endsection
