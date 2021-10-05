@extends('layout.app_layout')
@section('content')

    <h1 style="text-align: center;">Student</h1>
    <h2>This is Studnet Poration</h2>

    <div class="row">
        <div class="col-md-4 offset-4">
            <form action="{{route('student.store')}}" method="post">
                @csrf
                <input type="text"name="stu_name" class="form-control" placeholder="student Name">
                <input type="text"name="father_name" class="form-control" placeholder="Father Name">
                <input type="text"name="contact" class="form-control" placeholder="Contact">
               <select class="form-select" name="deportment">
                   @foreach($departments as $deportment)
                       <option value="{{$deportment->id}}">{{$deportment->name}}</option>
                   @endforeach
               </select>

                <select class="form-select" name="instituation">
                    @foreach($instuat as $institution)
                        <option value="{{$institution->id}}">{{$institution->name}}</option>
                    @endforeach
                </select>


                <button class="btn btn-primary"type="submit">save</button>
                <button class="btn btn-danger"type="reset">Reset</button>
            </form>

        </div>
    </div>




    <table class="table table-hover">
        <thead>
            <tr>
                <th>S.NO</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>contact</th>
                <th>Departemnt/Level</th>
                <th>Institation</th>
                <th>Action</th>
                <th>Action</th>

            </tr>

        </thead>
       <tbody>
       @forelse($students as $student)
       <tr>
           <td>{{$student->iteration}}</td>
           <td>{{$student->name}}</td>
           <td>{{$student->father_name}}</td>
           <td>{{$student->contact}}</td>
           <td>{{$student->department->name}}</td>
           <td>{{$student->instituation->name}}</td>

           <td><a href="{{Route('student.show',$student->id)}}--}}" class="btn btn-primary">view</a></td>
           <td><a href="/noinstview" class="btn btn-primary">INFO</a></td>
       </tr>
       @empty
           <td colspan="3">NO Data found</td>
       </tbody>
    </table>


    @endforelse

@endsection
