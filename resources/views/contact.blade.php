<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Contactos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Entre em contacto</h2>

    {{-- Mensagem de sucesso --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Formulário --}}
    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf

        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="nome" id="name" placeholder="Nome" required class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') }}" />
                                @error('nome') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" id="email" placeholder="Email" required class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"/>
                                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="telefone" id="phone" placeholder="Telefone" required class="form-control @error('telefone') is-invalid @enderror" value="{{ old('telefone') }}"/>
                                @error('telefone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="assunto" id="email" placeholder="Assunto" required class="form-control @error('assunto') is-invalid @enderror" value="{{ old('assunto') }}" />
                                @error('assunto') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <textarea name="mensagem" id="mensagem" placeholder="Mensagem" rows="5" required class="form-control @error('mensagem') is-invalid @enderror" value="{{ old('mensagem') }}"></textarea>
                                @error('mensagem') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="button text-center rounded-buttons">
                                    <button type="submit" class="btn primary-btn rounded-full">
                                        Enviar mensagem
                                    </button>
                                </div>
                            </div>
                        </div>
                     </form>
</div>
</body>
</html>
