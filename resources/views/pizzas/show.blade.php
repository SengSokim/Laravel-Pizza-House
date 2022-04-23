@extends('layouts.app')

@section('content')
<style> 
  .pizza-details {
    margin:50px 50px 50px 50px;
    color: #ffffff;
    background-color: dimgrey;
    padding: 50px;
  }
  #back{
    margin-left:100px;
    text-decoration: none;
    
  }
  
</style>

<div class="pizza-details">
  <h1>Order for {{ $pizza->name }}</h1>
  <p class="type">Type - {{ $pizza->type }}</p>
  <p class="base">Base - {{ $pizza->base }}</p>
  <p class="drink">Drink - {{ $pizza->drink }} </p>
  <p class="price">Price - {{ $pizza->price }} $</p>
</div>
<br>
<br>
<form action="/pizzas/{{ $pizza->id }}" method="POST">
  @csrf
  @method('delete')
  <center><button class="btn btn-primary btn-xl text-uppercase" id="complete">Complete Order</button></center>
</form>
<br>
<a href="/pizzas" class="btn btn-primary btn-xl text-uppercase" id="back">Back</a>
@endsection