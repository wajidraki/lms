@extends('layout.app_layout')
@section('content')


<div class="row">
    <div class="col-md-12">
        <h1 style="text-align: center;">Instuation have Student</h1>
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
    </div>
</div>


  <div class="row">
      <div class="col-md-12">

          <table class="table table-hover">
              <h1 style="text-align: center;">Instituation Not have student</h1>
              <thead>
              <tr>
                  <th>S.NO</th>
                  <th>name</th>
                  <th>Phone Number</th>
                  <th>Address</th>
              </tr>

              </thead>
              <tbody>
              @forelse($instit as $instituation)
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
      </div>
  </div>


@endsection
