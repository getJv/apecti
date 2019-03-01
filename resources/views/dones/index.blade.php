@extends('layouts.app')
@section('main')


<br>
<h2>Formulário de preenchimento do DONE</h2>
<br>

<h5> Instruções de uso</h5>

<ul>
    <li>Para facilitar o preencimento o formulário esta dividido em seções. </li>
    <li>Clique no título da seção para exibir ou ocultar seu conteúdo. </li>
    <li>Em caso de dúvida ou precisar de auxílio entre em contado com a COGIN </li>
</ul>

<br>




<form >

<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
         <h5  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            1 | Introdução
        </h5>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        
        <div class="form-group">
            <p>Informe o contexto que da embasamento ao seu pedido</p>
            <textarea 
                id="introducao" 
                name="introducao" 
                class="form-control" 
                placeholder="Informe o contexto que da embasamento ao seu pedido"
                rows="3"
            >
            </textarea>

            
        </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      
        <h5 data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            2 | Documentos de referência
        </h5>
     
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <p>Se existir algum documento que tenha relação com seu pedido cadastre-o abaixo. Ex. Leis, decretos, etc...</p>
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
            
                <table class="table table-bordered ">
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
                                
                                <button type="button" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>

                            </td>
                        </tr>
                    </tbody>
                </table>
         </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
        <h5 data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            3 | Problemas Identificados
        </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <p>Nesta seção descreva bem como os problemas ou necessidades afetam e apresentam impacto ao seu sistema ou trabalho do setor.</p>
        <div class="form-group">
                    <input  id="problema"  type="text" class="form-control" placeholder="Descreva seu problema ou necessidade">
                </div>

                <div class="form-group">
                    <input  id="Afeta"  type="text" class="form-control" placeholder="Descreva como esta situação esta afetando a execução dos trabalhos do área">   
                </div>

                <div class="form-group">
                    <input  id="impacto"  type="text" class="form-control" placeholder="Descreva como o não atendimento desta necessidade vai impactar a execução dos trabalhos do área">
                </div>

                <div class="form-group">
                    <input  id="Afeta"  type="text" class="form-control" placeholder="Informe qual seria uma solução ideal para esta necessidade">   
                </div>


                <div class="form-group">
                    <button type="button" class="btn btn-primary">Incluir</button>
                </div>
        
            <br/>
            
            <table class="table table-bordered ">
                <thead >
                    <tr> 
                        <th scope="col">#</th>
                        <th scope="col">Descrição</th> 
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
            
                    <tbody >
                        <tr >
                            <td scope="row">1</td>
                            <td>
                                <p>
                                    <strong>O Problema:</strong>
                                    Não existem informações gerenciais completos sobre o desempenho e auditoria da rede de laboratórios (MAPA e credenciados).
                                </p>
                                <p>
                                    <strong>Afeta:</strong>
                                    A gestão estratégica e operacional da rede de laboratórios.
                                </p>
                                <p>
                                    <strong>Cujo Impacto é:</strong>
                                    Dificulta a análise de desempenho operacional dos laboratórios. Prejudica o planejamento financeiro e estratégico da rede.
                                </p>
                                <p>
                                    <strong>Uma boa solução seria:</strong>
                                    Pensar o hub laboratorial como ferramenta de auditoria de operação e insumos dos laboratórios, utilizando  ferramentas de BI e data Discovery sobre as informações que transitam pelo Hub laboratorial.
                                </p>
                            </td> 
                            <td>
                                <button type="button" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                       

                    </tbody>
                </table>

      </div>
    </div>
  </div>

    <div class="card">
        <div class="card-header" id="headingFour">
            <h5 data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                4 | Perfis de Usuários
            </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
                <div class="form-group">
                    <input  id="Perfil"  type="text" class="form-control" placeholder="Descreva o nome do perfil que utilizará a funcionalidade">
                </div>

                <div class="form-group">
                    <input  id="Atividade"  type="text" class="form-control" placeholder="Descreva as atividades desse perfil">   
                </div>


                <div class="form-group">
                    <button type="button" class="btn btn-primary">Incluir</button>
                </div>
            
                <br>

                <table class="table table-bordered ">
                    <thead >
                        <tr> 
                            <th scope="col">#</th>
                            <th scope="col">Perfil</th>
                            <th scope="col">Descrição</th> 
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>

                    <tbody >
                        <tr >
                            <td scope="row">1</td>
                            <td> Administrador </td> 
                            <td> Parametrizar o sistema; Gerencia Usuários; Mantém Workflow de Ensaios; Mantém Insumos aprovados pelo MAPA; Consulta Status de Remessas, e Ensaios;</td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    

                    </tbody>
                </table>

                


        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingFive">
            <h5 data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                5 | Necessidades
            </h5>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">

            <div class="form-group">
                    <input  id="nomeNecessidade"  type="text" class="form-control" placeholder="Dê um nome para funcionalidade ou necessidade solicitada">
            </div>

            <div class="form-group">
                    <input  id="perfilFuncionalidade"  type="text" class="form-control" placeholder="Informe o perfil que vai utilizar essa funcionalidade">
            </div>

            <div class="form-group">
                <p>Descreva abaixo como essa nova funcionalidade deverá funcionar</p>
                <textarea 
                    id="descricaoNecessidade" 
                    name="descricaoNecessidade" 
                    class="form-control editor" 
                    placeholder="Descreva como essa nova funcionalidade deverá funcionar"
                    rows="3"
                >
                </textarea>
            </div>

            <div class="form-group">
                    <button type="button" class="btn btn-primary">Incluir</button>
            </div>


            <table class="table table-bordered">
                        <thead >
                            <tr> 
                                <th scope="col">#</th>
                                <th scope="col">Necessidade identificada</th>
                                <th scope="col">Descrição</th> 
                                <th scope="col">Perfil</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                
                        <tbody >
                            <tr >
                                <td scope="row">1</td>
                                <td> Manter de Sequência de Numeração </td> 
                                <td> Geração de sequencia única de caracteres para identificar as amostras.
                                     Utilizando os caracteres ASCII dos intervalos 48-57, 65-90 e 97-122, temos 62 caracteres por posição. Com 5 posições teremos 916.132.832 combinações.
                                     O formato proposto inclui dois dígitos indicando o ano. A cada novo ano a sequência é reiniciada:
                                     XXXXXAA
                                     Desta forma pode-se gerar um código 2D no formato Data Matrix pequeno suficiente para identificar um tubo tipo eppendorf.
                                     Outra possibilidade é a utilização de sequência de 10 dígitos que permitirão 10 bilhões de combinações e geram um Data Matrix de mesmo tamanho.
                                     O Data Matrix distingue-se do QRCode ser mais seguro. É preferível onde alta segurança é importante.
                                     Códigos Data Matrix possuem uma melhor capacidade de correção de erro, por volta de 33%.
                                     Data Matrix tem 10% a mais de sua área disponível para dados, portanto eles são mais compactos que o QRCode.
                                </td>
                                <td>
                                    Sistema Solicitante
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        

                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    <div class="card">
    <div class="card-header" id="headingSix">
         <h5  data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            6 | Riscos
        </h5>
    </div>

    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
        <div class="form-group">
            <p>Descreva os riscos envolvidos caso uma solução não seja desenvolvida</p>
            <textarea 
                id="riscos" 
                name="riscos" 
                class="form-control editor" 
                placeholder="Informe o contexto de da embasamento ao seu pedido"
                rows="3"
            >
            </textarea>
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-primary btn-lg btn-block">Finalizar preenchimento</button>
        </div>
    </div>
  </div>
</div>

</form>

<!-- Jodit Free Editor: https://bit.ly/2UcRz5s -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jodit/3.1.92/jodit.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jodit/3.1.92/jodit.min.js"></script>
<script>
    
    
    
    function richEditorGenerator(elementId){

        return new Jodit("#"+elementId, {
    
        "uploader": {
            "insertImageAsBase64URI": true
        },
        "spellcheck": false,
        "language": "pt_br",
        "toolbarButtonSize": "large",
        "buttons": "source,bold,strikethrough,underline,italic,|,ul,ol,|,outdent,indent,|,font,fontsize,paragraph,|,image,table,link,|,align,undo,redo,\n,,fullsize"
        });


    }
    
    //Infelizmente ainda não consegui replicar a solução via classe de Css então vai uma por textarea mesmo...
    richEditorGenerator("introducao");
    richEditorGenerator("descricaoNecessidade");
    richEditorGenerator("riscos");

</script>


@endsection
