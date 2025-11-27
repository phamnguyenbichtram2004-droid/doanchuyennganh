@extends('layout/admin')
@section('body')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Category</h1>
        <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Add</a>
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Last</th>
                        <th>Handle</th>
                        <th>Views</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $object)
                    <tr>
                        <th scope="row">{{ $object->id }}</th>
                        <td>{{$object->name}}</td>
                        <td>otto</td>
                        <td>@gc</td>

                        <td><a href=""><i class="fa-solid fa-eye text-info"></i></a></td>
                        <td><a href=" {{ route('admin.category.edit',['category'=>$object->id]) }}  "><i class="fa-solid fa-pen-to-square text-warning"></i></a></td>
                        <td><a href="{{route('admin.category.destroy',['category'=>$object->id])}}" title="Delete {{$object->name}}" onclick="event.preventDefault();window.confirm('Bạn đã chắc chắn xóa '+ '{{$object->name}}' +' chưa?') ?document.getElementById('category-delete-{{ $object->id }}').submit() :0;" class="btn btn-danger"><i class="far fa-trash-alt"></i>
                                <form action="{{ route('admin.category.destroy', ['category' => $object->id]) }}" method="post" id="category-delete-{{ $object->id }}">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                </form>
                            </a></td>
                    </tr>
                    @empty
                    <tr>
                        <td>Chưa có dữ liệu!</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection