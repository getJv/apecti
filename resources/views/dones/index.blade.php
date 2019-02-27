@extends('layouts.app')
@section('main')

<h2>Formulário para geração do DONE</h2>

<form >
    <fieldset>
        <legend><h3>Introdução</h3></legend>
        
        <div class="form-group">
            <textarea 
                id="introducao" 
                name="introducao" 
                class="form-control" 
                placeholder="Informe o contexto de da embasamento ao seu pedido"
                rows="3"
            >
            </textarea>
        

    </fieldset>
        
    <fieldset>
        <legend><h3>Documentos de referência</h3></legend>   
        
       
            <div class="form-group">
                <input  id="documento"  type="text" class="form-control" placeholder="Nome do documento">
            </div>

            <div class="form-group">
                <input  id="doc_descricao"  type="text" class="form-control" placeholder="Descrição do documento">   
            </div>

            <div class="form-group">
                <button type="button" class="btn btn-primary">Incluir</button>
            </div>
        
        <br/>
        
            <table class="table ">
                <thead >
                    <tr> 
                        <th scope="col">#</th>
                        <th scope="col">Documento</th>
                        <th scope="col">Descrição</th> 
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody >
                    <tr >
                        <th scope="row">1</th>
                        <td>INSTRUÇÃO NORMATIVA No 57, DE 11 DE DEZEMBRO DE 2013</td>
                        <td>Estabelece os critérios e requisitos para o credenciamento e monitoramento de laboratórios pelo Ministério da Agricultura, Pecuária e Abastecimento</td> 
                        <td>
                            
                            <button type="button" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </button>

                            <button type="button" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        

    </fieldset>

    <fieldset>
        <legend><h3>Problemas Identificados</h3></legend>   

        <div class="pure-g">
            <div class="pure-u-1">
                <input  id="problema"  type="text" class="pure-u-1" placeholder="Descreva seu problema ou necessidade">
            </div>

            <div class="pure-u-1">
                <input  id="Afeta"  type="text" class="pure-u-1" placeholder="Descreva como esta situação esta afetando a execução dos trabalhos do área">   
            </div>

            <div class="pure-u-1">
                <input  id="impacto"  type="text" class="pure-u-1" placeholder="Descreva como o não atendimento desta necessidade vai impactar a execução dos trabalhos do área">
            </div>

            <div class="pure-u-1">
                <input  id="Afeta"  type="text" class="pure-u-1" placeholder="Informe qual seria uma solução ideal para esta necessidade">   
            </div>


            <div class="pure-u-1">
                <button type="button" class="pure-button pure-button-danger">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
        </div>
        <br/>
        
            <table class="pure-table pure-table-horizontal">
                <thead class="">
                    <tr > 
                        <th>Necessidade ou problema</th>
                        <!-- <th>Descrição</th> -->
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody class="">
                    <tr class="XXXXpure-table-odd">
                        <td>
                            <div class="pure-u-4-8">
                                Informações inseridas no sistema solicitante no momento da coleta da amostra devem ser transcritas no sistema operacional do laboratório.</td>
                            </div>
                                <!-- <td>Estabelece os critérios e requisitos para o credenciamento e monitoramento de laboratórios pelo Ministério da Agricultura, Pecuária e Abastecimento</td> -->
                        <td>
                            <div class="pure-g">
                                <div class="pure-u-4-8"> 
                                    <button class="pure-button button-secondary">
                                        <i class="fas fa-search-plus"></i>
                                    
                                    </button>
                                </div>
                                <div class="pure-u-4-8"> 
                                    <button class="pure-button button-error">
                                        <i class="fas fa-trash"></i>
                                    
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        

    </fieldset>

</form>










@endsection
