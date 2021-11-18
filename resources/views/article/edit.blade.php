@extends('layouts.app')

@section('title')
    {{__('common.headEdit')}}
@endsection

@section('content')
    <div>
        <a class="btn btn-primary" href="{{ route('articles.index') }}">{{__('common.listArticle')}}</a>
    </div>
    <form class="" action="{{ route('articles.update', ['article' => $article]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="title">{{__('common.title')}}</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $article->title }}">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="category_id">{{__('common.category')}}</label>
            <select class="form-control" id="category_id" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($article->category->id == $category->id){{ 'selected' }}@endif>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">{{__('common.content')}}</label>
            <textarea class="form-control" name="content" id="content" rows="3">{{ $article->content }}</textarea>
            @error('content')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">{{__('common.save')}}</button>
        <a class="btn btn-primary" href="{{ route('articles.index') }}">{{__('common.cancel')}}</a>
    </form>
@endsection
