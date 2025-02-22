@extends('templates.app')

@section('body')
    <div class="fundocadastrar">
        <div class="row" style="align-content: left;">
            <h1 class="titulogrande">Relatório de avaliação do supervisor de estágio</h1>
        </div>
        @if (Session::has('pdf_generated_success'))
            <div class="alert alert-success">
                {{ Session::get('pdf_generated_success') }}
            </div>
        @endif

        <hr style="color:#5C1C26; background-color: #5C1C26">
        <a class="cadastrar-botao" style="text-decoration: none; color: white; margin-right: 10px" type="button"
            href="{{ route('download.documento', ['nome' => 'relatorio_supervisor.pdf']) }}" target="_blank">Visualizar
            modelo</a>
        <br><br>
        <form action="{{ route('estagio.documentos.UPE.relatorio-supervisor.store', ['id' => $estagio->id]) }}"method="post"
            enctype="multipart/form-data">
            @csrf

            <label for="Arquivo" class="titulopequeno">Insira o documento já preenchido pelo supervisor<strong
                    style="color: #8B5558">*</strong></label>
            <br>
            <input class="boxcadastrar" type="file" name="arquivo" id="arquivo" required><br>
            <div class="invalid-feedback">Por favor, anexe um arquivo</div><br>

            <br><br>
            <div class="botoessalvarvoltar">
                <a href="{{ route('estagio.documentos', ['id' => $estagio->id]) }}" class="botaovoltar">Voltar</a>
                <input class="botaosalvar" type="submit" value="Salvar">
            </div>



        </form>

    </div>
    </div>
@endsection
