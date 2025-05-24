<div class="d-flex flex-column align-items-start p-2 item m-3">
    <img src="{{ $product['image_path'] }}"
        class="img-fluid rounded mt-1 product-img" style="max-width: 200px;" alt="{{ $product['name'] }}">
    <div class="mt-3" style="max-width: 200px">
        <span class="fw-bold" style="color:green">R${{ $product['price'] }}</span>
        <p class="text-truncate">{{ $product['name'] }}</p>
    </div>
</div>
