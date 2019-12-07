@extends('master')

@section('content')
    <h1 class="mt-5 text-center"> Update Student </h1>

    <form action="{{ url('update', $student->id) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" readonly name="name" value="{{ $student->name }}" class="form-control" id="exampleInputEmail1" placeholder="Name">
        </div>
        <div class="form-group">
            <input type="text" readonly name="registration_id" value="{{ $student->registration_id }}" class="form-control" id="exampleInputPassword1" placeholder="Registration Id">
        </div>
        <div class="form-group">
            <textarea name="description" class="form-control" id="exampleInputPassword1" placeholder="Description" rows="5">{{ $student->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection