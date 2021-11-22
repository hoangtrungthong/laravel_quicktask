@extends('layouts.app')

@section('title')
    {{ __('common.listCategory') }}
@endsection

@section('content')
    <a class="btn btn-primary mb-2" href="{{ route('categories.create') }}">{{ __('common.new') }}</a>
    <h1>{{ __('common.listCategory') }}</h1>
    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">{{ __('common.name') }}</th>
                    <th scope="col">{{ __('common.handle') }}</th>
                </tr>
            </thead>
            <tbody>
                @if ($categories->isNotEmpty())
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td class="row">
                                <a class="btn btn-primary mr-2"
                                    href="{{ route('categories.edit', ['category' => $category]) }}">{{ __('common.edit') }}</a>
                                <form action="{{ route('categories.destroy', ['category' => $category]) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-primary" type="submit">{{ __('common.delete') }}</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="2">{{ __('common.empty') }}</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $categories->links() }}
        </div>
    </div>
@endsection
