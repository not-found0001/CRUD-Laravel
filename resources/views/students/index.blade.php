@extends('master')

@section('content')

    @if(session()->get('success'))
        <p class="alert text-center alert-success mt-5"> 
            {{ session()->get('success') }} 
        </p>
    @endif

    <h1 class="mt-5 text-center"> User List </h1>
    <a href="{{ route('create') }}" class="mb-3 btn btn-primary">
        Register Student
    </a>
    
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Registration Id</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        @foreach($students as $student)
        <tbody>
            <tr>
                <td> {{ $student->name }} </td>
                <td> {{ $student->registration_id }} </td>
                <td> {{ $student->description }} </td>
                <td> 
                    <a href="{{ url('edit', $student->id) }}" class="btn btn-primary"> Edit </a> 
                    <a href="{{ route('show', ['id'=>$student->id]) }}" class="btn btn-info"> Show </a>
                    <a href="{{ route('delete',['id'=>$student->id]) }}" class="btn btn-danger"> Delete </a> 
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    
    <hr class="mt-2">
    {{ $students->links() }}

@endsection