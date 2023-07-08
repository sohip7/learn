<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_name }}</title>
  </head>
  <body>
    <h1>{!! $page_name !!}</h1>
    {{-- format to not encode entity --}}
    <p>{{ $page_description }}</p>
    {{-- format to print --}}
  </body>
</html>



@extends('layout.master')

@section('title', 'Contact Me')

@section('content')
  <div class="container">
    <h1>{!! $page_name !!}</h1>
    <p>{{ $page_description }}</p>
  </div>
@stop




{{--على سكشن الأب override احنا هنا عملنا--}}
@section('sidebar') 
  This Is Sidebar From Contact Me Page

  @parent
  {{-- Show هنا تستخدم لاستدعاء سكشن الاب الي معموله  --}}
@endsection

{{--
    
@extends('layout.master')

yieldمكان الـ 
@section('title', 'Contact Me')
@section('title', 'alternative page name')



  body في yieldمكان الـ 
@section('content')
  <div class="container">
    <h1>{!! $page_name !!}</h1>
    <p>{{ $page_description }}</p>
  </div>
@stop 

--}}