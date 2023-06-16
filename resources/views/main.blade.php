@extends('layout.siteLayout')

@section('content')
<div class="content">
    <p id="und">كلية تكنولوجيا الادارة و نظم المعلومات </p>
    <p id="unc">الموقع الخاص بكلية تكنولوجياالادارة و نظم المعلومات</p>
    <div>
        <button type="button"><a href="log in page.html">تسجيل </a></button>
    </div>
</div>

<section class="about" id="about ">
    <h1 id="un3" class="heading"> دلوقتي تقدر تخلص كل <br>الي عليك من موقع الكلية </h1>
    <br>
    <div class="row">
        <div class="about-img">
            <img src="{{ asset('web-assets/IMG/illustrations/2.png') }}" alt="Apple">
        </div>

        <div class="about-text">
            <a href="/home page/home page.HTML">
                <button type="button">اعرف اكتر</button>
            </a>
        </div>
    </div>



</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br>
<section class="products" id="products">
    <h1 id="un4" class="heading"> الخدمات الطلابية</h1>
    <div class="roww">

        @isset($services[0])
        <div class="productcol">
            <a href="/pay page/index.html">
                <img src="{{ asset('uploads/services') }}/{{$services[0]->image }}">
                <div class="ip">
                    <h3>{{$services[0]->title}}</h3>
                </div>
            </a>
        </div>
        @endisset
        @isset($services[1])
        <div class="productcol">
            <a href="/pay page/index.html">
                <img src="{{ asset('uploads/services') }}/{{$services[1]->image }}">
                <div class="ip">
                    <h3>{{$services[1]->title}}</h3>
                </div>
            </a>
        </div>
        @endisset
        @isset($services[2])
        <div class="productcol">
            <a href="/pay page/index.html">
                <img src="{{ asset('uploads/services') }}/{{$services[2]->image }}">
                <div class="ip">
                    <h3>{{$services[2]->title}}</h3>
                </div>
            </a>
        </div>
        @endisset

        @isset($services[3])
        <div class="productcol">
            <a href="/pay page/index.html">
                <img src="{{ asset('uploads/services') }}/{{$services[3]->image }}">
                <div class="ip">
                    <h3>{{$services[3]->title}}</h3>
                </div>
            </a>
        </div>
        @endisset
        @isset($services[4])
        <div class="productcol">
            <a href="/pay page/index.html">
                <img src="{{ asset('uploads/services') }}/{{$services[4]->image }}">
                <div class="ip">
                    <h3>{{$services[4]->title}}</h3>
                </div>
            </a>
        </div>
        @endisset
        @isset($services[5])
        <div class="productcol">
            <a href="/pay page/index.html">
                <img src="{{ asset('uploads/services') }}/{{$services[5]->image }}">
                <div class="ip">
                    <h3>{{$services[5]->title}}</h3>
                </div>
            </a>
        </div>
        @endisset
        {{-- <div class="productcol">
            <a href="/نتائج الطلاب/index.html">
                <img src="{{ asset('web-assets/IMG/illustrations/7.png') }}">
                <div class="ip">
                    <h3>درجات الطلاب</h3>
                </div>
            </a>
        </div>
        <div class="productcol">
            <a href="/التدريب الصيفي/التدريب الصيفي/index.html">
                <img src="{{ asset('web-assets/IMG/illustrations/11.png') }}">
                <div class="ip">
                    <h3>التدريب الصيفي</h3>
                </div>
            </a>
        </div>

        <div class="productcol">
            <a href="/التربية العسكرية/idex.html">
                <img
                    src="{{ asset('web-assets/IMG/illustrations/3d-casual-life-check-mark-in-box-side-view-blue.png') }}">
                <div class="ip">
                    <h3>التربية العسكرية</h3>
                </div>
            </a>
        </div>

        <div class="productcol">
            <a href="/محو الامية/index.html">
                <img src="{{ asset('web-assets/IMG/illustrations/8.png') }}">
                <div class="ip">
                    <h3>محو الامية</h3>
                </div>
            </a>
        </div>

        <div class="productcol">
            <a href="/book pay/iddex.html">
                <img src="{{ asset('web-assets/IMG/illustrations/3d-casual-life-young-man-shopping-online.png') }}">
                <div class="ip">
                    <h3>دفع مصروفات الكتب</h3>
                </div>
            </a>
        </div> --}}
    </div>
</section>



<p id="con">Contact US</p>

<section class="contact" id="contact">
    <img id="image1" src="{{ asset('web-assets/IMG/illustrations/Geometric elements.png') }}" alt="">
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

        <div> <img id="image2" src="{{ asset('web-assets/IMG/illustrations/5.png') }}" alt=""></div>
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
            <p id="about">This site was made in order to help the user to get uni services easily and
                quickly,<br> it was made 2023 by BIS </p>
        </div>

    </div>

</section>

@endsection




