@extends('layouts.blades.layout')
@section('content')
    <section class="container" style="margin-top:160px">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6" style="border-radius: 5px;">
                <div style="box-shadow: -15px 15px  1px 5px rgb(219, 248, 248);
                ">
                    <img src="pictures/pic3.jpg" class="w-100">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="mt-4">
                    <h3 style="font-size: 45px;font-family: 'Work Sans', sans-serif">Welcome To<br>
                        <span style="font-weight:800;">Modern Clinic.</span></h3>
                    <p class="lead mt-5 mb-3">Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veni.</p>
                    <ul style="list-style-type: none; line-height:2;padding:0">
                        <li><img style="width: 20px; margin-right:10px" src="pictures/icon.png"> Lorem ipsum dolor sit
                            amet </li>
                        <li> <img style="width: 20px; margin-right:10px" src="pictures/icon.png"> Consectetur
                            adipisicing elit, sed do</li>
                        <li> <img style="width: 20px; margin-right:10px" src="pictures/icon.png"> Eiusmod tempor
                            incididunt ut labore </li>
                    </ul>
                    <a class="btn btn-primary btn-lg mt-3">About us</a>
                </div>
            </div>
        </div>
    </section>
    <!--===============================================================================================-->
    <section class="container" style="margin-top: 100px;">
        <div class="row justify-content-center" style="margin:0 75px;text-align:center;margin:60px auto;">
            <div class="col-6">
                <h1>Our Doctors</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card text-center">
                    <div class="pic">
                        <img class="card-img-top" src="pictures/doc1.webp" alt="Card image cap">
                    </div>
                    <div class="card-body ">
                        <h5 class="card-title text-primary " style="font-size: 25px;">Jhon Smith</h5>
                        <p class="text-muted" style="font-size: 18px;">Dentist.</p>
                        <hr
                            style="height:.4px;border-width:0;color:rgb(193, 229, 231);background-color:rgb(143, 160, 143) ;width:70%">


                        <ul class="ulnav" style="display: inline-block;list-style-type:none;">
                            <li> <a href="#"><i class="fa fa-facebook-f pr-1 "></i> </a></li>
                            <li> <a href="#"><i class="fa fa-linkedin " aria-hidden="true"></i> </a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card text-center">
                    <div class="pic">
                        <img class="card-img-top" src="pictures/doc2.webp" alt="Card image cap">
                    </div>
                    <div style=" border-top-left-radius: 20px;">
                        <div class="card-body">

                            <h5 class="card-title text-primary " style="font-size: 25px;">Jhon Smith</h5>
                            <p class="text-muted " style="font-size: 18px;">Dentist.</p>


                            <hr
                                style="height:.4px;border-width:0;color:rgb(143, 160, 143);background-color:rgb(143, 160, 143) ;width:70%">
                            <ul class="ulnav" style="display: inline-block;list-style-type:none;">
                                <li> <a href="#"><i class="fa fa-facebook-f pr-1 "></i> </a></li>
                                <li> <a href="#"><i class="fa fa-linkedin " aria-hidden="true"></i> </a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card text-center">
                    <div class="pic">
                        <img class="card-img-top" src="pictures/doc3.webp" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-primary " style="font-size: 25px;">Jhon Smith</h5>
                        <p class="text-muted" style="font-size: 18px;">Dentist.</p>


                        <hr
                            style="height:.4px;border-width:0;color:rgb(143, 160, 143);background-color:rgb(143, 160, 143) ;width:70%">
                        <ul class="ulnav" style="display: inline-block;list-style-type:none;">
                            <li> <a href="#"><i class="fa fa-facebook-f pr-1 "></i> </a></li>
                            <li> <a href="#"><i class="fa fa-linkedin " aria-hidden="true"></i> </a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

    </section>
    <section class="consultation" style="margin-top: 100px;">
        <div class="row">
            <div style="height: 670px;" class="left">
            </div>
            <div class="right">
                <div class="heading">
                    <h2>
                        Book an
                        Appointment
                    </h2>
                </div>
                <div class="info">
                    <form action="/reservation" method="post">
                         @csrf
                        <div class="form-group">
                        <label>select your department</label>
                            <select onchange="myFunction(this)"  name="deptartment_id">
                                @foreach($departments as $department)
                                <option value="{{$department['id']}}">{{$department['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                      
                        <div class="form-group">
                        <label>doctors in this department are</label>
                            <select  id="doc" name="user_id">
                            
                            </select>
                        </div>

                        <input type="text" name="name" placeholder="your name" />
                        <input type="text" name="age" placeholder="your age" />
                            {{$errors}}
                        <input type="Number" name="mobile" placeholder="your mobile number" />
                        <input type="date" name="date" placeholder="Date" />
                        <input type="time" name="time" placeholder="Time" />
                        <input type="submit" value='Book an Appointment'/>
                    </form>
                    
                </div>

            </div>
        </div>
    </section>

    <section class="container" style="margin-top: 200px; margin-bottom: 250px;">
        <div class="row justify-content-center" style="margin:0 75px;text-align:center;margin:60px auto;">
            <div class="col-6">
                <h1>Quality Health</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6"
                 style="text-align:center; max-width:30%  ;border:1px solid rgb(222, 250, 222);padding:25px;margin-right:3%">
                <div style="width: 18rem;">
                    <div class="icon bd-placeholder-img rounded-circle text-center mb-4" width="140" height="140"><i
                            class="fa fa-ambulance align-middle" aria-hidden="true"></i></div>
                    <h4 class="mb-3">Health Consultation</h4>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6"
                 style="text-align:center ; max-width:30%;border:1px solid rgb(222, 250, 222); padding:25px;margin-right:3%">
                <div style="width: 18rem;">
                    <div class="icon bd-placeholder-img rounded-circle text-center mb-4" width="140" height="140"><i
                            class="fa fa-ambulance align-middle" aria-hidden="true"></i></div>
                    <h4 class="mb-3">Health Consultation</h4>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6"
                 style="text-align:center ;; max-width:30%;border:1px solid rgb(222, 250, 222); padding:25px;margin-right:3%">
                <div style="width: 18rem;">
                    <div class="icon bd-placeholder-img rounded-circle text-center mb-4" width="140" height="140"><i
                            class="fa fa-ambulance align-middle" aria-hidden="true"></i></div>
                    <h4 class="mb-3">Health Consultation</h4>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt.</p>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container-fluid text-white rounded bg-dark row p-0 m-0 justify-content-center"
             style="height: 400px; text-align: center;">
            <div class="col-lg-6 col-md-12 px-0"
                 style="background-image: url('pictures/p1.webp'); background-size:cover; background-color: rgba(152, 15, 14, .5);">
                <div style=" margin-top: 100px;">
                    <span>We are here for you</span>
                    <h1 class="display-4 font-italic">Book Appointment</h1>
                    <button type="button" class="btn btn-lg btn-outline-light">Book Appointment</button>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 px-0"
                 style="background-image: url('pictures/p2.webp'); background-size:cover;">
                <div style=" margin-top: 150px;">
                    <span>Emergency Medical Care</span>
                    <h1 class="display-4 font-italic">+1-465 4545</h1>
                </div>
            </div>
        </div>

        </div>
    </section>
    <script>
    var departments = {!!json_encode($departments->toArray())!!};
    console.log(departments)
    
         function myFunction(department){
             console.log('hello');
            var select = document.getElementById('doc');
            console.log(department.value);
           
            for(var j = 0 ; j<departments.length ;j++){
                if(departments[j].id == department.value){
                    alldoctors=departments[j].users;
                    for(var i = 0 ; i<alldoctors.length ;i++){
                        var option = document.createElement('option');
                        option.innerText=alldoctors[i].name;
                        option.value = alldoctors[i].id;
                        select.append(option);
                    }
                }
         } 
         
     }             
                        
                        
    </script>

@endsection
