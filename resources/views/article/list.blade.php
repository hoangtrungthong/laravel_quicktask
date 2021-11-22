@extends('layouts.app')

@section('title')
    {{ __('common.listArticle') }}
@endsection

@section('content')
    <a class="btn btn-primary mb-2" href="{{ route('articles.create') }}">{{ __('common.new') }}</a>
    <h1>{{ __('common.listArticle') }}</h1>
    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">{{ __('common.title') }}</th>
                    <th scope="col">{{ __('common.content') }}</th>
                    <th scope="col">{{ __('common.category') }}</th>
                    <th scope="col">{{ __('common.handle') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->content }}</td>
                        <td>{{ $article->category->name }}</td>
                        <td class="row">
                            <a class="btn btn-primary mr-2"
                                href="{{ route('articles.edit', ['article' => $article]) }}">{{ __('common.edit') }}</a>
                            <form action="{{ route('articles.destroy', ['article' => $article]) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-primary" type="submit">{{ __('common.delete') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $articles->links() }}
        </div>
    </div>
@endsection
