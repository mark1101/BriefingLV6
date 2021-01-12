@extends('layouts.geral')

@section('content')
    <div class="card" style="display: block ; margin-left: auto ; margin-right: auto ; margin-top: 7% ;  background-image: linear-gradient(to bottom, #9476e4, #c4bbdb); border-color: transparent">
        <div class="card-body">
            <p align="center" style="font-size: xx-large ; color: white">Cadastro do Cliente</p>
            <p align="center" style="font-size: medium ; color: white">Informacoes basicas</p>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input  type="text" class="form-control form-control-lg" id="" placeholder="Nome da Empresa ou Marca">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control form-control-lg" id="" placeholder="WhatsApp ou Instagram">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control form-control-lg" id="" placeholder="Nome completo do responsavel">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control form-control-lg" id="" placeholder="Telefone Empresarial">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control form-control-lg" id="" placeholder="Endereco de email">
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" class="form-control form-control-lg" id="" placeholder="CNPJ">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control form-control-lg" id="inputCity" placeholder="Endereco completo">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <select id="inputEstado" class="form-control form-control-lg">
                            <option selected>Tipo de trabalho</option>
                            <option>Job</option>
                            <option>Acessoria On</option>
                            <option>Acessoria Off</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control form-control-lg" id="" placeholder="Pontos">
                    </div>
                </div>

                <button style="display: block ; margin-right: auto ; margin-left: auto ; background-color: #f15722; color: white" type="submit" class="btn btn-lg">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection
