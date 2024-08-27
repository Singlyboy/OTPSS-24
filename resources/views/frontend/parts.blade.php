@extends('frontend.master')


@section('content')

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">


    @foreach ($parts as $par )
        
    <a href="{{route('show.parts',$par->id)}}">
      <div class="col-md-12 col-lg-4 mb-3 mb-lg-0">       
         <div class="card text-black">
          <img style="width: 150px;" src="{{url('/upload/upload/'.$par->image)}}"
            class="card-img-top" alt="iPhone" width="50px" />
          <div class="card-body">
            <div class="text- mt-2">
              <h2 class="card-title">{{$par->name}}</h2>
                </div>

            <div class="text-">
              <div class="p-3 mx-n3 mb-3" style="background-color: #eff1f2;">
                <h5 class="mb-0">Category: {{$par->category->name}}</h5>
              </div>
              <div class="d-flex flex-column mb-4 lead">
                <span class="mb-2">{{$par->price}} BDT</span>
                <p >Stock : {{$par->stock}}</p>
              </div>
              
              
            </div>

            <div class="d-flex flex-row">
              <a href="{{route('add.to.cart',$par->id)}}" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary flex-fill me-1" data-mdb-ripple-color="dark">
              Add to cart
              </a>
              </button>
              <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger flex-fill ms-1">Buy now</button>
            </div>
          </div>
        </div>
      </div>
      </a>
      @endforeach
    
    </div>
  </div>
</section>




@endsection