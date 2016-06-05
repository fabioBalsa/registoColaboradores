@extends('layouts.master')

@section('title', 'Adicionar Colaborador')

@section('conteudo')

    <div class="row fromulario">
        
        <h1 class="centar">Novo Colaborador</h1>
            
        <form class="form-horizontal" action="{{ action('employeeController@store') }}" method="post" role="form" enctype="multipart/form-data">
            {!! csrf_field() !!}
            
            <div class="form-group{{ $errors->has('c_name_emplo') ? ' has-error' : '' }}">
              <label class="control-label col-sm-3" for="nomeInput">Nome:</label>
                <div class="col-sm-7">
                    <input type="text" name="c_name_emplo" id="nomeInput" class="form-control" value="{{ old('c_name_emplo') }}" placeholder="Nome do Colaborador">
                    
                    @if ($errors->has('c_name_emplo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('c_name_emplo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('e_sex_emplo') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="sexoInput">Sexo: </label>
                <div class="col-sm-7 radio">
                    <label><input type="radio" name="e_sex_emplo" value="M">homem</label>
                    <label><input type="radio" name="e_sex_emplo" value="F">Mulher</label>
                    @if ($errors->has('e_sex_emplo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('e_sex_emplo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('c_area_emplo') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="areaInput">Area de actividade:</label>
                <div class="col-sm-7">
                    <input type="text" name="c_area_emplo" id="areaInput" class="form-control" value="{{ old('c_area_emplo') }}" id="pwd" placeholder="Area de trabalho">
                    @if ($errors->has('c_area_emplo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('c_area_emplo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('d_datebirth_emplo') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="dataInput">Data de nascimento:</label>
                <div class="col-sm-7">
                    <input type="date" name="d_datebirth_emplo" id="dataInput" class="form-control" value="{{ old('d_datebirth_emplo') }}" id="pwd" placeholder="">
                    @if ($errors->has('d_datebirth_emplo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('d_datebirth_emplo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('c_email_emplo') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="inputEmail">Email:</label>
                <div class="col-sm-7">
                    <input type="email" name="c_email_emplo" class="form-control" value="{{ old('c_email_emplo') }}" id="inputEmail" placeholder="exemplo@exemplo.com">
                    @if ($errors->has('c_email_emplo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('c_email_emplo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('i_phone_emplo') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="telefoneInput">Telefone:</label>
                <div class="col-sm-7">
                    <input type="number" name="i_phone_emplo" id="telefoneInput" class="form-control" value="{{ old('i_phone_emplo') }}" id="telefoneId" placeholder="Contacto telefónico">
                    @if ($errors->has('i_phone_emplo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('i_phone_emplo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="InputFile">Foto do colaborador:</label>
                <div class="col-sm-7">
                    <input type="file" name="photo" value="{{ old('photo') }}" id="InputFile">
                </div>
            </div>
            <center>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-send"></span> Enviar</button>
            </center>    
        </form>
    </div>
@endsection