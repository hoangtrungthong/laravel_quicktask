@extends('layouts.app')

@section('title')
    {{ __('common.headCreate') }}
@endsection

@section('content')
    <div>
        <a class="btn btn-primary" href="{{ route('articles.index') }}">{{ __('common.listArticle') }}</a>
    </div>
    <form class="" action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">{{ __('common.title') }}</label>
            <input name="title" type="text" class="form-control" id="title" value="{{ old('title') }}">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="category_id">{{ __('common.category') }}</label>
            <select class="form-control" id="category_id" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">{{ __('common.content') }}</label>
            <textarea name="content" class="form-control" id="content" rows="3">{{ old('content') }}</textarea>
            @error('content')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">{{ __('common.create') }}</button>
    </form>
@endsection
