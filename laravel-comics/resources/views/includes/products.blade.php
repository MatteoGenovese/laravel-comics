<div class="product-container">
    <div class="wrapper container">
@forelse ($products as $product)
<div class="product" >
    <div class="image-container">
       <img src="{{asset( 'images/'.$product->getUrl() )}} " alt="{{$product->getTitle()}}">  
    </div>
    <h4> {{ $product->getTitle() }} </h4> 
  </div>
@empty
        <div>prodotti non visualizzabili al momento</div>
    
@endforelse


    </div>
</div>
</div>