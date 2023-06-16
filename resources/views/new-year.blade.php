<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('web-assets/css\styles new year.css')}}">

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> التقديم في العام الجديد</title>
</head>

<body dir="rtl" style="text-align: right;">
    @include('layout.nav')


    <br><br><br><br><br>
    <div class="container">
        <div class="box">
            <h3 id="hed">قدم اوراقك الان وبكل سهولة</h3>
            <h5 id="need">يتم احضار الاوراق التالية والتوجه بها الى الكلية عند فتح باب التقديم للعام الجامعى الجديد</h5>
            <ul>
                <li>خطاب الترشيح</li>
                <li>شهادة الثانوية العامة + 3 صور منها</li>
                <li>شهادة الميلاد كمبيوتر + 3 صور منه</li>
                <li>صورة من البطاقة الشخصية</li>
                <li>عدد 8 صور شخصية 4*6</li>
                <li>توقيع الكشف الطبى</li>
                <li>سداد الرسوم الدراسية</li>
                <li>تسجيل طلب الالتحاق</li>
            </ul>
            <br><br>
            <ul>
                <h5 id="male">بالنسبة للذكور</h5>
                <li>نموذج 2 جند من مكتب التعبئة بالمحافظة</li>
                <li>نموذج 6 جند للطلاب التى تمت 18 سنة من المركز او القسم التابع له</li>
                <li>التوقيع على الاقرار الخاص بالتجنيد</li>
            </ul>
        </div>
    </div>

    <a id="link" href="https://www.facebook.com/MTIS.psu.edu.eg/">برجاء متابعة موقع الكلية لمعرفة بدء ميعاد التقديم</a>
    <img src="IMG/illustrations/11.png" alt="" />

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
