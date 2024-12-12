@extends('layouts.app')

@section('content')
    <h1>Add New Category</h1>
    <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
        @csrf
        <label>Photo:</label><br>
        <input type="file" name="photo" accept="image/*"><br>
        <label>Categories:</label><br>
        <input type="text" name="categories"><br>
        <label>Price:</label><br>
        <input type="number" name="price" step="0.01"><br>
        <label>Description:</label><br>
        <textarea name="description"></textarea><br><br>
        <button type="submit">Save</button>
    </form>
@endsection
