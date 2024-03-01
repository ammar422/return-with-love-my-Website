@extends('layouts.master')
@section('tittle',__('header.title'))
@section('content')
    @include('includes.hero')
    @include('includes.about')
    @include('includes.Resume')
    @include('includes.services')
    @include('includes.portfolio')
    @include('includes.pricing')
    @include('includes.blog')
    @include('includes.hire-me')
    @include('includes.contact')
@endsection