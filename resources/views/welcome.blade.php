
@include('include.header')


<main class="main">
<section class="home-slider">
<div class="flexslider">
<ul class="slides">

@foreach ($sliders as $slider)
<li class="has-overlay">
    <img src="{{asset('/storage/app/public/'.$slider->image)}}" alt="Slider 1" />
    <div class="slider-content @if($slider->id%2==0)text-center @endif">
    <div class="container">
    <h2>{{$slider->title}}</h2>
    <p>{{$slider->subtitle}} </p>
    <a href="{{$slider->link}}" class="btn primary-btn"> KNOW MORE <i class="fa fa-angle-right"></i> </a>
    </div>
    </div>
     </li> 
@endforeach





</ul>
</div>
</section>
<section class="home-company">
<div class="container">
<div class="row company">
<div class="col-md-5 col-sm-8">
<div class="company-details">
<h2 class="company-title color-title"> THE COMPANY </h2>
<h4 class="company-subtitle subtitle " >The word of the
    company director </h4>
<p id="titleworddirector"> 
{{$word->text}}
</p>
<a href="#" class="btn btn-primary" role="button"> READ MORE </a>
</div>
</div>
<div class="col-md-7 col-sm-12">
<div class="company-image">
<div class="img-left hover-effect">
<img src="{{asset('/storage/app/public/'.$word->image2)}}" alt="Company Image" />
</div>
<div class="img-right hover-effect">
<img src="{{asset('/storage/app/public/'.$word->image)}}" alt="Company Image" />
</div>
</div>
</div>
</div>
</div>
</section>

<section class="home-testimonials">
    <div class="container">
    <div class="section-title text-center">
 
    <h2 class="subtitle-testimonials title-2">Our Company Values </h2>
    <div class="spacer-50"> </div>
    </div>
    <div class="row">
@foreach ($values as $value)
<div class="col-md-4">
    <blockquote style="height: 400px;"><P id="textvalue{{$value->id}}">{{$value->text}}<p></blockquote>
    <h4 class="client-name">{{$value->title}}</h4>

    </div>

    <script>
        var div=document.getElementById("textvalue{{$value->id}}") ;
         var excerpt=div.innerText.substring(0,400);
         div.innerHTML=excerpt+" ....";
    </script>
@endforeach
   

 
  
    
    </div>
    </div>
    </section>


@include('include.footer')