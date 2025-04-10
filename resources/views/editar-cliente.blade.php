<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Cliente</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilo personalizado -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 600px;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 28px;
            font-weight: bold;
            color: #0d6efd;
        }

        .form-label {
            font-weight: 500;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Editar Cliente</h1>

        <!-- Mensagem de sucesso -->
        @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <!-- Formulário -->
        <form action="/editar-cliente/{{ $cliente->id }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $cliente->name }}" required>
            </div>

            <div class="mb-3">
                <label for="tel" class="form-label">Telefone:</label>
                <input type="text" class="form-control" id="tel" name="tel" value="{{ $cliente->tel }}" required>
            </div>

            <div class="mb-3">
                <label for="ori" class="form-label">Origem:</label>
                <select class="form-select" id="ori" name="ori" required>
                    <option value="Celular" {{ $cliente->ori == 'Celular' ? 'selected' : '' }}>Celular</option>
                    <option value="Telefone Fixo" {{ $cliente->ori == 'Telefone Fixo' ? 'selected' : '' }}>Telefone Fixo</option>
                    <option value="Whatsapp" {{ $cliente->ori == 'Whatsapp' ? 'selected' : '' }}>Whatsapp</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Data do Contato:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $cliente->date }}" required>
            </div>

            <div class="mb-3">
                <label for="obs" class="form-label">Observação:</label>
                <textarea class="form-control" id="obs" name="obs" rows="4">{{ $cliente->obs }}</textarea>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                <a href="/listar-cliente" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
