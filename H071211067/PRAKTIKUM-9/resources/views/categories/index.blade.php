@extends('layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Categories Page</div>
            <div class="card-body">
                <a href="{{ url('/categories/create') }}" class="btn btn-primary btn-sm" title="Add New Contact">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>
                <br/>
                <br/>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td>
                                    <a href="{{ url('/categories/' . $item->id) }}" title="View Student"><button class="btn btn-dark btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                    <a href="{{ url('/categories/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                    <form method="POST" action="{{ url('/categories' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete categories" onclick="return confirm('Confirm delete')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$categories->links('pagination::bootstrap-4')}}
                </div>
            </div>
        </div>
    </div>
@endsection