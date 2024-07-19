@extends('frontend.layout.app')
@section('title')
Home
@endsection
@section('content')
    <!-- head  -->
    <header class="head1 pb-3">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="container mx-auto mt-5  py-3" >
        <div class="row justify-content-center align-items-center hero-content">
                        <div class="col-lg-6  py-4 text-hero">
                            <h1 class="  " style="color: #e7e9ee;">
                                Maîtrisez la Cybersécurité, Façonnez Votre Avenir !</h1>
                                <p class="mt-3 para-hero">
                                    Découvrez nos parcours de formation en
                                    <span class="highlight">cybersécurité</span> et préparez-vous à exceller dans le monde numérique !
                                    Bénéficiez d'un
                                    <span class="highlight">accompagnement personnalisé</span> pour obtenir des
                                    <span class="highlight">certifications</span> mondialement reconnues et devenir un expert en sécurité en ligne !
                                </p>

                            <button class="btn text-white " style="background-color:#2e2ea3;">Obtenez votre guide gratuit
                            </button>
                        </div>
                        <div class="col-lg-1  "></div>
                        <div class="col-lg-4  m-0 ">
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div>
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email" required>
                                </div>
                                <div>
                                    <label for="name">Name:</label>
                                    <input type="text" name="name" id="name" required>
                                </div>
                                <!-- Add other input fields as necessary -->
                                <button type="submit">Submit</button>
                            </form>

                        </div>
            </div>
        </div>
    </div>
</header>
<!--offer start-->
<section class="container mt-5 ">
    <h4 class="text-center ">Chez Rynad GuardNet, on vous propose plus de 40 certifications mondialement reconnues et un coaching personnalisé pour faire avancer votre carrière.</h4>

         <div class="row py-4">
            <div class="card col-lg-4 border-0 pt-1 mt-2">
                <i class="fa fa-thin fa-laptop-code text-center fa-4x" style="color:#2e2ea3a8;"></i>
                <div class="card-body">
                    <h5 class="text-center">Apprendre à votre propre rythme</h5>
                    <p class="text-center">Profitez d'un accès flexible aux cours et aux ressources pour apprendre selon
                        votre emploi du temps.</p>
                </div>
            </div>
            <div class="card col-lg-4 border-0 pt-1 mt-2">
                <i class=" fa fa-light fa-expand-arrows-alt text-center fa-4x" style="color:#2e2ea3a8;"></i>
                <div class="card-body">
                    <h5 class="text-center">Maximiser les opportunités</h5>
                    <p class="text-center">Passez autant de certifications que vous le souhaitez pendant la période d'abonnement.</p>
                </div>
            </div>
            <div class="card col-lg-4 border-0 pt-1 mt-2">
                <i class=" fas fa-sharp fa-thin fa-project-diagram text-center fa-4x" style="color:#2e2ea3a8;"></i>
                <div class="card-body">
                    <h5 class="text-center">Adapter le parcours</h5>
                    <p class="text-center">Réévaluez et ajustez votre plan de
                        formation en fonction de vos progrès et de vos besoins changeants.</p>
                </div>
            </div>
         </div>
</section>
<!--offer end-->
<!--certificates start-->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 suppliers">
          <img src="{{ asset('frontend/img/suppliers.png') }}" class="img-fluid imgsup" alt="security certificates" >
        </div>

    </div>

</div>
<!--certificates end-->

    <!-- Fact Start -->
    <div class="container-fluid py-5 mt-5 statistac">
        <div class="container pt-5 statistiques text-center">
            <div class="row">
                <div class="col-lg-3 wow fadeIn stat" data-wow-delay="0.1s">
                    <div class="d-flex counter text-center w-50 mx-auto">
                        <h1 class="me-2 text-white  counter-value">7</h1><span><h1 class="text-white ">ans</h1></span> <br>
                    </div>
                    <h5 class="text-white mt-1 w-75">DES ANNÉES D'EXPERTISE ET DE COMPÉTENCES ÉPROUVÉES.</h5>
                </div>
                <div class="col-lg-3 wow fadeIn stat" data-wow-delay=".3s">
                    <div class="d-flex counter w-50 mx-auto">
                        <h1 class="me-1 text-white counter-value">100</h1><span><h1 class="text-white me-1">%</h1></span><br>
                    </div>
                    <h5 class="text-white mt-1 w-75">ENGAGEMENT ET SUIVI CONTINUS POUR GARANTIR VOTRE RÉUSSITE.</h5>
                </div>
                <div class="col-lg-3 wow fadeIn stat" data-wow-delay=".5s">
                    <div class="d-flex counter w-50 mx-auto">
                        <h1 class="me-1 text-white counter-value">100</h1><span><h1 class="text-white me-1">%</h1></span><br>
                    </div>
                    <h5 class="text-white mt-1 w-75">PROGRAMME PERSONNALISABLE SELON VOS BESOINS ET VOS OBJECTIFS.</h5>
                </div>
                <div class="col-lg-3 wow fadeIn stat" data-wow-delay=".7s">
                    <div class="d-flex counter w-50 mx-auto">
                        <h1 class="me-1 text-white counter-value">100</h1><span><h1 class="text-white me-1">%</h1></span><br>
                    </div>
                    <h5 class="text-white mt-1 w-75">ENGAGEMENT ET SUIVI CONTINUS POUR GARANTIR VOTRE RÉUSSITE.</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->

    <!-- About Start -->
    <div class="container-fluid py-5 my-2">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="{{ asset('frontend/img/bootcamp.jpg') }}" class="img-fluid w-50 rounded" alt="" style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="{{ asset('frontend/img/online_conference.jpg') }}" class="img-fluid w-75 rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h1 class="mb-4">
                        Explorez nos activités et découvrez tout ce que nous avons à vous offrir !</h1>
                    <h4>Explorez nos événements captivants en cybersécurité pour renforcer vos compétences avec des experts mondiaux.
                    </h4>
                    <a href="" class="btn p-4 mt-3 text-white" style="background-color: #2e2ea3;">DÉCOUVREZ NOS ÉVÉNEMENTS</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Blog Start -->
    <div class="container-fluid blog py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h1>Dernières nouveautés du blog</h1>
            </div>
            
        </div>
    </div>
    <!-- Blog End -->
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
