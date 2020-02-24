<div class="card o-hidden mb-4 d-flex flex-column">
    <div class=" d-flex">
        <img alt="" src="{{ asset($product->featured_image) }}" />
    </div>
    <div class="flex-grow-1 d-bock">
        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center">
            <a class="w-40 w-sm-100" href="/products/{{$product->id}}">
                <div class="item-title">
                    {{$product->name}}
                </div>
            </a>
            <!-- <p class="m-0 text-muted text-small w-15 w-sm-100">
                            Gadget
                        </p> -->
            <p class="m-0 text-muted text-small w-15 w-sm-100">
                <!-- $32.00 <del class="text-secondary">$54.00</del> -->
                {{$product->price}}
            </p>
            <add-to-cart id="{{ json_encode($product->id) }}" />
            <!-- <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                            <span class="badge badge-info">20% off</span>
                        </p> -->
        </div>
    </div>
</div>