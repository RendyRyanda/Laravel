@extends('layouts.app')

@section('content')
    <h1>Edit Category</h1>
    <form method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>Photo:</label><br>
        <input type="file" name="photo" accept="image/*"><br>
        <label>Categories:</label><br>
        <input type="text" name="categories" value="{{ $category->categories }}"><br>
        <label>Price:</label><br>
        <input type="number" name="price" value="{{ $category->price }}" step="0.01"><br>
        <label>Description:</label><br>
        <textarea name="description">{{ $category->description }}</textarea><br><br>
        <button type="submit">Update</button>
    </form>
@endsection
