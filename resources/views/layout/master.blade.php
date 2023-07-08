<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Unknown Page')</title>
  </head>
  <body>
    @yield('content')
    @section('sidebar')
      This Is Sidebar From Master Layout
    @show 
    {{-- دي بتظهر السكشن دا في كل مكان بيتم فيه اكستند من الفيو الحالي أو الملف الحالي Directives الـ --}}
  </body>
</html>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Unknown Page')</title>
  </head>
  <body>
    @include('layout.navbar')
    {{-- لتضمين صفحة الناف بار --}}
    @yield('content')
    {{-- لتضمين صفحة الناف بار --}}
    @include('layout.sidebar')
  </body>
</html>