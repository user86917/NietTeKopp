@extends('layout')
@section('main')


<div class="home_dex bg-dark" >
  <header class="bg-primary mt-4 ps-4 pb-1 pt-3"> <h1><a class="logo text-white " href="/">WholeSale</a></h1>
    <a href="/  " class=" navlink mb-1 ms-5 me-5  ps-5  ">Home</a>
    <a href="#over-ons " class="navlink me-5  ps-5 ">Over ons</a>
    <a href="#login " class="navlink  me-5  ps-5 ">Login</a>
    <a href="#Aplicate " class="navlink me-5  ps-5 ">Applicate</a>
  </header>
 
  
 <div class="entree_balk1  pt-5  bg-info"><h1 class="text-white ps-5 " ></h1></div>
 <div class="entree_balk2   pt-4 bg-primary "><h3 class="ps-4 text-white"></h3><p class="ps-4 text-dark">
  
</div>
 <div class="entree_balk3  pb-5 pt-4   bg-info"><h3 class="ps-4 mt-4"></h3>  </div>

   <div class="home_img bg-primary ">
    {{-- nieuwe img zoeken --}}
   </div>
   
  <div class="aanmelding1 ">

    <div class="uitleg1 ms-3">
      <h2 class="text-white mt-4" >Gemakelijk en snel aanmelden</h2>
      <p class="text-white">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio veritatis quod suscipit architecto aliquid sunt labore provident magni cum, repellat quibusdam dolor illum numquam eaque obcaecati maxime explicabo temporibus optio?
      </p>
      <p class="text-white"> 
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum temporibus voluptatem sit, molestiae est voluptatum dignissimos iste id, deleniti vero veritatis sequi perspiciatis. Ullam sapiente distinctio dicta autem maiores exercitationem.
      </p>
    </div> 

    <div class="me-5" >
      @include('components.aanmeldform')
    </div>

  </div> 
</div>
   




  


   

</div> 


    <div class="meerinfo bg-dark  p-5 mt-5">
      <div class="grid-container  ">
        <div class="grid-item border-info" id="text-1"><p class="text-white" >
          Je zoekbewerking - rljgodfvg - heeft geen overeenkomstige documenten opgeleverd
          Suggesties:
          Zorg ervoor dat alle woorden goed gespeld zijn.
          Probeer andere zoektermen.
          Maak de zoektermen algemener.
          Je zoekbewerking - rljgodfvg - heeft geen overeenkomstige documenten opgeleverd
          Suggesties:
          Zorg ervoor dat alle woorden goed gespeld zijn.
          </p> </div>  
        <div class="grid-item-img-1 border-info"><p> <img class="img-1" src="../img/pexels-fauxels-.jpg" alt=""></p></div>
        <div class="grid-item-img-1 border-info"><p> <img class="img-2" src="../img/pexels-nandhu.jpg" alt=""></p></div>
        <div class="grid-item border-info  " id="text-2">
          <p> Je zoekbewerking - rljgodfvg - heeft geen overeenkomstige documenten opgeleverd
          Suggesties:
          Zorg ervoor dat alle woorden goed gespeld zijn.
          Probeer andere zoektermen.
          Maak de zoektermen algemener.
          Je zoekbewerking - rljgodfvg - heeft geen overeenkomstige documenten opgeleverd
          Suggesties:
          Je zoekbewerking - rljgodfvg - heeft geen overeenkomstige documenten opgeleverd
          Suggesties:</p></div>  
          
        <div class="grid-item border-info" id="text-1"><p> Je zoekbewerking - rljgodfvg - heeft geen overeenkomstige documenten opgeleverd
          Suggesties:
          Zorg ervoor dat alle woorden goed gespeld zijn.
          Probeer andere zoektermen.
          Maak de zoektermen algemener.
          Je zoekbewerking - rljgodfvg - heeft geen overeenkomstige documenten opgeleverd
          Suggesties:
          Zorg ervoor dat alle woorden goed gespeld zijn.
          Probeer andere zoektermen.
          Maak de zoektermen algemener.</p></div>
        <div class="grid-item-img-1 border-info"><p><img class="img-3" src="../img/pexels-steve-.jpg" alt=""></p></div>
        
        
       
      </div>
    </div>

<div class="wrapper bg-info mt-5 mb-5">
    <div class="slider bg-info  ">
       
          <div class="slide">
              <img src="../img/logo1.webp" height="150" width="300" alt="" >
              <img src="../img/logo2.png" height="150" width="300" alt="" >

               <img src="../img/logo3.jpg" height="150" width="300" alt="" >
               <img src="../img/logo4.jpg" height="150" width="300" alt="" >
               <img src="../img/logo5.jpg" height="150" width="300" alt="" >
               <img src="../img/logo6.jpg" height="150" width="300" alt="" >
               <img src="../img/logo7.png" height="150" width="300" alt="" >
          </div>

          <div class="slide">
            <img src="../img/logo1.webp" height="150" width="300" alt="" >
            <img src="../img/logo2.png" height="150" width="300" alt="" >

             <img src="../img/logo3.jpg" height="150" width="300" alt="" >
             <img src="../img/logo4.jpg" height="150" width="300" alt="" >
             <img src="../img/logo5.jpg" height="150" width="300" alt="" >
             <img src="../img/logo6.jpg" height="150" width="300" alt="" >
             <img src="../img/logo7.png" height="150" width="300" alt="" >
        </div>
       
    </div>
  </div>



  <div class="containercontact bg-dark"  >
    <div class="contactform ">
      <div class="uitleg ">
          <h2 class="text-info " >Waar kunnen wij u mee helpen</h2>
          <p class="text-white">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio veritatis quod suscipit architecto aliquid sunt labore provident magni cum, repellat quibusdam dolor illum numquam eaque obcaecati maxime explicabo temporibus optio?
          </p><p class="text-white"> 
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum temporibus voluptatem sit, molestiae est voluptatum dignissimos iste id, deleniti vero veritatis sequi perspiciatis. Ullam sapiente distinctio dicta autem maiores exercitationem.
          </p>
      </div> 
      @include('components.contactform')
    </div>
  </div>

<footer class=" p-5  bg-dark" >
  <div class="listcontainer">
  <div class="list1 border-info">
    <ul>
      <li>Zakelijk bellen</li>
      <li>De tarieven</li>
      <li>Alle functies</li>
      <li>Voor ZZP-ers</li>
      <li>Reseller worden</li>
    </ul>
  </div>
  <div class="list2 border-info">
    <ul>
      <li>Zakelijk bellen</li>
      <li>De tarieven</li>
      <li>Alle functies</li>
      <li>Voor ZZP-ers</li>
      <li>Reseller worden</li>
    </ul>
  </div>
  <div class="list3 border-info">
    <ul>
      <li>Zakelijk bellen</li>
      <li>De tarieven</li>
      <li>Alle functies</li>
      <li>Voor ZZP-ers</li>
      <li>Reseller worden</li>
    </ul>
  </div>
</div>
</footer>
@endsection
