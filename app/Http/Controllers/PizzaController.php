<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;

class PizzaController extends Controller
{

  public function index() {

    $pizzas = Pizza::all();      

    return view('pizzas.index', [
      'pizzas' => $pizzas,
    ]);
  }

  public function show($id) {
    
    $pizza = Pizza::findOrFail($id);

    return view('pizzas.show', ['pizza' => $pizza]);
  }

  public function create() {
    return view('pizzas.create');
  }
  public function store() {
    $pizza = new Pizza();
    $pizza->name = request('name');
    $pizza->type = request('type');
    $pizza->base = request('base');
    $pizza->price = request('price');
    $pizza->drink = request('drink');
    $pizza->address = request('address');
    $pizza->services = request('services');
    $pizza->payment = request('payment');
    $pizza->email = request('email');
    Mail::to($pizza->email)->send(new OrderMail($pizza->name, $pizza->address, $pizza->email ,$pizza->services,  $pizza->payment, $pizza->type, $pizza->base, $pizza->price, $pizza->drink ));
    $pizza->save();
    return redirect('/')->with('success', 'Thank you for your order! Please check your email inbox!');
  }
  public function delete($id){
    $pizza = Pizza::findorFail($id);
    $pizza->delete();

    return redirect('/pizzas');
  }
  
}