<table class="table">
    <tr>
        <th>Id</th>
        <th>Menu</th>
        <th>Category</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->category }}</td>
            <td>{{ $item->price }}</td>
            
            <td>
                <button class="btn btn-warning" onClick="show({{ $item->id }})">Edit</button>
                <button class="btn btn-danger" onClick="destroy({{ $item->id }})">Delete</button>
            </td>
        </tr>
    @endforeach
</table>
