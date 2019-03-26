@extends('app')
@section('content')
<section class="section contato">
    <div class="container contato__container">
        <h1 class="title">Contato</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            {{-- se houver erros, vamos mostrar aqui --}}
            <article class="message is-danger">
                <div class="message-header">
                    <p>Ops! Encontramos alguns erros:</p>
                </div>
                <div class="message-body">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </article>
        </div>
        @endif

        <form action="/contato/enviado" method="post" class="contato__form" enctype="multipart/form-data">
            {{-- necessario para evitar ataques de cross site request forgery --}} @csrf
            <div class="field">
                <label class="label">Nome</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Nome" name="nome" value="{{ old('nome') }}">
                </div>
            </div>
            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                </div>
            </div>
            <div class="field">
                <label class="label">Telefone</label>
                <span>Com DDD e somente números. Ex: 17988112939</span>
                <div class="control">
                    <input class="input" type="tel" maxlength="11" placeholder="Telefone" name="telefone" value="{{ old('telefone') }}">
                </div>
            </div>
            <div class="field">
                <label class="label">Mensagem</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Sua mensagem" name="mensagem">{{ old('mensagem') }}</textarea>
                </div>
            </div>
            <div class="field">
                <div class="file">
                    <label class="file-label">
                        <input class="file-input" type="file" name="arquivo">
                        <span class="file-cta">
                        <span class="file-icon">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="file-label">
                            Escolhar um arquivo
                        </span>
                        </span>
                    </label>
                </div>
            </div>

            <button type="submit" class="button is-primary">Enviar</button>
        </form>
    </div>

</section>
@endsection
