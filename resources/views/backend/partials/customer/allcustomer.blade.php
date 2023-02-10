@extends('master')
@section('main')
<h5 class="card-title">All Customer List</h5>
{{-- @dd($allCustomer) --}}



<!-- Table with stripped rows -->
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">FacebooK</th>
      <th scope="col">Twitter</th>

      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@foreach ($allCustomer as $key=>$data )
@php
  $email=App\Models\User::where('id',$data->user_id)->pluck('email')->first();
@endphp
<tr>
    <th scope="row">{{$key+1}}</th>
    <td>{{$data->name}}</td>
    <td ><img style="width:80px" src="{{ asset('images/customer/'.$data->image) }}" alt=""></td>
    <td>{{$email}}</td>
    <td>{{$data->mobile}}</td>
    <td>{{$data->f_profile}}</td>
    <td>{{$data->t_profile}}</td>



    <td>
      <div class="d-flex">
        <a href="{{ route('seeOrders',$data->user_id) }}" class="btn btn-warning btn-sm" ><i class="bi bi-check-all"></i></a>
        <a href="{{route('customer.delete',$data->user_id)}}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
      </div>
       
    </td>


  </tr>



@endforeach


  </tbody>
</table>
<!-- End Table with stripped rows -->

@endsection
