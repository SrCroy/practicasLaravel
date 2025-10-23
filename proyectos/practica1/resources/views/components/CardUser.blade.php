@props([
    'nombre' => '',
    'descripcion' => ''
])

<div class="card">
    <div class="card-header">
        <div class="card-body">
            <p>{{ $nombre }}</p>
            <div class="alert alert-primary">
                <p>{{ $descripcion }}</p>
            </div>
            {{ $slot }}
        </div>
    </div>
</div>