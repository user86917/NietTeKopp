@extends('layout')
@section('main')
{{-- <div class="container"> --}}
{{-- <div class="home_dex bg-white" >
    <header > 
       <div class="header_dex mt-4 ps-4 pb-3 pt-3 "><a class="text-dark " href="/">wholesale</a></div>
    </header>
    
   
  
     
</div> --}}

<div class="home_dex bg-white" >
  <header class="bg-primary mt-4 ps-4 pb-3 pt-3"> <a class="text-dark " href="/">WholeSale</a>
     
  </header>
  
 <div class="entree_welkom  pt-5  bg-info"><h1 class="text-dark ps-5 " >Welkom</h1></div>
 <div class="entree_info text-white px-4 pt-4 bg-primary "><h3 class="ps-4">info</h3><p class="ps-4">We willen je laten zien hoe geweldig tweedehands kan zijn. <br/>Verkoop de kleding die niet meer bij je past.<br/> Vind artikelen die je niet in de winkelstraat vindt.<br/> Vinted is voor iedereen die vindt dat goede kleding een lang leven verdient</p></div>
 <div class="entree_toevoegen px-4 pb-5 pt-4   bg-info"><h3 class="ps-4 mt-4">NavBar</h3> <button class=" ps-3 pe-5 mt-4 bg-primary text-white "  >nav</button> </div>

   <div class="home_img bg-primary "></div>
   
</div>

<div class="baas_intro bg-white">

  <div class="baas_text ">
      <h3 class="text-dark">Optimaal bereikbaar zijn op je </h3>
      <h3 class="text-primary">vaste zakelijke nummer</h3>
      <p>Zakelijk bereikbaar zijn voor een gigantisch voordelige prijs, dat is waar <br> wij ons op focussen. Voor slechts € 9,95 per jaar ben je al bereikbaar op <br> een eigen nummer. Ons portaal biedt alle mogelijkheden, zonder <br> technische kennis.</p>
  </div>

      <div class="baas_image ">
        <div class="profiel_image"></div>
      </div>

    </div>
    <div class="footerdenk bg-info"></div>

  

@include('components.navbar')
   

{{-- </div> --}}
@endsection