@extends('layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Products Page</div>
            <div class="card-body">
                <a href="{{ url('/products/create') }}" class="btn btn-primary btn-sm" title="Add New Contact">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>
                <br/>
                <br/>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Seller ID</th>
                                <th>Category ID</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->seller_id }} {{ $sellers[$item->seller_id -1]->name }}</td>
                                <td>{{ $item->category_id }} {{ $categories[$item->category_id -1]->name }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td>
                                    <a href="{{ url('/products/' . $item->id) }}" title="View Student"><button class="btn btn-dark btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                    <a href="{{ url('/products/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                    <form method="POST" action="{{ url('/products' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete products" onclick="return confirm('Confirm delete')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$products->links('pagination::bootstrap-4')}}
                </div>
            </div>
        </div>
    </div>
@endsection