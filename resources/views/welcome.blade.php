@extends('master')

@section('content')
<section class="hero">
    <div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="http://via.placeholder.com/1280x650" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="http://via.placeholder.com/1280x650" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="http://via.placeholder.com/1280x650" class="d-block w-100" alt="...">
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

<section class="py-5 cpb">
  <div class="container py-3">
    <div class="row">
      <div class="col-sm-12 col-lg-6 col-md-6 col-xs-12">
        <span class="font-monospace text-uppercase text-light">willie mock</span>
        <h1 class="text-left fs-1 text-light fw-bold text-uppercase">Take a look inside our bestselling book!</h1>
        <p class="text-left text-justify text-light font-monospace">We offer to your little one a nice list of multiple largest colouring stuff with special and unique qualities.</p>
      </div>
    </div>
  </div>
</section>


<section class="py-5">
    <div class="container">
        <h1 class="mb-3 text-center fs-1 text-dark fw-bold text-uppercase">colouring pages</h1>
        <h2 class="mb-3 fs-2 text-center text-capitalize">Browse our best-cherished titles or buy the great library. Most utmost of our books is available in the UK English edition.</h2>
        <div class="text-center py-3">
            <a target="_blank"
                href="https://www.amazon.co.uk/kindle-dbs/entity/author/B08YNCP4G3?_encoding=UTF8&node=492564011&offset=0&pageSize=12&searchAlias=stripbooks&sort=author-sidecar-rank&page=1&langFilter=default#formatSelectorHeader" 
                class="btn-lg text-uppercase btn btn-outline-dark" title="Our Amazon UK Shop">
                visit our store (printed version)
            </a>
        </div>

        <div class="row mt-3">

            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
              <a class="text-decoration-none" title="book amazon uk listing page" target="_blank"
              href="https://www.amazon.co.uk/gp/product/B09F1CZHQ4/ref=dbs_a_def_rwt_hsch_vapi_taft_p1_i0">
                  <div class="card">
                      <img src="{{ asset('images/Willie Mock Colouring Books/More vehicles.png') }}" class="card-img-top" alt="More vehicles">
                      <div class="card-body">
                          <h3 class="card-title text-dark">Colouring Books For Children Age 2</h3>
                          <p class="card-text text-muted mb-3 text-lowercase text-justify">Hand Drawn Illustrations Of Transportation and Vehicles Vocabulary.</p>
                      </div>
                  </div>
              </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
              <a class="text-decoration-none" title="book amazon uk listing page" target="_blank"
              href="https://www.amazon.co.uk/gp/product/B09M58PBQM?ref_=dbs_m_mng_rwt_calw_tpbk_1&storeType=ebooks">
                  <div class="card">
                      <img src="{{ asset('images/Willie Mock Colouring Books/construction vehicles.png') }}" class="card-img-top" alt="construction vehicles">
                      <div class="card-body">
                          <h3 class="card-title text-dark">Toddler Colouring Books For 3 Year Olds Digger, Tractor, Construction Vehicles, Big Machines!</h3>
                          <p class="card-text text-muted mb-3 text-lowercase text-justify">Creative and fun colouring sheets of easy illustrations for toddlers.</p>
                      </div>
                  </div>
              </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
              <a class="text-decoration-none" title="book amazon uk listing page" target="_blank"
              href="https://www.amazon.co.uk/Colouring-Books-Children-Age-Educational/dp/B09BHB8126/ref=tmm_pap_swatch_0?_encoding=UTF8&qid=&sr=">
                  <div class="card">
                      <img src="{{ asset('images/Willie Mock Colouring Books/100 cute toys to colour and learn.png') }}" class="card-img-top" alt="100 cute toys to colour and learn">
                      <div class="card-body">
                          <h3 class="card-title text-dark">Colouring Books For Children Age 2</h3>
                          <p class="card-text text-muted mb-3 text-lowercase text-justify">serious way to learn different things and colour some various high-quality designs.</p>
                      </div>
                  </div>
              </a>
            </div>
            <div class="my-2"></div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <a class="text-decoration-none" title="book amazon uk listing page" target="_blank"
                href="https://www.amazon.co.uk/gp/product/B09LGRVL8L/ref=dbs_a_def_rwt_bibl_vppi_i22">
                    <div class="card">
                        <img src="{{ asset('images/Willie Mock Colouring Books/100 things to colour.png') }}" class="card-img-top" alt="101 things to colour and learn">
                        <div class="card-body">
                            <h3 class="card-title text-dark">My First Colouring Book For 1 - 3 Year Olds</h3>
                            <p class="card-text text-muted mb-3 text-lowercase text-justify">break up repetitive days and nurture your child's development with 100 Interactive Pictures With Line Art Drawing.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <a class="text-decoration-none" title="book amazon uk listing page" target="_blank"
                href="https://www.amazon.co.uk/gp/product/B0932GNKJX?ref_=dbs_m_mng_rwt_calw_tpbk_1&storeType=ebooks">
                    <div class="card">
                        <img src="{{ asset('images/Willie Mock Colouring Books/jumbo colouring pages.png') }}" class="card-img-top" alt="jumbo colouring pages abc alphabets animals and shapes">
                        <div class="card-body">
                            <h3 class="card-title text-dark">Colouring Books For Children Age 3</h3>
                            <p class="card-text text-muted mb-3 text-lowercase text-justify">Jumbo Colouring Book And Learning Pages For Curious, Busy Children Including Abc Alphabet, 123 Numbers and more.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <a class="text-decoration-none" title="book amazon uk listing page" target="_blank"
                href="https://www.amazon.co.uk/gp/product/B08YQM3Q3T/ref=dbs_a_def_rwt_bibl_vppi_i10">
                    <div class="card">
                        <img src="{{ asset('images/Willie Mock Colouring Books/cute cats.png') }}" class="card-img-top" alt="book about cute cats">
                        <div class="card-body">
                            <h3 class="card-title text-dark">Colouring Books For Children Age 2</h3>
                            <p class="card-text text-muted mb-3 text-lowercase text-justify">44 Ultimate Cats Colouring Pages for relaxation.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-5 cpb-release">
  <div class="container py-3">
    <div class="row justify-content-end">
      <div class="col-sm-12 col-lg-6 col-md-6 col-xs-12">
        <span class="font-monospace text-uppercase text-light">merry new colouring</span>
        <h1 class="text-left fs-1 text-light fw-bold text-uppercase">just released!</h1>
        <p class="text-left text-justify text-light font-monospace">
          The Christmas holiday is back to us! , 
          we prepare for your kid cute and pretty detailed Christmas cartoons pictures to colour like trees,
          ornaments, bells, elves, eve and much more lovely decorations!.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light bg-gradient">
  <h1 class="mb-3 text-center fs-1 text-dark fw-bold text-uppercase">about willie mock brand</h1>
  <div class="container">
    <div class="row align-items-center">
      <div class="text-center col-lg-4 col-md-3 col-sm-12 col-xs-12">
        <img class="opacity-90 rounded w-100" src="{{ asset('images/Willie-Mock-Logo-Brand.png') }}" alt="this is brand logo">
      </div>
      <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
        <p class="fs-4 text-justify font-monospace lh-6">
          Willie Mock colouring Books is a brand that draws and designs educational and entertainment books for children and kids.
          We design our books with children of different ages, evaluate the final product, which we publish only after their acceptance.
          Our products are used not only for fun, but above all they are created to teach, stimulate creativity and increase self-confidence.
        </p>
      </div>
    </div>
  </div>
</section>

@endsection