@extends('layout')
@section('main')
{{-- <div class="container"> --}}
{{-- <div class="home_dex bg-white" >
    <header > 
       <div class="header_dex mt-4 ps-4 pb-3 pt-3 "><a class="text-dark " href="/">wholesale</a></div>
    </header>
    
   
  
     
</div> --}}

<div class="home_dex bg-white" >
  <header class="bg-primary mt-4 ps-4 pb-5 pt-3"> <h1><a class="logo text-white " href="/">WholeSale</a></h1>
    <a href="/  " class=" navlink me-5  ps-5 text-white">Home</a>
    <a href="#over-ons " class="navlink me-5  ps-5 text-white">over ons</a>
    <a href="#login " class="navlink  me-5  ps-5 text-white">login</a>
    <a href="#Aplicate " class="navlink me-5  ps-5 text-white">applicate</a>
  </header>
 
  
 <div class="entree_balk1  pt-5  bg-info"><h1 class="text-white ps-5 " ></h1></div>
 <div class="entree_balk2  px-4 pt-4 bg-primary "><h3 class="ps-4 text-white"></h3><p class="ps-4 text-dark">
  
</div>
 <div class="entree_balk3 px-4 pb-5 pt-4   bg-info"><h3 class="ps-4 mt-4"></h3>  </div>

   <div class="home_img bg-primary ">
    {{-- nieuwe img zoeken --}}
   </div>
   <div class="contactform ">
    <div class="uitleg ">
   <h2 class="text-primary " >Waar kunnen wij u mee helpen</h2>
   <p class="text-black">Met onze telefonie krijg je de mogelijkheid om te bellen via je mobiel of met je laptop.
    Bepaal zelf op welke dagen en tijden jouw klanten je telefonisch kunnen bereiken. <br>
    Verwelkom je klanten met een handige welkomstboodschap of keuzemenu.</p>
  

  </div>
   @include('components.contactform')

   
</div>



  


   

</div> 

<div class="baas_intro bg-white  ">

  <div class="baas_text ">
      <h3 class="text-dark">Optimaal bereikbaar zijn op je </h3>
      <h3 class="text-primary">vaste zakelijke nummer</h3>
      <p>Zakelijk bereikbaar zijn voor een gigantisch voordelige prijs, dat is waar <br> wij ons op focussen. Voor slechts € 9,95 per jaar ben je al bereikbaar op <br> een eigen nummer. Ons portaal biedt alle mogelijkheden, zonder <br> technische kennis.</p>
  </div>

      <div class="baas_image  ">
        <div class="profiel_image  "></div>
      </div>

    </div>
    <div class="meerinfo bg-dark  p-5 mt-5">
      <div class="grid-container  ">
        <div class="grid-item border-info"><p class="text-white" >
          Je zoekbewerking - rljgodfvg - heeft geen overeenkomstige documenten opgeleverd
          Suggesties:
          Zorg ervoor dat alle woorden goed gespeld zijn.
          Probeer andere zoektermen.
          Maak de zoektermen algemener.
          </p> </div>  
        <div class="grid-item border-info"><p> img</p></div>
        <div class="grid-item border-info"><p> img</p></div>
        <div class="grid-item border-info "><p> Je zoekbewerking - rljgodfvg - heeft geen overeenkomstige documenten opgeleverd
          Suggesties:
          Zorg ervoor dat alle woorden goed gespeld zijn.
          Probeer andere zoektermen.
          Maak de zoektermen algemener.</p></div>  
        <div class="grid-item border-info"><p> Je zoekbewerking - rljgodfvg - heeft geen overeenkomstige documenten opgeleverd
          Suggesties:
          Zorg ervoor dat alle woorden goed gespeld zijn.
          Probeer andere zoektermen.
          Maak de zoektermen algemener.</p></div>
        <div class="grid-item border-info"><p>img</p></div>
        
        
       
      </div>
    </div>
    {{-- <div class="footerdenk bg-info"></div> --}}
@endsection