@extends('layouts.app')

@section('content')

<form action="{{ route('Petani.update') }}" method="POST">{{--route to submit on button--}}
    @csrf


    <input class="form-control" type="hidden" name="PetaniId" value="{{ $Petani->id }}">
    <div class="table-responsive">
    <div class="row">
        <div class="col-md-6">
            <label>Title:</label>
            <input class="form-control" type="text" name="title" value="{{ $Petani->title }}">
            @error('title')
                <small class="text-danger">Sila masukkan title</small>
            @enderror
        </div>
        <div class="table-responsive">
        <div class="col-md-6">
            <label>Due Date:</label>
            <input class="form-control" type="date" name="due_date" value="{{ $Petani->due_date }}">
            @error('due_date')
                <small class="text-danger">Sila masukkan tarikh</small>
            @enderror
        </div>

 {{-- Description part --}}
 <div class="table-responsive">
 <div class="col-md-6">
    <label>Description:</label>
    <textarea class="form-control" type="text" name="description" >{{$Petani->description}}
    </textarea>
</div>
<div class="table-responsive">
<div class="col-md-6">
    <label>Author: {{$Petani->user->name}}</label>
    <select class="form-control" id="selectUser" name="author">
        <option value="">--Please choose user--</option>
        @foreach ($users as $key => $user)
            <option value="{{ $user->id}}" {{{ $user->id == $Petani->user->id ? 'selected' : '' }}}>
            {{$user->name}}</option>
        @endforeach
    </select>
    @error('author')
    <small class="text-danger">Sila masukkan Author</small>
    @enderror
</div>
</div>
<button class='btn btn-info'>submit</button>
<button class='btn btn-info'>back</button>
</form>

@endsection
