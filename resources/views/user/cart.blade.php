@extends('layouts.user')
@section('content')
    <div class="container-fluid min-vh-100 d-flex align-items-center" style="padding-top: 57px;">
        <div class="container-fluid h-100 row m-0 justify-content-evenly pt-3">
            <div class="col-12 col-lg-7 shadow pb-3 rounded-3 overflow-auto" style="height: 75vh;">
                <h3 class="mt-2 mb-3">Shoping Cart</h3>
                <table class="table text-center table-striped">
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Subtotal</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php $total = 0; @endphp
                      @foreach ($carts as $cart)
                        <tr class="align-middle text-center">
                            <form action="{{ route('cartDelete') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" id="id" value="{{ $cart->id }}">
                                <th scope="row"><button type="submit" class="text-danger border-0 bg-transparent" onclick="return confirm('Kamu yakin menghapus pesanan ini?');"><i class="fa-solid fa-xmark"></i></button></th>
                            </form>
                            <td><img src="{{ asset('img/'.$cart->products->image_path) }}" width="150px" alt="{{ $cart->products->image_path }}"></td>
                            <td>{{ $cart->products->name }}</td>
                            <td>${{ $cart->products->price }}</td>
                            <td>{{ $cart->quantity }}</td>
                            <td>${{ $cart->products->price * $cart->quantity }}</td>
                        </tr>
                        @php $total += $cart->products->price * $cart->quantity; @endphp
                      @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-12 col-lg-4">
                <form action="{{ route('discount') }}" method="post" class="mb-2 shadow-sm p-3 rounded-3">
                    @csrf
                    <label for="promo" class="mt-3 mb-2">Do you have a promo code?</label>
                    <div class="d-flex">
                        <input type="text" name="promo" id="promo" class="form-control me-2" placeholder="Promo Code">
                        <button type="submit" class="btn btn-outline-dark border-white d-lg-block d-none">Apply</button>
                        <button type="submit" class="btn btn-dark border-white d-lg-none d-block">Apply</button>
                    </div>
                </form>
                <form action="{{ route('checkout') }}" method="post" class="shadow-sm p-3 rounded-3">
                    @csrf
                    <h3>Cart Totals</h3>
                    <div class="w-100" style="height: 2px; background-color: #e9ecef;"></div>
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <div class="mb-2 mt-2">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" value="{{ old('address') }}" required></textarea>
                    </div>
                    <select class="form-select" name="payment_method" aria-label="Default select example">
                        <option value="COD">COD</option>
                        <option value="CekDulu">COD - Cek Dulu</option>
                    </select>
                    <div class="w-100 mt-3 mb-2" style="height: 2px; background-color: #e9ecef;"></div>
                    <div class="d-flex mb-1">
                        <p class="m-0">Subtotal</p>
                        <p class="m-0 text-end w-100">${{ $total }}</p>
                    </div>
                    <div class="d-flex">
                        <p class="m-0">Discount</p>
                        <p class="m-0 text-end w-100">{{ (session('discount')) ? $discount = session('discount') : $discount = 0 }}%</p>
                    </div>
                    <div class="w-100 mt-2 mb-2" style="height: 2px; background-color: #e9ecef;"></div>
                    <div class="d-flex mb-1">
                        <p class="m-0">Total</p>
                        <p class="m-0 text-end w-100">${{ $total = $total - ($total * $discount / 100) }}</p>
                    </div>
                    <input type="hidden" name="discount" value="{{ $discount }}">
                    <input type="hidden" name="total_price" value="{{ $total }}">
                    <p>Need Help? call us at <a href="https://wa.me/62000000000000?text=Hi kak," class="text-black fw-medium">+62 000000000000</a></p>
                    <button type="submit" class="btn btn-dark w-100">CHECKOUT</button>
                </form>
            </div>
        </div>
    </div>
@endsection
