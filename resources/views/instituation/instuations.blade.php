@extends('layout.app_layout')
@section('content')

    <h1 style="text-align: center;">Instituations</h1>

    <div class="row">
        <div class="col-md-4 offset-4">
            <form action="{{route('institation.store')}}" method="post">
                @csrf
                <input type="text"name="name" CLASS="form-control" placeholder="Instituation Name">
                <input type="number"name="phone" CLASS="form-control"placeholder="phone Number">
                <input type="text"name="address" CLASS="form-control"placeholder="address">

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
                <th>Phone Number</th>
                <th>Address</th>
            </tr>

        </thead>
       <tbody>
       @forelse($instituations as $instituation)
       <tr>
           <td>{{$loop->iteration}}</td>
           <td>{{$instituation->name}}</td>
           <td>{{$instituation->phone_number}}</td>
           <td>{{$instituation->address}}</td>
       </tr>
       @empty
           <td colspan="3">NO Data found</td>
       </tbody>
    </table>


    @endforelse

@endsection
