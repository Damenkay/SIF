@extends('layout')
@section('content')
<div class="header">
    <h2>Add New Student</h2>

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
</div>
<div class="card">
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    
                <div class="form-group">
                    <input type="text" name="firstname" placeholder="Firstname">
                </div>
    
                <div class="form-group">
                    <input type="text" name="lastname" placeholder="Lastname">
                </div>
                
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email">
                </div>
    
                <div class="form-group">
                    <textarea class="form-control" style="height:50px, width:1em" name="address" placeholder="Address"></textarea>
                </div>
    
                <div class="form-group1">
                    <h5>Attach Passport</h5>
                    <input type="file" name="image" placeholder="Passport">
                </div>
         
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
         
    </form>

</div>
     

    
@endsection