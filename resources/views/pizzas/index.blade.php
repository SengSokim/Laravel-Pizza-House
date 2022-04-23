@extends('layouts.app')

@section('content')
<link href="css/dashboard.css" rel="stylesheet">
        <!-- Styles -->
        <style>
          html, body {
              background-color: #495057;
              color: #636b6f;
              font-family: 'Nunito', sans-serif;
              font-weight: 200;
              height: 100vh;
              margin: 0;
          }
          .full-height {
              height: 100vh;
          }
          .flex-center {
              align-items: center;
              display: flex;
              justify-content: center;
          }
          .position-ref {
              position: relative;
          }
          .top-right {
              position: absolute;
              right: 10px;
              top: 18px;
          }
          .content {
              text-align: center;
          }
          .title {
              font-size: 84px;
              color: #fff;
          }
          .links > a {
              color: #636b6f;
              padding: 0 25px;
              font-size: 13px;
              font-weight: 600;
              letter-spacing: .1rem;
              text-decoration: none;
              text-transform: uppercase;
          }
          .m-b-md {
              margin-bottom: 30px;
          }
          #back{
            margin-left: 100px;
          }
          .btn{
              background-color: #adb5bd;
          }
      </style>
<div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="/home">
                <span data-feather="home"></span>
                Home
              </a>
            </li>
            <br>
            <br>
            <li class="nav-item">
              <a class="nav-link " href="/admin/users">
                <span data-feather="shopping-cart"></span>
                Admin Dashboard<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/pizzas">
                <span data-feather="shopping-cart"></span>
                Order List<span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Pizza List
                </div>
        
                @foreach($pizzas as $pizza)
                  <div class="nameCustomer">
                    <a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a>
                  </div>
                @endforeach
            </div> 
        </div>
      </main>


@endsection