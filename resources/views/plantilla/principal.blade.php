<!DOCTYPE html>
<html lang="en">
@include('plantilla.head')

<body>

  {{-- <!-- Preloader -->
  <div class="preloader-container">
    <div class="preloader-wrapper">
      <div class="preloader-border"></div>
      <div class="preloader-line-mask">
        <div class="preloader-line"></div>
      </div>
    </div>
  </div> --}}

  @include('plantilla.menu')

  @include('plantilla.banner')

  <!-- Content -->
  <div class="main-content py-0">

    <!-- Highlight info -->
    <div class="section py-5 pt-lg-0">
      <div class="container">
        <div class="row pb-4 my-5 mt-lg-0">

          <div class="col-lg-7 align-self-end order-2 order-lg-1">

            <div class="d-none d-lg-block" data-height="120px"></div>

            <div class="row">

              <div class="col-md-6">
                <div class="pr-xl-2">

                  <div class="icon-info-4 hover-item hover-box-shadow">
                    <div class="hover-inner-wrap bg-white rounded-ultra shadow px-4 py-5">
                      <div class="px-3">
                        <a class="icon-info-link" href="#">
                          <div class="icon-element mb-4">
                            <img src="{{asset('assets/svg/upload/service-icon-13.svg')}}" alt="icon"
                              class="add-animate faster" data-animated="zoomIn" data-width="58px" data-height="58px">
                          </div>
                          <div class="icon-info-text pt-1">
                            <h5 class="font-weight-700 mb-3">Profitable Idea</h5>
                            <p class="mb-0">Fusce sem massa congue in vitae neque rhoncus viverra odio</p>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div data-height="46px"></div>

                  <div class="icon-info-4 hover-item hover-box-shadow">
                    <div class="hover-inner-wrap bg-white rounded-ultra shadow px-4 py-5">
                      <div class="px-3">
                        <a class="icon-info-link" href="#">
                          <div class="icon-element mb-4">
                            <img src="{{asset('assets/svg/upload/service-icon-15.svg')}}" alt="icon"
                              class="add-animate faster" data-animated="zoomIn" data-width="58px" data-height="58px">
                          </div>
                          <div class="icon-info-text pt-1">
                            <h5 class="font-weight-700 mb-3">Task Planning</h5>
                            <p class="mb-0">Magna viverra vitae pellentesque Consequat sem curabitur</p>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div data-height="46px"></div>

                </div>
              </div>

              <div class="col-md-6">
                <div class="pl-xl-2">

                  <div class="d-none d-md-block" data-height="80px"></div>

                  <div class="icon-info-4 hover-item hover-box-shadow">
                    <div class="hover-inner-wrap bg-white rounded-ultra shadow px-4 py-5">
                      <div class="px-3">
                        <a class="icon-info-link" href="#">
                          <div class="icon-element mb-4">
                            <img src="{{asset('assets/svg/upload/service-icon-14.svg')}}" alt="icon"
                              class="add-animate faster" data-animated="zoomIn" data-width="58px" data-height="58px">
                          </div>
                          <div class="icon-info-text pt-1">
                            <h5 class="font-weight-700 mb-3">Creative Design</h5>
                            <p class="mb-0">Vulputate neca imperdiet neque fringilla purus orci mattis</p>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div data-height="46px"></div>

                  <div class="icon-info-4 hover-item hover-box-shadow">
                    <div class="hover-inner-wrap bg-white rounded-ultra shadow px-4 py-5">
                      <div class="px-3">
                        <a class="icon-info-link" href="#">
                          <div class="icon-element mb-4">
                            <img src="{{asset('assets/svg/upload/service-icon-16.svg')}}" alt="icon"
                              class="add-animate faster" data-animated="zoomIn" data-width="58px" data-height="58px">
                          </div>
                          <div class="icon-info-text pt-1">
                            <h5 class="font-weight-700 mb-3">Data Analytics</h5>
                            <p class="mb-0">Dolor class aptent taciti sociosqu amet neca condimentum</p>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2">
            <div class="pl-xl-3 pb-5 pb-lg-0">
              <div
                class="position-relative z-index-1 rounded-ultra shadow-lg px-4 py-5 p-md-5 px-lg-4 p-xl-5 mb-5 mb-lg-0 text-white-75 mt-lg-up100 bg-image"
                data-img-src="{{asset('assets/images/upload/services-info-box-bg.jpg')}}">
                <div class="p-3">

                  <div class="d-none d-md-block" data-height="32px"></div>

                  <h5 class="font-weight-400 text-white-75 mb-3">Business Solutions</h5>

                  <h2 class="h1 section-title-3 title-light-1 text-left font-weight-800">What We Do</h2>

                  <div class="lead-sm pt-2">
                    Duis pretium nec cursus molestie magna consequat semper malesuada curabitur semper malesuada sapien
                    phasellus ante sem cursus metus a gravida neque mauris porttitor neque nec aliquam laoreet diam
                    rutrum iaculis massa
                  </div>

                  <div data-height="180px"></div>

                  <div class="text-right">
                    <a href="#" class="btn btn-lg btn-round btn-secondary btn-gray-shadow"><i
                        class="fas fa-paper-plane"></i>Get started now</a>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Benefits section -->
    <div class="section">
      <div class="container-fluid p-0">
        <div class="row no-gutters">

          <div class="col-lg-6 bg-image" data-img-src="../../../assets/images/upload/startup-benefits-img-03.jpg">
            <div class="d-lg-none" data-height="70vw"></div>
          </div>

          <div class="col-lg-6 bg-light">
            <div class="py-5">
              <div class="row no-gutters">
                <div class="col-md-10 offset-md-1 px-4">

                  <div data-height="7vw"></div>

                  <h5 class="font-weight-400 mb-3">Make Your Business Shine</h5>

                  <h2 class="h1 section-title-3 font-weight-800 text-left">Build Your Audience</h2>

                  <div class="lead-sm pt-2 mb-5">
                    Curabitur ipsum nulla pellentesque vitae in dolor condimentum sapien aptent taciti ornare malesuada
                    sociosqu himenaeos conubia litora torquent nostra consequa
                  </div>

                  <div data-height="10px"></div>

                  <a href="#" class="btn btn-lg btn-round btn-primary mb-0"><i class="fas fa-paper-plane"></i>Get
                    started now</a>

                  <div data-height="7vw"></div>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <!-- Skills section -->
    <div class="section pb-5 bg-image" data-img-src="{{asset('assets/images/upload/skills-bg-image-02.jpg')}}">
      <div class="container">

        <div class="bg-transparent" data-height="4px"></div>

        <div class="row no-gutters">
          <div class="col overflow-hidden rounded-ultra shadow-lg mt-up75">
            <div class="row no-gutters">

              <div class="col-lg-6 bg-viridian-500 p-4 px-md-5">

                <div data-height="20px"></div>

                <div class="icon-info-1">
                  <a class="icon-info-link" href="#">
                    <div class="icon-element">
                      <img src="{{asset('assets/svg/upload/contact-icon-23.svg')}}" alt="icon"
                        class="img-fluid add-animate fast" data-animated="zoomIn" data-width="48px" data-height="48px">
                    </div>
                    <div class="icon-info-text text-white-50 pl-4">
                      <h4 class="font-weight-700 text-white mb-1">Explore Our Projects</h4>
                      <p class="mb-0">Cursus nunc commodo vestibulum iaculis</p>
                    </div>
                  </a>
                </div>

                <div data-height="19px"></div>

              </div>

              <div class="col-lg-6 bg-white p-4 px-md-5">

                <div data-height="20px"></div>

                <div class="icon-info-1">
                  <a class="icon-info-link" href="#">
                    <div class="icon-element">
                      <img src="{{asset('assets/svg/upload/contact-icon-24.svg')}}" alt="icon"
                        class="img-fluid add-animate fast" data-animated="zoomIn" data-width="48px" data-height="48px">
                    </div>
                    <div class="icon-info-text pl-4">
                      <h4 class="font-weight-700 mb-1">Request a Free Quote</h4>
                      <p class="mb-0">Nunc tincidunt dolor cursus orci maximus</p>
                    </div>
                  </a>
                </div>

                <div data-height="19px"></div>

              </div>

            </div>
          </div>
        </div>

        <div data-height="40px"></div>

        <div class="row my-5">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <div class="text-center py-4">

              <h2 class="h1 section-title-3 title-light-1 font-weight-800">Skills Expertise</h2>

              <div class="lead-sm text-white-75 pt-2">
                Vestibulum convallis arcui molestie neca massa scelerisque iuspendisse neque rhoncus condimentum
                consequat molestie arcu viverra erat aliquam odio efficitur
              </div>

            </div>
          </div>
        </div>

        <div class="row mb-4">

          <div class="col-md-6 col-lg-3">
            <div class="circle-progress mb-5 px-5 px-lg-0 px-xl-4">
              <div class="circle-progress-inner progress-light-1 trigger-progress" data-value="0.75"
                data-fill="{&quot;color&quot;: &quot; #2196f3 &quot;}">
                <span></span>
                <div class="circle-progress-label">Graphic Design</div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="circle-progress mb-5 px-5 px-lg-0 px-xl-4">
              <div class="circle-progress-inner progress-light-1 trigger-progress" data-value="0.8"
                data-fill="{&quot;color&quot;: &quot; #2196f3 &quot;}">
                <span></span>
                <div class="circle-progress-label">Web Design</div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="circle-progress mb-5 px-5 px-lg-0 px-xl-4">
              <div class="circle-progress-inner progress-light-1 trigger-progress" data-value="0.7"
                data-fill="{&quot;color&quot;: &quot; #2196f3 &quot;}">
                <span></span>
                <div class="circle-progress-label">Multimedia</div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="circle-progress mb-5 px-5 px-lg-0 px-xl-4">
              <div class="circle-progress-inner progress-light-1 trigger-progress" data-value="0.85"
                data-fill="{&quot;color&quot;: &quot; #2196f3 &quot;}">
                <span></span>
                <div class="circle-progress-label">Online Marketing</div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

    <!-- Portfolio section -->
    <div class="section py-5">

      <div class="container">

        <div class="row my-5">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <div class="text-center mt-3 mb-4">

              <h5 class="font-weight-400 mb-3">Drive More Customers</h5>

              <h2 class="h1 section-title-3 font-weight-800">Get Your Project Done</h2>

              <div class="lead-sm pt-2">
                Mauris pulvinar metus sem nibh iaculis sem congue lacus ultrices nec vestibulum consequa scelerisque
                quis interdum nec tincidunt amet luctus blandit amet molestie
              </div>

            </div>
          </div>
        </div>

        <div class="row pb-4 mb-5">
          <div class="col-lg-10 offset-lg-1">
            <div class="text-center">
              <img src="../../../assets/images/upload/benefits-graphic.png" alt="image" class="img-fluid add-animate"
                data-animated="fadeIn">
            </div>
          </div>
        </div>

      </div>

      <div class="container-fluid px-3 px-md-5">

        <div class="row">

          <div class="col-xl-6">
            <div class="vw-100 h-100 d-flex align-items-center ml-n3 ml-md-n5">
              <div class="container">
                <div class="row">
                  <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-0">
                    <div class="pr-xl-5 pb-3 mb-5 mb-xl-3 text-center text-xl-left">

                      <h2 class="h1 font-weight-800 mb-4">Our Showcase</h2>

                      <div class="lead-sm mb-5">
                        Cras aliquet condimentum nec vitae convallis nusce sapien malesuada consequat lectus sagittis
                        interdum
                      </div>

                      <a href="#" class="btn btn-round btn-primary mb-0">View all works</a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6">
            <div class="row">

              <div class="col-md-6">
                <div class="card card-blog-entry border-0">
                  <div class="hover-item rounded-ultra shadow-md">
                    <a href="#">
                      <div class="hover-transition rounded-ultra">
                        <div class="hover-down">
                          <i class="fas fa-link fa-2x hover-icon"></i>
                        </div>
                        <div class="hover-up">
                          <h5 class="hover-title font-weight-700 mb-1">Adipiscing In Mauris</h5>
                          <div class="hover-desc">Vestibulum vulputate semper</div>
                        </div>
                      </div>
                      <figure>
                        <img class="img-fluid" src="../../../assets/images/upload/portfolio-thumbnail-28.jpg"
                          alt="image">
                      </figure>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card card-blog-entry border-0">
                  <div class="hover-item rounded-ultra shadow-md">
                    <a href="#">
                      <div class="hover-transition rounded-ultra">
                        <div class="hover-down">
                          <i class="fas fa-link fa-2x hover-icon"></i>
                        </div>
                        <div class="hover-up">
                          <h5 class="hover-title font-weight-700 mb-1">Nullam Sem Ornare</h5>
                          <div class="hover-desc">Rhoncus viverra dui aliquam</div>
                        </div>
                      </div>
                      <figure>
                        <img class="img-fluid" src="../../../assets/images/upload/portfolio-thumbnail-29.jpg"
                          alt="image">
                      </figure>
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-md-6 col-xl-3">
            <div class="card card-blog-entry border-0">
              <div class="hover-item rounded-ultra shadow-md">
                <a href="#">
                  <div class="hover-transition rounded-ultra">
                    <div class="hover-down">
                      <i class="fas fa-link fa-2x hover-icon"></i>
                    </div>
                    <div class="hover-up">
                      <h5 class="hover-title font-weight-700 mb-1">Duis Congue Auctor</h5>
                      <div class="hover-desc">Posuere in lobortis neca dolor</div>
                    </div>
                  </div>
                  <figure>
                    <img class="img-fluid" src="../../../assets/images/upload/portfolio-thumbnail-30.jpg" alt="image">
                  </figure>
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-9">
            <div class="row">

              <div class="col-xl-4">
                <div class="card card-blog-entry border-0">
                  <div class="hover-item rounded-ultra shadow-md">
                    <a href="#">
                      <div class="hover-transition rounded-ultra">
                        <div class="hover-down">
                          <i class="fas fa-link fa-2x hover-icon"></i>
                        </div>
                        <div class="hover-up">
                          <h5 class="hover-title font-weight-700 mb-1">Facilisis Lacinia Nec</h5>
                          <div class="hover-desc">Fermentum sem quis placera</div>
                        </div>
                      </div>
                      <figure>
                        <img class="img-fluid" src="../../../assets/images/upload/portfolio-thumbnail-31.jpg"
                          alt="image">
                      </figure>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-xl-8">
                <div class="card card-blog-entry border-0">
                  <div class="hover-item rounded-ultra shadow-md">
                    <a href="#">
                      <div class="hover-transition rounded-ultra">
                        <div class="hover-down">
                          <i class="fas fa-link fa-2x hover-icon"></i>
                        </div>
                        <div class="hover-up">
                          <h5 class="hover-title font-weight-700 mb-1">Morbi Euismod Dolor</h5>
                          <div class="hover-desc">Aenean sem massa vitae neque</div>
                        </div>
                      </div>
                      <figure>
                        <img class="img-fluid d-none d-xl-block"
                          src="../../../assets/images/upload/portfolio-thumbnail-32.jpg" alt="image">
                        <img class="img-fluid d-xl-none"
                          src="../../../assets/images/upload/portfolio-thumbnail-32-mobile.jpg" alt="image">
                      </figure>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-xl-8">
                <div class="card card-blog-entry border-0">
                  <div class="hover-item rounded-ultra shadow-md">
                    <a href="#">
                      <div class="hover-transition rounded-ultra">
                        <div class="hover-down">
                          <i class="fas fa-link fa-2x hover-icon"></i>
                        </div>
                        <div class="hover-up">
                          <h5 class="hover-title font-weight-700 mb-1">Sociosqu Orci Cursus</h5>
                          <div class="hover-desc">Dolor mollis bibendum etiam</div>
                        </div>
                      </div>
                      <figure>
                        <img class="img-fluid d-none d-xl-block"
                          src="../../../assets/images/upload/portfolio-thumbnail-33.jpg" alt="image">
                        <img class="img-fluid d-xl-none"
                          src="../../../assets/images/upload/portfolio-thumbnail-33-mobile.jpg" alt="image">
                      </figure>
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </div>


    <div class="bg-indigo">
      <!-- Brand section -->
      <div class="section">
        <div class="container">
          <div class="row align-items-center py-5">
            <div class="col-6 col-md-4 col-lg-2">
              <div class="text-center px-2">
                <img class="img-fluid" src="{{asset('assets/svg/upload/brand-logo-white-01.svg')}}" alt="brand">
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
              <div class="text-center px-2">
                <img class="img-fluid" src="{{asset('assets/svg/upload/brand-logo-white-02.svg')}}" alt="brand">
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
              <div class="text-center px-2">
                <img class="img-fluid" src="{{asset('assets/svg/upload/brand-logo-white-03.svg')}}" alt="brand">
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
              <div class="text-center px-2">
                <img class="img-fluid" src="{{asset('assets/svg/upload/brand-logo-white-04.svg')}}" alt="brand">
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
              <div class="text-center px-2">
                <img class="img-fluid" src="{{asset('assets/svg/upload/brand-logo-white-05.svg')}}" alt="brand">
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
              <div class="text-center px-2">
                <img class="img-fluid" src="{{asset('assets/svg/upload/brand-logo-white-06.svg')}}" alt="brand">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

  <!-- Footer -->
  <div class="bg-viridian-500 text-white-50">

    <div class="py-5">
      <div class="container">
        <div class="row py-5">

          <div class="col-lg-3 mb-5 mb-lg-0">

            <div class="widget">

              <img class="img-fluid d-block mb-4" src="../../../assets/svg/upload/logo-light.svg" alt="logo"
                data-width="146px" data-height="42px">

              <div data-height="5px"></div>

              <p>Pulvinar mauris metus sed nibh iaculis nec congue lacus ultrices ac vestibulum consequat sapien quis
                interdum.</p>

            </div>

            <div class="widget">

              <h6 class="widget-title text-white text-uppercase font-weight-700 mb-4">Follow Us</h6>

              <div class="d-flex ml-n2">
                <a href="#" target="_blank"
                  class="d-flex align-items-center justify-content-center text-white-25 text-hover-primary"
                  data-width="36px" data-height="36px"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank"
                  class="d-flex align-items-center justify-content-center text-white-25 text-hover-primary"
                  data-width="36px" data-height="36px"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"
                  class="d-flex align-items-center justify-content-center text-white-25 text-hover-primary"
                  data-width="36px" data-height="36px"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" target="_blank"
                  class="d-flex align-items-center justify-content-center text-white-25 text-hover-primary"
                  data-width="36px" data-height="36px"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"
                  class="d-flex align-items-center justify-content-center text-white-25 text-hover-primary"
                  data-width="36px" data-height="36px"><i class="fab fa-vimeo-v"></i></a>
              </div>

            </div>

          </div>

          <div class="col-lg-3 mb-5 mb-lg-0">
            <div class="widget">

              <h6 class="widget-title text-white text-uppercase font-weight-700">Get in touch</h6>

              <ul class="custom-list fa-ul mb-0 ml-4">
                <li class="mb-3">
                  <span class="fa-li"><i class="fas fa-map-marker-alt text-primary"></i></span>
                  2926 Kincheloe Road Portland Oregon 97229
                </li>
                <li class="mb-3">
                  <span class="fa-li"><i class="fas fa-phone-alt text-primary"></i></span>
                  1-229-838-2569
                </li>
                <li class="mb-3">
                  <span class="fa-li"><i class="fas fa-phone-alt text-primary"></i></span>
                  1-517-816-9057
                </li>
                <li>
                  <span class="fa-li"><i class="fas fa-envelope text-primary"></i></span>
                  contact@yourdomain.com
                </li>
              </ul>

            </div>
          </div>

          <div class="col-lg-3 mb-5 mb-lg-0">
            <div class="widget">

              <h6 class="widget-title text-white text-uppercase font-weight-700">Popular tags</h6>

              <div>
                <a href="#" class="btn btn-round btn-sm btn-outline-primary mr-1 mb-2">technology</a>
                <a href="#" class="btn btn-round btn-sm btn-outline-primary mr-1 mb-2">arts</a>
                <a href="#" class="btn btn-round btn-sm btn-outline-primary mr-1 mb-2">nature</a>
                <a href="#" class="btn btn-round btn-sm btn-outline-primary mr-1 mb-2">film</a>
                <a href="#" class="btn btn-round btn-sm btn-outline-primary mr-1 mb-2">food & drink</a>
                <a href="#" class="btn btn-round btn-sm btn-outline-primary mr-1 mb-2">travel</a>
                <a href="#" class="btn btn-round btn-sm btn-outline-primary mr-1 mb-2">health</a>
                <a href="#" class="btn btn-round btn-sm btn-outline-primary mr-1 mb-2">people</a>
                <a href="#" class="btn btn-round btn-sm btn-outline-primary mr-1 mb-2">fashion</a>
                <a href="#" class="btn btn-round btn-sm btn-outline-primary mr-1 mb-2">architecture</a>
                <a href="#" class="btn btn-round btn-sm btn-outline-primary mr-1 mb-2">business</a>
              </div>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="widget">

              <h6 class="widget-title text-white text-uppercase font-weight-700">Gallery feed</h6>

              <div class="row widget-gallery-feed">
                <div class="col-4 gallery-feed-item">
                  <div class="hover-item hover-uncaption rounded shadow-sm">
                    <a href="#" target="_blank">
                      <div class="hover-transition">
                        <div class="hover-down p-0">
                          <i class="far fa-eye fa-lg hover-icon"></i>
                        </div>
                      </div>
                      <figure>
                        <img class="w-100" src="../../../assets/images/upload/widget-gallery-feed-01.jpg" alt="image">
                      </figure>
                    </a>
                  </div>
                </div>
                <div class="col-4 gallery-feed-item">
                  <div class="hover-item hover-uncaption rounded shadow-sm">
                    <a href="#" target="_blank">
                      <div class="hover-transition">
                        <div class="hover-down p-0">
                          <i class="far fa-eye fa-lg hover-icon"></i>
                        </div>
                      </div>
                      <figure>
                        <img class="w-100" src="../../../assets/images/upload/widget-gallery-feed-02.jpg" alt="image">
                      </figure>
                    </a>
                  </div>
                </div>
                <div class="col-4 gallery-feed-item">
                  <div class="hover-item hover-uncaption rounded shadow-sm">
                    <a href="#" target="_blank">
                      <div class="hover-transition">
                        <div class="hover-down p-0">
                          <i class="far fa-eye fa-lg hover-icon"></i>
                        </div>
                      </div>
                      <figure>
                        <img class="w-100" src="../../../assets/images/upload/widget-gallery-feed-03.jpg" alt="image">
                      </figure>
                    </a>
                  </div>
                </div>
                <div class="col-4 gallery-feed-item">
                  <div class="hover-item hover-uncaption rounded shadow-sm">
                    <a href="#" target="_blank">
                      <div class="hover-transition">
                        <div class="hover-down p-0">
                          <i class="far fa-eye fa-lg hover-icon"></i>
                        </div>
                      </div>
                      <figure>
                        <img class="w-100" src="../../../assets/images/upload/widget-gallery-feed-04.jpg" alt="image">
                      </figure>
                    </a>
                  </div>
                </div>
                <div class="col-4 gallery-feed-item">
                  <div class="hover-item hover-uncaption rounded shadow-sm">
                    <a href="#" target="_blank">
                      <div class="hover-transition">
                        <div class="hover-down p-0">
                          <i class="far fa-eye fa-lg hover-icon"></i>
                        </div>
                      </div>
                      <figure>
                        <img class="w-100" src="../../../assets/images/upload/widget-gallery-feed-05.jpg" alt="image">
                      </figure>
                    </a>
                  </div>
                </div>
                <div class="col-4 gallery-feed-item">
                  <div class="hover-item hover-uncaption rounded shadow-sm">
                    <a href="#" target="_blank">
                      <div class="hover-transition">
                        <div class="hover-down p-0">
                          <i class="far fa-eye fa-lg hover-icon"></i>
                        </div>
                      </div>
                      <figure>
                        <img class="w-100" src="../../../assets/images/upload/widget-gallery-feed-06.jpg" alt="image">
                      </figure>
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-bottom py-4">
      <div class="container footer-bottom-container">
        <div class="row py-3">

          <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
            <small>Copyright @ <a href="#">yourdomain.com</a>. All Rights Reserved.</small>
          </div>

          <div class="col-lg-6 text-center text-lg-right">
            <a href="#" class="text-white-50 text-hover-primary mr-4">Terms</a>
            <a href="#" class="text-white-50 text-hover-primary">Privacy Policy</a>
          </div>

        </div>
      </div>
    </div>

  </div>

  @include('plantilla.footer')

</body>

</html>