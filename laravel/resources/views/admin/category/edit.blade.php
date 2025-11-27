@extends('layout/admin')
@section('body')
<div class="container">
    <div class="row">
        <form action="{{route('admin.category.update',['category'=>$category->id])}}" method="POST">
            @csrf()
            {{method_field('put')}}
            <div class="mb-3">
                <label for="email" class="form-label">Category</label>
                <input type="text" class="form-control" value="{{$category->name}}" id="name" name="name" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection