@extends('layouts.master')

@section('content')
    <main class="comment">
        <div class="container">
            <div class="comment__row">
                @foreach($comments as $comment)
                    <div class="comment__item">
                        <div class="comment__title">
                            <div class="comment__name">{{ $comment->name }}</div>
                            <div class="comment__date">{{ $comment->created_at }}</div>
                        </div>
                        <div class="comment__body">{{ $comment->comment }}
                        </div>
                    </div>
                @endforeach
                {{ $comments->links('vendor.pagination.custom') }}
            </div>
            <form method="POST" action="{{ route('store') }}" class="comment__send">
                <div class="comment__form-title">Оставить комментарий</div>
                <label for="name">Ваше имя</label>
                @error('name')
                <div class="alert">{{ $message }}</div>
                @enderror
                <input class="comment__input" type="text" name="name" id="name" value="">
                <label for="comment">Ваш комментарий </label>
                @error('comment')
                <div class="alert">{{ $message }}</div>
                @enderror
                <textarea class="comment__textarea" name="comment" id="comment" value=""></textarea>
                <button type="submit" class="comment__button">Отправить</button>
                @csrf
            </form>
        </div>
    </main>
@endsection
