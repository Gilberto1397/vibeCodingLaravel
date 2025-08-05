<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora - Subtração</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        input[type="number"]:focus {
            border-color: #dc3545;
            outline: none;
        }
        .btn {
            background-color: #dc3545;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #c82333;
        }
        .resultado {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora - Subtração de Dois Números</h1>

        <form method="POST" action="{{ route('subtrair') }}">
            @csrf

            <div class="form-group">
                <label for="numero1">Primeiro Número:</label>
                <input type="number"
                       id="numero1"
                       name="numero1"
                       step="any"
                       value="{{ old('numero1') }}"
                       required>
            </div>

            <div class="form-group">
                <label for="numero2">Segundo Número:</label>
                <input type="number"
                       id="numero2"
                       name="numero2"
                       step="any"
                       value="{{ old('numero2') }}"
                       required>
            </div>

            <button type="submit" class="btn">Calcular Subtração</button>
        </form>

        @if(isset($resultado))
            <div class="resultado">
                Resultado: {{ $numero1 }} - {{ $numero2 }} = {{ $resultado }}
            </div>
        @endif

        @if($errors->any())
            <div style="color: red; margin-top: 15px;">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>
