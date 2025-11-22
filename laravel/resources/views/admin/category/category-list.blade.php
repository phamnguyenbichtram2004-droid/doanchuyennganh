@extends('layout/admin')
@section('body')
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> + Add
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
                                <td>{{ $object->id }}</td>
                                <td>{{ $object->name }}</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td><i class="fa-solid fa-eye text-info"></i></td>
                                <td><i class="fa-solid fa-pen-to-square text-warning"></i></td>
                                <td><i class="fa-solid fa-trash text-danger"></i></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4 text-muted">
                                    Chưa có dữ liệu
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
