@extends('layout.main-master')
<!DOCTYPE html>
<html>

<body>
    @section('content')
    <h1>{{$titleblogs}}</h1>

    <main class ="container">
        <div class = "row">

            <!--
                @for($count = 0; $count < count($blogs); $count++)
                <div class="card" style="width: 18rem;">
                        <img src="{{ asset('storage/404pic.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{$blogs[$count]['title']}}</h5>
                        <p class="card-text">{{$blogs[$count]['body']}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                @endfor  
            -->
                @foreach($blogs as $blog)
                     @if ($blog ['status']== 0)
                     <div class="card" style="width: 18rem;">
                        <img src="{{ asset('storage/404pic.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$blog['title']}}</h5>
                         <p class="card-text">{{$blog['body']}}</p>
                         <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    @else
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('storage/404pic.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$blog['title']}}</h5>
                          <h2>{{$blog['category']}}</h2>
                         <p class="card-text">{{$blog['body']}}</p>
                         
                        </div>
                    </div>
                     @endif
                @endforeach
        </div>
    </main>
    @endsection
    <style>
        .card:hover{
            transform:scale(1.1);
        }
        .card{
            transition: transform 1s;
        }
    </style>
</body>
</html>