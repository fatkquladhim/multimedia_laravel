@extends('layouts.master')
@section('content')  
           @include('dashboard.partials.header')
           @include('dashboard.partials.sidebar')
           <div class="main-content-area">
               @yield('main-content')
           </div>
@endsection