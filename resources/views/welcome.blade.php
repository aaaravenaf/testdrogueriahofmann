<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test para cargo desarrollador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h3>Test para cargo desarrollador</h3>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Monto</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @forelse($response as $data)
        <tr>
            <td>{{ $data['id'] }}</td>
            <td>{{ $data['code'] }}</td>
            <td>{{ number_format($data['amount'],'0','','.') }}</td>
            <td>{{ \Carbon\Carbon::parse($data['date'])->format('d-m-Y') }}</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUserEdit{{ $data['id'] }}" data-bs-whatever="@mdo">Editar</button>
            </td>
        </tr>
        {{-- Modal Editar --}}
        @include('ModalEditarUsuario')
        {{-- Fin Modal Editar --}}

        @empty
            <td>No hay datos</td>
        @endforelse
        </tbody>
    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
