@extends('layout.main-master')
<!DOCTYPE html>
<html>
    <body>
        @section('content')
            <div class="whole-page-overlay" id="whole_page_loader">
                <div class="row">
                    @foreach($cards as $card) 
                        @if ($card->status == 1)
                            <div class="col mb-2">
                                <div class="card" style="width: 12rem;">
                                    <img src="{{ asset('storage/404pic.jpg') }}" alt="Image" style="Width: 100%; Height: auto;">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>{{ $card->title }}</b></h5>
                                        <h5>{{$card->name}} </h5>
                                        <p class="card-text">{{ $card->description }}</p>
                                        {{-- <a href="{{ $card->url }}" class="btn btn-primary">Monster Wiki</a> --}}
                                    </div>
                                </div>
                            </div>   
                        @else
                            <div class="col mb-2">
                                <div class="card" style="width: 12rem;">
                                    <img src="{{ asset('storage/404pic.jpg') }}" alt="Image" style="Width: 100%; Height: auto;">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>{{ $card->title }}</b></h5>
                                        <h5><b>{{ $card->name }}</b></h5>
                                        <p class="card-text">{{ $card->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endsection
        
    </body>
    
</html>