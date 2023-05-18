@extends('layouts.app')

@section('content')

<form action="{{ route('Petani.store') }}" method="POST">{{--route to submit on button--}}
    @csrf
    <form>
        <form>
            <div class="table-responsive">
            <div class="form-row align-items-center">
                <div class="col-auto">
            <label for="Title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input name="title" type="text" class="form-control" id="title" placeholder="Title">
                @error('title')
                <small class="text-danger">Sila masukkan title</small>
            @enderror
            </div>


            <div class="table-responsive">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                <label for="Title" class="col-sm-2 col-form-label">Due Date</label>
                <input class="form-control" type="date" name="due_date" value="{{ old('due_date') }}">
                @error('due_date')
                    <small class="text-danger">Sila masukkan tarikh</small>
                @enderror
            </div>


            <div class="table-responsive">
            <div class="form-row align-items-center">
                <div class="col-auto" my-1>
                <label for="Title" class="col-sm-2 col-form-label">Description</label>
            <textarea class="form-control" type="text" name="description" value="{{ old('description') }}">
            </textarea>
            @error('description')
                <small class="text-danger">Sila masukkan description</small>
            @enderror
        </div>
    </div>
    {{-- <button type="submit" class="btn-primary" >Submit</button> --}}


<button class='btn btn-info'>submit</button>


</form>
</div>

@endsection
