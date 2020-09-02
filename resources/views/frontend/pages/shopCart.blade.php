 <!-- Hero Section Begin -->
 @extends('frontend.master')

 @section('home')
 
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                     @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
        @if (Cart::count() > 0)
        <div class="row">
            <div class="col-lg-12 text-center shoping__product alert alert-danger">
                <h3>{{ Cart::count() }}item(s) in Shopping Cart</h3>
            </div>
        </div>
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                             @foreach (Cart::content() as $item)
                            <tbody>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{asset('fontend/img/cart/cart-1.jpg')}}" alt="">
                                        <h5>{{$item->model->name}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{$item->model->price}}
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        $110.00
                                    </td>
                                    <td class="shoping__cart__item__close">
                                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit"><span class="text-danger"> <i class="fa fa-trash fa-1x"></i></span></button>
                            </form>
                                       
                                    </td>
                                </tr>
                            </tbody>
                              @endforeach
                        </table>
                    </div>
                </div>
            </div>
          
            <div class="row">
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                           <p>Have Code?<p>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                   
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span>{{ presentPrice(Cart::subtotal()) }}</span></li>
                            <li>Tax <span>{{ presentPrice(Cart::tax()) }}</span></li>
                            <li>Total <span>{{ presentPrice(Cart::total()) }}</span></li>
                        </ul>
                        <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
            @else
            <h1>No items found</h1>
            @endif
        </div>
    </section>
    <!-- Shoping Cart Section End -->
 @endsection
   