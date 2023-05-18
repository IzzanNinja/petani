@extends('layouts.app')

@section

{{-- <form action="{{ route('Petani.test') }}" method="POST">{{--route to submit on button--}}
    {{-- @csrf
    <div class="row">
        <div class="col-md-6">
            <label>Title:</label>
            <input class="form-control" type="text" name="title" value="{{ old('title') }}">
            @error('title')
                <small class="text-danger">Sila masukkan title</small>
            @enderror
        </div>
        <div class="col-md-6">
            <label>Due Date:</label>
            <input class="form-control" type="date" name="due_date" value="{{ old('due_date') }}">
            @error('due_date')
                <small class="text-danger">Sila masukkan tarikh</small>
            @enderror
        </div>
        <div class="col-md-6">
            <label>Description:</label>
            <textarea class="form-control" type="text" name="description" value="{{ old('description') }}">
            </textarea>
            @error('description')
                <small class="text-danger">Sila masukkan description</small>
            @enderror
        </div>
    </div>
    {{-- <button type="submit" class="btn-primary" >Submit</button> --}}
    {{-- <a href="{{ route('Petani.test')}}"class="btn btn-primary" role="submit">Submit</a>


{{-- </form> --}}

<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>

@endsection
