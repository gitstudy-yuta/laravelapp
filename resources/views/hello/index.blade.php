{{-- 子 --}}

@extends('layouts.helloapp')
{{-- layoutsのhelloapp.blade.phpを親にもつよ --}}

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
<p>ここが本文のコンテンツです。</p>
<ul>
    @each('components.item', $data, 'item')
</ul>
@endsection