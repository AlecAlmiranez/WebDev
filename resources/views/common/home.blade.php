@extends('layout.main-master')
<!DOCTYPE html>
<html>
    <body>
    @section('content')
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('storage/monsterhunterworld-blogroll-1516867463450.jpg')}}          " class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block" data-bs-theme="dark">
            <h3>Monster Hunter World</h3>
            <p>Enter the New World</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('storage/Monster-Hunter-World-106.jpg')}}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>Face New Challenges</h3>
            <p>And Challenge Old Ones Again</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('storage/monster-hunter2-1.jpg')}}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>Learn The Stories Of The New World</h3>
            <p>And Create Your Own</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

      {{-- Accordion and Cards Section --}}
      <hr>
      <div class = "text-center">
        <div class = "row">
          <div class="col">
        {{--Accordion section--}}
          <h2>Frequently Asked Questions</h2>
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h5>When does Monster Hunter World release?</h5>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Monster Hunter World releases worldwide on <strong> January 26th, 2018 </strong> for <strong> PlayStation 4</strong> and <strong> Xbox One </strong>. The release for <strong> Microsoft Windows (PC) </strong> is <strong> August 9th, 2018 </strong>.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h5>Will I be able to play with my Friends if they live in a different region than me?</h5>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong> Yes. </strong> The game has a global server that allows players to play together no matter which region they live in or version of the game they own. This was not the case with some earlier Monster Hunter games.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h5>Will Monster Hunter World be Cross-Platform?</h5>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>No.</strong>   You can only play with players on the same system as you.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class ="col">
            {{--Cards Section--}}
            <div class ="row">
            @foreach($cards as $card) 
              @if ($card['status'] == 1)
                <div class = "col mb-2">
                  <div class=" card" style="width: 12rem;">
                    <img src= "{{$card['source']}}" class="card-img-top" alt="..." style="height: 120px; object-fit: cover;">
                    <div class="card-body">
                      <h5 class="card-title">{{$card['title']}}</h5>
                      <p class="card-text">{{$card['body']}}</p>
                      <a href="{{$card['url']}}" class="btn btn-primary">Monster Wiki</a>
                    </div>
                </div>
             </div>   
              @else
              <div class = "col mb-2">
                <div class=" card" style="width: 12rem;">
                   <img src= "{{$card['source']}}" class="card-img-top" alt="..." style="height: 120px; object-fit: cover;">
                   <div class="card-body">
                     <h5 class="card-title">{{$card['title']}}</h5>
                    <p class="card-text">{{$card['body']}}</p>
                   </div>
               </div>
             </div>
              @endif
                  
                @endforeach
              </div>
            </div>
        </div>
      </div>
      @endsection
      <style>
        .card {
          width: 10px;
          height: 10px;
        }
      </style>
    </body>
</html>