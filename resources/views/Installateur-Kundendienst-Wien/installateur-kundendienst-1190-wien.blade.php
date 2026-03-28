@extends('layout.app')

@section('main')
@php($page = config('installateur_kundendienst_wien.pages.1190'))
@include('Installateur-Kundendienst-Wien._page', ['page' => $page])
@endsection

