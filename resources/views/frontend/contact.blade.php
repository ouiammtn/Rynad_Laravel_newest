@extends('frontend.layout.app')
@section('title')
Contact
@endsection
@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid contact-header page-header py-5">
    <div class="container text-start py-5 ">
        <div class ="row">
            <div class="col-lg-12 mt-5">
                <div class="row g-3">
                    <div class="col-lg-5 wow fadeIn" data-wow-delay=".3s">
                        <div class="card bg-light p-3 rounded">
                            <div class="d-flex">
                                <div class=" btn-square rounded-circle p-2" style=" background-color:#2e2ea3  ; ">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4  style="color:#2e2ea3 ;">Adresse</h4>
                                    <a href="https://maps.app.goo.gl/MLSHkTFVMctZF8Gk8" target="_blank" class="h6"> ETG 3 APPT 3, BD MASSIRA, CASABLANCA MAROC</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class=" col-lg-3 wow fadeIn" data-wow-delay=".5s">
                        <div class="card bg-light p-3 rounded">
                            <div class="d-flex">
                                <div class=" btn-square rounded-circle p-2" style=" background-color:#2e2ea3  ;">
                                    <i class="fa fa-phone text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4  style="color:#2e2ea3 ;">Appelez-nous</h4>
                                    <a class="h6" href="tel:+212 520 282 039" target="_blank">+212 520 282 039</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn mb-5" data-wow-delay=".7s">
                        <div class="card d-flex bg-light p-3 rounded mb-5">
                            <div class="d-flex">
                                <div class=" btn-square  rounded-circle p-2" style="background-color:#2e2ea3 ; ">
                                    <i class="fa fa-envelope text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="" style="color:#2e2ea3 ;">E-mail</h4>
                                    <a class="h6" href="mailto:connect@rynadguardnet.com" target="_blank">connect@rynadguardnet.com</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>

        </div>

    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="" style="background-color:#022053 ;" >
    <div class="container ">

            <div class="row ">

                <div class="col-lg-11 mx-auto wow fadeIn row contact-form rounded p-3" style="margin-top: -150px;" data-wow-delay=".5s">
                    <div class="col-lg-6 ">
                        <div class="text-center mt-5 pt-5 wow fadeIn " data-wow-delay=".3s" >
                            <h2 class="mb-3 text-white" >Besoin d'aide ou d'informations ?</h2>
                            <h3 class=" " style="color:#2e2ea3 ;"> N'hésitez pas à nous contacter !</h3>
                        </div>
                    </div>
                    <div class=" col-lg-6 mx-auto">
                        <form action="{{ route('contact.store') }}" method="POST" >
                            @csrf
                        <div class="mb-2">
                            <input type="text" class="form-control border-0 py-3" name="f_name" id="f_name" placeholder="Votre Nom">
                        </div>
                        <div class="mb-2">
                            <input type="email" class="form-control border-0 py-3" name="email" id="email" placeholder="Votre Email">
                        </div>
                        <div class="mb-2">
                            <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" name="message" id="message" placeholder="Message"></textarea>
                        </div>
                        <div class="text-center mx-auto w-50 ">
                            <button class="btn text-white py-3 px-5 " style="background-color:#2e2ea3 ; " type="submit" value="Envoyer un message">Envoyer un message</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

    </div>
</div>
<!-- Contact End -->

@endsection


