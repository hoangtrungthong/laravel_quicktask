@extends('layouts.app')

@section('title')
    {{__('common.headCreate')}}
@endsection

@section('content')
    <div>
        <a class="btn btn-primary" href="{{ route('categories.index') }}">{{__('common.listCategory')}}</a>
    </div>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">{{__('common.name')}}</label>
            <input name="name" type="text" class="form-control" id="name">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">{{__('common.create')}}</button>
    </form>
@endsection
