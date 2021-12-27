@extends('layouts.app')

@section('content')
 <div class='container'>

    {{message()}}
    <div class='row'>
        <div class='col-3  '>
           <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Shaqi_jrvej.jpg/1200px-Shaqi_jrvej.jpg' style="height:200px; width:200px;" class=" m-5 rounded-circle" />
         </div>
         <div class='col-9 mt-5 '> 
            {{-- <a href="{{ route('index') }}">goto home</a> --}}

           
            <div>{{ $user->name }}</div>
            <div class="d-flex">
                <div class="pr-5"> <strong>{{ Auth::user()->id}} </strong>ID</div>
                <div class="pr-5"> <strong>84.8k </strong>Fallower</div>
                <div class="pr-5"> <strong>315</strong>Following</div>
            </div>
            <div><strong>{{ Auth::user()->email }} </strong></div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href='#'>freeCodeCamp.org</a></div>
         </div>
    </div>

    <div class='row pt-4'>
        <div class='col-4'>
            <img   src='{{ asset('/images/one.jpg') }}'  class='w-100 h-50'  />
        </div>
         <div class='col-4'>
            <img   src='https://www.setaswall.com/wp-content/uploads/2017/06/Deserts-Image-1920-x-1080.jpg'  class='w-100 h-50' />
        </div>
         <div class='col-4'>
            <img   src='https://www.freepsdbazaar.com/wp-content/uploads/2020/06/sky-night/night-sky-049.jpg' class='w-100 h-50'   />
        </div>
    
    </div>
 
  </div>

@endsection