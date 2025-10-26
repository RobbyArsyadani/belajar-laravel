<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Product List</h1>
    <a href="{{ route('customers.index') }}">Go to Customer page</a>
    <a href="{{ route('products.create') }}">Add Product</a>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

        @foreach ($products as $p)
            <tr>
                <td>{{ $p->name }}</td>
                <td>{{ $p->price }}</td>
                <td>{{ $p->description }}</td>
                <td>
                    <a href="{{ route('products.edit', $p->id) }}">Edit</a>
                    <form action="{{ route('products.destroy', $p->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
