@extends('layouts.app')
@section('htmlheader_title', 'API Bens e Produtos Adquiridos')

@section('cssheader')
@endsection

@section('main-content')

      <div class="row">
        <div class="col-md-10">
          <div class="box box-solid">
            <!-- /.box-header -->
            <div class="box-body text-justify">
                <h3>Url da API</h3>
                <p>transparencia.cachoeiro.es.gov.br/api/licitacoescontratos/bensadquiridos/{dataInicial}/{dataFinal}</p>
                
                <h3>Parâmetros da Url</h3>
                <div class="col-md-12">
                    <div class="row">
                        <table id="tabela" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style='vertical-align:middle'>Parâmetros</th>
                                    <th style='vertical-align:middle'>Descrição</th>
                                    <th style='vertical-align:middle'>Tipo</th>
                                    <th style='vertical-align:middle'>Formato</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>dataInicial</td>
                                    <td>data que define a partir de que dia os bens e produtos adquiridos serão buscados</td>
                                    <td>string</td>
                                    <td>dd-mm-yyyy</td>
                                </tr>
                                <tr>
                                    <td>dataFinal</td>
                                    <td>data que define a data máxima para a busca dos bens e produtos adquiridos</td>
                                    <td>string</td>
                                    <td>dd-mm-yyyy</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                </div> 

                <h3>Exemplo</h3>
                <p><a href="/api/licitacoescontratos/bensadquiridos/20-07-2017/20-07-2017">transparencia.cachoeiro.es.gov.br/api/licitacoescontratos/bensadquiridos/20-07-2017/20-07-2017</a></p>
                <h4>Retorno<h4>
                <div class="">
                <pre>[{"ProdutoID":20480,"DataAquisicao":"2017-07-20","OrgaoAdquirente":"SEMUS - SECRETARIA MUNICIPAL DE SA\u00daDE","CNPJFornecedor":"59309302000199","NomeFornecedor":"INJEX IND\u00daSTRIAS CIR\u00daRGICAS LTDA","IdentificacaoProduto":"LUVA CIR\u00daRGICA - EST\u00c9RIL","PrecoUnitario":1.19,"UnidadeMedida":"PAR","QuantidadeAdquirida":6825,"ValorTotal":null}</pre>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

@endsection

@section('scriptsadd')
    <link rel="stylesheet" media="all" href="{{ asset('/css/jquery.dynatable.css') }}" />
    <!--grafico-->    
    <script src="{{ asset('/js/jquery.dynatable.js') }}"></script>
@endsection