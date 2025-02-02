@extends('layouts.app')

@section('content')
<div class="container">
    <h2>商品一覧</h2>
    <form method="GET" action="{{ route('products.index') }}">
        <input type="text" name="search" placeholder="商品名で検索" value="{{ request('search') }}">
        <button type="submit">検索</button>
    </form>

    <form method="GET" action="{{ route('products.index') }}">
        <select name="sort" onchange="tihs.form.submit()">
            <option value="">価格で並べ替え</option>
            <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>安い順</option>
            <option value="desc" {{ request('sort') == 'desc' ? 'selected' : ''}}>高い順</option>
        </select>
    </form>

    <a href="{{ route('products.create') }}" class="btn btn-primary">+ 商品を追加</a>

    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produt->name }}</h5>
                        <p class="card-text">￥{{ number_format($product->price) }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $products->links() }}
</div>

@endsection