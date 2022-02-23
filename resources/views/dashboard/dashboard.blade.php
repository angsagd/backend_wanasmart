@extends('master')
@section('title','DASHBOARD')
@section('content')

@php
	print_r(Session::get('hakakses'))
@endphp
@endsection