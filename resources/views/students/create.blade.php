@extends('master')

@section('content')
    <h1 class="mt-5 text-center"> Create Student </h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
        </div>
        <div class="form-group">
            <input type="text" name="registration_id" class="form-control" id="exampleInputPassword1" placeholder="Registration Id">
        </div>
        <div class="form-group">
            <textarea name="description" class="form-control" id="exampleInputPassword1" placeholder="Description" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection