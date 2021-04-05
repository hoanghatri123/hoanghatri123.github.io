@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="grid wide">
            <div class=row>
                <div class="product-location">
                    <a href="" class="product-location-link">Trang chủ</a>
                    <i class="product-location-icon fas fa-chevron-right"></i>
                    <a href="" class="product-location-link">Đồ chơi</a>
                    <i class="product-location-icon fas fa-chevron-right"></i>
                    Bạch tuột cảm xúc 2 mặt nhồi bông đáng yêu vler các bạn ạ
                </div>
            </div>
            <div class="product-wrap">
                <div class="product">
                <div class="row">
                    <div class="col l-4">
                        <div class="product-image">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsygpWZH4eUIMzJiTwWKxP7c0CJSc50FFUsg&usqp=CAU" alt="" class="product-img">
                        </div>
                    </div>

                    <div class="col l-8">
                        <div class="product-info">
                            <div class="product-info__heading">
                                <div class="product-info__favorite">
                                    <i class="fas fa-check"></i>
                                    <span>Yêu thích</span>
                                </div>
                                <h4 class="product-info__name">Bạch tuột cảm xúc 2 mặt nhồi bông đáng yêu vler các bạn ạ</h4>
                            </div>
                            <div class="product-info__action">
                                <div class="product-info__action-rating">
                                    <i class="action-rating__gold-star fas fa-star"></i>
                                    <i class="action-rating__gold-star fas fa-star"></i>
                                    <i class="action-rating__gold-star fas fa-star"></i>
                                    <i class="action-rating__gold-star fas fa-star"></i>
                                    <i class="action-rating__gold-star fas fa-star"></i>
                                </div>
                                <span class="product-info__action-sold">185</span>
                                <span class="product-info__action-label">Đã bán</span>
                            </div>
                            <div class="product-info__price">
                                <span class="product-info__price-old">58.000đ</span>
                                <span class="product-info__price-current">38.900đ</span>
                                <span class="product-info__discount">33% GIẢM</span>
                            </div>
                            <div class="product-info__item">
                                <div class="product-info__item-label">Thông tin</div>
                                <div class="product-info__item-info">
                                    <h5 class="product-info__item-heading">Bộ tái sinh da Su:M37 Losec Summa Elixir Gift Set</h5>
                                    <p class="product-info__item-desc">- Su:M37 Losec Summa là sản phẩm nổi tiếng mang tính chất đột phá
                                        trong công nghệ làm đẹp được coi là thần dược chữa trị nhiều
                                        vấn đề trên da như lỗ chân lông to, da nhạy cảm, ửng đỏ, da sạm màu
                                        và không đều màu, mụn đỏ sưng tấy, da bị suy giảm độ đàn hồi.</p>
                                </div>
                            </div>
                            <div class="product-info__quantity">
                                <div class="product-info__quantity-label">Số lượng</div>
                                <div class="product-info__quantity-choose">
                                    <button class="product-info__quantity-btn">
                                        <i class="product-info__quantity-icon fas fa-minus"></i>
                                    </button>
                                    <span class="product-info__quantity-quantity">1</span>
                                    <button class="product-info__quantity-btn">
                                        <i class="product-info__quantity-icon fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-info__unit">
                                <div class="product-info__unit-label">Đơn vị</div>
                                <div class="product-info__unit-desc">con</div>
                            </div>
                            <div class="product-info__buy">
                                <button class="product-info__basket-btn">
                                    <i class="product-info__basket-icon fas fa-shopping-cart"></i>
                                    <span class="product-info__basket-label">Thêm vào giỏ hàng</span>
                                </button>
                                <button class="product-info__buy-btn btn btn--primary">Mua ngay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
