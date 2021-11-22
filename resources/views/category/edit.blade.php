@extends('layouts.app')

@section('title')
    {{ __('common.headEdit') }}
@endsection

@section('content')
    <div>
        <a class="btn btn-primary" href="{{ route('categories.index') }}">{{ __('common.listCategory') }}</a>
    </div>
    <form class="" action="{{ route('categories.update', ['category' => $category]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="name">{{ __('common.name') }}</label>
            <input name="name" type="text" class="form-control" id="name" value="{{ $category->name }}">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">{{ __('common.save') }}</button>
        <a class="btn btn-primary" href="{{ route('categories.index') }}">{{ __('common.cancel') }}</a>
    </form>
@endsection
