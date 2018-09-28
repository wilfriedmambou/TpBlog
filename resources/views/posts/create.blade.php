@extends('default')
@section('content')
    <h1>CREATE A NEW POST </h1> 
   
    
    <form method="POST" action="/posts">
    {{ csrf_field() }}
            <div class="form-group">
              <label for="title">title</label>
              <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Enter title" name="title">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <select name="categories">
              <option selected disabled>Please select a category</option>
              @foreach($categories as $category)
                  <option value="{{ $category->id }}" name="{{ $category->name }}"> {{ $category->name }}</option>
              @endforeach
          </select>
            <div class="form-group">
              <label for="content">content</label>
              <textarea class="form-control" id="content" rows="3" name="content" ></textarea>
            </div>
            {{-- <div class="form-group form-check">
              <input type="text" class="form-check-input" id="content">
              <label class="form-check-label" for="content">Check me out</label>
            </div> --}}
            <button type="submit" class="btn btn-primary form-group">Submit</button>
            @include('layout.errors')
          </form>
@endsection