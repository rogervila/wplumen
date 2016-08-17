@extends('master')

@section('body')

    <h1>{{ $page->post_title or ''  }}</h1>

    <div>
        {!! $page->post_content !!}
    </div>

@endsection