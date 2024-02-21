<!-- resources/views/products/gadgets.blade.php -->
<h1>Gadget Products</h1>
<ul>
    @foreach ($gadgets as $gadget)
        <li>
            <strong>Name:</strong> {{ $gadget['name'] }}<br>
            <strong>Description:</strong> {{ $gadget['description'] }}<br>
            <strong>Price:</strong> ${{ $gadget['price'] }}
        </li>
    @endforeach
</ul>
