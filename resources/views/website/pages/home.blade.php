
@extends("website.layout.master")

@section("content")

    <div class="home-page" ng-controller="HomePage">

        <div class="billboard" style="background-image: url({{url("img/citymap.jpg")}})">

            <div class="content">
                <div>
                    <h1 class="title">
                        @lang("VIEW.PAGE.HOME.TITLE")
                    </h1>
                    <p class="description">
                        @lang("VIEW.PAGE.HOME.DESCRIPTION")
                    </p>
                </div>

                <div class="search-box">
                    <input class="form-control" type="text" placeholder='@lang("VIEW.PAGE.HOME.SEARCH_WHAT")'>
                    <input class="form-control" type="text" placeholder='@lang("VIEW.PAGE.HOME.SEARCH_WHERE")'>
                    <button class="btn btn-primary">
                        @lang("VIEW.PAGE.HOME.SEARCH_BTN")
                    </button>
                </div>

            </div>
        </div>

        <div class="business-separator-section">
            <div class="container">
                <div class="container-fluid">
                    <h1 class="section-title">
                        @lang("VIEW.PAGE.HOME.BUSINESS_SEPARATOR_TITLE")
                    </h1>
                    <p class="section-description">
                        @lang("VIEW.PAGE.HOME.BUSINESS_SEPARATOR_DESCRIPTION")
                    </p>
                    <div class="content">
                        <ul class="card-design">
                            <li>
                                <a href="#" class="item">
                                    <i class="far fa-utensils"></i>
                                    @lang("VIEW.PAGE.HOME.BUSINESS_SEPARATOR_COFFEE")
                                </a>
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <i class="far fa-shopping-cart"></i>
                                    @lang("VIEW.PAGE.HOME.BUSINESS_SEPARATOR_SHOPPING")
                                </a>
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <i class="far fa-knife-kitchen"></i>
                                    @lang("VIEW.PAGE.HOME.BUSINESS_SEPARATOR_HOME_SERVICE")
                                </a>
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <i class="far fa-mask"></i>
                                    @lang("VIEW.PAGE.HOME.BUSINESS_SEPARATOR_BEAUTY")
                                </a>
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <i class="far fa-car"></i>
                                    @lang("VIEW.PAGE.HOME.BUSINESS_SEPARATOR_CAR")
                                </a>
                            </li>
                            <li>
                                <a href="#" class="item">
                                    <i class="far fa-video"></i>
                                    @lang("VIEW.PAGE.HOME.BUSINESS_SEPARATOR_ENTERTAINMENT")
                                </a>
                            </li>
                        </ul>
                        <ul class="item-design">
                            <li>
                                <a href="#">
                                    <i class="far fa-child"></i>
                                    @lang("VIEW.PAGE.HOME.BUSINESS_SEPARATOR_BABY")
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-gas-pump"></i>
                                    @lang("VIEW.PAGE.HOME.BUSINESS_SEPARATOR_CITY_SERVICE")
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-medkit"></i>
                                    @lang("VIEW.PAGE.HOME.BUSINESS_SEPARATOR_MEDICATE")
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-graduation-cap"></i>
                                    @lang("VIEW.PAGE.HOME.BUSINESS_SEPARATOR_EDUCATION")
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>

        <div class="best-business-section">
            <div class="container">
                <div class="container-fluid">
                    <h1 class="section-title">
                        @lang("VIEW.PAGE.HOME.BEST_BUSINESS_TITLE")
                    </h1>
                    <p class="section-description">
                        @lang("VIEW.PAGE.HOME.BEST_BUSINESS_DESCRIPTION")
                    </p>
                    <div class="content">
                        <div class="slide-show-box">
                            <div class="group hidden">
                                <div class="row">
                                    <div class="col-md-6 com-xs-12">
                                        <div class="row">
                                            <div class="col-md-6 com-xs-12">
                                                <div class="card item2"
                                                     style="background-image: url({{url("img/upload_folder/1.jpg")}})">
                                                    <div>
                                                        <div class="title">
                                                            مدیران خودرو
                                                        </div>
                                                        <div class="description">
                                                            تعمیرات و اتو سرویس
                                                        </div>
                                                        <div class="rank-box">
                                                            4.30/10
                                                            <i class="fas fa-star"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 com-xs-12">
                                                <div class="card item1"
                                                     style="background-image: url({{url("img/upload_folder/2.jpg")}})">
                                                    <div>
                                                        <div class="title">
                                                            مدیران خودرو
                                                        </div>
                                                        <div class="description">
                                                            تعمیرات و اتو سرویس
                                                        </div>
                                                        <div class="rank-box">
                                                            4.30/10
                                                            <i class="fas fa-star"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card item1"
                                                     style="background-image: url({{url("img/upload_folder/3.jpg")}})">
                                                    <div>
                                                        <div class="title">
                                                            مدیران خودرو
                                                        </div>
                                                        <div class="description">
                                                            تعمیرات و اتو سرویس
                                                        </div>
                                                        <div class="rank-box">
                                                            4.30/10
                                                            <i class="fas fa-star"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 com-xs-12">
                                        <div class="card item3"
                                             style="background-image: url({{url("img/upload_folder/4.jpg")}})">
                                            <div>
                                                <div class="title">
                                                    مدیران خودرو
                                                </div>
                                                <div class="description">
                                                    تعمیرات و اتو سرویس
                                                </div>
                                                <div class="rank-box">
                                                    4.30/10
                                                    <i class="fas fa-star"></i>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 com-xs-12">
                                        <div class="card item3"
                                             style="background-image: url({{url("img/upload_folder/1.jpg")}})">
                                            <div>
                                                <div class="title">
                                                    مدیران خودرو
                                                </div>
                                                <div class="description">
                                                    تعمیرات و اتو سرویس
                                                </div>
                                                <div class="rank-box">
                                                    4.30/10
                                                    <i class="fas fa-star"></i>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 com-xs-12">
                                        <div class="row">
                                            <div class="col-md-6 com-xs-12">
                                                <div class="card item2"
                                                     style="background-image: url({{url("img/upload_folder/2.jpg")}})">
                                                    <div>
                                                        <div class="title">
                                                            مدیران خودرو
                                                        </div>
                                                        <div class="description">
                                                            تعمیرات و اتو سرویس
                                                        </div>
                                                        <div class="rank-box">
                                                            4.30/10
                                                            <i class="fas fa-star"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 com-xs-12">
                                                <div class="card item1"
                                                     style="background-image: url({{url("img/upload_folder/3.jpg")}})">
                                                    <div>
                                                        <div class="title">
                                                            مدیران خودرو
                                                        </div>
                                                        <div class="description">
                                                            تعمیرات و اتو سرویس
                                                        </div>
                                                        <div class="rank-box">
                                                            4.30/10
                                                            <i class="fas fa-star"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card item1"
                                                     style="background-image: url({{url("img/upload_folder/4.jpg")}})">
                                                    <div>
                                                        <div class="title">
                                                            مدیران خودرو
                                                        </div>
                                                        <div class="description">
                                                            تعمیرات و اتو سرویس
                                                        </div>
                                                        <div class="rank-box">
                                                            4.30/10
                                                            <i class="fas fa-star"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group hidden">
                                <div class="row">
                                    <div class="col-md-6 com-xs-12">
                                        <div class="row">
                                            <div class="col-md-6 com-xs-12">
                                                <div class="card item2"
                                                     style="background-image: url({{url("img/upload_folder/1.jpg")}})">
                                                    <div>
                                                        <div class="title">
                                                            مدیران خودرو
                                                        </div>
                                                        <div class="description">
                                                            تعمیرات و اتو سرویس
                                                        </div>
                                                        <div class="rank-box">
                                                            4.30/10
                                                            <i class="fas fa-star"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 com-xs-12">
                                                <div class="card item1"
                                                     style="background-image: url({{url("img/upload_folder/2.jpg")}})">
                                                    <div>
                                                        <div class="title">
                                                            مدیران خودرو
                                                        </div>
                                                        <div class="description">
                                                            تعمیرات و اتو سرویس
                                                        </div>
                                                        <div class="rank-box">
                                                            4.30/10
                                                            <i class="fas fa-star"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card item1"
                                                     style="background-image: url({{url("img/upload_folder/3.jpg")}})">
                                                    <div>
                                                        <div class="title">
                                                            مدیران خودرو
                                                        </div>
                                                        <div class="description">
                                                            تعمیرات و اتو سرویس
                                                        </div>
                                                        <div class="rank-box">
                                                            4.30/10
                                                            <i class="fas fa-star"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 com-xs-12">
                                        <div class="card item3"
                                             style="background-image: url({{url("img/upload_folder/4.jpg")}})">
                                            <div>
                                                <div class="title">
                                                    مدیران خودرو
                                                </div>
                                                <div class="description">
                                                    تعمیرات و اتو سرویس
                                                </div>
                                                <div class="rank-box">
                                                    4.30/10
                                                    <i class="fas fa-star"></i>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 com-xs-12">
                                        <div class="card item3"
                                             style="background-image: url({{url("img/upload_folder/1.jpg")}})">
                                            <div>
                                                <div class="title">
                                                    مدیران خودرو
                                                </div>
                                                <div class="description">
                                                    تعمیرات و اتو سرویس
                                                </div>
                                                <div class="rank-box">
                                                    4.30/10
                                                    <i class="fas fa-star"></i>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 com-xs-12">
                                        <div class="row">
                                            <div class="col-md-6 com-xs-12">
                                                <div class="card item2"
                                                     style="background-image: url({{url("img/upload_folder/2.jpg")}})">
                                                    <div>
                                                        <div class="title">
                                                            مدیران خودرو
                                                        </div>
                                                        <div class="description">
                                                            تعمیرات و اتو سرویس
                                                        </div>
                                                        <div class="rank-box">
                                                            4.30/10
                                                            <i class="fas fa-star"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 com-xs-12">
                                                <div class="card item1"
                                                     style="background-image: url({{url("img/upload_folder/3.jpg")}})">
                                                    <div>
                                                        <div class="title">
                                                            مدیران خودرو
                                                        </div>
                                                        <div class="description">
                                                            تعمیرات و اتو سرویس
                                                        </div>
                                                        <div class="rank-box">
                                                            4.30/10
                                                            <i class="fas fa-star"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card item1"
                                                     style="background-image: url({{url("img/upload_folder/4.jpg")}})">
                                                    <div>
                                                        <div class="title">
                                                            مدیران خودرو
                                                        </div>
                                                        <div class="description">
                                                            تعمیرات و اتو سرویس
                                                        </div>
                                                        <div class="rank-box">
                                                            4.30/10
                                                            <i class="fas fa-star"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group">
                                <div class="row">
                                    <div class="col-md-6 com-xs-12">
                                        <div class="row">
                                            <div class="col-md-6 com-xs-12">
                                                <div class="card item2"
                                                     style="background-image: url({{url("img/upload_folder/1.jpg")}})">
                                                    <div>
                                                        <div class="title">
                                                            مدیران خودرو
                                                        </div>
                                                        <div class="description">
                                                            تعمیرات و اتو سرویس
                                                        </div>
                                                        <div class="rank-box">
                                                            4.30/10
                                                            <i class="fas fa-star"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 com-xs-12">
                                                <div class="card item1"
                                                     style="background-image: url({{url("img/upload_folder/2.jpg")}})">
                                                    <div>
                                                        <div class="title">
                                                            مدیران خودرو
                                                        </div>
                                                        <div class="description">
                                                            تعمیرات و اتو سرویس
                                                        </div>
                                                        <div class="rank-box">
                                                            4.30/10
                                                            <i class="fas fa-star"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card item1"
                                                     style="background-image: url({{url("img/upload_folder/3.jpg")}})">
                                                    <div>
                                                        <div class="title">
                                                            مدیران خودرو
                                                        </div>
                                                        <div class="description">
                                                            تعمیرات و اتو سرویس
                                                        </div>
                                                        <div class="rank-box">
                                                            4.30/10
                                                            <i class="fas fa-star"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 com-xs-12">
                                        <div class="card item3"
                                             style="background-image: url({{url("img/upload_folder/4.jpg")}})">
                                            <div>
                                                <div class="title">
                                                    مدیران خودرو
                                                </div>
                                                <div class="description">
                                                    تعمیرات و اتو سرویس
                                                </div>
                                                <div class="rank-box">
                                                    4.30/10
                                                    <i class="fas fa-star"></i>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 com-xs-12">
                                        <div class="card item3"
                                             style="background-image: url({{url("img/upload_folder/1.jpg")}})">
                                            <div>
                                                <div class="title">
                                                    مدیران خودرو
                                                </div>
                                                <div class="description">
                                                    تعمیرات و اتو سرویس
                                                </div>
                                                <div class="rank-box">
                                                    4.30/10
                                                    <i class="fas fa-star"></i>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 com-xs-12">
                                        <div class="row">
                                            <div class="col-md-6 com-xs-12">
                                                <div class="card item2"
                                                     style="background-image: url({{url("img/upload_folder/2.jpg")}})">
                                                    <div>
                                                        <div class="title">
                                                            مدیران خودرو
                                                        </div>
                                                        <div class="description">
                                                            تعمیرات و اتو سرویس
                                                        </div>
                                                        <div class="rank-box">
                                                            4.30/10
                                                            <i class="fas fa-star"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 com-xs-12">
                                                <div class="card item1"
                                                     style="background-image: url({{url("img/upload_folder/3.jpg")}})">
                                                    <div>
                                                        <div class="title">
                                                            مدیران خودرو
                                                        </div>
                                                        <div class="description">
                                                            تعمیرات و اتو سرویس
                                                        </div>
                                                        <div class="rank-box">
                                                            4.30/10
                                                            <i class="fas fa-star"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card item1"
                                                     style="background-image: url({{url("img/upload_folder/4.jpg")}})">
                                                    <div>
                                                        <div class="title">
                                                            مدیران خودرو
                                                        </div>
                                                        <div class="description">
                                                            تعمیرات و اتو سرویس
                                                        </div>
                                                        <div class="rank-box">
                                                            4.30/10
                                                            <i class="fas fa-star"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="controller">
                            <a>
                                <i class="far fa-chevron-right"></i>
                            </a>
                            <ul>
                                <li>
                                    <a class="active" href="#"></a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul>
                            <a>
                                <i class="far fa-chevron-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="complete-your-city-section">
            <div class="container">
                <div class="container-fluid">
                    <h1 class="section-title">
                        @lang("VIEW.PAGE.HOME.COMPLETE_YOUR_CITY_TITLE")
                    </h1>
                    <p class="section-description">
                        @lang("VIEW.PAGE.HOME.COMPLETE_YOUR_CITY_DESCRIPTION")
                    </p>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="item">

                                    <div class="card">
                                        <div class="header">
                                            <div class="avatar-box"
                                                 style="background-image: url({{url("img/upload_folder/7.jpeg")}})"></div>
                                            <div class="detail-box">
                                                <h4>
                                                    سمیه شیری
                                                </h4>
                                                <p>
                                                    1396/03/25
                                                </p>
                                            </div>
                                        </div>
                                        <div class="context">
                                            <div class="image-box"
                                                 style="background-image: url({{url("img/upload_folder/5.jpg")}})"></div>
                                            <p>
                                                تنوع زیاد به لحاظ میوه های فصلی و کیفیت خوب میوه ها باعث میشه اگر از این
                                                سوپر میوه خرید کنید به لحاظ خریدتون رضایت کامل داشته باشید رفتار کارکنان
                                                خوبه و بخوبی راهنمایی میکنن برای خرید نیازتون...
                                                <a href="#">
                                                    نظر کامل را بخوانید
                                                </a>
                                            </p>
                                        </div>
                                        <div class="footer">
                                            <div class="right-box">
                                                <i class="fas fa-star"></i>
                                                @lang("VIEW.PAGE.HOME.COMPLETE_YOUR_CITY_BEST_NOTE")
                                            </div>
                                            <div class="left-box">
                                                <i class="fas fa-heart"></i>
                                                1
                                                @lang("VIEW.PAGE.HOME.COMPLETE_YOUR_CITY_LIKE")
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="item">

                                    <div class="card">
                                        <div class="header">
                                            <div class="avatar-box"
                                                 style="background-image: url({{url("img/upload_folder/8.jpeg")}})"></div>
                                            <div class="detail-box">
                                                <h4>
                                                    گلنار راسخ
                                                </h4>
                                                <p>
                                                    ۱۳۹۶/۰۲/۲۹
                                                </p>
                                            </div>
                                        </div>
                                        <div class="context">
                                            <div class="image-box"
                                                 style="background-image: url({{url("img/upload_folder/6.jpg")}})"></div>
                                            <p>
                                                خیلی معطلی داره واقعا ازاردهنده اس ، بیشتر از نود دقیقه اخر هفته ای معطل
                                                شدیم ؛ اما خب ارزید ، غذاها خوب بود کباب تابه ای یه طعم تند و تیز خوشی
                                                داشت
                                                و قیمه اش واقعاااا نذری بود ؛ دوغ و سالاد شیرازی و …
                                                <a href="#">
                                                    نظر کامل را بخوانید
                                                </a>
                                            </p>
                                        </div>
                                        <div class="footer">
                                            <div class="right-box">
                                                <i class="fas fa-star"></i>
                                                @lang("VIEW.PAGE.HOME.COMPLETE_YOUR_CITY_BEST_NOTE")
                                            </div>
                                            <div class="left-box">
                                                <i class="fas fa-heart"></i>
                                                5
                                                @lang("VIEW.PAGE.HOME.COMPLETE_YOUR_CITY_LIKE")
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12"></div>
                        </div>
                        <div class="controller">
                            <a>
                                <i class="far fa-chevron-right"></i>
                            </a>
                            <ul>
                                <li>
                                    <a class="active" href="#"></a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul>
                            <a>
                                <i class="far fa-chevron-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="business-owner-request-section">
            <div class="container">
                <div class="container-fluid">
                    <h1 class="section-title">
                        @lang("VIEW.PAGE.HOME.BUSINESS_OWNER_REQUEST_TITLE")
                    </h1>
                    <p class="section-description">
                        @lang("VIEW.PAGE.HOME.BUSINESS_OWNER_REQUEST_DESCRIPTION")
                    </p>
                    <div class="content">
                        <button class="btn btn-white">
                            @lang("VIEW.PAGE.HOME.BUSINESS_OWNER_REQUEST_REQUEST_BTN")
                        </button>
                        <button class="btn btn-primary">
                            @lang("VIEW.PAGE.HOME.BUSINESS_OWNER_REQUEST_LEARN_MORE_BTN")
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("scripts")
<script>
    app.controller('HomePage', function ($scope, $rootScope) {
        $rootScope.$broadcast('page_loaded');
    });
</script>
@endsection