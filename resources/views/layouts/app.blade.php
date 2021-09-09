<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- FA Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

</head>
<body>

    @yield('content')

    <!-- Help Modal -->
    <div class="modal fade help-modal" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
        <div class="modal-dialog help-dialog" role="document">
          <div class="modal-content help-content">
            <div class="swiper helpSwiper">
                <div class="swiper-wrapper">

                  {{-- 1st Slide --}}
                  <div class="swiper-slide">
                      <div class="help-division">
                        <div class="display-part">
                            <div class="display-background"></div>
                            <svg class="modal-svg" id="e947267e-2fd0-4612-8553-18e563890315" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="808.77834" height="560.41822" viewBox="0 0 808.77834 560.41822"><path d="M931.874,462.00428a348.20118,348.20118,0,0,1-45.12992,86.56018c-.43839.61813-.88379,1.22264-1.33247,1.8375L827.66335,531.7c.26114-.59618.54561-1.26416.85-1.99376C846.69962,486.6871,956.15084,224.46037,944.5286,169.79089,945.63877,174.28006,981.902,322.80069,931.874,462.00428Z" transform="translate(-195.61083 -169.79089)" fill="#e6e6e6"/><path d="M897.88507,552.17252c-.70543.53164-1.43136,1.05665-2.16425,1.56812l-43.32142-14.0298c.51814-.47888,1.12085-1.04379,1.81511-1.68119,11.34029-10.59958,45.03023-42.3579,77.65948-76.02537,35.06529-36.18,68.91369-74.55795,72.51518-91.24879C1003.71179,374.56362,982.34635,490.42108,897.88507,552.17252Z" transform="translate(-195.61083 -169.79089)" fill="#e6e6e6"/><path d="M963.14532,730.20911H220.51173a24.9009,24.9009,0,0,1-24.9009-24.9009v0q403.8068-46.93008,792.43539,0v0A24.90091,24.90091,0,0,1,963.14532,730.20911Z" transform="translate(-195.61083 -169.79089)" fill="#2f2e41"/><path d="M988.04622,706.77294l-792.43539-1.46476L287.45133,550.776l.43941-.73238V209.47212a31.47505,31.47505,0,0,1,31.47768-31.47769H859.89434A31.47506,31.47506,0,0,1,891.372,209.47212v342.915Z" transform="translate(-195.61083 -169.79089)" fill="#3f3d56"/><path d="M318.65071,199.96584a10.26484,10.26484,0,0,0-10.25333,10.25332V520.74837a10.2653,10.2653,0,0,0,10.25333,10.25332H865.00634a10.26576,10.26576,0,0,0,10.25333-10.25332V210.21916a10.2653,10.2653,0,0,0-10.25333-10.25332Z" transform="translate(-195.61083 -169.79089)" fill="#fff"/><path d="M322.2414,572.015a4.40641,4.40641,0,0,0-3.99234,2.55761l-28.29891,61.51994a4.39409,4.39409,0,0,0,3.99162,6.231H889.0529a4.39378,4.39378,0,0,0,3.92939-6.35969l-30.76-61.51994a4.372,4.372,0,0,0-3.92939-2.42887Z" transform="translate(-195.61083 -169.79089)" fill="#2f2e41"/><circle cx="394.02055" cy="18.45686" r="6.59142" fill="#fff"/><path d="M531.13681,654.04157a4.401,4.401,0,0,0-4.24266,3.25136l-7.09851,26.36569a4.39387,4.39387,0,0,0,4.24266,5.5372H659.03585A4.39328,4.39328,0,0,0,663.187,683.364l-9.12614-26.36568a4.39659,4.39659,0,0,0-4.15254-2.9567Z" transform="translate(-195.61083 -169.79089)" fill="#2f2e41"/><polygon points="695.761 375.126 695.761 380.985 91.84 380.985 92.295 380.253 92.295 375.126 695.761 375.126" fill="#2f2e41"/><path d="M703.61465,254.82985H561.125v2.60257H703.61465a26.45081,26.45081,0,0,1,0,52.90163H488.00326a26.45081,26.45081,0,0,1,0-52.90163h8.05743v-2.60257h-8.05743a29.05339,29.05339,0,0,0,0,58.10677H703.61465a29.05339,29.05339,0,1,0,0-58.10677Z" transform="translate(-195.61083 -169.79089)" fill="#e6e6e6"/><path d="M703.61465,344.61863H561.125v2.60257H703.61465a26.45082,26.45082,0,0,1,0,52.90163H488.00326a26.45081,26.45081,0,0,1,0-52.90163h8.05743v-2.60257h-8.05743a29.05339,29.05339,0,0,0,0,58.10677H703.61465a29.05339,29.05339,0,1,0,0-58.10677Z" transform="translate(-195.61083 -169.79089)" fill="#e6e6e6"/><path d="M703.61465,434.40741H561.125V437.01H703.61465a26.45081,26.45081,0,1,1,0,52.90162H488.00326a26.45081,26.45081,0,0,1,0-52.90162h8.05743v-2.60258h-8.05743a29.05339,29.05339,0,0,0,0,58.10678H703.61465a29.05339,29.05339,0,1,0,0-58.10678Z" transform="translate(-195.61083 -169.79089)" fill="#e6e6e6"/><path id="ab287899-84e3-434f-b92d-b2aaa12c9990" data-name="Path 40" d="M512.144,247.95428a7.73852,7.73852,0,0,0,0,15.475h33.945a7.73852,7.73852,0,1,0,.25408-15.475q-.12705-.00215-.25408,0Z" transform="translate(-195.61083 -169.79089)" fill="#3f3d56"/><path id="af2a4b37-a3ed-4662-953e-6f9b285406f1" data-name="Path 40" d="M512.144,339.04435a7.73852,7.73852,0,0,0,0,15.475h33.945a7.73852,7.73852,0,0,0,.25408-15.475q-.12705-.00216-.25408,0Z" transform="translate(-195.61083 -169.79089)" fill="#3f3d56"/><path id="ff7e389f-e1f1-4104-a8c8-8a888f7bdbd5" data-name="Path 40" d="M512.144,427.53184a7.73853,7.73853,0,0,0,0,15.475h33.945a7.73853,7.73853,0,0,0,.25408-15.475q-.12705-.00214-.25408,0Z" transform="translate(-195.61083 -169.79089)" fill="#3f3d56"/><path id="ab3f55ca-45f9-4d6f-a8ad-e44fa73330dd" data-name="Path 40" d="M498.68028,276.14576a7.73852,7.73852,0,0,0,0,15.475H692.68356a7.73852,7.73852,0,1,0,.25407-15.475q-.127-.00214-.25407,0Z" transform="translate(-195.61083 -169.79089)" fill="#876ab1"/><path id="b755e68c-1f13-420d-a9db-7573ff270e8f" data-name="Path 40" d="M498.68028,365.93454a7.73853,7.73853,0,0,0,0,15.475H692.68356a7.73853,7.73853,0,1,0,.25407-15.475q-.127-.00215-.25407,0Z" transform="translate(-195.61083 -169.79089)" fill="#876ab1"/><path id="f0f56a0b-ed67-4282-9bfe-4d2fc6a8304e" data-name="Path 40" d="M498.68028,455.72332a7.73853,7.73853,0,0,0,0,15.475H692.68356a7.73853,7.73853,0,1,0,.25407-15.475q-.127-.00215-.25407,0Z" transform="translate(-195.61083 -169.79089)" fill="#e6e6e6"/><circle cx="231.01453" cy="113.48282" r="15.49522" fill="#876ab1"/><polygon points="229.577 119.849 225.063 114.045 227.688 112.003 229.826 114.751 237.046 107.129 239.461 109.417 229.577 119.849" fill="#fff"/><circle cx="231.01453" cy="203.2716" r="15.49522" fill="#876ab1"/><polygon points="229.577 209.638 225.063 203.834 227.688 201.792 229.826 204.54 237.046 196.918 239.461 199.206 229.577 209.638" fill="#fff"/><circle cx="231.01453" cy="293.06039" r="15.49522" fill="#e6e6e6"/><circle cx="570.65036" cy="113.48282" r="15.49522" fill="#e6e6e6"/><circle cx="570.65036" cy="203.2716" r="15.49522" fill="#e6e6e6"/><circle cx="570.65036" cy="293.06039" r="15.49522" fill="#e6e6e6"/><polygon points="229.577 299.427 225.063 293.623 227.688 291.581 229.826 294.329 237.046 286.707 239.461 288.994 229.577 299.427" fill="#fff"/><rect x="765.12121" y="277.14695" width="1.82392" height="12.25353" transform="translate(-171.54967 454.84531) rotate(-45)" fill="#fff"/><rect x="760.36243" y="282.36175" width="12.25353" height="1.82392" transform="translate(-171.4161 455.16777) rotate(-45)" fill="#fff"/><rect x="765.12121" y="366.93573" width="1.82392" height="12.25353" transform="translate(-235.03993 481.14383) rotate(-45)" fill="#fff"/><rect x="760.36243" y="372.15053" width="12.25353" height="1.82392" transform="translate(-234.90636 481.46629) rotate(-45)" fill="#fff"/><rect x="765.12121" y="456.72451" width="1.82392" height="12.25353" transform="translate(-298.53019 507.44236) rotate(-45)" fill="#fff"/><rect x="760.36243" y="461.93932" width="12.25353" height="1.82392" transform="translate(-298.39662 507.76482) rotate(-45)" fill="#fff"/><path d="M429.60628,456.644l0,0a11.189,11.189,0,0,0,2.07159-16.8958l-14.87535-16.21464-14.28784,7.23417,10.93577,21.59872A11.189,11.189,0,0,0,429.60628,456.644Z" transform="translate(-195.61083 -169.79089)" fill="#ffb8b8"/><path d="M237.31712,504.79917h0a11.189,11.189,0,0,0,9.48031-14.138l-5.94682-21.18551H224.83578v24.20941A11.189,11.189,0,0,0,237.31712,504.79917Z" transform="translate(-195.61083 -169.79089)" fill="#ffb8b8"/><polygon points="134.211 494.829 164.462 490.084 152.006 477.034 134.211 477.034 134.211 494.829" fill="#ffb8b8"/><path d="M232.54664,665.8059l31.43656,8.304c-5.79009-12.01125-9.35561-22.63887-7.11771-29.65714l-14.82857-1.77943Z" transform="translate(-195.61083 -169.79089)" fill="#ffb8b8"/><polygon points="43.46 475.848 61.848 479.407 112.265 316.886 133.618 478.814 153.192 478.814 151.412 249.861 75.49 249.861 43.46 475.848" fill="#575a88"/><path d="M335.61338,671.82244l29.92246-9.84292a5.8194,5.8194,0,0,0,3.38661-8.13052h0a5.81942,5.81942,0,0,0-5.59735-3.20366l-6.78757.45862-2.66005-1.497a1.5473,1.5473,0,0,0-2.18963,1.93756l2.45306,5.95743-24.912-1.77943-1.22914,9.8331A5.83529,5.83529,0,0,0,335.61338,671.82244Z" transform="translate(-195.61083 -169.79089)" fill="#575a88"/><path d="M234.47922,676.34724l32.5268,2.109a6.02177,6.02177,0,0,0,6.39161-6.497h0a6.02175,6.02175,0,0,0-4.13586-5.23749l-6.69305-2.18154-1.97533-2.46461a1.6011,1.6011,0,0,0-2.8504,1.01423l.05373,6.66652-23.22759-11.33084-4.97812,8.96477A6.03819,6.03819,0,0,0,234.47922,676.34724Z" transform="translate(-195.61083 -169.79089)" fill="#575a88"/><circle cx="108.11294" cy="99.79562" r="21.94628" fill="#ffb8b8"/><path d="M289.48834,309.92023h30.25029v-29.064H289.48834C291.9882,289.83221,291.665,299.61227,289.48834,309.92023Z" transform="translate(-195.61083 -169.79089)" fill="#ffb8b8"/><path d="M266.94892,422.61736l83.04,1.18628,8.304-87.72953a27.39706,27.39706,0,0,0-18.58664-25.94176l-12.84993-4.36412-7.11771-8.304c-8.98649-1.942-18.76408-1.47124-29.064.59314l-7.71086,11.26971-8.3035,2.65006A27.31206,27.31206,0,0,0,255.663,338.763C261.84175,370.67718,266.64626,400.33815,266.94892,422.61736Z" transform="translate(-195.61083 -169.79089)" fill="#876ab1"/><path d="M221.87006,469.47564l20.76,2.37257,23.72571-95.496,2.37258-61.68685-.70049.339A39.29052,39.29052,0,0,0,246.578,342.8475Z" transform="translate(-195.61083 -169.79089)" fill="#876ab1"/><path d="M403.37176,433.88707l16.01486-7.71086-46.97335-87.65129a61.41264,61.41264,0,0,0-31.32148-28.01154h0l8.89714,55.75542Z" transform="translate(-195.61083 -169.79089)" fill="#876ab1"/><path d="M290.15954,289.33938s21.5203-1.2763,21.98617-4.99863,3.60792-12.21356,7.33025-11.7477,14.03836-11.94308,11.829-16.94539-12.63709-23.41946-33.92583-14.931-18.84916,29.7763-16.63975,34.7786S290.15954,289.33938,290.15954,289.33938Z" transform="translate(-195.61083 -169.79089)" fill="#2f2e41"/><path d="M816.82968,558.3384a1.07172,1.07172,0,0,0-1.03315.79175l-1.72859,6.42045a1.07,1.07,0,0,0,1.03315,1.34839H847.975a1.06984,1.06984,0,0,0,1.01086-1.42015l-2.22236-6.42044a1.07062,1.07062,0,0,0-1.0112-.72Z" transform="translate(-195.61083 -169.79089)" fill="#876ab1"/><path d="M768.82968,558.3384a1.07172,1.07172,0,0,0-1.03315.79175l-1.72859,6.42045a1.07,1.07,0,0,0,1.03315,1.34839H799.975a1.06984,1.06984,0,0,0,1.01086-1.42015l-2.22236-6.42044a1.07062,1.07062,0,0,0-1.0112-.72Z" transform="translate(-195.61083 -169.79089)" fill="#876ab1"/></svg>
                        </div>
                        <div class="details-part">
                            <p class="details-heading">Welcome to NXP IT-APP</p>
                            <p class="details-text">We're glad you're here! Finish this slide tutorial for an overview of all the areas of NXP IT-APP. Your Network Related form is now digital!   </p>
                        </div>
                      </div>
                  </div>

                  {{-- 2nd Slide --}}
                  <div class="swiper-slide">
                      <div class="help-division">
                        <div class="display-part"></div>
                        <div class="details-part"></div>
                      </div>
                  </div>

                  {{-- 3rd Slide --}}
                  <div class="swiper-slide">
                      <div class="help-division">
                        <div class="display-part"></div>
                        <div class="details-part"></div>
                      </div>
                  </div>

                  {{-- 4th Slide --}}
                  <div class="swiper-slide">
                      <div class="help-division">
                        <div class="display-part"></div>
                        <div class="details-part"></div>
                      </div>
                  </div>

                  {{-- 5th Slide --}}
                  <div class="swiper-slide">
                      <div class="help-division">
                        <div class="display-part"></div>
                        <div class="details-part"></div>
                      </div>
                  </div>



                </div>
                <div class="swiper-paginations"></div>
                <div class="progress-btn">
                    <button type="button" class="btn btn-progress swiper-button-next">Next</button>
                    <button type="button" class="btn btn-progress swiper-button-prev">Previous</button>
                </div>
            </div>
          </div>
        </div>
    </div>
    
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js" defer></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

</body>
</html>
