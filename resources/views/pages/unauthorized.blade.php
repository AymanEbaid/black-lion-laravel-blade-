@extends('layout.app')
@section('title', 'Unauthorized')
@section('content')
    <div class="container text-center my-5 ">
        <h1 class="display-4 text-danger">403</h1>
        <h3 class="mb-4">Unauthorized Access</h3>
        <p class="text-muted">عذرًا، ليس لديك الصلاحية للدخول لهذه الصفحة.</p>
        <a href="{{ url('/') }}" class="btn btn-dark mt-3">العودة للصفحة الرئيسية</a>
    </div>
@endsection
