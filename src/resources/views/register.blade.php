@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

<style>
    .red {
        color: red;
    }
</style>
@section('content')

<div class="register__content">
    <div class="register__heading">
        <h2>商品登録</h2>
    </div>
    <form class="form" action="contacts/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">商品名</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="商品名を入力" value="{{ old('name') }}" />
                </div>
                <div class="form__error">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__title">
                <span class="form__label--item">値段</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="price" name="price" placeholder="値段を入力" value="{{ old('price') }}" />
                </div>
                <div class="form__error">
                    @error('price')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__title">
                <span class="form__label--item">商品画像</span>
                <span class="form__label--required">必須</span>
            </div>
            <form action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="image" class="custom-file-label">ファイルを選択</label>
                <input type="file" name="image" class="custom-file-input" required>
            </form>
        </div>
        <div class="form__group">
            <div class="form__title">
                <span class="form__label--item">季節</span>
                <span class="form__label--required">必須</span>
                <?php echo '<span class=red>複数選択可</span>'; ?>
            </div>
            <input type="radio" name="choices" value="春" />春
            <input type="radio" name="choices" value="夏" />夏
            <input type="radio" name="choices" value="秋" />秋
            <input type="radio" name="choices" value="冬" />冬
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">商品説明</span>
                <span class="form__label-required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="content" placeholder="商品の説明を入力"></textarea>
                </div>
                <div class="form__error">
                    @error('text')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">戻る</button>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">登録</button>
                </div>
            </div>
        </div>
</div>
</div>
</div>
</form>
</div>
@endsection