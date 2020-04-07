@extends('ViewClienteSistema.home')
@section('seccion')

<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/css/mdb.min.css" rel="stylesheet">

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/js/mdb.min.js"></script>
<style>
    .card.card-image {
    width: 100%;
    background-position: center;
    background-size: cover;
}.card {
    font-weight: 400;
    border: 0;
    -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
}
.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border-radius: .25rem;
}
.rgba-stylish-strong {
    background-color: rgba(62,69,81,0.7);
}
.orange-text {
    color: #ff9800 !important;
}
</style>
<section class="col-md-12">
<!-- Jumbotron -->
<div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/forest2.jpg);">
    <div class="text-white text-center rgba-stylish-strong py-5 px-4">
      <div class="py-5">
  
        <!-- Content -->
        <h5 class="h5 orange-text"><i class="fas fa-camera-retro"></i> SkyLine</h5>
        <h2 class="card-title h2 my-4 py-2">Jumbotron with image overlay</h2>
        <p class="mb-4 pb-2 px-md-5 mx-md-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur obcaecati vero aliquid libero doloribus ad, unde tempora maiores, ullam, modi qui quidem minima debitis perferendis vitae cumque et quo impedit.</p>
        <a class="btn peach-gradient"><i class="fas fa-clone left"></i> PAGE</a>
  
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
@endsection