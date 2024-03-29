<style type="text/css">
body {
    background-color: #eee
}

.card {
    background-color: #fff;
    padding: 15px;
    border: none
}

.input-box {
    position: relative
}

.input-box i {
    position: absolute;
    right: 13px;
    top: 15px;
    color: #ced4da
}

.form-control {
    height: 50px;
    background-color: #eeeeee69
}

.form-control:focus {
    background-color: #eeeeee69;
    box-shadow: none;
    border-color: #eee
}

.list {
    padding-top: 20px;
    padding-bottom: 10px;
    display: flex;
    align-items: center
}

.border-bottom {
    border-bottom: 2px solid #eee
}

.list i {
    font-size: 19px;
    color: red
}

.list small {
    color: #dedddd
}
</style>
@if($products->isEmpty())
<h5 class="text-center text-danger">Product not found</h5>
@else
<div class="container mt-5">
    <div class="row d-flex justify-content-center ">
        <div class="col-md-6">
            <div class="card">               
                @foreach($products as $product)
                <a href="{{ route('products.show', $product->slug_en) }}">
                    <div class="list border-bottom"> 
                            <img style="width:30px; height:30px" src="{{ asset('uploads/products/thumbnails/' . $product->thumbnail) }}" /> 
                            <div class="d-flex flex-column ml-3" style="margin-left:10px"> 
                                <span>{{ $product->name_en }} </span><small>${{ $product->selling_price }}</small>
                            </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif