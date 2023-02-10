@extends('pages_layouts.layout')


@section('content')
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('img/dfg.jpg') }}" class="d-block w-100 " alt="...">
                <div class="carousel-caption d-none d-md-block text-light">

                    <div class="text-light">
                        <h1 class="animate__animated animate__wobble">SRI LANKA</h1>
                    </div>
                    <p class="animate__animated animate__bounce">largest hotel booking platform.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('img/ftp.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-light">
                    <h1 class="animate__animated animate__bounce">Welcome To Travelza</h1>
                    <p class="animate__animated animate__bounce">largest hotel booking platform.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/ghj.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-light">
                    <h1 class="animate__animated animate__bounce">Welcome To Travelza </h1>
                    <p class="animate__animated animate__bounce">largest hotel booking platform.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


>
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
          <div>
          <div class="bg-image" style=" background: url('{{ asset('img/sigiriya 3.jpg') }}');">
             <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 card-text-wrapper">
                <h2 class=" mt-5 mb-4 display-6 lh-1 fw-bold " style= "font-size: 28px">..Explore New Horizons and Memorries <br> See the World Through fresh Eyes <br> Awaken To a Different World...</h2>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <!-- <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                      class="rounded-circle border border-white"> -->
                  </li>
                  <li class="d-flex align-items-center me-3">
                    <svg class="bi me-2" width="1em" height="1em">
                      <use xlink:href="#geo-fill"></use>
                    </svg>
                    <!-- <small>Earth</small> -->
                  </li>
                  <li class="d-flex align-items-center">
                    <svg class="bi me-2" width="1em" height="1em">
                      <use xlink:href="#calendar3"></use>
                    </svg>
                    <!-- <small>3d</small> -->
                  </li>
                </ul>
              </div>
            </div>
          </div>


        </div>
      </div>


      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
          <div>
          <div class="bg-image" style=" background: url('{{ asset('img/rumassala.jpg') }}');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 card-text-wrapper">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" style= "font-size: 24px">...Experience Luxury in The Lap of Nature.. <br> Open The Door For a Spacious Living.. <br> A short Story Of Living..</h2>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <!-- <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                      class="rounded-circle border border-white"> -->
                  </li>
                  <li class="d-flex align-items-center me-3">
                    <svg class="bi me-2" width="1em" height="1em">
                      <use xlink:href="#geo-fill"></use>
                    </svg>

                  </li>
                  <li class="d-flex align-items-center">
                    <svg class="bi me-2" width="1em" height="1em">
                      <use xlink:href="#calendar3"></use>
                    </svg>

                  </li>
                </ul>
              </div>
            </div>
          </div>


        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
          <div>
            <div class="bg-image" style=" background: url('{{ asset('img/unawatuna.jpg') }}');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 card-text-wrapper">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" style= "font-size: 24px">Hundreds Of Flavors Under One Roof.. <br> Add a Joy Of Best Taste.. <br> Where Every Flavor Tells a Story..</h2>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <!-- <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                      class="rounded-circle border border-white"> -->
                  </li>
                  <li class="d-flex align-items-center me-3">
                    <svg class="bi me-2" width="1em" height="1em">
                      <use xlink:href="#geo-fill"></use>
                    </svg>
                    <!-- <small>Earth</small> -->
                  </li>
                  <li class="d-flex align-items-center">
                    <svg class="bi me-2" width="1em" height="1em">
                      <use xlink:href="#calendar3"></use>
                    </svg>
                    <!-- <small>3d</small> -->
                  </li>
                </ul>
              </div>
            </div>
          </div>


        </div>
      </div>




    </div>
  </div>
</body>




        <div class="container-fluid">
            <div class="text-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/C7kvqXVPRNY"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>


        </div>


        <section class="testimonials wrapper">
            <div class="container-fluid"></div>
            <div class="title animated wow fadeIn">
                <h2 class='text-center text-black' >We have Karaoke too!</h2>
                <h3 class=' text-black'>Apart from the mouth watering food we offer private dining rooms with Karaoke facility in every room
                    with wide verity of songs selection. (Rooms can adequately accommodate 10 to 45 people)</h3>
                <hr class="separator" />
            </div>
        </section><!--  End testimonials  -->

        <footer>
            <div class="wrapper">
                <div class="rights">
                    <p>All Rights Reserved 2020 - Travelza | Developed By HNDIT BADULLA</p>
                </div>


        @endsection
