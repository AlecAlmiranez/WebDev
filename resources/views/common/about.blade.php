@extends('layout.main-master')
<!DOCTYPE html>
<html>
    <body>
    @section('content')
    <div class="whole-page-overlay" id="whole_page_loader">
        <img class="center-loader"  style="height:100px;" src="' . asset('storage/404pic.jpg') . '"/>
        <h1>{{$about}}</h1>
        <h1>{{$test}}</h1>
    @endsection
    </body>
    
</html>