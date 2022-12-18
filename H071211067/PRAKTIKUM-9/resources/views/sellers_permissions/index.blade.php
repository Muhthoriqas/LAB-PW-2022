@extends('layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Sellers Permissions Page</div>
            <div class="card-body">
                <a href="{{ url('/sellers_permissions/create') }}" class="btn btn-primary btn-sm" title="Add New Contact">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>
                <br/>
                <br/>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Seller ID</th>
                                <th>Permission ID</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($sellers_permissions as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->sellers_id }} {{ $sellers[$item->sellers_id -1]->name }}</td>
                                <td>{{ $item->permissions_id }} {{ $permissions[$item->permissions_id -1]->name }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td>
                                    <a href="{{ url('/sellers_permissions/' . $item->id) }}" title="View Student"><button class="btn btn-dark btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                    <a href="{{ url('/sellers_permissions/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                    <form method="POST" action="{{ url('/sellers_permissions' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete sellers_permissions" onclick="return confirm('Confirm delete')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$sellers_permissions->links('pagination::bootstrap-4')}}
                </div>
            </div>
        </div>
    </div>
@endsection