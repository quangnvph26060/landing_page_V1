<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />

    <title>{{$config->title_seo}}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{$config->description_seo}}">
    <meta name="keywords" content="{{$config->keywords_seo}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="{{ asset('frontend/js/custom.js') }}"></script>


    <link rel="shortcut icon"
        href="{{ showImage($config->favicon) }}" />

    <style>
        html,
        body {
            max-width: 100% !important;
            overflow-x: hidden !important;
            margin: 0;
            padding: 0;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">


    <!-- End Meta Pixel Code -->
    {!! $config->script !!}
</head>

<body class="lazyload">

    <div class="ladi-wraper">
        <div id="BODY_BACKGROUND" class="ladi-section">
            <div class="ladi-section-background"></div>
        </div>
        <div id="SECTION27" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-overlay"></div>
            <div class="ladi-container">
                <div id="IMAGE1226" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <a href="https://m.me/168837822990209" target="_blank" id="SHAPE519" class="ladi-element">
                    <div class="ladi-shape">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none"
                            viewBox="0 0 32 32" class="" fill="#000">
                            <a href="https://w.ladicdn.com/ladiui/icons/social/messenger.svg" height="32"
                                width="32"></a>
                        </svg>
                    </div>
                </a>
                <div id="NOTIFY464" class="ladi-element" style="display: none">
                    <div class="ladi-notify ladi-hidden">
                        <div class="ladi-notify-image">
                            <img src="https://w.ladicdn.com/source/notify.svg?v=1.0" />
                        </div>
                        <div class="ladi-notify-title">Nội dung cột [Title]</div>
                        <div class="ladi-notify-content">Nội dung cột [Content]</div>
                        <div class="ladi-notify-time">Nội dung cột [Time]</div>
                    </div>
                </div>
                <div id="HEADLINE1022" class="ladi-element">
                    <h3 class="ladi-headline">
                        {!! $sessionOne->content !!}
                    </h3>
                </div>
                <div id="IMAGE1211" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1223" class="ladi-element" style="z-index: 2">
                    <div class="ladi-image">
                        <div class="ladi-image-background"
                            style="background-image: url({{ showImage($sessionOne->logo) }})"></div>
                    </div>
                </div>
                <div id="BOX567" class="ladi-element" style="top: 6px !important; z-index: -1">
                    <div class="ladi-box ladi-transition"></div>
                </div>
                <div id="SHAPE617" class="ladi-element">
                    <div class="ladi-shape">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none"
                            viewBox="0 0 24 24" class="" fill="rgb(234, 255, 1)">
                            <use xlink:href="#shape_wRsFpnzIPX"></use>
                        </svg>
                    </div>
                </div>
                <div id="SHAPE618" class="ladi-element">
                    <div class="ladi-shape">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none"
                            viewBox="0 0 24 24" class="" fill="rgb(234, 255, 1)">
                            <use xlink:href="#shape_wRsFpnzIPX"></use>
                        </svg>
                    </div>
                </div>
                <div id="IMAGE1225" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1227" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1228" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1229" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1230" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1231" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"
                            style="background-image: url({{ showImage($sessionOne->image) }})"></div>
                    </div>
                </div>
                <div id="BOX1016" class="ladi-element">
                    <div class="ladi-box">
                        <div class="ladi-overlay"></div>
                    </div>
                </div>
                <div id="FORM-dautrang" class="ladi-element">
                    <form action="{{ route('home') }}" method="post" class="ladi-form form-contact">
                        <div id="BUTTON511" class="ladi-element">
                            <div class="ladi-button">
                                <div class="ladi-button-background"></div>
                                <div id="BUTTON_TEXT511" class="ladi-element ladi-button-headline">
                                    <button type="submit" class="ladi-button-submit">
                                        ĐĂNG KÝ NGAY
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="FORM_ITEM486" class="ladi-element">
                            <div class="ladi-form-item-container">
                                <div class="ladi-form-item-background"></div>
                                <div class="ladi-form-item">
                                    <input autocomplete="off" tabindex="1" name="name"
                                        class="ladi-form-control" type="text" placeholder="Họ và tên"
                                        value="" />
                                </div>
                            </div>
                        </div>
                        <div id="FORM_ITEM487" class="ladi-element">
                            <div class="ladi-form-item-container">
                                <div class="ladi-form-item-background"></div>
                                <div class="ladi-form-item">
                                    <input autocomplete="off" tabindex="2" name="email"
                                        class="ladi-form-control" type="email" placeholder="Email"
                                        value="" />
                                </div>
                            </div>
                        </div>
                        <div id="FORM_ITEM488" class="ladi-element">
                            <div class="ladi-form-item-container">
                                <div class="ladi-form-item-background"></div>
                                <div class="ladi-form-item">
                                    <input autocomplete="off" tabindex="3" name="phone"
                                        class="ladi-form-control" type="tel" placeholder="Số điện thoại"
                                        pattern="(\+84|0){1}(9|8|7|5|3){1}[0-9]{8}" value="" />
                                </div>
                            </div>
                        </div>
                        <div id="FORM_ITEM489" class="ladi-element">
                            <div class="ladi-form-item-container">
                                <div class="ladi-form-item-background"></div>
                                <div class="ladi-form-item">
                                    <input autocomplete="off" tabindex="4" name="address"
                                        class="ladi-form-control" type="text" placeholder="Nơi ở hiện tại"
                                        value="" />
                                </div>
                            </div>
                        </div>
                        <div id="FORM_ITEM490" class="ladi-element">
                            <div class="ladi-form-item-container">
                                <div class="ladi-form-item-background"></div>
                                <div class="ladi-form-item">
                                    <textarea autocomplete="off" tabindex="5" name="note" class="ladi-form-control" placeholder="Tóm tắt nhu cầu"></textarea>
                                </div>
                            </div>
                        </div>
                        <div id="BUTTON_TEXT511">
                            <button type="submit">ĐĂNG KÝ NGAY</button>
                        </div>
                    </form>
                </div>
                <div id="HEADLINE1126" class="ladi-element">
                    <h3 class="ladi-headline">
                        Để lại thông tin nhận<br /><span style="font-size: 24px; font-weight: bold">HỌC
                            BỔNG</span>&nbsp;lên đến <span style="font-weight: bold">800 triệu</span>
                    </h3>
                </div>
                <div id="HEADLINE1127" class="ladi-element">
                    <h3 class="ladi-headline">{{ $sessionOne->title }}</h3>
                </div>
                <div id="HEADLINE1128" class="ladi-element">
                    <h3 class="ladi-headline">
                        {{ $sessionOne->excerpt }}
                    </h3>
                </div>
                <div id="SHAPE637" class="ladi-element">
                    <div class="ladi-shape">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                            preserveAspectRatio="none" viewBox="0 0 24 24" class="" fill="rgb(234, 255, 1)">
                            <use xlink:href="#shape_wRsFpnzIPX"></use>
                        </svg>
                    </div>
                </div>
                <div id="SHAPE640" class="ladi-element">
                    <div class="ladi-shape">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                            preserveAspectRatio="none" viewBox="0 0 24 24" class="" fill="rgb(234, 255, 1)">
                            <use xlink:href="#shape_wRsFpnzIPX"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div id="SECTION468" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-overlay"></div>
            <div class="ladi-container">
                <div id="IMAGE1333" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="BOX1013" class="ladi-element">
                    <div class="ladi-box ladi-transition"></div>
                </div>
                <div id="BOX1012" class="ladi-element">
                    <div class="ladi-box ladi-transition"></div>
                </div>
                <div id="BOX1011" class="ladi-element">
                    <div class="ladi-box ladi-transition"></div>
                </div>
                <div id="BOX1010" class="ladi-element">
                    <div class="ladi-box ladi-transition"></div>
                </div>
                <div id="BOX1009" class="ladi-element">
                    <div class="ladi-box ladi-transition"></div>
                </div>
                <div id="HEADLINE1038" class="ladi-element">
                    <h3 class="ladi-headline">
                        Vì sao nên chọn
                        <span style="color: rgb(199, 15, 49)">{{ $sessionTwo->titles[0] }}</span>
                    </h3>
                </div>

                @php
                    $id_1 = ['GROUP1210', 'GROUP1211', 'GROUP1213', 'GROUP1215'];
                    $id_2 = ['GROUP1205', 'GROUP1212', 'GROUP1214', 'GROUP1216'];
                    $id_3 = ['BOX987', 'BOX996', 'BOX998', 'BOX1000'];
                    $id_4 = ['BOX986', 'BOX997', 'BOX999', 'BOX1001'];
                    $id_5 = ['HEADLINE1098', 'HEADLINE1099', 'HEADLINE1100', 'HEADLINE1101'];
                @endphp

                @foreach ($sessionTwo->descriptions as $key => $description)
                    <div id="{{ $id_1[$key] }}" class="ladi-element">
                        <div class="ladi-group">
                            <div id="{{ $id_2[$key] }}" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="{{ $id_3[$key] }}" class="ladi-element">
                                        <div class="ladi-box ladi-transition"></div>
                                    </div>
                                    <div id="{{ $id_4[$key] }}" class="ladi-element">
                                        <div class="ladi-box ladi-transition"
                                            style="background-image: url({{ showImage($sessionTwo->images[$key]) }})">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="{{ $id_5[$key] }}" class="ladi-element">
                                <h3 class="ladi-headline">
                                    {!! $description !!}
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach






                <div id="IMAGE1282" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1283" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="GROUP1219" class="ladi-element">
                    <div class="ladi-group">
                        <div id="BOX1028" class="ladi-element">
                            <div class="ladi-box ladi-transition"></div>
                        </div>
                        <div id="BOX1029" class="ladi-element">
                            <div class="ladi-box ladi-transition"></div>
                        </div>
                        <div id="HEADLINE1156" class="ladi-element">
                            <h3 class="ladi-headline" style="font-size: 14px">
                                <span style="color: rgb(199, 15, 49)">{{ $sessionTwo->titles[0] }}</span>
                            </h3>
                        </div>
                        <div id="HEADLINE1157" class="ladi-element">
                            <h3 class="ladi-headline">{{ $sessionTwo->titles[1] }}</h3>
                        </div>
                        <div id="HEADLINE1158" class="ladi-element">
                            <h3 class="ladi-headline">
                                {!! $sessionTwo->contents[0] !!}
                            </h3>
                        </div>
                        <div id="HEADLINE1159" class="ladi-element">
                            <h3 class="ladi-headline">
                                {!! $sessionTwo->contents[1] !!}
                            </h3>
                        </div>
                        <div id="BOX1034" class="ladi-element">
                            <div class="ladi-box ladi-transition"></div>
                        </div>
                        <div id="BOX1036" class="ladi-element">
                            <div class="ladi-box ladi-transition"></div>
                        </div>
                    </div>
                </div>
                <div id="IMAGE1328" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1330" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1332" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>

            </div>
        </div>
        <div id="SECTION475" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-overlay"></div>
            <div class="ladi-container">
                <div id="BOX806" class="ladi-element">
                    <div class="ladi-box ladi-transition">
                        <div class="ladi-overlay"></div>
                    </div>
                </div>
                <div id="BOX966" class="ladi-element">
                    <div class="ladi-box ladi-transition"></div>
                </div>
                <div id="HEADLINE1028" class="ladi-element">
                    <h3 class="ladi-headline">
                            {!! $sessionThree->title  !!}
                    </h3>
                </div>
                <div data-action="true" id="BUTTON507" class="ladi-element">
                    <div class="ladi-button">
                        <div class="ladi-button-background"></div>
                        <div id="BUTTON_TEXT507" class="ladi-element ladi-button-headline">
                            <p class="ladi-headline">NHẬN HỌC BỔNG</p>
                        </div>
                    </div>
                </div>
                @foreach ($sessionThree->contents as $index => $item)
                    <div id="GROUP122{{ $index }}" class="ladi-element">
                        <div class="ladi-group">
                            <div id="BOX1004" class="ladi-element">
                                <div class="ladi-box ladi-transition"></div>
                            </div>
                            <div id="HEADLINE1110" class="ladi-element">
                                <h3 class="ladi-headline">
                                    {{ $item }}
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div id="GROUP1222" class="ladi-element">
                    <div class="ladi-group">
                        <div id="BOX1007" class="ladi-element">
                            <div class="ladi-box ladi-transition"></div>
                        </div>
                        <div id="HEADLINE1111" class="ladi-element">
                            <h3 class="ladi-headline">
                                Là công ty của Hàn Quốc, thương hiệu Green Academy đã tồn tại
                                30 năm.<br />
                            </h3>
                        </div>
                    </div>
                </div>
                <div id="GROUP1221" class="ladi-element">
                    <div class="ladi-group">
                        <div id="BOX1006" class="ladi-element">
                            <div class="ladi-box ladi-transition"></div>
                        </div>
                        <div id="HEADLINE1113" class="ladi-element">
                            <h3 class="ladi-headline">
                                <span style="font-weight: normal">Đại diện hồ sơ thay vì học sinh tự đứng tên nộp, giúp
                                    tỷ lệ
                                    đỗ visa cao thuộc hàng top trên thị trường.</span><br />
                            </h3>
                        </div>
                    </div>
                </div>
                <div id="GROUP1223" class="ladi-element">
                    <div class="ladi-group">
                        <div id="BOX1018" class="ladi-element">
                            <div class="ladi-box ladi-transition"></div>
                        </div>
                        <div id="HEADLINE1112" class="ladi-element">
                            <h3 class="ladi-headline">
                                Thương hiệu Green Academy cam kết hỗ trợ sinh viên tìm việc
                                tại Hàn Quốc sau khi sinh viên tốt nghiệp<br />
                            </h3>
                        </div>
                    </div>
                </div>
                <div id="GROUP1224" class="ladi-element">
                    <div class="ladi-group">
                        <div id="BOX1019" class="ladi-element">
                            <div class="ladi-box ladi-transition"></div>
                        </div>
                        <div id="HEADLINE1114" class="ladi-element">
                            <h3 class="ladi-headline">
                                Là trung tâm duy nhất tự cấp học bổng cho sinh viên Việt Nam
                                thông qua ĐSQ tại Hàn Quốc<br />
                            </h3>
                        </div>
                    </div>
                </div>
                <div id="GROUP1225" class="ladi-element">
                    <div class="ladi-group">
                        <div id="BOX1017" class="ladi-element">
                            <div class="ladi-box ladi-transition"></div>
                        </div>
                        <div id="HEADLINE1129" class="ladi-element">
                            <h3 class="ladi-headline">
                                Trao 100% học bổng học tiếng Hàn, cơ sở vật chất học tiếng Hàn
                                tại Việt Nam theo tiêu chuẩn Hàn Quốc<br />
                            </h3>
                        </div>
                    </div>
                </div> --}}

                <div id="IMAGE1338" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"
                            style="background-image: url({{ showImage($sessionThree->blocks[0]['image']) }});">
                        </div>
                    </div>
                </div>
                <div id="IMAGE1339" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"
                            style="background-image: url({{ showImage($sessionThree->blocks[1]['image']) }});">
                        </div>
                    </div>
                </div>
                {{-- <div id="HEADLINE1163" class="ladi-element">
                    <h3 class="ladi-headline">
                        - Chi phí cố định: Học phí + ký túc xá tại Hàn Quốc<br />- Chi phí
                        hồ sơ tại Việt Nam (thấp hơn 15% so với các trung tâm khác)<br />-
                        Cam kết không thu cọc chống trốn (vi bằng)<br />
                    </h3>
                </div> --}}
                <div id="IMAGE1337" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1336" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="SHAPE641" class="ladi-element">
                    <div class="ladi-shape">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                            preserveAspectRatio="none" viewBox="0 0 346.71 72.06" class="" fill="#E6F1FF">
                            <use xlink:href="#shape_jpyfTqfYlz"></use>
                        </svg>
                    </div>
                </div>
                <div id="HEADLINE1161" class="ladi-element">
                    <h3 class="ladi-headline">
                        {{-- Tổng chi phí cạnh tranh<br />so với thị trường<br />

                        CHỈ TỪ 130 TRIỆU <br/>

                        - Chi phí cố định: Học phí + ký túc xá tại Hàn Quốc<br />- Chi phí
                        hồ sơ tại Việt Nam (thấp hơn 15% so với các trung tâm khác)<br />-
                        Cam kết không thu cọc chống trốn (vi bằng)<br /> --}}

                        {!!$sessionThree->blocks[0]['description'] !!}
                    </h3>
                </div>
                <div id="SHAPE642" class="ladi-element">
                    <div class="ladi-shape">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                            preserveAspectRatio="none" viewBox="0 0 346.71 72.06" class="" fill="#E6F1FF">
                            <use xlink:href="#shape_jpyfTqfYlz"></use>
                        </svg>
                    </div>
                </div>
                <div id="HEADLINE1162" class="ladi-element">
                    <h3 class="ladi-headline">
                        {!!$sessionThree->blocks[1]['description'] !!}
                    </h3>
                </div>



                <div id="GROUP1226" class="ladi-element">
                    <div class="ladi-group">
                        <div id="BOX1044" class="ladi-element">
                            <div class="ladi-box ladi-transition"></div>
                        </div>
                        <div id="IMAGE1340" class="ladi-element">
                            <div class="ladi-image">
                                <div class="ladi-image-background"  @style('background-image: url('. showImage($config->favicon).' )')></div>
                            </div>
                            {{-- @style('background-image: url({{ showImage()}})" --}}

                        </div>
                    </div>
                </div>
                <div id="GROUP1227" class="ladi-element">
                    <div class="ladi-group">
                        <div id="BOX1045" class="ladi-element">
                            <div class="ladi-box ladi-transition"></div>
                        </div>
                        <div id="IMAGE1341" class="ladi-element">
                            <div class="ladi-image">
                                <div class="ladi-image-background" @style('background-image: url('. showImage($config->favicon).' )')></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="SECTION489" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-overlay"></div>
            <div class="ladi-container">
                <div id="IMAGE1322" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1323" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="HEADLINE1138" class="ladi-element">
                    <h3 class="ladi-headline">
                        {!! $sessionFour->title !!}</span>
                    </h3>
                </div>
                @foreach ($sessionFour->contents as $index => $item)
                    <div id="HEADLINE114{{ $index }}" class="ladi-element">
                        <h3 class="ladi-headline">{{ $item }}</h3>
                    </div>
                @endforeach
                {{-- <div id="HEADLINE1141" class="ladi-element">
                    <h3 class="ladi-headline">Học<br />tiếng Hàn<br /></h3>
                </div>
                <div id="HEADLINE1142" class="ladi-element">
                    <h3 class="ladi-headline">Nhận Visa<br /></h3>
                </div>
                <div id="HEADLINE1143" class="ladi-element">
                    <h3 class="ladi-headline">Đăng ký trường</h3>
                </div>
                <div id="HEADLINE1144" class="ladi-element">
                    <h3 class="ladi-headline">Nhận INVOICE<br /></h3>
                </div>
                <div id="HEADLINE1145" class="ladi-element">
                    <h3 class="ladi-headline">Xuất cảnh, nhập học<br /></h3>
                </div>
                <div id="HEADLINE1146" class="ladi-element">
                    <h3 class="ladi-headline">Nhận thư mời, Code<br /></h3>
                </div>
                <div id="HEADLINE1147" class="ladi-element">
                    <h3 class="ladi-headline">Phỏng vấn trường<br /></h3>
                </div> --}}
            </div>
        </div>
        <div id="SECTION485" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-overlay"></div>
            <div class="ladi-container">
                <div id="SHAPE632" class="ladi-element">
                    <div class="ladi-shape">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                            preserveAspectRatio="none" viewBox="0 0 378.41 72.06" class=""
                            fill="rgba(4, 55, 119, 1)">
                            <use xlink:href="#shape_EumouCzKpq"></use>
                        </svg>
                    </div>
                </div>
                <div id="CAROUSEL548" class="ladi-element">
                    <div class="ladi-carousel">
                        <div class="ladi-carousel-content">



                            @foreach ($titles['five_dots_one']->images as $index => $fo)
                                <div id="CAROUSEL_ITEM{{ $fo->id }}" class="ladi-element" @style(['top: 0', 'left: ' . 500 * $index . 'px', 'width: 500px', 'height: 496px'])>
                                    <div class="ladi-frame ladi-frame-bg ladi-transition">
                                        <div class="ladi-frame-background"></div>
                                        <div id="IMAGE1243" class="ladi-element">
                                            <div class="ladi-image ladi-transition">
                                                <div class="ladi-image-background" @style(['background-image: url(' . showImage($fo->image) . ')'])></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <style>
                                    @media screen and (max-width: 768px) {
                                        #CAROUSEL_ITEM{{ $fo->id }} {
                                            left: {{ 420 * $index }}px !important;
                                            width: 420px !important;
                                            height: 430px !important;
                                        }
                                    }
                                </style>
                            @endforeach

                        </div>
                        <div class="ladi-carousel-arrow ladi-carousel-arrow-left opacity-0"></div>
                        <div class="ladi-carousel-arrow ladi-carousel-arrow-right opacity-0"></div>
                    </div>
                </div>
                <div id="HEADLINE1115" class="ladi-element">
                    <h3 class="ladi-headline" style="font-size: 18px;">{{ $sessionSeven->title }}</h3>
                </div>
                <div id="CAROUSEL553" class="ladi-element">
                    <div class="ladi-carousel">
                        <div class="ladi-carousel-content">


                            @foreach ($sessionSeven->links as $index => $link)
                                <div id="CAROUSEL_ITEM{{ $index }}" class="ladi-element" @style(['top: 0', 'left: ' . 588 * $index . 'px', 'width: 588px', 'height: 381.213px'])>
                                    <div class="ladi-frame ladi-frame-bg ladi-transition">
                                        <div class="ladi-frame-background"></div>
                                        <div id="VIDEO486" class="ladi-element">
                                            <div class="ladi-video">
                                                <iframe width="100%" height="301"
                                                    src="https://www.youtube.com/embed/{{ getYouTubeVideoId($link) }}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    referrerpolicy="strict-origin-when-cross-origin"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    @media screen and (max-width: 768px) {
                                        #CAROUSEL_ITEM{{ $index }} {
                                            left: {{ 420 * $index }}px !important;
                                            width: 420px !important;
                                            height: 246px !important;
                                        }
                                    }
                                </style>
                            @endforeach


                        </div>
                        <div class="ladi-carousel-arrow ladi-carousel-arrow-left opacity-0"></div>
                        <div class="ladi-carousel-arrow ladi-carousel-arrow-right opacity-0"></div>
                    </div>
                </div>
                <div id="HEADLINE1092" class="ladi-element">
                    <h3 class="ladi-headline">{{ $titles['five_dots_one']->title }}</h3>
                </div>
                <div id="CAROUSEL564" class="ladi-element">
                    <div class="ladi-carousel">
                        <div class="ladi-carousel-content">

                            @foreach ($titles['five_dots_two']->images as $index => $ft)
                                <div id="CAROUSEL_ITEM{{ $ft->id }}" class="ladi-element" @style(['top: 0', 'left: ' . 420 * $index . 'px', 'width: 420px', 'height: 488px'])>
                                    <div class="ladi-frame ladi-frame-bg ladi-transition">
                                        <div class="ladi-frame-background"></div>
                                        <div id="IMAGE1286" class="ladi-element">
                                            <div class="ladi-image ladi-transition">
                                                <div class="ladi-image-background" @style(['background-image: url(' . showImage($ft->image) . ')'])></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                        <div class="ladi-carousel-arrow ladi-carousel-arrow-left opacity-0"></div>
                        <div class="ladi-carousel-arrow ladi-carousel-arrow-right opacity-0"></div>
                    </div>
                </div>

                <div id="HEADLINE1130" class="ladi-element">
                    <h3 class="ladi-headline">
                        {{ $titleSix->title }}
                    </h3>
                </div>
                <div id="CAROUSEL567" class="ladi-element">
                    <div class="ladi-carousel">
                        <div class="ladi-carousel-content">
                            @foreach ($titleSix->images as $index => $item)
                                <div id="CAROUSEL_ITEM{{ $item->id }}" @style(['top: 0', 'left: ' . 486 * $index . 'px', 'width: 486px', 'height: 311px']) class="ladi-element">
                                    <div class="ladi-frame ladi-frame-bg ladi-transition">
                                        <div class="ladi-frame-background"></div>
                                        <div id="IMAGE1309" class="ladi-element">
                                            <div class="ladi-image">
                                                <div class="ladi-image-background"
                                                    style="background-image: url('{{ showImage($item->image) }}');">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    @media (max-width: 767px) {
                                        #CAROUSEL_ITEM{{ $item->id }} {
                                            left: {{ 420 * $index }}px !important;
                                            width: 420px;
                                            height: 251px;
                                        }
                                    }
                                </style>
                            @endforeach
                        </div>

                        <div class="ladi-carousel-arrow ladi-carousel-arrow-left opacity-0"></div>
                        <div class="ladi-carousel-arrow ladi-carousel-arrow-right opacity-0"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="SECTION488" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-overlay"></div>
            <div class="ladi-container">
                <div id="SHAPE631" class="ladi-element">
                    <div class="ladi-shape">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                            preserveAspectRatio="none" viewBox="0 0 378.41 72.06" class="" fill="#EAE2D3">
                            <use xlink:href="#shape_EumouCzKpq"></use>
                        </svg>
                    </div>
                </div>
                <div id="HEADLINE1116" class="ladi-element">
                    <h3 class="ladi-headline">
                       {{$sessionTen->title}}
                    </h3>
                </div>
                <div id="HEADLINE1118" class="ladi-element">
                    <h3 class="ladi-headline">
                        Và rất nhiều trường
                        <span style="font-weight: bold">Top đầu Hàn Quốc</span> khác
                    </h3>
                </div>
                <div id="IMAGE1284" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1285" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1296" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1297" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1298" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1299" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1300" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1301" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1302" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1303" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1304" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1305" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="IMAGE1306" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div data-action="true" id="BUTTON510" class="ladi-element">
                    <div class="ladi-button">
                        <div class="ladi-button-background"></div>
                        <div id="BUTTON_TEXT510" class="ladi-element ladi-button-headline">
                            <p class="ladi-headline">NHẬN HỌC BỔNG</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="SECTION484" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-overlay"></div>
            <div class="ladi-container">
                <div id="HEADLINE1065" class="ladi-element">
                    <h3 class="ladi-headline">{{ $sessionEight->title }}</h3>
                </div>
                @php
                    $id = ['IMAGE1185', 'IMAGE1186', 'IMAGE1187', 'IMAGE1188', 'IMAGE1189', 'IMAGE1190'];
                @endphp

                @foreach ($sessionEight->images as $key => $image)
                    <div id="{{ $id[$key] }}" class="ladi-element">
                        <div class="ladi-image">
                            <div class="ladi-image-background"
                                style="background-image: url('{{ showImage($image) }}');"></div>
                        </div>
                    </div>
                @endforeach
                <div id="CAROUSEL545" class="ladi-element">
                    <div class="ladi-carousel">
                        <div class="ladi-carousel-content">



                            @foreach ($titleEight->images as $index => $image)
                                <div id="CAROUSEL_ITEM{{ $image->id }}" class="ladi-element" @style(['top: 0', 'left: ' . 960 * $index . 'px', 'width: 960px', 'height: 822px'])>
                                    <div class="ladi-frame ladi-frame-bg ladi-transition">
                                        <div class="ladi-frame-background"></div>
                                        <div id="IMAGE1204" class="ladi-element">
                                            <div class="ladi-image">
                                                <div class="ladi-image-background"
                                                    style="background-image: url('{{ showImage($image->image) }}');">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    @media screen and (max-width: 768px) {
                                        #CAROUSEL_ITEM{{ $image->id }} {
                                            left: {{ 420 * $index }}px !important;
                                            width: 420px;
                                            height: 362px;
                                        }
                                    }
                                    </style>
                            @endforeach

                        </div>
                        <div class="ladi-carousel-arrow ladi-carousel-arrow-left opacity-0"></div>
                        <div class="ladi-carousel-arrow ladi-carousel-arrow-right opacity-0"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="SECTION-Form" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-overlay"></div>
            <div class="ladi-container">
                <div id="BOX1002" class="ladi-element">
                    <div class="ladi-box ladi-transition">
                        <div class="ladi-overlay"></div>
                    </div>
                </div>
                <div id="IMAGE1234" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div>
                <div id="FORM-cuoitrang" class="ladi-element">
                    <form method="post" action="{{ route('home') }}" class="ladi-form form-contact">
                        <div id="BUTTON508" class="ladi-element">
                            <div class="ladi-button">
                                <div class="ladi-button-background"></div>
                                <div id="BUTTON_TEXT508" class="ladi-element ladi-button-headline">
                                    <p class="ladi-headline">
                                        <span class="ladipage-animated-headline rotate-3"><span
                                                class="ladipage-animated-words-wrapper"
                                                data-word='["ĐĂNG KÝ NGAY"]'>ĐĂNG KÝ TƯ VẤN</span></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="FORM_ITEM481" class="ladi-element">
                            <div class="ladi-form-item-container">
                                <div class="ladi-form-item-background"></div>
                                <div class="ladi-form-item">
                                    <input autocomplete="off" tabindex="1" name="name"
                                        class="ladi-form-control" type="text" placeholder="Họ và tên"
                                        value="" />
                                </div>
                            </div>
                        </div>
                        <div id="FORM_ITEM482" class="ladi-element">
                            <div class="ladi-form-item-container">
                                <div class="ladi-form-item-background"></div>
                                <div class="ladi-form-item">
                                    <input autocomplete="off" tabindex="2" name="email"
                                        class="ladi-form-control" type="email" placeholder="Email"
                                        value="" />
                                </div>
                            </div>
                        </div>
                        <div id="FORM_ITEM483" class="ladi-element">
                            <div class="ladi-form-item-container">
                                <div class="ladi-form-item-background"></div>
                                <div class="ladi-form-item">
                                    <input autocomplete="off" tabindex="3" name="phone"
                                        class="ladi-form-control" type="tel" placeholder="Số điện thoại"
                                        pattern="(\+84|0){1}(9|8|7|5|3){1}[0-9]{8}" value="" />
                                </div>
                            </div>
                        </div>
                        <div id="FORM_ITEM484" class="ladi-element">
                            <div class="ladi-form-item-container">
                                <div class="ladi-form-item-background"></div>
                                <div class="ladi-form-item">
                                    <input autocomplete="off" tabindex="4" name="address"
                                        class="ladi-form-control" type="text" placeholder="Nơi ở hiện tại"
                                        value="" />
                                </div>
                            </div>
                        </div>
                        <div id="FORM_ITEM485" class="ladi-element">
                            <div class="ladi-form-item-container">
                                <div class="ladi-form-item-background"></div>
                                <div class="ladi-form-item">
                                    <textarea autocomplete="off" tabindex="5" name="note" class="ladi-form-control" placeholder="Tóm tắt nhu cầu"></textarea>
                                </div>
                            </div>
                        </div>
                        <div id="BUTTON_TEXT508" class="ladi-element ladi-button-headline" style="top: 355px">
                            <button type="submit" class="">ĐĂNG KÝ NGAY</button>
                        </div>

                    </form>
                </div>
                <div id="HEADLINE1104" class="ladi-element">
                    <h3 class="ladi-headline">
                        {!! $sessionNine->content !!}

                    </h3>
                </div>
                <div id="SHAPE623" class="ladi-element">
                    <div class="ladi-shape">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                            preserveAspectRatio="none" viewBox="0 0 1536 1896.08" class="" fill="#FFFFFF">
                            <use xlink:href="#shape_nVegAsbyQx"></use>
                        </svg>
                    </div>
                </div>
                <div id="SHAPE624" class="ladi-element">
                    <div class="ladi-shape">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                            preserveAspectRatio="none" viewBox="0 0 1536 1896.08" class="" fill="#FFFFFF">
                            <use xlink:href="#shape_nVegAsbyQx"></use>
                        </svg>
                    </div>
                </div>
                {{-- <div id="HEADLINE1107" class="ladi-element">
                    <h3 class="ladi-headline">ƯU ĐÃI CÒN LẠI TRONG</h3>
                </div>
                <div id="COUNTDOWN468" class="ladi-element">
                    <div class="ladi-countdown">
                        <div id="COUNTDOWN_ITEM480" class="ladi-element">
                            <div class="ladi-countdown-background"></div>
                            <div class="ladi-countdown-text"><span>00</span></div>
                        </div>
                        <div id="COUNTDOWN_ITEM481" class="ladi-element">
                            <div class="ladi-countdown-background"></div>
                            <div class="ladi-countdown-text"><span>00</span></div>
                        </div>
                        <div id="COUNTDOWN_ITEM482" class="ladi-element">
                            <div class="ladi-countdown-background"></div>
                            <div class="ladi-countdown-text"><span>00</span></div>
                        </div>
                        <div id="COUNTDOWN_ITEM483" class="ladi-element">
                            <div class="ladi-countdown-background"></div>
                            <div class="ladi-countdown-text"><span>00</span></div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div id="IMAGE1307" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                    </div>
                </div> --}}
                <div id="HEADLINE1122" class="ladi-element">
                    <h3 class="ladi-headline">{{ $sessionNine->title }}</h3>
                </div>
                <div id="HEADLINE1123" class="ladi-element">
                    <h3 class="ladi-headline">{!! $sessionNine->extra !!}</h3>
                </div>

            </div>
        </div>
        <div id="SECTION428" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-overlay"></div>
            <div class="ladi-container">
                <div id="FRAME457" class="ladi-element">
                    <div class="ladi-frame ladi-frame-bg ladi-transition">
                        <div class="ladi-frame-background"></div>
                        <div id="IMAGE458" class="ladi-element">
                            <div class="ladi-image ladi-transition">
                                <div class="ladi-image-background"></div>
                            </div>
                        </div>
                        <div id="IMAGE459" class="ladi-element">
                            <div class="ladi-image ladi-transition">
                                <div class="ladi-image-background"></div>
                            </div>
                        </div>
                        <div id="IMAGE460" class="ladi-element">
                            <div class="ladi-image ladi-transition">
                                <div class="ladi-image-background"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="LINE461" class="ladi-element">
                    <div class="ladi-line">
                        <div class="ladi-line-container"></div>
                    </div>
                </div>

                @php
                    $branchs = explode('|', $config->branch);
                    $address = explode('|', $config->address);
                    $hotline = explode('|', $config->hotline);
                    $email = explode('|', $config->email);
                    $website = explode('|', $config->website);

                @endphp
                <div id="HEADLINE462" class="ladi-element">
                    <h1 class="ladi-headline ladi-transition">
                        {{ $config->copyright }}
                    </h1>
                </div>
                <div id="PARAGRAPH492" class="ladi-element">
                    <div class="ladi-paragraph">{{ $config->title }}</div>
                </div>
                <div id="HEADLINE492" class="ladi-element">
                    <h4 class="ladi-headline ladi-transition">
                        CHI NHÁNH {{ $branchs[0] }}<br />
                    </h4>
                </div>
                <div id="HEADLINE430" class="ladi-element">
                    <h4 class="ladi-headline ladi-transition">CHI NHÁNH {{ $branchs[1] }}</h4>
                </div>
                <div id="HTML_CODE464" class="ladi-element">
                    <div class="ladi-html-code">

                        {!! $config->map !!}

                    </div>
                </div>
                <div id="SHAPE489" class="ladi-element">
                    <div class="ladi-shape ladi-transition">
                        <i class="fas fa-map-marker-alt" style="font-size: 20px; color: #ffffff"></i>
                    </div>
                </div>
                <div id="HEADLINE493" class="ladi-element">
                    <p class="ladi-headline ladi-transition">
                        {{ $branchs[0] ? $address[0] : '' }}
                    </p>
                </div>
                <div id="SHAPE490" class="ladi-element">
                    <div class="ladi-shape ladi-transition">
                        <i class="fas fa-phone" style="font-size: 20px; color: #ffffff"></i>
                    </div>
                </div>
                <div id="HEADLINE494" class="ladi-element">
                    <p class="ladi-headline ladi-transition">
                        Hotline: {{ $branchs[0] ? $hotline[0] : '' }}
                    </p>
                </div>
                <div id="SHAPE491" class="ladi-element">
                    <div class="ladi-shape ladi-transition">
                        <i class="fas fa-envelope" style="font-size: 20px; color: #ffffff"></i>
                    </div>
                </div>
                <div id="HEADLINE495" class="ladi-element">
                    <p class="ladi-headline ladi-transition">
                        Email: {{ $branchs[0] ? $email[0] : '' }}
                    </p>
                </div>
                <div id="SHAPE492" class="ladi-element">
                    <div class="ladi-shape ladi-transition">
                        <i class="fas fa-globe" style="font-size: 20px; color: #ffffff"></i>
                    </div>
                </div>
                <div id="HEADLINE496" class="ladi-element">
                    <p class="ladi-headline ladi-transition">
                        Website: {{ $branchs[0] ? $website[0] : '' }}
                    </p>
                </div>
                <div id="SHAPE493" class="ladi-element">
                    <div class="ladi-shape ladi-transition">
                        <i class="fas fa-map-marker-alt" style="font-size: 20px; color: #ffffff"></i>
                    </div>
                </div>
                <div id="HEADLINE497" class="ladi-element">
                    <p class="ladi-headline ladi-transition">
                        {{ $branchs[1] ? $address[1] : '' }}
                    </p>
                </div>
                <div id="SHAPE432" class="ladi-element">
                    <div class="ladi-shape ladi-transition">
                        <i class="fas fa-phone" style="font-size: 20px; color: #ffffff"></i>
                    </div>
                </div>
                <div id="SHAPE435" class="ladi-element">
                    <div class="ladi-shape ladi-transition">
                        <i class="fas fa-envelope" style="font-size: 20px; color: #ffffff"></i>
                    </div>
                </div>
                <div id="HEADLINE436" class="ladi-element">
                    <p class="ladi-headline ladi-transition">Hotline: {{ $branchs[1] ? $hotline[1] : '' }}</p>
                </div>
                <div id="SHAPE438" class="ladi-element">
                    <div class="ladi-shape ladi-transition">
                        <i class="fas fa-globe" style="font-size: 20px; color: #ffffff"></i>
                    </div>
                </div>
                <div id="HEADLINE439" class="ladi-element">
                    <p class="ladi-headline ladi-transition">
                        Email: {{ $branchs[1] ? $email[1] : '' }}
                    </p>
                </div>

                <div id="HEADLINE442" class="ladi-element">
                    <p class="ladi-headline ladi-transition">
                        Website: {{ $branchs[1] ? $website[1] : '' }}
                    </p>
                </div>
                <div id="BOX567" class="ladi-element">
                    <div class="ladi-box ladi-transition"></div>
                </div>
                <div id="IMAGE578" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"
                            style="background-image: url({{ showImage($config->logo) }});"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="SECTION_POPUP" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-container">
                <div id="POPUP465" class="ladi-element">
                    <div class="ladi-popup">
                        <div class="ladi-popup-background"></div>
                        <div class="ladi-overlay"></div>
                        <div id="GROUP1067" class="ladi-element">
                            <div class="ladi-group">
                                <div id="BOX754" class="ladi-element">
                                    <div class="ladi-box">
                                        <div class="ladi-overlay"></div>
                                    </div>
                                </div>
                                <div id="FORM-popup" data-config-id="66eba32484a6cc00123be634"
                                    class="ladi-element">
                                    <form autocomplete="off" method="post" class="ladi-form">
                                        <div id="BUTTON475" class="ladi-element">
                                            <div class="ladi-button">
                                                <div class="ladi-button-background"></div>
                                                <div id="BUTTON_TEXT475" class="ladi-element ladi-button-headline">
                                                    <p class="ladi-headline">
                                                        <span class="ladipage-animated-headline rotate-3"><span
                                                                class="ladipage-animated-words-wrapper"
                                                                data-word='["ĐĂNG KÝ NGAY"]'>ĐĂNG KÝ
                                                                NGAY</span></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="FORM_ITEM470" class="ladi-element">
                                            <div class="ladi-form-item-container">
                                                <div class="ladi-form-item-background"></div>
                                                <div class="ladi-form-item">
                                                    <input autocomplete="off" tabindex="1" name="name"
                                                        required class="ladi-form-control" type="text"
                                                        placeholder="Họ và tên" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div id="FORM_ITEM471" class="ladi-element">
                                            <div class="ladi-form-item-container">
                                                <div class="ladi-form-item-background"></div>
                                                <div class="ladi-form-item">
                                                    <input autocomplete="off" tabindex="2" name="email"
                                                        required class="ladi-form-control" type="email"
                                                        placeholder="Email" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div id="FORM_ITEM472" class="ladi-element">
                                            <div class="ladi-form-item-container">
                                                <div class="ladi-form-item-background"></div>
                                                <div class="ladi-form-item">
                                                    <input autocomplete="off" tabindex="3" name="phone"
                                                        required class="ladi-form-control" type="tel"
                                                        placeholder="Số điện thoại"
                                                        pattern="(\+84|0){1}(9|8|7|5|3){1}[0-9]{8}"
                                                        value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div id="FORM_ITEM473" class="ladi-element">
                                            <div class="ladi-form-item-container">
                                                <div class="ladi-form-item-background"></div>
                                                <div class="ladi-form-item">
                                                    <input autocomplete="off" tabindex="4" name="address"
                                                        required class="ladi-form-control" type="text"
                                                        placeholder="Nơi ở hiện tại" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div id="FORM_ITEM475" class="ladi-element">
                                            <div class="ladi-form-item-container">
                                                <div class="ladi-form-item-background"></div>
                                                <div class="ladi-form-item">
                                                    <textarea autocomplete="off" tabindex="5" name="form_item475" required class="ladi-form-control"
                                                        placeholder="Tóm tắt nhu cầu"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="ladi-hidden"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="BOX964" class="ladi-element">
                            <div class="ladi-box ladi-transition"></div>
                        </div>
                        <div id="GROUP1149" class="ladi-element">
                            <div class="ladi-group">
                                <div id="COUNTDOWN465" class="ladi-element">
                                    <div class="ladi-countdown">
                                        <div id="COUNTDOWN_ITEM468" class="ladi-element">
                                            <div class="ladi-countdown-background"></div>
                                            <div class="ladi-countdown-text"><span>00</span></div>
                                        </div>
                                        <div id="COUNTDOWN_ITEM469" class="ladi-element">
                                            <div class="ladi-countdown-background"></div>
                                            <div class="ladi-countdown-text"><span>00</span></div>
                                        </div>
                                        <div id="COUNTDOWN_ITEM470" class="ladi-element">
                                            <div class="ladi-countdown-background"></div>
                                            <div class="ladi-countdown-text"><span>00</span></div>
                                        </div>
                                        <div id="COUNTDOWN_ITEM471" class="ladi-element">
                                            <div class="ladi-countdown-background"></div>
                                            <div class="ladi-countdown-text"><span>00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="HEADLINE1004" class="ladi-element">
                                    <h3 class="ladi-headline ladi-transition">Ngày</h3>
                                </div>
                                <div id="HEADLINE1005" class="ladi-element">
                                    <h3 class="ladi-headline ladi-transition">Giờ</h3>
                                </div>
                                <div id="HEADLINE1006" class="ladi-element">
                                    <h3 class="ladi-headline ladi-transition">Phút</h3>
                                </div>
                                <div id="HEADLINE1007" class="ladi-element">
                                    <h3 class="ladi-headline ladi-transition">Giây</h3>
                                </div>
                            </div>
                        </div>
                        <div id="BOX963" class="ladi-element">
                            <div class="ladi-box ladi-transition"></div>
                        </div>
                        <div id="HEADLINE1024" class="ladi-element">
                            <h3 class="ladi-headline">{{ $sessionNine->title }}</h3>
                        </div>
                        <div id="HEADLINE1026" class="ladi-element">
                            <h3 class="ladi-headline">Ưu đãi<br />kết thúc sau:</h3>
                        </div>
                        <div id="BOX965" class="ladi-element">
                            <div class="ladi-box ladi-transition"></div>
                        </div>
                        <div id="IMAGE1176" class="ladi-element">
                            <div class="ladi-image">
                                <div class="ladi-image-background"></div>
                            </div>
                        </div>
                        <div id="HEADLINE1091" class="ladi-element">
                            <h3 class="ladi-headline">
                                {!! $sessionNine->extra !!}
                            </h3>
                        </div>
                        <div id="HEADLINE1121" class="ladi-element">
                            <h3 class="ladi-headline">
                                Học bổng du học lên đến
                                <span style="font-weight: bold">800 triệu </span><br />Nhận
                                <span style="font-weight: bold">100% học bổng</span> học tiếng
                                Hàn<br />
                            </h3>
                        </div>
                        <div id="SHAPE633" class="ladi-element">
                            <div class="ladi-shape">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                    preserveAspectRatio="none" viewBox="0 0 24 24" class=""
                                    fill="rgba(126, 217, 87, 1)">
                                    <use xlink:href="#shape_wRsFpnzIPX"></use>
                                </svg>
                            </div>
                        </div>
                        <div id="SHAPE634" class="ladi-element">
                            <div class="ladi-shape">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                    preserveAspectRatio="none" viewBox="0 0 24 24" class=""
                                    fill="rgba(126, 217, 87, 1)">
                                    <use xlink:href="#shape_wRsFpnzIPX"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="backdrop-popup" class="backdrop-popup"></div>
    <div id="backdrop-dropbox" class="backdrop-dropbox"></div>
    <div id="lightbox-screen" class="lightbox-screen"></div>
    <script id="script_lazyload" type="text/javascript">
        window.lazyload_run = function(dom, is_first, check_dom_rect) {
            if (
                check_dom_rect &&
                (document.body.clientWidth <= 0 || document.body.clientheight <= 0)
            ) {
                return setTimeout(function() {
                    window.lazyload_run(dom, is_first, check_dom_rect);
                }, 1);
            }
            var style_lazyload = document.getElementById("style_lazyload");
            var list_element_lazyload = dom.querySelectorAll(
                "body.lazyload .ladi-overlay, body.lazyload .ladi-box, body.lazyload .ladi-button-background, body.lazyload .ladi-collection-item, body.lazyload .ladi-countdown-background, body.lazyload .ladi-form-item-background, body.lazyload .ladi-form-label-container .ladi-form-label-item.image, body.lazyload .ladi-frame-background, body.lazyload .ladi-gallery-view-item, body.lazyload .ladi-gallery-control-item, body.lazyload .ladi-headline, body.lazyload .ladi-image-background, body.lazyload .ladi-image-compare, body.lazyload .ladi-list-paragraph ul li, body.lazyload .ladi-section-background, body.lazyload .ladi-survey-option-background, body.lazyload .ladi-survey-option-image, body.lazyload .ladi-tabs-background, body.lazyload .ladi-video-background, body.lazyload .ladi-banner, body.lazyload .ladi-spin-lucky-screen, body.lazyload .ladi-spin-lucky-start"
            );
            var docEventScroll = window;
            for (var i = 0; i < list_element_lazyload.length; i++) {
                var rect = list_element_lazyload[i].getBoundingClientRect();
                if (
                    rect.x == "undefined" ||
                    rect.x == undefined ||
                    rect.y == "undefined" ||
                    rect.y == undefined
                ) {
                    rect.x = rect.left;
                    rect.y = rect.top;
                }
                var offset_top = rect.y + window.scrollY;
                if (
                    offset_top >= window.scrollY + window.innerHeight ||
                    window.scrollY >= offset_top + list_element_lazyload[i].offsetHeight
                ) {
                    list_element_lazyload[i].classList.add("ladi-lazyload");
                }
            }
            if (
                typeof style_lazyload != "undefined" &&
                style_lazyload != undefined
            ) {
                style_lazyload.parentElement.removeChild(style_lazyload);
            }
            document.body.classList.remove("lazyload");
            var currentScrollY = window.scrollY;
            var stopLazyload = function(event) {
                if (event.type == "scroll" && window.scrollY == currentScrollY) {
                    currentScrollY = -1;
                    return;
                }
                docEventScroll.removeEventListener("scroll", stopLazyload);
                list_element_lazyload =
                    document.getElementsByClassName("ladi-lazyload");
                while (list_element_lazyload.length > 0) {
                    list_element_lazyload[0].classList.remove("ladi-lazyload");
                }
            };
            if (is_first) {
                var scrollEventPassive = null;
                try {
                    var opts = Object.defineProperty({}, "passive", {
                        get: function() {
                            scrollEventPassive = {
                                passive: true
                            };
                        },
                    });
                    window.addEventListener("testPassive", null, opts);
                    window.removeEventListener("testPassive", null, opts);
                } catch (e) {}
                docEventScroll.addEventListener(
                    "scroll",
                    stopLazyload,
                    scrollEventPassive
                );
            }
            return dom;
        };
        window.lazyload_run(document, true, true);
    </script>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Exo:wght@400;700&family=Alfa+Slab+One&family=Arima:wght@400;700&family=Oswald:wght@400;700&family=Philosopher:wght@400;700&display=swap"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <script src="{{ asset('frontend/js/ladipagev3.min.js') }}"></script>

    <script id="script_event_data" type="application/json">
        {
          "SHAPE519": {
            "a": "shape",
            "cs": [
              {
                "dr": "action",
                "dv": "_blank",
                "dw": "https://m.me/168837822990209",
                "a": "link"
              }
            ],
            "cm": "Nhắn tin",
            "cl": "16593014991",
            "ck": "BpN5CKbTut0ZEM-hleg9",
            "cj": "&#60;!-- Meta Pixel Code --&#62;\n&#60;script&#62;\n!function(f,b,e,v,n,t,s)\n&#123;if(f.fbq)return;n=f.fbq=function()&#123;n.callMethod?\nn.callMethod.apply(n,arguments):n.queue.push(arguments)&#125;;\nif(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=&#39;2.0&#39;;\nn.queue=[];t=b.createElement(e);t.async=!0;\nt.src=v;s=b.getElementsByTagName(e)[0];\ns.parentNode.insertBefore(t,s)&#125;(window, document,&#39;script&#39;,\n&#39;https://connect.facebook.net/en_US/fbevents.js&#39;);\nfbq(&#39;init&#39;, &#39;1413421129331558&#39;);\nfbq(&#39;track&#39;, &#39;PageView&#39;);\n&#60;/script&#62;\n&#60;noscript&#62;&#60;img height=&#34;1&#34; width=&#34;1&#34; style=&#34;display:none&#34;\nsrc=&#34;https://www.facebook.com/tr?id=1413421129331558&#38;ev=PageView&#38;noscript=1&#34;\n/&#62;&#60;/noscript&#62;\n&#60;!-- Google tag (gtag.js) --&#62;\n&#60;script async=&#34;&#34; src=&#34;https://www.googletagmanager.com/gtag/js?id=G-KL54F33ZP9&#34;&#62;&#60;/script&#62;\n&#60;script&#62;\n  window.dataLayer = window.dataLayer || [];\n  function gtag()&#123;dataLayer.push(arguments);&#125;\n  gtag(&#39;js&#39;, new Date());\n\n  gtag(&#39;config&#39;, &#39;G-KL54F33ZP9&#39;);\n&#60;/script&#62;\n&#60;!-- End Meta Pixel Code --&#62;",
            "aD": true,
            "aA": "bottom_right",
            "aw": "20px",
            "at": "0px",
            "aq": "20px",
            "an": "10px",
            "F": "pulse",
            "C": "1s"
          },
          "NOTIFY464": {
            "a": "notify",
            "cv": "1DXaD7IgHaUUDnRjNi9Vm8Teln4e9BGwZUHDIrWaKW6w",
            "cu": 4,
            "ct": 4,
            "aY": "default",
            "j": "bottom_left"
          },
          "HEADLINE1065": {
            "a": "headline",
            "B": "0.5s",
            "A": "1s",
            "F": "fadeInDown"
          },
          "CAROUSEL545": {
            "a": "carousel",
            "cN": 2,
            "cG": "type_abab",
            "H": "960px",
            "G": "420px",
            "cM": "0px",
            "cJ": "horizontal",
            "R": true,
            "O": 5,
            "L": "1250px"
          },
          "IMAGE1211": { "a": "image", "E": "bounceInDown", "B": "1s" },
          "IMAGE1227": { "a": "image", "E": "fadeInUp", "B": "1s" },
          "IMAGE1228": { "a": "image", "E": "fadeInUp", "B": "1s" },
          "IMAGE1229": { "a": "image", "E": "fadeInUp", "B": "1s" },
          "IMAGE1230": { "a": "image", "E": "fadeInUp", "B": "1s" },
          "BUTTON507": {
            "a": "button",
            "cs": [{ "dr": "action", "dw": "POPUP465", "a": "popup" }],
            "F": "pulse",
            "C": "1s"
          },
          "BUTTON508": { "a": "button", "F": "pulse", "C": "1s" },
          "FORM_ITEM481": { "a": "form_item", "bS": "text", "bQ": 1 },
          "FORM_ITEM482": { "a": "form_item", "bS": "email", "bQ": 2 },
          "FORM_ITEM483": { "a": "form_item", "bS": "tel", "bQ": 3 },
          "FORM_ITEM484": { "a": "form_item", "bS": "text", "bQ": 4 },
          "FORM_ITEM485": { "a": "form_item", "bS": "textarea", "bQ": 5 },
          "COUNTDOWN_ITEM480": { "a": "countdown_item", "bY": "day" },
          "COUNTDOWN_ITEM481": { "a": "countdown_item", "bY": "hour" },
          "COUNTDOWN_ITEM482": { "a": "countdown_item", "bY": "minute" },
          "COUNTDOWN_ITEM483": { "a": "countdown_item", "bY": "seconds" },
          "COUNTDOWN468": { "a": "countdown", "bX": "countdown", "bW": 4320 },
          "CAROUSEL548": {
            "a": "carousel",
            "cN": 2,
            "cG": "type_abab",
            "H": "500px",
            "G": "420px",
            "cM": "0px",
            "cJ": "horizontal",
            "R": true,
            "O": 5,
            "L": "1250px"
          },
          "CAROUSEL553": {
            "a": "carousel",
            "cN": 2,
            "cG": "type_abab",
            "H": "588px",
            "G": "420px",
            "cM": "0px",
            "cJ": "horizontal",
            "O": 5,
            "L": "1250px"
          },
          "CAROUSEL564": {
            "a": "carousel",
            "cN": 2,
            "cG": "type_abab",
            "cM": "0px",
            "cJ": "horizontal",
            "R": true,
            "O": 5,
            "L": "1250px",
            "I": "420px"
          },
          "BUTTON510": {
            "a": "button",
            "cs": [{ "dr": "action", "dw": "SECTION-Form", "a": "section" }],
            "F": "pulse",
            "C": "1s"
          },
          "COUNTDOWN_ITEM471": { "a": "countdown_item", "bY": "seconds" },
          "COUNTDOWN_ITEM470": { "a": "countdown_item", "bY": "minute" },
          "COUNTDOWN_ITEM469": { "a": "countdown_item", "bY": "hour" },
          "COUNTDOWN_ITEM468": { "a": "countdown_item", "bY": "day" },
          "COUNTDOWN465": { "a": "countdown", "bX": "countdown", "bW": 4320 },
          "FORM_ITEM475": { "a": "form_item", "bS": "textarea", "bQ": 5 },
          "FORM_ITEM473": { "a": "form_item", "bS": "text", "bQ": 4 },
          "FORM_ITEM472": { "a": "form_item", "bS": "tel", "bQ": 3 },
          "FORM_ITEM471": { "a": "form_item", "bS": "email", "bQ": 2 },
          "FORM_ITEM470": { "a": "form_item", "bS": "text", "bQ": 1 },
          "BUTTON475": { "a": "button", "F": "pulse", "C": "1s" },
          "POPUP465": {
            "a": "popup",
            "X": "default",
            "U": "background-color: rgba(0, 0, 0, 0.5);"
          },
          "CAROUSEL567": {
            "a": "carousel",
            "cN": 2,
            "cG": "type_abab",
            "H": "486px",
            "G": "420px",
            "cM": "0px",
            "cJ": "horizontal",
            "R": true,
            "O": 5,
            "L": "1250px"
          },
          "FORM_ITEM490": { "a": "form_item", "bS": "textarea", "bQ": 5 },
          "FORM_ITEM489": { "a": "form_item", "bS": "text", "bQ": 4 },
          "FORM_ITEM488": { "a": "form_item", "bS": "tel", "bQ": 3 },
          "FORM_ITEM487": { "a": "form_item", "bS": "email", "bQ": 2 },
          "FORM_ITEM486": { "a": "form_item", "bS": "text", "bQ": 1 },
          "BUTTON511": { "a": "button", "F": "pulse", "C": "1s" },
          "FORM-dautrang": {
            "option.dynamic_form_config": "&#123;&#34;configs&#34;:[],&#34;default_actions&#34;:[&#123;&#34;redirect_url&#34;:&#34;https://duhochanquoc.greenacademy.edu.vn/thankyou&#34;,&#34;type&#34;:&#34;form_redirect_url&#34;,&#34;no_delete&#34;:true&#125;]&#125;",
            "a": "form",
            "bP": "66eba32484a6cc00123be634",
            "bM": true,
            "bF": "Lead",
            "bA": true,
            "by": true,
            "bx": true
          },
          "FORM-popup": {
            "option.dynamic_form_config": "&#123;&#34;configs&#34;:[],&#34;default_actions&#34;:[&#123;&#34;redirect_url&#34;:&#34;https://duhochanquoc.greenacademy.edu.vn/thankyou&#34;,&#34;type&#34;:&#34;form_redirect_url&#34;,&#34;no_delete&#34;:true&#125;]&#125;",
            "a": "form",
            "bP": "66eba32484a6cc00123be634",
            "bM": true,
            "bF": "Lead",
            "bA": true,
            "by": true,
            "bx": true
          },
          "FORM-cuoitrang": {
            "option.dynamic_form_config": "&#123;&#34;configs&#34;:[],&#34;default_actions&#34;:[&#123;&#34;redirect_url&#34;:&#34;https://duhochanquoc.greenacademy.edu.vn/thankyou&#34;,&#34;type&#34;:&#34;form_redirect_url&#34;,&#34;no_delete&#34;:true&#125;]&#125;",
            "a": "form",
            "bP": "66eba32484a6cc00123be634",
            "bM": true,
            "bF": "Lead",
            "bA": true,
            "by": true,
            "bx": true
          }
        }
      </script>


    <script id="script_ladipage_run" type="text/javascript">
        (function() {
            var run = function() {
                if (
                    typeof window.LadiPageScript == "undefined" ||
                    typeof window.ladi == "undefined" ||
                    window.ladi == undefined
                ) {
                    setTimeout(run, 100);
                    return;
                }
                window.LadiPageApp = window.LadiPageApp || new window.LadiPageAppV2();
                window.LadiPageScript.runtime.ladipage_id =
                    "66e93c4ff905430012a69b7d";
                window.LadiPageScript.runtime.publish_platform = "LADIPAGEDNS";
                window.LadiPageScript.runtime.version = "1731296290230";
                window.LadiPageScript.runtime.cdn_url =
                    "https://w.ladicdn.com/v4/source/";
                window.LadiPageScript.runtime.DOMAIN_SET_COOKIE = [
                    "greenacademy.edu.vn",
                ];
                window.LadiPageScript.runtime.DOMAIN_FREE = [
                    "preview.ldpdemo.com",
                    "ldp.page",
                ];
                window.LadiPageScript.runtime.bodyFontSize = 12;
                window.LadiPageScript.runtime.store_id = "5daeae0d3ec8da4ea405b05d";
                window.LadiPageScript.runtime.time_zone = 7;
                window.LadiPageScript.runtime.currency = "VND";
                window.LadiPageScript.runtime.tracking_page = "@@tracking_page";
                window.LadiPageScript.runtime.convert_replace_str = true;
                window.LadiPageScript.runtime.desktop_width = 1200;
                window.LadiPageScript.runtime.mobile_width = 420;
                window.LadiPageScript.runtime.formdata = true;
                window.LadiPageScript.runtime.tracking_button_click = true;
                window.LadiPageScript.runtime.publish_time = 1731311716288;
                window.LadiPageScript.runtime.lang = "vi";
                window.LadiPageScript.run(true);
                window.LadiPageScript.runEventScroll();
            };
            run();
        })();
    </script>

    <link rel="stylesheet" href="{{ asset('backend/assets/libs/toastify-js/src/toastify.css') }}">
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/toastify-js/src/toastify.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('body').on('submit', '.form-contact', function(e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr('action'),
                    method: "POST",
                    data: new FormData(this),
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log(response);

                        if (response.status) {

                            Toastify({
                                text: response.message,
                                duration: 3000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                            }).showToast();

                            $('.form-contact')[0].reset();
                        } else {

                            Toastify({
                                text: response.message,
                                duration: 3000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)",
                            }).showToast();
                        }
                    }
                });
            })
        })
    </script>
</body>

</html>
