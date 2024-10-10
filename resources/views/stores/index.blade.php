@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Stores</h1>
    <a href="{{ route('stores.create') }}" class="btn btn-primary">Create New Store</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stores as $store)
            <tr>
                <td>{{ $store->id }}</td>
                <td>{{ $store->name }}</td>
                <td>{{ $store->address }}</td>
                <td>
                    <a href="{{ route('stores.edit', $store->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('stores.destroy', $store->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
