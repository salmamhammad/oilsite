
@include('include.header')



<main class="main">

    <div class="page-title text-center">
    <h2 class="title">HSE Policy </h2>
   
    </div>
    
    
    <div class="breadcrumbs">
    <div class="container">
    <span class="parent"> <i class="fa fa-home"></i> <a href="{{route("/")}}"> Home </a> </span>
    <i class="fa fa-chevron-right"></i>
    <span class="child"> Policy </span>
    </div>
    </div>
<section class="home-services-other">
    <div class="container">
    
    <div class="row services-other">
@foreach ($policies as $policy)
    

    <div class="col-sm-4" style="height: 250px;text-align: center;">
    <div class="img-box" style="float: unset;">
    <img src="{{asset('/storage/app/public/'.$policy->icon)}}" alt="SHELL CHEMICALS" />
    </div>
    <div class="services-info" style="padding-left:0px;">

     <p>{{$policy->text}}</p>
    </div>
    </div>

    @endforeach

    
  
  
   
   
   
    </div>
    </div>
    </section>
</main>
@include('include.footer')