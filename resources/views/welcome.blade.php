@extends('master')

@section('content')
<section class="hero bg-warning bg-gradient">
    <div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="http://via.placeholder.com/1280x600" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="http://via.placeholder.com/1280x600" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="http://via.placeholder.com/1280x600" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
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
    </div>
</section>

<section class="h-100 py-3 cpb">

</section>


<section class="py-3">
    <div class="container">
        <h1 class="mb-2 text-center fs-1 text-danger fw-bold text-uppercase">our top colouring pages</h1>
        <h2 class="mb-2 fs-2 text-center text-capitalize">Browse our best-cherished titles or buy the great library. Most utmost of our books is available in the UK English edition.</h2>
        <div class="text-center py-2">
            <a target="_blank"
                href="https://www.amazon.co.uk/Willie-Mock/e/B08YNCP4G3/ref=dp_byline_cont_pop_book_1" 
                class="btn-lg text-uppercase btn btn-outline-dark" title="Our Amazon UK Shop">
                visit our store (printed version)
            </a>
        </div>

        <div class="row mt-3">

            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
              <a class="text-decoration-none" title="book amazon uk listing page" target="_blank"
              href="">
                  <div class="card">
                      <img src="{{ asset('images/Willie Mock Colouring Books/More vehicles.png') }}" class="card-img-top" alt="More vehicles">
                      <div class="card-body">
                          <h3 class="card-title text-dark">Card title</h3>
                          <p class="card-text text-muted mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a title="action to buy your first copy" target="_blank" href="" class="btn cta text-uppercase">buy your first copy</a>
                      </div>
                  </div>
              </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
              <a class="text-decoration-none" title="book amazon uk listing page" target="_blank"
              href="">
                  <div class="card">
                      <img src="{{ asset('images/Willie Mock Colouring Books/construction vehicles.png') }}" class="card-img-top" alt="construction vehicles">
                      <div class="card-body">
                          <h3 class="card-title text-dark">Card title</h3>
                          <p class="card-text text-muted mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a title="action to buy your first copy" target="_blank" href="" class="btn cta text-uppercase">buy your first copy</a>
                      </div>
                  </div>
              </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
              <a class="text-decoration-none" title="book amazon uk listing page" target="_blank"
              href="">
                  <div class="card">
                      <img src="{{ asset('images/Willie Mock Colouring Books/100 cute toys to colour and learn.png') }}" class="card-img-top" alt="100 cute toys to colour and learn">
                      <div class="card-body">
                          <h3 class="card-title text-dark">Card title</h3>
                          <p class="card-text text-muted mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a title="action to buy your first copy" target="_blank" href="" class="btn cta text-uppercase">buy your first copy</a>
                      </div>
                  </div>
              </a>
            </div>
            <div class="my-2"></div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <a class="text-decoration-none" title="book amazon uk listing page" target="_blank"
                href="">
                    <div class="card">
                        <img src="{{ asset('images/Willie Mock Colouring Books/100 things to colour.png') }}" class="card-img-top" alt="101 things to colour and learn">
                        <div class="card-body">
                            <h3 class="card-title text-dark">Card title</h3>
                            <p class="card-text text-muted mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a title="action to buy your first copy" target="_blank" href="" class="btn cta text-uppercase">buy your first copy</a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <a class="text-decoration-none" title="book amazon uk listing page" target="_blank"
                href="">
                    <div class="card">
                        <img src="{{ asset('images/Willie Mock Colouring Books/jumbo colouring pages.png') }}" class="card-img-top" alt="jumbo colouring pages abc alphabets animals and shapes">
                        <div class="card-body">
                            <h3 class="card-title text-dark">Card title</h3>
                            <p class="card-text text-muted mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a title="action to buy your first copy" target="_blank" href="" class="btn cta text-uppercase">buy your first copy</a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <a class="text-decoration-none" title="book amazon uk listing page" target="_blank"
                href="">
                    <div class="card">
                        <img src="{{ asset('images/Willie Mock Colouring Books/cute cats.png') }}" class="card-img-top" alt="book about cute cats">
                        <div class="card-body">
                            <h3 class="card-title text-dark">Card title</h3>
                            <p class="card-text text-muted mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a title="action to buy your first copy" target="_blank" href="" class="btn cta text-uppercase">buy your first copy</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-4 bg-info bg-gradient">
  <h1 class="mb-2 text-center fs-1 text-danger fw-bold text-uppercase">about willie mock brand</h1>
  <div class="container">
    <div class="row align-items-center">
      <div class="text-center col-lg-4 col-md-3 col-sm-12 col-xs-12">
        <img class="opacity-90 rounded w-100" src="{{ asset('images/Willie-Mock-Logo-Brand.png') }}" alt="this is brand logo">
      </div>
      <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
        <p class="fs-4 text-justify text-light lh-6">
          Willie Mock Coloring Books is a brand that draws and designs educational and entertainment books for children and kids.
          We design our books with children of different ages, evaluate the final product, which we publish only after their acceptance.
          Our products are used not only for fun, but above all they are created to teach, stimulate creativity and increase self-confidence.
        </p>
      </div>
    </div>
  </div>
</section>

@endsection