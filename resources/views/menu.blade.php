@extends('layouts.main')

@section('content')

<section class="wrapper bg-soft-primary">
  <div class="container py-10 py-md-12 text-center">
    <div class="row">
      <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
        <h1 class="display-1 mb-3">PUB</h1>
        
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

<section class="wrapper bg-light">
  <div class="container py-0 py-md-5">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      
      <div class="col-lg-12">
        <div class="swiper-container text-center mb-6" data-margin="30" data-dots="true" data-items-xl="4" data-items-md="2" data-items-xs="1">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img class="rounded-circle w-20 mx-auto mb-4" src="dist/assets/img/avatars/t1.jpg" srcset="./assets/img/avatars/t1@2x.jpg 2x" alt="" />
                
                <!-- /.social -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <img class="rounded-circle w-20 mx-auto mb-4" src="dist/assets/img/avatars/t2.jpg" srcset="./assets/img/avatars/t2@2x.jpg 2x" alt="" />
                
                <!-- /.social -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <img class="rounded-circle w-20 mx-auto mb-4" src="dist/assets/img/avatars/t3.jpg" srcset="./assets/img/avatars/t3@2x.jpg 2x" alt="" />
                
                <!-- /.social -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <img class="rounded-circle w-20 mx-auto mb-4" src="dist/assets/img/avatars/t4.jpg" srcset="./assets/img/avatars/t4@2x.jpg 2x" alt="" />
                
                <!-- /.social -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <img class="rounded-circle w-20 mx-auto mb-4" src="dist/assets/img/avatars/t5.jpg" srcset="./assets/img/avatars/t5@2x.jpg 2x" alt="" />
                
                <!-- /.social -->
              </div>
              <!--/.swiper-slide -->
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

<section class="wrapper bg-light angled lower-end">
  <div class="container py-0 py-md-10">
    <div class="row gx-lg-5 gx-xl-5 gy-10 mb-2 mb-md-4">
      <div class="col-lg-9 position-relative ">
        <div class="swiper-container dots-closer text-center mb-6" data-margin="30" data-dots="true">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card elite_card shadow-lg mt-16 mt-md-n10 mb-1 mb-md-1">
                  <div class="row gx-0">
                    <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="dist/assets/img/tm1.jpg">
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                      <div class="p-10 p-md-11 p-lg-13">
                        <h2 class="display-4 mb-3">Let’s Talk</h2>
                        <p class="lead fs-lg">Let's make something great together. We are trusted by over 5000+ clients. Join them by using our services and grow your business.</p>
                        
                        <a href="#" class="btn btn-primary rounded-pill mt-2">Join Us</a>
                      </div>
                      <!--/div -->
                    </div>
                    <!--/column -->
                  </div>
                  <!--/.row -->
                </div>
                <!-- /.card -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <div class="card shadow-lg shadow-lg mt-16 mt-md-n10 mb-1 mb-md-1">
                  <div class="row gx-0">
                    <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="dist/assets/img/photos/tm1.jpg">
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                      <div class="p-10 p-md-11 p-lg-13">
                        <h2 class="display-4 mb-3">Let’s Talk</h2>
                        <p class="lead fs-lg">Let's make something great together. We are trusted by over 5000+ clients. Join them by using our services and grow your business.</p>

                        <a href="#" class="btn btn-primary rounded-pill mt-2">Join Us</a>
                      </div>
                      <!--/div -->
                    </div>
                    <!--/column -->
                  </div>
                  <!--/.row -->
                </div>
                <!-- /.card -->
              </div>
              <!--/.swiper-slide -->
              
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
        {{-- <hr class="my-8" />
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-5">
            <div class="card mt-5">
              <figure class="card-img-top"><img class="img-fluid" src="dist/assets/img/avatars/t1.jpg" srcset="./assets/img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div class="card-body px-6 py-5">
                <h4 class="mb-1">Tina Geller</h4>
                <div class="meta mb-2">Assistant Buyer</div>
                <p class="mb-2">Vivamus sagittis lacus vel augue laoreet rutrum.</p>
                <nav class="nav social justify-content-center text-center mb-0">
                  <a href="#"><i class="uil uil-facebook-f"></i></a>
                  <a href="#"><i class="uil uil-slack"></i></a>
                  <a href="#"><i class="uil uil-dribbble"></i></a>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/column -->
          
          <div class="col-lg-4">
            <h2 class="">Meilleur buteur</h2>
          </div>
          <!--/column -->
          <div class="col-lg-4">
            
          </div>
          <!--/column -->
        </div>
        <!--/.row --> --}}
        <hr class="my-8" />
        <div class="row gx-lg-8 gx-xl-1 gy-1 align-items-center mt-10">
          <div class="col-lg-4">
            <h2 class="">Meilleur buteur</h2>
            <div class="card mt-5">
              <figure class="card-img-top"><img class="img-fluid" src="/assets/img/avatars/t1.jpg" srcset="./assets/img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div class="card-body px-6 py-5">
                <h4 class="mb-1">Tina Geller</h4>
                <div class="meta mb-2">Assistant Buyer</div>
                <p class="mb-2">Vivamus sagittis lacus vel augue laoreet rutrum.</p>
                <nav class="nav social justify-content-center text-center mb-0">
                  <a href="#"><i class="uil uil-facebook-f"></i></a>
                  <a href="#"><i class="uil uil-slack"></i></a>
                  <a href="#"><i class="uil uil-dribbble"></i></a>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/column -->
          <div class="col-lg-4 ">
            <h2 class="">Statistiques Générales</h2>
            <table class="table">
              <thead>
                
              </thead>
              <tbody>
                <tr>
                  <th scope="row">MJ</th>
                  <td>MG</td>
                  <td>MN</td>
                </tr>
                <tr>
                  <th scope="row">BM</th>
                  <td>CJ</td>
                  <td>CR</td>
                </tr>
              
              </tbody>
            </table>
          </div>
          <!--/column -->
          <div class="col-lg-4">
            <h2 class="">Forme des 03 premiers</h2>
            <table class="table table-bordered">
              <thead>
                <tr>
                  
              </thead>
              <tbody>
                <tr>
                  <th scope="row">r</th>
                  <td>b</td>
                  <td>v</td>
                  <td>v</td>
                  <td>v</td>
                </tr>
                <tr>
                  <th scope="row">v</th>
                  <td>b</td>
                  <td>b</td>
                  <td>b</td>
                  <td>v</td>
                </tr>
                <tr>
                  <th scope="row">b</th>
                  <td>b</td>
                  <td>v</td>
                  <td>v</td>
                  <td>r</td>
                </tr>
               
              </tbody>
            </table>
          </div>
          <!--/column -->
         
        </div>
        <!--/.row -->
      </div>
      <!--/column -->
      <div class="col-lg-3" style="background: #37003c; color:#fff">
        
        <h4 class="display-6 mb-3 mt-10" style="color: #fff; text-align: center">Classement</h4>

        <div class="row align-items-center">
          <div class="col-lg-12">
            <table class="table" style="color: #fff; border-spacing: 0px;">
              <thead>
                <tr>
                  <th scope="col">rang</th>
                  <th scope="col">Clubs</th>
                  <th scope="col">MJ</th>
                  <th scope="col">Pts</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row">11</th>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row">12</th>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row">13</th>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row">14</th>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row">15</th>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row">16</th>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row">17</th>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row">18</th>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                
                
              </tbody>
            </table>
          </div>
          
        </div>
        <!--/.row -->
      </div>
      <!--/column -->
      
    </div>
    <!--/.row -->
    
    
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light wrapper-border">
  <div class="container py-1 py-md-5">
    <h2 class="fs-15 text-uppercase text-muted text-center mb-8"></h2>
    <div class="swiper-container clients mb-0" data-margin="30" data-dots="false" data-autoplay-timeout="3000" data-items-xxl="7" data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-xs="2">
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c1.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c2.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c3.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c4.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c5.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c6.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c7.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c8.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c9.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c10.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c11.png" alt="" /></div>
        </div>
        <!--/.swiper-wrapper -->
      </div>
      <!-- /.swiper -->
    </div>
    <!-- /.swiper-container -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->


@endsection
