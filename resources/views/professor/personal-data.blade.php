@extends('layouts.header')
@section('title')
    Cadastro de Professores
@endsection
@section('css')
    <link href="{{URL::asset('/css/style.css')}}" rel="stylesheet">
@endsection
@section('content')
@section('cabecalho')
    DADOS PESSOAIS
@endsection
@section('username')
    {{ "Bem vindo, ". Session::get('user')['user'] }}
@endsection

<div class="container">
    <ul class="nav nav-tabs">
        <li class="active, link3"><a href="{{ route('personal-data.index') }}">Dados Pessoais</a></li>
        {{-- <li><a href="{{ route('professorAcademicData') }}">Dados Academicos</a></li> --}}
        <li class="enabled"><a href="#">Dados Academicos</a></li>
        {{-- <li><a href="{{ route('vagueDiscipline', ['id' => Session::get('vagueId')]) }}">Área de Interesse</a></li>
        --}}
        <li class="enabled"><a href="#">Área de Interesse</a></li>
    </ul>
    <div class="formatacao-campos">
        *Obrigatório
    </div>
    <form id="form" name="personal-data" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-3">
                <label for="textNome" class="control-label, fonte-campos">Primeiro Nome<span class="cor-campo">*</span></label>
                <input name="name" id="textNome" class="form-control" type="text" required oninvalid="this.setCustomValidity('Digite seu Nome')"
                    onchange="try{setCustomValidity('')}catch(e){}">
                    @if($errors->has('name'))
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                    @endif
            </div>
            <div class="col-md-3">
                <label for="textSobrenome" class="control-label, fonte-campos">Sobrenome<span class="cor-campo">*</span></label>
                <input name="last_name" id="textSobrenome" class="form-control" type="text" required oninvalid="this.setCustomValidity('Digite seu Sobrenome')"
                    onchange="try{setCustomValidity('')}catch(e){}">
                    @if($errors->has('last_name'))
                        <p class="text-danger">{{ $errors->first('last_name') }}</p>
                    @endif
            </div>
            <div class="col-md-2">
                <label for="textDtNasc" class="control-label, fonte-campos">Data de Nascimento<span class="cor-campo">*</span></label>
                <input name="date_birth" id="textDtNasc" class="form-control" type="date" required oninvalid="this.setCustomValidity('Digite Data de Nascimento')"
                    onchange="try{setCustomValidity('')}catch(e){}">
                @if($errors->has('date_birth'))
                    <p class="text-danger">{{ $errors->first('date_birth') }}</p>
                @endif
            </div>
            <div class="col-md-2">
                <label for="inputNatu" class="fonte-campos">Nacionalidade<span class="cor-campo">*</span></label>
                <select name="nationality" id="inputNatu" class="form-control">
                    <option value="0">Brasileiro(a)</option>
                    <option value="1">Estrangeiros</option>
                </select>
                @if($errors->has('nationality'))
                    <p class="text-danger">{{ $errors->first('nationality') }}</p>
                @endif
            </div>
            <div class="col-md-2">
                <label class="fonte-campos" for="sexo">Sexo:</label>
                <select name="genre" class="form-control" id="sexo">
                    <option value="0">Masculino</option>
                    <option value="1">Feminino</option>
                    <option value="2">Não deseja Informar</option>
                </select>
            </div>
        </div>
        <form id="form" name="personal-data" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="row">
                    <div class="col-md-3">
                        <label for="textNome" class="control-label, fonte-campos">Primeiro Nome<span class="cor-campo">*</span></label>
                        <input name="name" id="textNome" class="form-control" type="text"   required oninvalid="this.setCustomValidity('Digite seu Nome')" onchange="try{setCustomValidity('')}catch(e){}">
                    </div>
                    <div class="col-md-3">
                        <label for="textSobrenome" class="control-label, fonte-campos">Sobrenome<span class="cor-campo">*</span></label>
                        <input name="last_name" id="textSobrenome" class="form-control" type="text" required oninvalid="this.setCustomValidity('Digite seu Sobrenome')" onchange="try{setCustomValidity('')}catch(e){}">
                    </div>
                    <div class="col-md-2">
                        <label for="textDtNasc" class="control-label, fonte-campos">Data de Nascimento<span class="cor-campo">*</span></label>
                        <input name="date_birth" id="textDtNasc" class="form-control" type="date" required oninvalid="this.setCustomValidity('Digite Data de Nascimento')" onchange="try{setCustomValidity('')}catch(e){}" >
                    </div>
                    <div class="col-md-2">
                        <label for="inputNatu" class="fonte-campos">Nacionalidade<span class="cor-campo">*</span></label>
                        <select name="nationality" id="inputNatu" class="form-control">
                            <option value="0">Brasileiro(a)</option>
                            <option value="1">Estrangeiros</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="fonte-campos" for="sexo">Sexo:</label>
                            <select name="genre" class="form-control" id="sexo">
                                <option value="0">Masculino</option>
                                <option value="1">Feminino</option>
                                <option value="2">Não deseja Informar</option>
                            </select>
                        </div>
                </div>
        <div class="row">
            <div class="col-md-6">
                <label for="textNomeSocial" class="control-label, fonte-campos">Nome Social</label>
                <input name="name_social" id="textNomeSocial" class="form-control" type="text">
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <label for="inputEstadoCivil" class="fonte-campos">Estado Civil<span class="cor-campo">*</span></label>
                    <select name="marital_status" id="inputEstadoCivil" class="form-control">
                        <option value="0">Solteiro</option>
                        <option value="1">Casado</option>
                        <option value="3">Divorciado</option>
                        <option value="4">Viúvo</option>
                        <!--<option value="4">Amasiado</option>-->
                    </select>
                    @if($errors->has('marital_status'))
                        <p class="text-danger">{{ $errors->first('marital_status') }}</p>
                    @endif
                </div>


        <div class="row">
            <div class="col-md-6">
                <label for="inputNomeMae" class="control-label fonte-campos">Nome da Mãe<span class="cor-campo">*</span></label>
                <input name="name_mother" id="inputNomeMae" class="form-control" type="text" required oninvalid="this.setCustomValidity('Digite o Nome da Mãe')"
                    onchange="try{setCustomValidity('')}catch(e){}">
                    @if($errors->has('name_mother'))
                        <p class="text-danger">{{ $errors->first('name_mother') }}</p>
                    @endif
            </div>
            <div class="col-md-6">
                <label for="inputNomePai" class="control-label fonte-campos">Nome do Pai</label>
                <input name="name_father" id="inputNomePai" class="form-control" type="text">
            </div>
        </div>


                <div class="row">
                    <div class="col-md-6">
                        Possui Alguma Deficiência?
                        <!-- <div class="checkbox, opcao-alinhamento">
                            <label><input type="checkbox" id ="opcaoNao" name="opcaoDeficiencia" onclick="return Validacao();">Não</label>
                        </div> -->
                        <div class="checkbox">
                            <label>
                                <!-- <input type="hidden" id="opcaoSim" name="opcaoDeficiencia" value="0" onclick="return Validacao();"> -->
                                <input type="checkbox" id="opcaoSim" name="flag_deficient" onclick="return Validacao();">Sim
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="comentario" class="control-label fonte-campos deficiencia" style="display: none;">
                                Descreva sua Deficiência
                            </label>
                            <textarea name="obs_deficient" class="form-control deficiencia" rows="2" id="comentario" style="display: none;"></textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">

            <h3>Documentos</h3>
            <hr />
            <h4>Documento de Indentidade</h4>

            <div class="col-md-3">
                <label for="inputNumDocs" class="fonte-campos">Número de Documento RG<span class="cor-campo"> *</span></label>
                <input name="rg_number" type="text" class="form-control" id="inputNumDocs" required oninvalid="this.setCustomValidity('Digite o Número do RG com dígito')"
                    onchange="try{setCustomValidity('')}catch(e){}" maxlength="9">
                @if($errors->has('rg_number'))
                    <p class="text-danger">{{ $errors->first('rg_number') }}</p>
                @endif
            </div>
            <div class="col-md-2">
                <label for="inputOrgEmissor" class="fonte-campos">Orgão Emissor<span class="cor-campo"> *</span></label>
                <input name="uf_issue" type="text" class="form-control" id="inputOrgEmissor" required oninvalid="this.setCustomValidity('Digite o Orgão Emissor')"
                    onchange="try{setCustomValidity('')}catch(e){}">
            </div>
            <div class="col-md-2">
                <label for="inputDataEmissao" class="fonte-campos">Data Emissão<span class="cor-campo"> *</span></label>
                <input name="date_issue" type="date" class="form-control" id="inputDataEmissao" required oninvalid="this.setCustomValidity('Digite a Data de Emissão')"
                    onchange="try{setCustomValidity('')}catch(e){}" style="padding: 0;">
            </div>

        </div>
        <div class="row">
            <div class="col-md-3">
                <input type="file" id="file_rg" name="file_rg" style="margin-top:15px;" required oninvalid="this.setCustomValidity('Obrigatório upload do RG')"
                    onchange="try{setCustomValidity('')}catch(e){}">
                @if($errors->has('file_rg'))
                    <p class="text-danger">{{ $errors->first('file_rg') }}</p>
                @endif
            </div>
        </div>


                        <div class="col-md-3">
                            <label for="inputNumDocs" class="fonte-campos">Número de Documento RG<span class="cor-campo"> *</span></label>
                            <input name="rg_number" type="text" class="form-control" id="inputNumDocs" required oninvalid="this.setCustomValidity('Digite o Número do RG com dígito')" onchange="try{setCustomValidity('')}catch(e){}" maxlength="9">
                        </div>
                        <div class="col-md-2">
                            <label for="inputOrgEmissor" class="fonte-campos">Orgão Emissor<span class="cor-campo"> *</span></label>
                            <input name="uf_issue" type="text" class="form-control" id="inputOrgEmissor" required oninvalid="this.setCustomValidity('Digite o Orgão Emissor')" onchange="try{setCustomValidity('')}catch(e){}">
                        </div>
                        <div class="col-md-2">
                            <label for="inputDataEmissao" class="fonte-campos">Data Emissão<span class="cor-campo"> *</span></label>
                            <input name="date_issue" type="date" class="form-control" id="inputDataEmissao" required oninvalid="this.setCustomValidity('Digite a Data de Emissão')" onchange="try{setCustomValidity('')}catch(e){}" style="padding: 0;">
                        </div>

                </div>
                <div class="row">
                  <div class="col-md-3">
                    <input type="file" id="file_rg" name="file_rg" style="margin-top:15px;" required oninvalid="this.setCustomValidity('Obrigatório upload do RG')" onchange="try{setCustomValidity('')}catch(e){}">
                  </div>
                </div>



            <div class="col-md-4">
                <label for="inputNumDoc" class="fonte-campos">Número do Documento<span class="cor-campo"> *</span></label>
                <input name="cpf" type="text" class="form-control" id="inputNumDoc" required oninvalid="this.setCustomValidity('Digite o CPF somente números')"
                    onchange="try{setCustomValidity('')}catch(e){}" pattern="[0-9]+$" maxlength="11">
                @if($errors->has('cpf'))
                    <p class="text-danger">{{ $errors->first('cpf') }}</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <input type="file" id="file_cpf" name="file_cpf" style="margin-top:15px;" required
                    onchange="try{setCustomValidity('')}catch(e){}">
                @if($errors->has('file_cpf'))
                    <p class="text-danger">{{ $errors->first('file_cpf') }}</p>
                @endif
            </div>
            <!--   <div class="col-md-3">

                                <label for="arraste" class="fonte-campos">Versão digitalizada</label>
                                <img src="img/arraste.png" id="arraste" class="img-responsive" alt="arraste">
                            </div>
                            <div class="col-md-2">
                                <label for="arraste" class="fonte-campos">Versão digitalizada</label>
                                <img src="img/visao_digitalizada.jpg" class="img-responsive" alt="versao-digitalizada">
                            </div>
                            <div class="col-md-2">
                                <img src="img/lixeira.jpg" class="img-responsive img-lixeira" alt="lixeira">
                            </div>-->

                    </div>


                         <div class="row elector_title">
                                <br/>
                                <h4>Titulo de Eleitor</h4>


            <div class="col-md-4">
                <label for="inputNumDoc_1" class="fonte-campos">Número de Documento<span class="cor-campo"> *</span></label>
                <input name="elector_title" type="text" class="form-control" id="inputNumDoc_1"
                    onchange="try{setCustomValidity('')}catch(e){}" pattern="[0-9]+$" maxlength="12">
            @if($errors->has('elector_title'))
                <p class="text-danger">{{ $errors->first('elector_title') }}</p>
            @endif
            </div>
        </div>
        <div class="row elector_title">
            <div class="col-md-3">
                <input type="file" id="file_title" name="file_title" style="margin-top:15px;">
            @if($errors->has('file_title'))
                <p class="text-danger">{{ $errors->first('file_title') }}</p>
            @endif
            </div>
        </div>
        <!--  <div class="col-md-3">

                                <label for="arraste" class="fonte-campos">Versão digitalizada</label>
                                <img src="img/arraste.png" id="arraste" class="img-responsive" alt="arraste">
                            </div>
                            <div class="col-md-2">
                                <label for="arraste" class="fonte-campos">Versão digitalizada</label>
                                <img src="img/visao_digitalizada.jpg" class="img-responsive" alt="versao-digitalizada">
                            </div>
                            <div class="col-md-2">
                                <img src="img/lixeira.jpg" class="img-responsive, incone-lixeira" alt="lixeira">
                            </div>-->
        <div class="row militar">
            <br />
            <h4 class="militar" style="display: none;">Certificado Militar</h4>

            <div class="col-md-4">
                <label for="inputNumDoc_2" style="display: none;" class="fonte-campos militar">Número de Documento<span class="cor-campo"> *</span></label>
                <input name="military_certificate" style="display: none;" type="text" class="form-control militar" id="inputNumDoc_2">
                @if($errors->has('military_certificate'))
                    <p class="text-danger">{{ $errors->first('military_certificate') }}</p>
                @endif
                <input type="file" id="file_military" class="militar" name="file_military" style="margin-top:15px;display: none;">
                @if($errors->has('file_military'))
                    <p class="text-danger">{{ $errors->first('file_military') }}</p>
                @endif
            </div>
            <!--   <div class="col-md-3">

                                <label for="arraste" class="fonte-campos">Versão digitalizada</label>
                                <img src="img/arraste.png" id="arraste" class="img-responsive" alt="arraste">
                            </div>
                            <div class="col-md-2">
                                <label for="arraste" class="fonte-campos">Versão digitalizada</label>
                                <img src="img/visao_digitalizada.jpg" class="img-responsive" alt="versao-digitalizada">
                            </div>
                            <div class="col-md-2">
                                <img src="img/lixeira.jpg" class="img-responsive, incone-lixeira" alt="lixeira">
                            </div>-->
                    </div>

                <br/>

<!--<div class="col-md-11">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <br/>
                                <h4 class="militar" style="display: none;">Endereço e Contato</h4>
                            </div>
                          <div class="col-md-4">
                                <label for="inputNumDoc_2" style="display: none;" class="fonte-campos militar">Número de Documento</label>
                                <input name="military_certificate" style="display: none;" type="text" class="form-control militar" id="inputNumDoc_2">
                                <input type="file" id="file_military" class="militar" name="file_military" style="margin-top:15px;display: none;">
                            </div>
                            <div class="col-md-3">
                                <label for="arraste" class="fonte-campos">Versão digitalizada</label>
                                <img src="img/arraste.png" id="arraste" class="img-responsive" alt="arraste">
                            </div>
                            <div class="col-md-2">
                                <label for="arraste" class="fonte-campos">Versão digitalizada</label>
                                <img src="img/visao_digitalizada.jpg" class="img-responsive" alt="versao-digitalizada">
                            </div>
                            <div class="col-md-2">
                                <img src="img/lixeira.jpg" class="img-responsive, incone-lixeira" alt="lixeira">
                            </div>
                        </div>
                    </div>
                </div>
                <br/>-->


        <div class="row">
            <br />
            <h4>Endereço e Contato</h4>
            <hr />
            <div class="col-md-2">
                <label for="inputCep" class="fonte-campos">CEP<span class="cor-campo"> *</span></label>
                <input name="postal_code" type="text" class="form-control" id="inputCep" required                     onchange="try{setCustomValidity('')}catch(e){}">
                @if($errors->has('postal_code'))
                    <p class="text-danger">{{ $errors->first('postal_code') }}</p>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <label for="inputTipoLogra" class="fonte-campos">Tipo Logradouro<span class="cor-campo">*</span></label>
                <select name="type_public_place" id="inputTipoLogra" class="form-control">
                    <option value="0">Avenida</option>
                    <option value="1">Rua</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputLogradouro" class="fonte-campos">Lougradouro<span class="cor-campo"> *</span></label>
                <input name="public_place" type="text" class="form-control" id="inputLogradouro" required readonly
                    onchange="try{setCustomValidity('')}catch(e){}">
                @if($errors->has('public_place'))
                    <p class="text-danger">{{ $errors->first('public_place') }}</p>
                @endif
            </div>
            <div class="col-md-2">
                <label for="inputNum" class="fonte-campos">Número<span class="cor-campo"> *</span></label>
                <input name="number" type="text" class="form-control" id="inputNum" required                     onchange="try{setCustomValidity('')}catch(e){}" pattern="[0-9]+$" maxlength="8">
                @if($errors->has('number'))
                    <p class="text-danger">{{ $errors->first('number') }}</p>
                @endif
            </div>
        </div>



                    <div class="row">
                                <div class="col-md-2">
                                    <label for="inputTipoLogra" class="fonte-campos">Tipo Logradouro<span class="cor-campo">*</span></label>
                                    <select name="type_public_place" id="inputTipoLogra" class="form-control">
                                        <option value="0">Avenida</option>
                                        <option value="1">Rua</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputLogradouro" class="fonte-campos">Lougradouro<span class="cor-campo"> *</span></label>
                                    <input name="public_place" type="text" class="form-control" id="inputLogradouro" required readonly oninvalid="this.setCustomValidity('Digite o Lougradouro')" onchange="try{setCustomValidity('')}catch(e){}">
                                </div>
                                <div class="col-md-2">
                                    <label for="inputNum" class="fonte-campos">Número<span class="cor-campo"> *</span></label>
                                    <input name="number" type="text" class="form-control" id="inputNum" required oninvalid="this.setCustomValidity('Digite Somente Número')" onchange="try{setCustomValidity('')}catch(e){}" pattern="[0-9]+$" maxlength="8">
                                </div>
                    </div>



            <div class="col-md-4">
                <label for="inputBairro" class="fonte-campos">Bairro<span class="cor-campo"> *</span></label>
                <input name="neighborhood" type="text" class="form-control" id="inputBairro" required readonly
                    onchange="try{setCustomValidity('')}catch(e){}">
                @if($errors->has('neighborhood'))
                    <p class="text-danger">{{ $errors->first('neighborhood') }}</p>
                @endif
            </div>
            <div class="col-md-1">
                <label for="inputUF" class="fonte-campos">UF<span class="cor-campo">*</span></label>
                <input name="state" type="text" class="form-control" id="inputUF" required readonly                     onchange="try{setCustomValidity('')}catch(e){}">
                @if($errors->has('state'))
                    <p class="text-danger">{{ $errors->first('state') }}</p>
                @endif
            </div>
        </div>


        <div class="row">
            <div class="col-md-8">
                <label for="inputCidade" class="fonte-campos">Cidade<span class="cor-campo"> *</span></label>
                <input name="city" type="text" class="form-control" id="inputCidade" required readonly                     onchange="try{setCustomValidity('')}catch(e){}">
                @if($errors->has('city'))
                    <p class="text-danger">{{ $errors->first('city') }}</p>
                @endif
            </div>
        </div>
        <br />

        <div class="row">
            <br />
            <h4>Comprovante de Residência</h4>
            <hr />
            <div class="col-md-4">
                <label for="inputNumDoc_2" class="fonte-campos">Água, Luz, Gás e Telefone<span class="cor-campo"> *</span></label>
                <input type="file" id="file_address" class="proof_address" name="file_address" style="margin-top:15px;" required onchange="try{setCustomValidity('')}catch(e){}" >
                @if($errors->has('file_address'))
                    <p class="text-danger">{{ $errors->first('file_address') }}</p>
                @endif
            </div>
        </div>
        <br>
        <div class="row">
            <h4>Telefone</h4>
            <hr />
            <!--<div class="form-group">-->
            <div class="col-md-2">

                <label for="inputTipo" class="fonte-campos">Código País<span class="cor-campo">*</span></label>
                <select id="inputTipo" class="form-control" name="area_code_phone">
                    <!--<option>11</option>
                                            <option>21</option> -->
                    <!--<select name=id_pais>-->
                    <option value=55>(+55) Brasil
                    <option value=351>(+351) Portugal
                    <option value=54>(+54) Argentina
                    <option value=1>(+1) EUA
                    <option value=86>(+86) China
                </select>

            </div>
            <div class="col-md-3">
                <label for="inputNum_1" class="fonte-campos">Número<span class="cor-campo"> *</span></label>
                <input name="phone" type="text" class="form-control" id="inputNum_1" required telefone')"
                    onchange="try{setCustomValidity('')}catch(e){}" pattern="[0-9]+$" maxlength="15">
                @if($errors->has('phone'))
                    <p class="text-danger">{{ $errors->first('phone') }}</p>
                @endif
            </div>



                                        <!--<div class="col-md-1">
                                        <label for="inputPrefixo" class="fonte-campos">Prefixo<span class="cor-campo"> *</span></label>
                                        <input  type="text" class="form-control" id="inputPrefixo" required onchange="try{setCustomValidity('')}catch(e){}" pattern="[0-9]+$">
                                        </div> -->

                           <!--<div class="form-group">
                               <div class="col-md-10">
                                    <div class="col-md-5">
                                        <label for="inputNum_1" class="fonte-campos">Número<span class="cor-campo"> *</span></label>
                                        <input name="phone" type="text" class="form-control" id="inputNum_1" required telefone')" onchange="try{setCustomValidity('')}catch(e){}" pattern="[0-9]+$" maxlength="15" >
                                        <span class="cor-campo">Adicionar outro telefone</span> -->
        </div>

        <br/>

        <div class="row">
            <h4>Celular</h4>
            <hr />
            <div class="col-md-2">

                <label for="inputTipo" class="fonte-campos">Código País<span class="cor-campo">*</span></label>
                <select id="inputTipo" class="form-control" name="area_code_mobile">

                    <!--<option>11</option>
                                                        <option>21</option> -->

                    <!--<select name=id_pais>-->

                    <option value=55>(+55) Brasil
                    <option value=351>(+351) Portugal
                    <option value=54>(+54) Argentina
                    <option value=1>(+1) EUA
                    <option value=86>(+86) China
                </select>

            </div>
            <div class="col-md-3">
                <label for="inputNum_2" class="fonte-campos">Número<span class="cor-campo"> *</span></label>
                <input name="mobile" type="text" class="form-control" id="inputNum_1" required
                    onchange="try{setCustomValidity('')}catch(e){}" pattern="[0-9]+$" maxlength="15">
                @if($errors->has('mobile'))
                    <p class="text-danger">{{ $errors->first('mobile') }}</p>
                @endif
            </div>
        </div>



                   <div class="row">
                        <hr />
                        <button id="addSubmit" type="submit" class="btn btn-danger float-right">AVANÇAR</button>
                    </div>



                <!--
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputEmail" class="fonte-campos">E-mail<span class="cor-campo"> *</span></label>
                            <input  type="text" class="form-control" id="inputEmail" required )" onchange="try{setCustomValidity('')}catch(e){}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        </div>
                        <div class="col-md-6">
                            <label for="inputConfirmarEmail" class="fonte-campos">Confirmar e-mail<span class="cor-campo"> *</span></label>
                            <input  type="text" class="form-control" id="inputConfirmarEmail" required )" onchange="try{setCustomValidity('')}catch(e){}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputUsuario" class="fonte-campos">Usuário<span class="cor-campo"> *</span></label>
                            <input  type="text" class="form-control" id="inputUsuario" required onchange="try{setCustomValidity('')}catch(e){}">
                        </div>
                        <div class="col-md-6">
                            <label for="inputSenha" class="fonte-campos">Senha<span class="cor-campo"> *</span></label>
                            <input  type="text" class="form-control" id="inputSenha" required onchange="try{setCustomValidity('')}catch(e){}">
                        </div>
                    </div>
                </div> -->

        </form>
    </div>
@endsection
@section('scripts')
    <!-- <script src="{{URL::asset('js/dados-pessoais.js')}}"></script> -->

    <script>
        /* Validação de checkedbox deficiencia */
        function Validacao() {
            var checkboxes = document.getElementsByName("opcaoDeficiencia");
            var numberOfCheckedItems = 0;
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked)
                    numberOfCheckedItems++;
            }
            if (numberOfCheckedItems > 1) {
                alert("Selecione somente uma opção");
                return false;
            }
        }

        function get_cep(cep) {
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {
                //Preenche os campos com "..." enquanto consulta webservice.
                $("#inputLogradouro").val("...");
                $("#inputBairro").val("...");
                $("#inputCidade").val("...");
                $("#inputUF").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#inputLogradouro").val(dados.logradouro);
                        $("#inputBairro").val(dados.bairro);
                        $("#inputCidade").val(dados.localidade);
                        $("#inputUF").val(dados.uf);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        //limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            }
            //alert(cep);
        }
        // Init
        $(document).ready(function () {
            $("#inputNatu").change(function(){

                var natural = $(this).val();

            if (natural == 1) {
                $(".militar").hide()
                $("#file_military").prop('required',null);
            } else {
                $(".militar").show();
                $("#file_military").prop('required',true);
            }
            if (natural == 1) {
                $(".elector_title").hide();
                $("#file_title").prop('required',null);
            } else {
                $(".elector_title").show();
                $("#file_title").prop('required',true);
            }

            });

            if($("#sexo").val() == 0) {

            $(".militar").show();
            $("#file_military").prop('required',true);
        }


            $("#sexo").change(function(){

                var sexo = $(this).val();

                if(sexo == 0) {

                $(".militar").show();
                $("#file_military").prop('required',true);

                } else if(sexo == 1 || sexo == 2) {

                $(".militar").hide();
                $("#file_military").prop('required',null);
            }


            });

            $("#inputCep").blur(function() {

                get_cep($(this).val());

            });

            $("#opcaoSim").click(function() {

                if ($(this).is(':checked')) {
                    $(".deficiencia").show();
                } else {
                    $(".deficiencia").hide();
                }
            });

            var enabled = false;
            if ($('#comentario').val()) {
                enabled = true;
            }

            // Button functonality
            $('#addSubmit').click(function () {
                $.ajax({
                    // Call url
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    url: "personal-data",
                    type: 'POST',
                    data: {
                        _token: '{{csrf_token()}}',

                        // Call values of fields candidates table
                        cpf: $('#inputNumDoc').val(),
                        date_birth: $('#textDtNasc').val(),
                        flag_deficient: $('#opcaoSim').val(),
                        genre: $('#sexo').val(),
                        last_name: $('#textSobrenome').val(),
                        marital_status: $('#inputEstadoCivil').val(),
                        name: $('#textNome').val(),
                        name_father: $('#inputNomePai').val(),
                        name_mother: $('#inputNomeMae').val(),
                        name_social: $('#textNomeSocial').val(),
                        nationality: $('#inputNatu').val(),
                        obs_deficient: $('#comentario').val(),

                        // Call values of fields addresses table
                        elector_title: $('#inputNumDoc_1').val(),
                        elector_link: $('#file_title').val(),
                        military_certificate: $('#inputNumDoc_2').val(),
                        military_link: $('#file_military').val(),
                        rg_number: $('#inputNumDocs').val(),
                        rg_number_link: $('#file_rg').val(),
                        date_issue: $('#inputDataEmissao').val(),
                        uf_issue: $('#inputOrgEmissor').val(),

                        // Call values of fields addresses table
                        city: $('#inputCidade').val(),
                        complement: $('#inputComplemento').val(),
                        neighborhood: $('#inputBairro').val(),
                        number: $('#inputNum').val(),
                        postal_code: $('#inputCep').val(),
                        public_place: $('#inputLogradouro').val(),
                        state: $('#inputUF').val(),
                        type_public_place: $('#inputTipoLogra').val(),
                    },
                    success: function (result) {
                        // F12 or inspect on browser to show result
                        console.log(result)
                    },


                    error: function (errors) {
                        console.log(errors)
                    }
                });
            });
        });
    </script>
@endsection
