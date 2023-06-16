<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home</title>
    <link rel="stylesheet" href="{{ asset('web-assets/css\style main.css') }}" />

    <link rel="stylesheet" href="{{ asset('web-assets/css\bootstrap.min.css') }}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


</head>

<body dir="rtl" style="text-align: right;">
   @include('layout.nav')

   <section class="formSection"> <div class="container">

    <div class="row text-center my-5">
        <div class="col-md-2"></div>

        <div class="col-md-8">
            <span class="text-center" style="text-align: right">استمارة تسديد رسوم الالتماس للعام الاكاديمى 2023/2024</span>

        </div>
        <div class="col-md-2"></div>
            </div>
            </div>
   </section>
<section class="formSection">
    <div class="container">


        <form dir="rtl" action="{{ url('saveEltemas') }}" method="post">
            @csrf
            <input type="hidden" name="paid_service_id" value="{{ $serv->id }}" >
            <input type="hidden" name="user_id" value="{{ Auth::user()->id}}" >
            <div class="form-row">
              <div class="form-group col-md-6" dir="rtl">
                <label for="inputEmail4" dir="rtl" style="text-align:right">اسم الطالب</label>
                <input type="text" class="form-control" readonly id="inputEmail4" value="{{ Auth::user()->name ?? '' }}" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4" dir="rtl">المستوي</label>
                <input type="text" class="form-control" readonly id="inputPassword4" value="{{ Auth::user()->level->name ?? '' }}">
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6" dir="rtl">
                  <label for="inputEmail4" dir="rtl" style="text-align:right"> القسم</label>
                  <input type="text" readonly class="form-control" id="inputEmail4" value="{{ Auth::user()->department->name ?? '' }}" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4" dir="rtl">الفصل الدراسي</label>
                  <select  class="form-control"
                  data-control="select2" data-placeholder=" select .."
                  data-show-subtext="true" name="semester_id" data-live-search="true" id="country"
                  data-dependent="sub">
                  <option  value=""></option>
                  @foreach ($semesters as $semester)
                      <option  value="{{ $semester->id }}" {{ old('semester_id') == $semester->id ? "selected" :""}} >{{ $semester->semesters ?? '' }}
                      </option>
                  @endforeach
              </select>                </div>
              </div>

        <div class="row text-center my-5">
            <div class="col-md-2"></div>

            <div class="col-md-8">
                <span class="text-center" style="text-align: right">تسديد رسوم التماس  للعام الاكاديمى 2023/2024</span>

            </div>
            <div class="col-md-2"></div>
                </div>


                    <div class="form-row">
                      <div class="form-group col-md-6" dir="rtl">
                        <label for="inputEmail4" dir="rtl" style="text-align:right"> رقم البطاقه</label>
                        <input type="text" required class="form-control" id="inputEmail4" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4" dir="rtl">تاريخ الإنتهاء</label>
                        <input type="date" required class="form-control" >
                      </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6" dir="rtl">
                          <label for="inputEmail4" dir="rtl" style="text-align:right"> اسم صاحب البطاقة</label>
                          <input type="text" required class="form-control" id="inputEmail4" >
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4" dir="rtl">رمز الامان</label>
                          <input type="text" required class="form-control" id="inputEmail4" >
                        </div>
                      </div>

            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input mx-1" type="checkbox" checked id="gridCheck">
                <label class="form-check-label px-1" for="gridCheck">
                 اوافق على الشروط والاحكام
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">تأكيد </button>
          </form>
    </div>
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
