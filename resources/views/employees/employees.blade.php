@extends('layouts.master')

@section('title', 'Colaboradores da TeamWe')

@section('conteudo')

    <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Colaboradores
            <small>Consulta os seus dados</small>
        </h1>
        <p>Nesta plataforma é possível consultar os dados pessoais dos colaboradores da empresa</p>
    </div>
    </div>
    
    @if(old('update'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Sucesso!</strong> Os dados do colaborador <strong>{{ old('c_name_emplo') }}</strong> foram actualizados com sucesso!
        </div>
    @elseif(old('c_name_emplo'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Sucesso!</strong> O colaborador <strong>{{ old('c_name_emplo') }}</strong> foi registado com sucesso!
        </div>
    @endif
    
    @if($employees->isEmpty())
        <div class="alert alert-danger">
            <p>Não existe nenhum colaborador registado.</p>
        </div>
    @else
        <div class="row">
        <div class="col-lg-12">
            <h2 class="centar page-header">Colaboradores da Empresa</h2>
        </div>
    @foreach($employees as $employee)
        <div class="col-lg-4 col-sm-6 text-center">
            <a href="{{ action('employeeController@show', $employee->id) }}">
                <img class="img-thumbnail img-responsive img-center" src="{{ isset($employee->c_name_phot) ? '/' . $employee->c_path_phot .'/'. $employee->c_name_phot . '.' . $employee->c_extension_phot : asset('/imgDefault/profileDefault.png') }}" alt="" height="200" width="200">
            </a>
            <h3>{{$employee->c_name_emplo}}
                <small>{{$employee->c_area_emplo}}</small>
            </h3>
        </div>
    @endforeach
    </div>
    
    <center>
        <div class="pagination"> {{ $employees->render() }} </div>
    </center>
    @endif
@endsection
