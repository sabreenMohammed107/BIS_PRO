<section>
    <img id="logo1" src="{{ asset('web-assets/IMG/PSU pngs/image 2.png') }}" alt="" />
    <div class="topnav" id="myTopnav">
        <a href="{{ url('/main') }}" class="active">الرئسية</a>

        <div class="dropdown">
            <button class="dropbtn">شئون الطلاب
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">تسجيل المواد</a>
                <a href="{{ url('/pay-book/7') }}">دفع رسوم الكتب</a>
                <a href="{{ url('/pay-page/8') }}">دفع الرسوم الدراسية</a>
                <a href="{{ url('/askar/9') }}"> التربية العسكرية</a>
                <a href="{{ url('/new-year/10') }}">التقديم في العام الجامعي الجديد</a>

            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"> الخدمات الطلابية
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">

                <a href="{{ url('/eltemas/1') }}"> تقديم التماس</a>
                <a href="#">معرفة التقدير التراكمي</a>
                <a href="#">الكتب الالكترونية </a>
                <a href="{{ url('/summer/4') }}"> التدريب الصيفي</a>
                <a href="{{ url('/unread/5') }}"> محو الاموية </a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">رعاية الشباب
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a target="_blank" href="https://www.facebook.com/TecUnion">Tecno union</a>
                <a target="_blank" href="https://www.facebook.com/ACPCPSU/">ACPC</a>
                <a target="_blank" href="https://oncampus.hultprize.org/portsaiduniversity">Hult prize</a>
                <a target="_blank" href="https://www.facebook.com/tostaytogether">Hayaa initiative</a>
                <a target="_blank" href="https://gdsc.community.dev/portsaid-university/">GDSC PSU</a>
                <a target="_blank" href="https://www.facebook.com/TechnoScouts">tecno Scout</a>
            </div>
        </div>

        <a href="{{ url('/result') }}" class="active">نتائج الطلاب</a>

        {{-- <div class="dropdown">
            <button class="dropbtn">نتائج الطلاب
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="{{ url('/unread/5') }}"> نتيجة منتصف الفصل الدراسي </a>
                <a href="result.html">نتائج العملي و الشفوي </a>
                <a href="result.html"> نتيجة اخر العام</a>
            </div>
        </div> --}}
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
</section>
