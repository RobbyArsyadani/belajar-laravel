<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
</head>
<body>
    <h1>Product List</h1>
    <a href="{{ route('customers.create') }}">Add Customer</a>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

        @foreach ($customers as $c)
            <tr>
                <td>{{ $c->name }}</td>
                <td>{{ $c->description }}</td>
                <td>
                    <a href="{{ route('customers.edit', $c->id) }}">Edit</a>
                    <form action="{{ route('customers.destroy', $c->id) }}" method="POST" style="display:inline">
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
