@extends('layouts.bootstrap')



@section('content')
<h1> This is Products delivered through bootstrap layout </h1>



<form action="\rec-prod" method="POST">
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='details'></textarea>
  </div>

  <input type="submit" class="btn btn-outline-primary" value="Register Product">

</form>


@endsection
