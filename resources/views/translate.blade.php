@extends('layout')

@section('content')
    <div class="content">
        <h1> @lang('app.title')</h1>

        <body class="antialiased">
            <h4> @lang('app.welcome')</h4>
            <h5> @lang('app.language')</h5>
            <ul>
                <li>
                    <a href="{{ route('lang', ['locale' => 'es']) }}">Español</a>
                </li>
                <li>
                    <a href="{{ route('lang', ['locale' => 'en']) }}">English</a>
                </li>
            </ul>

            <h2>@lang('app.example')</h2>

            <h4> @lang('app.article')</h4>

            <table class="table">
                <thead>
                    <tr>
                        <th>@lang('app.title_table')</th>
                        <th>@lang('app.content_table')</th>
                        <th>Idioma</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($articles as $article)
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->content }}</td>
                            <td>{{ $article->locale }}</td>
                        @endforeach
                    
                </tbody>
            </table>
        </body>
    </div>
@endsection
