<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $customer->name }}"><br><br>

       
        <label>Description:</label><br>
        <textarea name="description">{{ $customer->description }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('customers.index') }}">Back</a>
</body>
</html>
