@extends('layouts.app')

@section('content')
<link href="css/dashboard.css" rel="stylesheet">
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
              <a class="nav-link active" href="/pizzas">
                <span data-feather="shopping-cart"></span>
                Admin Dashboard<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pizzas">
                <span data-feather="shopping-cart"></span>
                Order List<span class="sr-only">(current)</span>
              </a>
            </li>
            
        </div>
      </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Admin Dashboard</h1>
          
      </main>
      
@endsection  