@extends('app')
@section('content')
<section class="section contato">
    <div class="container contato__container">
        <h1 class="title">Contato</h1>

        <form action="/contato/enviado" method="post" class="contato__form" enctype="multipart/form-data">
            {{-- necessario para evitar ataques de cross site request forgery --}} @csrf
            <div class="field">
                <label class="label">Nome</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" type="text" placeholder="Nome" name="nome" value="">
                </div>
            </div>
            <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" type="email" placeholder="Email" name="email" value="">
                </div>
            </div>
            <div class="field">
                <label class="label">Telefone</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" type="tel" placeholder="Telefone" name="telefone" value="">
                </div>
            </div>
            <div class="field">
                <label class="label">Mensagem</label>
                <div class="control has-icons-left has-icons-right">
                    <textarea class="textarea" placeholder="Sua mensagem" name="mensagem"></textarea>
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
