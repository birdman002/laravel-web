@extends('comments.layout')
@section('content')
<h1> Order Comments </h1>

<h2>Comments about candy</h2>
<table class="table table-striped">
    <x-comments-table-header />
    <tbody>
      @foreach($data['comments'] as $comment)
        <x-comments-body :comment="$comment" />
      @endforeach
    </tbody>
</table>

<h2>Comments about call me / don't call me</h2>
<table class="table table-striped">
    <x-comments-table-header />
    <tbody>
      @foreach($data['calls'] as $comment)
        <x-comments-body :comment="$comment" />
      @endforeach
    </tbody>
</table>

<h2>Comments about who referred me</h2>
<table class="table table-striped">
    <x-comments-table-header />
    <tbody>
      @foreach($data['referral'] as $comment)
        <x-comments-body :comment="$comment" />
      @endforeach
    </tbody>
</table>

<h2>Comments about signature requirements upon delivery</h2>
<table class="table table-striped">
    <x-comments-table-header />
    <tbody>
      @foreach($data['signature'] as $comment)
        <x-comments-body :comment="$comment" />
      @endforeach
    </tbody>
</table>

<h2>Miscellaneous comments (everything else)</h2>
<table class="table table-striped">
    <x-comments-table-header />
    <tbody>
      @foreach($data['other'] as $comment)
        <x-comments-body :comment="$comment" />
      @endforeach
    </tbody>
</table>

@endsection