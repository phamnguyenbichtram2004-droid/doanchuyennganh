@extends('layout.admin')
@section('body')
<div class="container">
    <div class="row">

        <form action="{{route('admin.product.store')  }}" method="POST">
            @csrf()
            <div class="mb-3">
                <label for="email" class="form-label">Product</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
@endsection