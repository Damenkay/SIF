@extends('layout')
@section('content')
<div class="row">
    <div class="header">
        <div class="pull-left">
            <h2>Edit Student Details
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<div class="card">

    <form action="{{route('update',$student->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
                <div class="form-group">
                    <strong>Firstname:</strong>
                    <input type="text" name="firstname" value={{$student->firstname}}>
                </div>
    
                <div class="form-group">
                    <strong>Lastname:</strong>
                    <input type="text" name="lastname" value={{$student->lastname}}>
                </div>
                
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" value={{$student->email}}>
                </div>
    
                <div class="form-group">
                    <strong>Address:</strong>
                  <input type="text" name="address"  value={{$student->address}}>
                </div>
    
            
                <div class="form-group1">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/images/{{ $student->image }}" width="150px">
                </div>
         
         
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
         
    </form>

</div>

    
@endsection  