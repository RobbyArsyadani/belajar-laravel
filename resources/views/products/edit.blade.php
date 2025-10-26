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

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $product->name }}"><br><br>

        <label>Price:</label>
        <input type="number" name="price" value="{{ $product->price }}"><br><br>

        <label>Description:</label><br>
        <textarea name="description">{{ $product->description }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('products.index') }}">Back</a>
</body>
</html>
