
<!-- Facebook meta tags -->
<!-- <meta property="og:title" content="{{ $items->title }}" />
<meta property="og:image" content"{{ $items->images }}" />
<meta property="og:description" content"{{ $items->description }}" /> -->

@extends('app')
@section('title', $items->title . ' | KOLL.com.ph')
@section('og-title', $items->title)
@section('og-image', secure_url( $items->images ))
@section('og-description', $items->description)









