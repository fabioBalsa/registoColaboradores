@extends('layouts.master')

@section('title', 'Detalhes do colaborador')

@section('conteudo')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ $employee->c_name_emplo}}
                <small>{{ $employee->c_area_emplo}}</small>
            </h1>
        </div>
    </div>

    <div class="row">

        <div class="col-md-8">
            <img class="img-thumbnail img-responsive img-center" src="{{ isset($employee->reg_photo) ? '/' . $employee->reg_photo->c_path_phot .'/'. $employee->reg_photo->c_name_phot . '.' . $employee->reg_photo->c_extension_phot : asset('/imgDefault/profileDefault.png') }}" alt="" height="200" width="200">
        </div>

        <div class="col-md-4">
            <h3>Dados do colaborador</h3>
            <ul>
                <li><b>Email:</b> {{$employee->c_email_emplo}}</li>
                <li><b>Telefone:</b> {{$employee->i_phone_emplo}}</li>
                <li><b>Data de nascimento:</b> {{$employee->d_datebirth_emplo}}</li>
                <li><b>Género:</b> {{ $employee->e_sex_emplo === 'M' ? 'Maculino' : 'Feminino'}}</li>
            </ul>
            <div class="btn-group">
              <a href="{{ action('employeeController@edit', $employee->id) }}" class="btn btn-default"><span class="glyphicon glyphicon-wrench"></span></a>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#update"><span class="glyphicon glyphicon-trash"></span></button>
            </div>
        </div>

    </div>
    
  <!-- Modal -->
  <div class="modal fade" id="update" role="dialog">
      
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Confirmar acção:</h4>
        </div>
        <div class="modal-body">
            <p>Tem a certeza de que pretende excluir os dados do colaborador <strong>{{ $employee->c_name_emplo}}</strong>?</p>
        </div>
        <div class="modal-footer">
            <form action="{{ action('employeeController@destroy', $employee->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-default">Ok</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </form>
        </div>
      </div>
      
    </div>
  </div>
@endsection

       