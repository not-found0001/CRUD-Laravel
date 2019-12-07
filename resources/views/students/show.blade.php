@extends('master')

@section('content')
    <h1 class="m-5 text-center"> Welcome {{ $student->name }} </h1>
    
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Registration Id</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> {{ $student->name }} </td>
                <td> {{ $student->registration_id }} </td>
                <td> {{ $student->description }} </td>
                <td> 
                    <a href="{{ url('edit', $student->id) }}" class="btn btn-primary"> Edit </a> 
                    <a href="{{ route('delete',['id'=>$student->id]) }}" class="btn btn-danger"> Delete </a> 
                </td>
            </tr>
        </tbody>
    </table>

@endsection