@extends('layout.app_layout')
@section('content')

    <h1 style="text-align: center;">Student</h1>

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
                    @foreach($instuations as $instuate)
                        <option value="{{$instuate->id}}">{{$instuate->name}}</option>
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

            </tr>

        </thead>
       <tbody>
       @forelse($students as $student)
       <tr>
           <td>{{$loop->iteration}}</td>
           <td>{{$student->name}}</td>
           <td>{{$student->father_name}}</td>
           <td>{{$student->contact}}</td>
           <td>{{$student->department->name}}</td>
           <td>{{$student->instuate->name}}</td>
       </tr>
       </tbody>
    </table>
    @empty
        <td colspan="3">NO Data found</td>

    @endforelse

@endsection
