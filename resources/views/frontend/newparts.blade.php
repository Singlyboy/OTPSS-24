@extends('frontend.master')

@section('content')
<!-- css -->
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Poppins;
    color: white;
}

body{
    background: #131313;
   
}

img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    filter: grayscale(70%);
    border-radius: 7px;
}

h3{
    font-weight: 500;
}

p{
    font-style: italic;
    color: rgb(217, 217, 217);
}

a,button{
    display: inline-block;
    width: auto; 
    padding: 0.6rem 1.5rem;
    border: 1px solid #606060;
    background: none;
    font-weight: 400;
    border-radius: 50px;
    cursor: pointer;
}

.container{
    margin: 0 auto 50px auto;
    width: 90%;
}

.input{
    display: flex;
    justify-content: center;
    margin-block: 20px 50px;
}

.product-list{
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
    gap: 20px;
}

.product-list:has(.product:hover) .product:not(:hover){
    filter: blur(5px);
    opacity: 0.7;
}

.product{
    border: 1px solid #606060;
    height: 300px;
    padding: 10px 10px 20px 10px;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    transition: filter 0.1s ease-in-out, opacity 0.1s ease-in-out;
}

.img{
    height: 60%;
    width: 100%;
}

.info{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

</style>

<!-- HTML -->
<div class="container">

        <div class="input">
            <input type="range" min="50" max="1000" value="10" step="10" id="priceSlider" >
            <span id="sliderValue">$10</span>
        </div>
<div class="row row d-flex">
        @foreach ($allParts as $par )

        <div class="product-list">
            <div class="product" data-price="50">
                <div class="img">
                    <img src="{{url('/upload/upload/'.$par->image)}}" alt="">
                </div>
                <div class="info">
                    <h3>{{$par->name}}</h3>
                    <p>{{$par->price}}BDT</p>
                </div>
                <a href="{{route('add.to.cart',$par->id)}}">Add to Cart</a>
            </div>
        </div>

        @endforeach
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>

<!-- js -->
<script>
    const slider = document.querySelector('#priceSlider')
const display = document.querySelector('#sliderValue')
const products = document.querySelectorAll('.product')

slider.oninput = function() {
    const sliderValue = parseInt(this.value)
    display.textContent = `\$${sliderValue}`
    
    products.forEach(product => {
        const price = parseInt(product.dataset.price)

        if (sliderValue > parseInt(this.min) && sliderValue < parseInt(this.max)) {
            if (sliderValue >= price) {
                gsap.to(product, {autoAlpha: 1, scale: 1, duration: 0.5})
            } else {
                gsap.to(product, {autoAlpha: 0, scale: 0.8, duration: 0.5})
            }
        } else {
            gsap.to(product, {autoAlpha: 1, scale: 1, duration: 0.5})
        }
    });
};
</script>
@endsection