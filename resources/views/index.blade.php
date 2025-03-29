@extends['layouts.app']

@section('title', 'Product List')

@section('content')
    <h1 class="text-center">Product List</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add New Product</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {{-- Bu joyda foreach bilan product lar chiqariladi --}}
        </tbody>
    </table>
@endsection
