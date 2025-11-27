@extends('layout/admin')
@section('body')
<div class="container">
    <div class="row">
        <form action="{{route('admin.product.update',['product'=>$product->id])}}" method="POST">
            @csrf()
            {{method_field('put')}}
            <div class="mb-3">
                <label for="email" class="form-label">Product</label>
                <input type="text" class="form-control" value="{{$product->name}}" id="name" name="name" aria-describedby="emailHelp">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection