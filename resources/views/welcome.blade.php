<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .button {
            border-radius: 36px;
            background-color: #06283D;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 30px;
            padding: 10px;
            width: 185px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
            position: absolute;
            top: 2016px;
            left: 630px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('web-assets/css/home.css')}}">
    <script>
        function toggleDarkMode() {
            var element = document.body;

        }
    </script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PSU</title>

</head>

<body>

    <img id="logo1" src="{{asset('web-assets/IMG/PSU pngs/image 2.png')}}" alt="" />
    <h2 id="firstt">اهلا بك فى موقع الخدمات الطلابية</h2>
    <p id="uni">
        اختر كليتك
    </p>
    <a href="{{ route('web-login') }}">
    <img id="mtis" src="{{asset('web-assets/IMG/PSU pngs/image 1.png')}}" alt="">
    <p id="t1"> كلية تكنولوجيا الادارة ونظم المعلومات </p>
    </a>
    <img id="eng" src="{{asset('web-assets/IMG/PSU pngs/image 3.png')}}" alt="" />
    <p id="t2">كلية الهندسة </p>
    <img id="com" src="{{asset('web-assets/IMG/PSU pngs/image 4.png')}}" alt="" />
    <p id="t3"> كلية التجارة </p>
    <img id="lan" src="{{asset('web-assets/IMG/PSU pngs/image 5.png')}}" alt="" />
    <p id="t4"> كلية الاداب </p>
    <img id="fineart" src="{{asset('web-assets/IMG/PSU pngs/image 6.png')}}" alt="" />
    <p id="t5">كلية التربيةالنوعية</p>
    <img id="spor" src="{{asset('web-assets/IMG/PSU pngs/image 7.png')}}" alt="" />
    <p id="t6"> كليةالتربية الرياضية</p>
    <img id="sci" src="{{asset('web-assets/IMG/PSU pngs/image 8.png')}}" alt="" />
    <p id="t7"> كلية العلوم</p>
    <img id="phr" src="{{asset('web-assets/IMG/PSU pngs/image 9.png')}}" alt="" />
    <p id="t8"> كلية الصيدلة</p>
    <img id="med" src="{{asset('web-assets/IMG/PSU pngs/image 10.png')}}" alt="" />
    <p id="t9"> كلية التمريض</p>
    <img id="dr" src="{{asset('web-assets/IMG/PSU pngs/image 11.png')}}" alt="" />
    <p id="t10"> كلية الطب</p>
    <img id="ed" src="{{asset('web-assets/IMG/PSU pngs/Rectangle 9.png')}}" alt="" />
    <p id="t11"> كلية التربية</p>
    {{-- <div>
        <button class="button"><span ><a href="log in page.html"> تاكيد </span ></button ></a>
</div > --}}

  </body>
</html>
