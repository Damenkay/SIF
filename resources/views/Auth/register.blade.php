@extends('layouts.base')
@section('content')
<form class="container py-5 h-100" action="{{route('postRegister')}}" method="POST">
  @csrf
@if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
    <div class="row mb-3">
      <label for="inputText3" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" name="name" class="form-control" id="inputText3">
      </div>
    </div>
    <div class="row mb-3">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" name="email" class="form-control" id="inputEmail3">
      </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" name="password" class="form-control" id="inputPassword3">
        </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
      <div class="col-sm-10">
        <input type="password" name="password_confirmation" class="form-control" id="inputPassword3">
      </div>
  </div>
    
    <button type="submit" class="btn btn-primary">Sign Up</button>
  </form>
@endsection