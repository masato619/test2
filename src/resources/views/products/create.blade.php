@extends('layouts.app')

@section('content')
<div class="container">
    <h2>商品を追加</h2>
    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">商品名</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">価格</label>
            <input type="number" name="price" class="form-control">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">画像</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">追加</button>
    </form>
</div>

@endsection