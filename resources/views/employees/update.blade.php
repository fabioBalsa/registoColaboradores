@extends('layouts.master')

@section('title', 'Actualizar Colaborador')

@section('conteudo')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ $employee->c_name_emplo}}
                <small>{{ $employee->c_area_emplo}}</small>
            </h1>
        </div>
    </div>

    <div class="row">

        <div class="col-md-6">
            <img class="img-thumbnail img-responsive img-center" src="{{ isset($employee->reg_photo) ? '/' . $employee->reg_photo->c_path_phot .'/'. $employee->reg_photo->c_name_phot . '.' . $employee->reg_photo->c_extension_phot : asset('/imgDefault/profileDefault.png') }}" alt="" height="200" width="200">
        </div>

        <div class="col-md-6">
            <h3>Dados actuais do colaborador</h3>
            <form class="form-horizontal" action="{{ action('employeeController@update', $employee->id) }}" method="post" role="form" enctype="multipart/form-data">
            {!! csrf_field() !!}
            {!! method_field('PUT') !!}
            <input type="hidden" name="update" value="update" />
            
                <div class="form-group{{ $errors->has('c_name_emplo') ? ' has-error' : '' }}">
                    <b><label class="control-label col-sm-5" for="nome">Nome:</label></b> 
                    <div class="col-sm-7">
                        <input type="text" name="c_name_emplo" class="form-control" id="nome" value="{{$employee->c_name_emplo}}" >
                        @if ($errors->has('c_name_emplo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('c_name_emplo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            
                <div class="form-group{{ $errors->has('c_area_emplo') ? ' has-error' : '' }}">
                    <b><label class="control-label col-sm-5" for="area">Área:</label></b>
                    <div class="col-sm-7">
                        <input type="text" name="c_area_emplo" class="form-control" id="area" value="{{ $employee->c_area_emplo}}">
                        @if ($errors->has('c_area_emplo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('c_area_emplo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group{{ $errors->has('c_email_emplo') ? ' has-error' : '' }}">
                    <b><label class="control-label col-sm-5" for="email">Email:</label></b>
                    <div class="col-sm-7">
                        <input type="email" name="c_email_emplo" class="form-control" id="email" value="{{$employee->c_email_emplo}}">
                        @if ($errors->has('c_email_emplo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('c_email_emplo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group{{ $errors->has('i_phone_emplo') ? ' has-error' : '' }}">
                    <b><label class="control-label col-sm-5" for="telefone">Telefone:</label></b> 
                    <div class="col-sm-7">
                        <input type="number" name="i_phone_emplo" class="form-control" id="telefone" value="{{$employee->i_phone_emplo}}" >
                        @if ($errors->has('i_phone_emplo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('i_phone_emplo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group{{ $errors->has('d_datebirth_emplo') ? ' has-error' : '' }}">
                    <b><label class="control-label col-sm-5" for="dataDeNascimento">Data nascimento:</label></b>
                    <div class="col-sm-7">
                        <input type="date" name="d_datebirth_emplo" class="form-control" id="Dnascimento" value="{{$employee->d_datebirth_emplo}}">
                        @if ($errors->has('dataDeNascimento'))
                            <span class="help-block">
                                <strong>{{ $errors->first('d_datebirth_emplo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group{{ $errors->has('e_sex_emplo') ? ' has-error' : '' }}">
                    <b><label class="control-label col-sm-5" for="sexoInput">Sexo:</label></b>
                    <div class="col-sm-7 radio">
                        <label><input type="radio" name="e_sex_emplo" value="M" {{ $employee->e_sex_emplo == 'M' ? 'checked' : '' }}>homem</label>
                        <label><input type="radio" name="e_sex_emplo" value="F" {{ $employee->e_sex_emplo == 'F' ? 'checked' : '' }}>Mulher</label>
                        @if ($errors->has('e_sex_emplo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('e_sex_emplo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="InputFile">Foto do colaborador:</label>
                    <div class="col-sm-7">
                        <input type="file" name="photo" id="InputFile">
                    </div>
                </div>
                <div class="form-group"> 
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-send"></span> Atualizar</button>
                  </div>
                </div>  
            </form>
        </div>

    </div>
@endsection
