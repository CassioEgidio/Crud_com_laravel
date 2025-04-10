<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilo personalizado -->
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 800px;
            margin-top: 40px;
        }

        h1 {
            text-align: center;
            color: #0d6efd;
            font-weight: bold;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .card-body {
            padding: 25px;
        }

        .form-label {
            font-weight: 500;
            color: #495057;
        }

        .form-control, .form-control[readonly], textarea[readonly] {
            background-color: #f8f9fa;
            border-color: #dee2e6;
        }

        .alert-success {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Lista de Clientes</h1>

        <!-- Mensagem de sucesso -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Lista de clientes -->
        @foreach ($clientes as $cliente)
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Nome:</label>
                        <input type="text" class="form-control" value="{{ $cliente->name }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefone:</label>
                        <input type="text" class="form-control" value="{{ $cliente->tel }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Origem:</label>
                        <input type="text" class="form-control" value="{{ $cliente->ori }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Data do Contato:</label>
                        <input type="text" class="form-control" value="{{ $cliente->date }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Observação:</label>
                        <textarea class="form-control" rows="3" readonly>{{ $cliente->obs }}</textarea>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
