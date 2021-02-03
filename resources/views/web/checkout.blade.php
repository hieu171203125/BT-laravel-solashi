@extends('weblayout')
@section('content')
<!-- Breadcrumb Start -->
<div class="breadcrumb-area mt-30">
    <div class="container">
        <div class="breadcrumb">
            <ul class="d-flex align-items-center">
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="checkout.html">Checkout</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Breadcrumb End -->
<!-- checkout-area start -->
<div class="checkout-area pb-100 pt-15 pb-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="checkbox-form mb-sm-40">
                    <form action="{{Route('web.cart.confirm')}}" method="post">
                        @csrf
                        <h3>Billing Details</h3>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="checkout-form-list mb-30">
                                    <label>Họ và tên <span class="required">*</span></label>
                                    <input type="text" placeholder="" value="{{Auth::user()->name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list mb-30">
                                    <label>Email<span class="required">*</span></label>
                                    <input type="email" placeholder="" value="{{Auth::user()->email}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list mb-30">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" placeholder="" value="{{Auth::user()->phone}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Địa chỉ nhận hàng <span class="required">*</span></label>
                                    <input type="text" placeholder="Địa chỉ" name="address">
                                </div>
                            </div>
                        </div>
                        <div class="different-address">
                            <div class="order-notes">
                                <div class="checkout-form-list">
                                    <label>Ghi chú</label>
                                    <textarea id="checkout-mess" cols="30" rows="10" placeholder="Ghi chú"
                                        name="note"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success cart-checkout">Xác nhận</button>
                        <a href="" class="btn btn-danger">Về trang chủ</a>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="your-order">
                    <h3>Đơn hàng</h3>
                    <div class="your-order-table table-responsive">
                        <table>

                            <tfoot>
                                <tr class="order-total">
                                    <th>Tổng tiền</th>
                                    <td><span
                                            class=" total amount">{{number_format(Session::get('cart')->totalPrice)}}</span>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- checkout-area end -->

@endsection