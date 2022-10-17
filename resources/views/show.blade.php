@extends('layout')
@section('content')
    <div class="row">
        <div class="flex-card">
            <div class="card">
                <h4>Name</h4><br>
                <p> {{ $student->firstname }}  {{ $student->lastname }}</p>
            </div>
            <div class="card">
                <h4>Passport</h4>
                <img src="/images/{{ $student->image }}" width="150px">
            </div>
        </div>

        <div class="card">
            <div class="form-group">
                <h4>Email</h4>
                <p>{{ $student->email }}</p>
            </div>
        </div>

        <div class="card">
            <h4>Address</h4>
            <p>{{ $student->address }}</p>
        </div>
    </div>
   

@endsection