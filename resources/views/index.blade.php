@extends('layout')
@section('content')



@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
 
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Address</th>
        <th>Passport</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ ++id }}</td>
        <td>{{ $student->id}}</td>
        <td>{{ $student->firstname}}</td>
        <td>{{ $student->lastname}}</td>
        <td>{{ $student->email}}</td>
        <td>{{ $student->address}}</td>
        <td><img src="/images/{{ $student->image }}" width="100px"></td>
        <td>
            <a href={{ route('show',$student->id)}}><button class="btn1">View</button></a>
            <a href={{ route('edit',$student->id)}}><button class="btn2">Update</button></a>
            <a href={{ route('delete',$student->id)}}><button class="btn3">Delete</button></a>
        </td>
    
    </tr>
    @endforeach
</table>

{{ $students->links() }}
    
@endsection