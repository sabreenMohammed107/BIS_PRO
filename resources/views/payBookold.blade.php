<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('web-assets/css\book pay .css')}}">


    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>دفع رسوم الكتب</title>

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
            top: 689px;
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
</head>


</head>

<body>
    <img id="bg" style="z-index: 0" src="{{ asset('web-assets/IMG/illustrations/Geometric elements.png')}}" alt="">
   @include('layout.nav')
    <br><br><br><br>
    <section class="first1"  >
        <h3 id="h3f">استمارة تسديد رسوم الكتب الالكترونية للعام الاكاديمى 2023/2024</h3><br>
        <form action="submit-data.php" method="post" style="z-index: 99999999">
            <label id="sname" for="name"  >{{Auth::user()->name ?? ''}}  :اسم الطالب</label>
            <br><br>
            <label id="level" for="country">{{Auth::user()->level->name ?? ''}} المستوى </label>

            <br><br>
            <label id="semmester" for="country">الفصل الدراسى</label>
            <select id="country2" name="country" style="z-index: 99999999">
                @foreach ($semesters as $semester)
                <option  value="{{ $semester->id }}" {{ old('semester_id') == $semester->id ? "selected" :""}} >{{ $semester->semesters ?? '' }}
                </option>
            @endforeach
		</select><br><br>
            <label id="section" for="country">القسم</label>
            <input type="text" id="name1" name="name" style="z-index: 99999999" value="{{Auth::user()->department->name ?? ''}}"><br><br>

            <br><br><br><br><br><br>

            <section class="second2"><br><br><br>
                <h3 id="h3pay"> تسديد رسوم الكتب الالكترونية للعام الاكاديمى 2023/2024</h3><br>
                    <label id="cardno" for="number">رقم البطاقة</label>
                    <input type="number" id="noumber" name="n_id" required><br><br>
                        <label id="cardname" for="name">اسم صاحب البطاقة</label>
                        <input type="text" id="name" name="name" required><br><br>
                        <form action="submit-data.php" method="post">
                            <label id="carddate" for="data">تاريخ الانتهاء</label>
                            <input type="date" id="data" name="DATA" required><br><br>
                            <label id="cardpin" for="password">رمز الامان</label>
                            <input type="password" id="password" name="password" required><br><br>
                           <br><br>  <br><br><br> <br>   <br><br><br> <br>
                            {{-- <input type="checkbox" id="interests2" name="interests[]" value="Music">
                            <label id="cookes" for="interests2">اوافق على الشروط والاحكام</label><br>
                            <input type="checkbox" id="interests3" name="interests[]" value="Sports">
                            <label id="accept" for="interests3">اوافق على شروط اتفاقية الاستخدام والخصوصية</label><br><br> --}}
                            <div>
                                <button class="button"><span>تاكيد </span></button>
                            </div>
                        </form>
                        <br><br><br> <br>
            </section>

            <h1 class="heading"><span>Contact</span>US</h1>
            <section class="contact" id="contact">
                <img id="image1" src="IMG/illustrations/Geometric elements.png" alt="">
                <div class="conten">
                    <div class="cnt">
                        <div class="box">


                            <div class="text">
                                <h3>Address</h3>
                                <p>Egypt,<br>Portsaid,Eldawahy,090</p>
                            </div>
                        </div>
                        <div class="box">


                            <div class="text">
                                <h3>Phone</h3>
                                <p>0123456789</p>
                            </div>

                        </div>
                        <div class="box">


                            <div class="text">
                                <h3>Email</h3>
                                <li id="edu"><a href="https://psu.edu.eg/">Website</a></li>



                            </div>
                        </div>
                        <div class="box">


                            <div class="text">

                                <h3>facebook</h3> <br>
                                <li id="facebook"><a href="https://www.facebook.com/MTIS.psu.edu.eg/">Facebook</a></li>


                            </div>
                        </div>

                    </div>

                </div>

                <div class="conform">

                    <div> <img id="image2" src="IMG/illustrations/5.png" alt=""></div>
                    <form>
                        <h2>سجل معانا عشان نبعتلك كل جديد علي بريدك الاكاديمي</h2>
                        <div class="intbox">
                            <input type="text" name="" required="required">
                            <span> الاسم</span>
                        </div>
                        <div class="intbox">
                            <input type="email" name="" required="required">
                            <span>البريد الاكاديمي</span>
                        </div>

                        <div class="intbox">
                            <input type="submit" name="" value="send">
                        </div>
                    </form>
                    <div class="footer" id="footer">
                        <h4 id="ab">About Us</h4>
                        <p id="about">This site was made in order to help the user to get uni services easily and quickly,<br> it was made 2023 by BIS </p>
                    </div>

                </div>

                </div>
                <br><br><br>




            </section>

</body>

</html>
