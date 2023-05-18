@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('Petani.create')}}"class="btn btn-primary" role="button">Create New</a>

                    {{-- {{ __('You are logged in!') }} --}}



                    <div class="table-responsive">
                    <div class="card mb-2" >
                    <table class="table table-bordered table-hover table-striped table-dark">
                    <thead>
                        <tr>
                            <div class="card header">
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Author</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>


                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($Petanis as $key => $Petani)

                        <tr>
                            <div class="card body">
                            <th scope="row">1</th>
                            <td> {{ $Petani->title }}</td>
                            <td> {{ $Petani->description }}</td>
                            <td> {{ $Petani->user->name }}</td>
                            <td> <a href="{{ route('Petani.edit',
                            $Petani->id)}}">Edit</a></td>
                            <td> <a href="{{ route('Petani.delete',
                                $Petani->id)}}">Delete</a></td>




                        </tr>
                        <tr>
                            @endforeach

                        </tbody>

                    </table>
                    {{ $Petanis->links()}}
                    </div>
                </div>
            </div>

@endsection
