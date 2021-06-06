<div>
    <div class="row">
        @foreach($products as $product )
        <div class= "col-sm-4 mb-2">
            <div class="card" style="width:18rem;">
                <a href="{{route('products.show',['product' => $product->slug]) }}">
                <img class = "card-img-top" src="{{asset('storage/app/' . $product->thumbnail)}}" alt="Card image cap">
                </a>
                <div class = "card-body">
                    <h5 class ="card-title font-weight-bold">${{$product->price}}<sup>00</sup></h5>
                    <p><span>12x $10.75 sin interes</span></p>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-outline-primary" wire:click="addToCart('{{ $product->slug }}')">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
            
        @endforeach
    </div>
</div>

