<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <style>
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
            top: 495px;
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
    </style> --}}
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('web-assets/css/log in page.css') }}">
<script>
    function toggleDarkMode() {
        var element = document.body;

    }
</script>
</head>


<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>MTIS</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <section >
        <div class="row">
            <div class="col-md-6">
                <img id="shape" class="w-100" src="{{ asset('web-assets/IMG/illustrations/Shapes.png') }}" alt="">
                <div class="content">
                    <img id="logboy"  src="{{ asset('web-assets/IMG/illustrations/1.png') }}" alt="">
                    <h2 id="sub">تسجيل مواد الفصل الدراسي</h2>
                    <p id="sin">
                        قم بتسجيل جميع مقرراتك الدراسية بدون اخطاء باستخدام موقع الخدمات الطلابية
                    </p>
                    <img id="logo1" src="{{ asset('web-assets/IMG/PSU pngs/image 2.png') }}" alt="" />

                </div>

            </div>
            <div class="col-md-6 " style="padding-top: 150px">

                <div class="row p-5" style="direction: rtl">
                    <h2 class="py-5">تسجيل الدخول</h2>
                    <p class="">
                        سجل دخولك الان واحصل على جميع خدماتك الطلابية بسهولة وفى مكان واحد
                    </p>
                </div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <ul class="p-0 m-0" style="list-style: none;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (\Session::has('msg'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <ul class="p-0 m-0" style="list-style: none;">
                            <li>{!! \Session::get('msg') !!}</li>

                        </ul>
                    </div>
                @endif
                <div class="row " style="direction: rtl">
                    <form method="POST" class="bg-white rounded shadow-5-strong p-5" action="{{ route('save-user') }}">
                        @csrf


                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">الايميل الاكاديمي </label>
                            <input style="direction: rtl" class="form-control" id="formGroupExampleInput" type="email"
                                placeholder="الاميل الاكاديمى " name="email" />
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">كلمة السر</label>
                            <input class="form-control" required id="formGroupExampleInput2" type="password"
                                placeholder="كلمة المرور" name="password" />
                        </div>


                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary btn-block">تاكيد </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
