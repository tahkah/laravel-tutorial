<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>laravelチュートリアル</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>

@extends('layouts/app')

@section('main')
<a href="{{ url('/posts') }}"> 投稿一覧</a>
@endsection