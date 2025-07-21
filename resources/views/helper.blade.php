<div>
    <h1>Helper</h1>
    <div>
        <h1>Original Data</h1>
    @foreach($products as $product)
        <h2>{{ $product['name'] }}</h2>
        <p>{{ $product['description'] }}</p>
        <p>{{ $product['price'] }}</p>
    @endforeach
    </div>
    <div>
        <h1>Processed Data</h1>
        @foreach($products as $product)
            <h2>{{ Str::upper(Str::slug($product['name'])) }}</h2>
            <p>{{ Str::limit($product['description'], 10) }}</p>
            <p>{{ number_format($product['price'], 2) }}</p>
            <p>{{ now()->format('Y-m-d H:i:s') }}</p>
            <p>{{ now()->toDayDateTimeString() }}</p>
        @endforeach
    </div>

    <div>
        <h1>ENV Data</h1>
        <p>{{ env('APP_NAME') }}</p>
        <p>{{ env('APP_ENV') }}</p>
        <p>{{ env('APP_DEBUG') }}</p>
        <p>{{ env('APP_KEY') }}</p>
        <p>{{ env('APP_URL') }}</p>
    </div>
</div>