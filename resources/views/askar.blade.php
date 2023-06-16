<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('web-assets/css\styles askar.css')}}">


    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>التربية العسكرية</title>
</head>



</head>

<body>
    <img id="bg" src="{{ asset('web-assets/IMG/illustrations/Geometric elements.png')}}" alt="">
        @include('layout.nav')
    <!-- Start 1 -->
    <div class="مواعيد دورات التربية العسكرية" id="مواعيد دورات التربية العسكرية">
        <h2 class="main-title">مواعيد دورات التربية العسكرية</h2>
        <div class="container">
            <div class="box">
            </div>
            <div class="container">
                <div class="box">
                    <h4>مواعيد دورات التربية العسكرية</h4><br>
                    <ul>
                        <li>من 4/2/2023 حتى16/2/2023</li>
                        <li>من 11/2/2023 حتى23/2/2023</li>
                        <li>من 18/2/2023 حتى2/3/2023</li>
                        <li>من 25/2/2023 حتى9/3/2023</li>
                        <li>من 4/3/2023 حتى16/3/2023</li>
                        <li>من 11/2/2023 حتى23/3/2023</li>
                        <li>من 18/2/2023 حتى30/3/2023</li>
                        <li>من 25/2/2023 حتى6/4/2023</li>
                        <li>من 1/4/2023 حتى13/4/2023</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="spikes"></div>
        <!-- End 1 -->

        <!-- Start 2 -->
        <div class="التقديم فى دورة التربية العسكرية" id="التقديم فى دورة التربية العسكرية">
            <h2 class="main-title">التقديم فى دورة التربية العسكرية</h2>
            <div class="container">
                <div class="box">
                    <h4>يتم تجهيز الاوراق اللازمة للالتحاق بالدورة والتوجه بها الى مقر التربية العسكرية بكلية تجارة ببورفؤاد</h4><br>
                    <ul>
                        <li>صورة بطاقة الرقم القومي</li>
                        <li>صورة كارنية اتلكلية او اثبات قيد</li>
                        <li>عدد 2 صورة شخصية </li>
                        <li>ملىء استمارة التربية العسكرية</li>
                        <li>ملىء وثيقة تعارف الطالب</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="spikes"></div>
        <!-- End 2 -->

        <!-- Start 3 -->
        <div class="نتيجة التربية العسكرية" id="نتيجة التربية العسكرية">
            <h2 class="main-title">نتيجة التربية العسكرية</h2>
            <div class="container">
                <div class="box">

                    <div class="image">
                        <img id="im" src="{{ asset('uploads/paid-services') }}/{{$serv->image }}" alt="" />
                    </div>
                    <div class="spikes"></div>


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
</body>

</html>
