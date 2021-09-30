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
    @forelse($instituations as $instituation){
    <table>
        <thead>
        <th>name</th>
        <th>name</th>
        <th>name</th>
        </thead>
       <tbody>
       <tr>
           <td>{{$instituation->name}}</td>
       </tr>
       </tbody>
    </table>
    @empty

@endforelse

@endsection
