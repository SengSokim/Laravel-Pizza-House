@extends('layouts.app')

@section('content')

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
              <a class="nav-link " href="/home">
                <span data-feather="home"></span>
                Home<span class="sr-only"></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/pizzas/create">
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
        <div class="create-pizza">
          <h1>Create a New Pizza</h1>
            
          <form method="POST" action="{{ url('/pizzas') }}" enctype = "multipart/form-data" >
            @csrf
            
            <label for="type">Choose type of pizza:</label>
            <select name="type" id="type" onchange="myFunction()">
              <option value="">PIZZA</option>
              <option value="Margarita">Margarita</option>
              <option value="Hawaiian">Hawaiian</option>
              <option value="Veg Supreme">Veg Supreme</option>
              <option value="Volcano">Volcano</option>
              <option value="Neapolitan Pizza">Neapolitan Pizza</option>
              <option value="Chicago Pizza">Chicago Pizza</option>
              <option value="New York-Style Pizza">New York-Style Pizza</option>
              <option value="Sicilian Pizza">Sicilian Pizza</option>
            </select>
            <label for="base">Choose crust:</label>
            <select name="base" id="base" onchange="myFunction2()">
              <option value="">CRUST</option>
              <option value="Thick">Thick</option>
              <option value="Thin & Crispy">Thin & Crispy</option>
              <option value="Cheese Crust">Cheese Crust</option>
              <option value="Garlic Crust">Garlic Crust</option>
            </select>
            <label for="base">Choose drink:</label>
            <select name="drink" id="drink" onchange="myFunction3()">
              <option value="">DRINK</option>
              <option value="Coca Cola">Coca Cola</option>
              <option value="Sprite">Sprite</option>
              <option value="Lemonade">Lemonade</option>
              <option value="Fruit juice">Fruit juice</option>
            </select>
            <br>
            <br>
            <p id="demo">-</p>
            <p id="demo2">-</p>
            <p id="demo3">-</p>
            <br>
            <br>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" required>
            <br>
            <br>
            <p>SERVICES</p>
            <input type="radio" id="services" name="services" value="delivery" >
            <label for="delivery">Delivery</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" id="services" name="services" value="pickup" >
            <label for="pickup">Pick Up</label>
            <div id="payment">
              <p>PAYMENT METHOD</p>
              <input type="radio" id="payment" name="payment" value="cash">
              <label for="cash">Cash</label>&nbsp;&nbsp;&nbsp;
              <input type="radio" id="payment" name="payment" value="card">
              <label for="card">Credit card</label>
            </div>
            <br>
            <br>
            <label for="price">Total:</label>
            <input type="text" name="price" id="price" required>
            <label for="price"><h4>$</h4></label>
              &nbsp;&nbsp;&nbsp;

            <input type="submit" value="Order Pizza">
          </form>
          
        </div>
      <br>
      
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Pizza</h1>
      </div>
      <section>
        <div class="menuinfo">
          <div class="text1">
            <img src="../img/pizza/marga.jfif" width="200" height="200">
            <h3>margherita pizza</h3>
            <p>bubbly crust, tomato sauce, fresh mozzarella</p>
          </div>
          <div class="text2">
            <img src="../img/pizza/hawaii.jfif" width="200" height="200">
              <h3>Hawaiian pizza</h3>
              <p>cheese, cooked ham, and pineapple</p>
          </div>
          <div class="text3">
            <img src="../img/pizza/veg.jfif" width="200" height="200">
              <h3>Veg Supreme pizza</h3>
              <p>pepperoni, sausage, bell peppers</p>
          </div>
          <div class="text3">
            <img src="../img/pizza/volcano.jfif" width="200" height="200">
              <h3>volcano pizza</h3>
              <p>topped with 4 different meats and fries.</p>
          </div>
          <div class="text3">
            <img src="../img/pizza/neapol.jfif" width="200" height="200">
              <h3>Neapolitan Pizza</h3>
              <p>tomatoes, fresh mozzarella cheese, fresh basil,</p>
          </div>
          <div class="text3">
            <img src="../img/pizza/chicago.jfif" width="200" height="200">
              <h3>Chicago Pizza</h3>
              <p>cheese, fillings like meat and vegetables, and sauce</p>
          </div>
          <div class="text3">
            <img src="../img/pizza/ny.jfif" width="200" height="200">
              <h3>New York-Style Pizza</h3>
              <p>mozzarella cheese, tomato sauce, pepperoni</p>
          </div>
          <div class="text3">
            <img src="../img/pizza/sicil.jfif" width="200" height="200">
              <h3>Sicilian Pizza</h3>
              <p>thick crusted, round, herbs</p>
          </div>
        </div>

      </section>
      </main>
  <script>
    function myFunction() {
      var type = document.getElementById('type');
      var itemType = type.options[type.selectedIndex].value;
      if (itemType == 'Margarita'){
        document.getElementById("price").value = 26.99;
      }else if (itemType == "Hawaiian"){
        document.getElementById("price").value = 24.99;
      }else if (itemType == "Veg Supreme"){
        document.getElementById("price").value = 21.99;
      }else if (itemType == "Volcano"){
        document.getElementById("price").value = 21.50;
      }else if (itemType == "Neapolitan Pizza"){
        document.getElementById("price").value = 23.50;
      }else if (itemType == "Chicago Pizza"){
        document.getElementById("price").value = 22.50;
      }else if (itemType == "New York-Style Pizza"){
        document.getElementById("price").value = 20.50;
      }else if (itemType == "Sicilian Pizza"){
        document.getElementById("price").value = 24.50;
      }
      document.getElementById("demo").innerHTML = "Your selected type of pizza: " + itemType;
    }
    function myFunction2() {
      var y = document.getElementById("base").value;
      document.getElementById("demo2").innerHTML = "Your choice of crust: " + y;
    }
    function myFunction3() {
      var z = document.getElementById("drink").value;
      document.getElementById("demo3").innerHTML = "Your drink: " + z;
    }
    
  </script>
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