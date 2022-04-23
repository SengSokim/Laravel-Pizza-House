@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Two Factor Authentication') }}</div>

                <div class="card-body">
                    @if (session('status') == "two-factor-authentication-disabled")
                        <div class="alert alert-success" role="alert">
                            Two factor Authentication has been disabled.
                        </div>
                    @endif

                    @if (session('status') == "two-factor-authentication-enabled")
                        <div class="alert alert-success" role="alert">
                            Two factor Authentication has been enabled.
                        </div>
                    @endif


                    <form method="POST" action="/user/two-factor-authentication">
                        @csrf

                        @if (auth()->user()->two_factor_secret)
                            @method('DElETE')

                            <div class="pb-5">
                                {!! auth()->user()->twoFactorQrCodeSvg() !!}
                            </div>

                            <div>
                                <h3>Recovery Codes:</h3>

                                <ul>
                                    @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes)) as $code)
                                        <li>{{ $code }}</li>
                                    @endforeach
                                </ul>
                            </div>

                            <button class="btn btn-danger">Disable</button>
                        @else
                            <button class="btn btn-primary">Enable</button>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="/admin/users">
                <span data-feather="home"></span>
                Dashboard for Admin
              </a>
            </li>
            <br>
            <br>
            <li class="nav-item">
              <a class="nav-link active" href="/home">
                <span data-feather="file"></span>
                Home<span class="sr-only"></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pizzas/create">
                <span data-feather="shopping-cart"></span>
                Create Pizza
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                Contact us
              </a>
            </li>
          </ul>

        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Pizza</h1>
        </div>
        <section>
          <div class="menuinfo">
            <div class="text1">
              <img src="img/pizza1.jpg" width="200" height="200">
              <h3>Pizza </h3>
              <p>Pizza (Italian: [ˈpittsa], Neapolitan: [ˈpittsə]) is a dish of Italian origin consisting of a usually round, flat base of leavened wheat-based dough topped with tomatoes, cheese, and often various other ingredients (such as anchovies, mushrooms, onions, olives, pineapple, meat, etc.), which is then baked at a high temperature, traditionally in a wood-fired oven.[1] A small pizza is sometimes called a pizzetta. A person who makes pizza is known as a pizzaiolo.

                In Italy, pizza served in a restaurant is presented unsliced, and is eaten with the use of a knife and fork.[2][3] In casual settings, however, it is cut into wedges to be eaten while held in the hand.</p>
                <p>The term pizza was first recorded in the 10th century in a Latin manuscript from the Southern Italian town of Gaeta in Lazio, on the border with Campania.[4] Modern pizza was invented in Naples, and the dish and its variants have since become popular in many countries.[5] It has become one of the most popular foods in the world and a common fast food item in Europe, North America and Australasia; available at pizzerias (restaurants specializing in pizza), restaurants offering Mediterranean cuisine, via pizza delivery, and as street food.[5] Various food companies sell ready-baked pizzas, which may be frozen, in grocery stores, to be reheated in a home oven.</p>
            </div>
            
            </div>
          </div>

        </section>
       
      
      </main>
      

        

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>

  <!-- Icons -->
  <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
  <script>
    feather.replace()
  </script>

  <!-- Graphs -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
  <script>
    
  </script>
@endsection
