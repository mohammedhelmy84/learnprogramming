
@extends('layouts.app')
@extends('layouts.nav-header')

@section('content')

<div class="container-fluid mt-5 maindiv">

    <header>
        <div class="row vh-100">
           <div class="row mt-5 py-1 text-center titlediv">
            <div>
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner mt-5">
                        @foreach($posts as $key=>$post) 
                      <div class="carousel-item mb-5 {{$key == 0 ? 'active' : ''}}">
                        <img src="{{ asset('/assets/img/'.$post->pic) }}" alt="" width="200px" height="150px">
                        <h2 class="mb-1">{{$post->title}}</h2>
                        <p class="mb-1">{{$post->category->name}}</p>
                        <div class="col-sm-12 mb-5">
                         <button id="btn-main">Find More</button>
                       </div>
                      </div>
                      @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
           </div>
        </div>
    </header>
    <section>
        <div class="row py-5 sect1">
            <h2 class="my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit</h2>
            <p class="my-2">Nisi nemo natus ipsa nihil similique corrupti ducimus quis eligendi, consequuntur cupiditate quod distinctio labore dolorem ratione aspernatur ipsum facilis officiis laborum!</p>
            <div class="col-sm-12">
             <button id="btn-sect1">Find More</button>
        </div>
    </section>
    <section>
      <div class="row py-2 bg-dark sect2">
        <div>
        <h2 class="my-4" style="color:#fff; text-align:center;">Our Services</h2>
        <p class="mx-auto mt-3 mb-5" style="background-color:#fff; width:75px; height:3px;"> </p>
       </div>
        <div class="col-md-3 mx-auto text-center">
          <img src="{{ asset('/assets/img/'.$post->pic) }}" alt="" width="35px" height="35px">
          <h3 class="py-2">Learn HTML</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
          <hr style="color:#fff;">
        </div>
        <div class="col-md-3 mx-auto text-center">
          <img src="{{ asset('/assets/img/'.$post->pic) }}" alt="" width="35px" height="35px">
          <h3 class="py-2">Learn HTML</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
          <hr style="color:#fff;">
        </div>
        <div class="col-md-3 mx-auto text-center">
          <img src="{{ asset('/assets/img/'.$post->pic) }}" alt="" width="35px" height="35px">
          <h3 class="py-2">Learn HTML</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
          <hr style="color:#fff;">
        </div>
        <div class="col-md-3 mx-auto text-center">
          <img src="{{ asset('/assets/img/'.$post->pic) }}" alt="" width="35px" height="35px">
          <h3 class="py-2">Learn HTML</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
          <hr style="color:#fff;">
        </div>
      </div>
    </section>
    <section>
      <div class="sect3">
         <div class="sect3-1">
            <div class="sect3-img">
              <img src="{{ asset('/assets/img/html.jpg') }}" alt="" width="35px" height="35px">
              <div class="sect3-overlay">
                <h3>Learn HTML</h3>
                <p>HTML Free Course</p>
              </div>
            </div>
         </div>
         <div class="sect3-2">
          <div class="sect3-img">
            <img src="{{ asset('/assets/img/css.jpg') }}" alt="" width="35px" height="35px">
            <div class="sect3-overlay">
              <h3>CSS</h3>
              <p>CSS Free Course</p>
            </div>
          </div>
       </div>
       <div class="sect3-3">
        <div class="sect3-img">
          <img src="{{ asset('/assets/img/javascript.jpg') }}" alt="" width="35px" height="35px">
          <div class="sect3-overlay">
            <h3>JAVSCRIPT</h3>
            <p>Javascript Free Course</p>
          </div>
        </div>
     </div>
      </div>

    </section>
    <section>
      <div class="sect3">
         <div class="sect3-1">
            <div class="sect3-img">
              <img src="{{ asset('/assets/img/php.jpg') }}" alt="" width="35px" height="35px">
              <div class="sect3-overlay">
                <h3>PHP</h3>
                <p>PHP Free Course</p>
              </div>
            </div>
         </div>
         <div class="sect3-2">
          <div class="sect3-img">
            <img src="{{ asset('/assets/img/mysql.jpg') }}" alt="" width="35px" height="35px">
            <div class="sect3-overlay">
              <h3>MYSQL</h3>
              <p>MySql Free Course</p>
            </div>
          </div>
       </div>
       <div class="sect3-3">
        <div class="sect3-img">
          <img src="{{ asset('/assets/img/react.jpg') }}" alt="" width="35px" height="35px">
          <div class="sect3-overlay">
            <h3>REACT</h3>
            <p>React Free Course</p>
          </div>
        </div>
     </div>
      </div>

    </section>
    <section>
      <div class="container-fluid text-center p-5 bg-light section-4">
        <h3>Register Your Account</h3>
        <p class="mx-auto mt-3 mb-5" style="background-color:darkgrey; width:75px; height:3px;"> </p>
        <div class="row">
         <p  style="color: black; word-wrap: break-word; font-size:16px; width:500px; margin:0 auto 10px auto; text-align:justify;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas sed amet, dignissimos odio ratione sint animi est beatae sit repellendus hic odit cupiditate laborum, assumenda quia iusto. Provident, alias reiciendis.</p>
        </div>
        <div class="row">
          <div class="col-sm-6 mx-auto mb-3 mb-sm-0">
          <div class="card text-center">
            <div class="card-body">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Your Name</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Your Email address</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Your Phone</label>
                </div>
                <div class="form-floating mb-3">
               
                  <select class="form-control" id="countries" name="countries">
                
                  </select>
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Confirm Password</label>
                </div>
                <div class="form-floating">
                  <input type="submit" class="btn btn-primary mt-2" id="floatingPassword" value="Register">
                </div>
              </div>
          </div>
         </div>
        </div>
        </div>
    </section>
  
</div>
<script>
  document.addEventListener('DOMContentLoaded', () => {

const selectDrop = document.querySelector('#countries');
// const selectDrop = document.getElementById('countries');


fetch('https://restcountries.com/v3.1/all').then(res => {
  return res.json();  
}).then(data => {
  let output = "";

const arr=[];
  len=data.length;
arr[0]='--Select Your Country--';
 for(let i=1; i<len; i++) {
  arr[i]=data[i].name.common;
 
  
    
  
  }

  arr.sort();
  

  for(let j=0; j<len; j++){
    if(j==106) delete arr[106];
   
     output += `
    
   <option value="${arr[j]}">${arr[j]}</option>`;
  }
  

  selectDrop.innerHTML = output;
}).catch(err => {
  console.log(err);
})


});
</script>

<script>
   
  $(document).ready(function(){
         $(".test").click(function(){
          $("#navbarNav").slideToggle();
         });
 
     $(document).ready(function(){
         $("#btntoggle").click(function(){
          $("#navbarNav").slideUp();
         });
     });
   });
 
 
   </script>
@endsection
