@component('mail::message')
Order Confirmation

Your order has been successfully placed.
<br>
Name: {{ $name }}
<br>
Address: {{ $address }}
<br>
Email: {{ $email }}
<br>
Service: {{ $services }}
<br>
Payment: {{ $payment }}
<br>
Type of Pizza: {{ $type }}
<br>
Choice of crust: {{ $base }}
<br>
Drink: {{ $drink }} 
<br>
Price: {{ $price }} $
<br>
{{-- @foreach($pizza as $pizza)
    <h1>Order for {{ $item->name }}</h1>
    <p class="type">Type - {{ $item->type }}</p>
    <p class="base">Base - {{ $item->base }}</p>
    <p class="price">Price - {{ $item->price }} $</p>              
@endforeach --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
