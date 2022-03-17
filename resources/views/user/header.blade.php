<!DOCTYPE html>
<html lang="en">

<head>

          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

          <title>Sixteen Clothing </title>

          <!-- Bootstrap core CSS -->
          <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
          <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

          <!-- Additional CSS Files -->
          <link rel="stylesheet" href="assets/css/fontawesome.css">
          <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
          <link rel="stylesheet" href="assets/css/owl.css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
</head>

<body>

          <!-- ***** Preloader Start ***** -->

          <!-- ***** Preloader End ***** -->

          <!-- Header -->
          <header class="">
                    <nav class="navbar navbar-expand-lg">
                              <div class="container">
                                        <a class="navbar-brand" href="/">
                                                  <h2>Sixteen <em>Clothing</em></h2>
                                        </a>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                                                  <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarResponsive">
                                                  <ul class="navbar-nav ml-auto">
                                                            <li class="nav-item ">
                                                                      <a class="nav-link" href="/">Home
                                                                                <span class="sr-only">(current)</span>
                                                                      </a>
                                                            </li>

                                                            <li class="nav-item">
                                                                      <a class="nav-link" href="{{url('category')}}">Category</a>
                                                            </li>



                                                            <li class="nav-item">
                                                                      <a class="nav-link" href="{{url('about')}}">About Us</a>
                                                            </li>

                                                            <li class="nav-item">
                                                                      <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
                                                            </li>

                                                            <li class="nav-item">
                                                                      @if (Route::has('login'))

                                                                      @auth
                                                            <li class="nav-item">
                                                                      <a class="nav-link" href="{{url('showcart')}}">

                                                                                Cart[]
                                                                      </a>
                                                            </li>
                                                            <x-app-layout>

                                                            </x-app-layout>

                                                            @else
                                                            <li>
                                                                      <a class="nav-link" href="{{ route('login') }}">Log in</a>
                                                            </li>
                                                            @if (Route::has('register'))
                                                            <li><a class="nav-link" href="{{ route('register') }}">Register</a> </li>
                                                            @endif
                                                            @endauth

                                                            @endif

                                                            </li>
                                                  </ul>
                                        </div>
                              </div>
                    </nav>
          </header>