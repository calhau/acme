@extends('base')

@section('browsertitle')
Projeto: Registrar
@stop

@section('css')
<style>

</style>
@stop

@section('content')
        <div class="row">
            <div class="col-md-2 "></div>
            <div class="col-md-8">
                <h1>Cadastrar Projeto</h1>

                <hr />

                <!-- -->
                <!-- -->
                <!-- Form de Registrar PROJETOS -->
                <!-- Lembrando que no ACTION do FORM, definimos o caminho pelo qual sera tratado na rota para receber os dados -->
                <form id="projetoform" class="form-horizontal"  name="projetoform" action="/projeto" method="post" >

                  <div class="form-group">
                      <label for="project_name" class="col-sm-2 control-label">Nome do Projeto:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control required" id="project_name" name="project_name" placeholder="Nome do Projeto">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="responsable_name" class="col-sm-2 control-label">Responsavel:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control required" id="responsable_name" name="responsable_name" placeholder="Responsável pelo Projeto">
                      </div>
                  </div>


                    <div class="form-group">
                        <label for="area_name" class="col-sm-2 control-label">Area Responsavel</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control required" id="area_name" name="area_name" placeholder="Area Responsavel">
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-2"></div>
        </div>
@stop


@section('bottomjs')
<script>
  $(document).ready(function (){
    $("#registerform").validate({
      rules:{
        verify_username:{
          required:true,
          email:true,
          equalTo:"#username"
        }
      }
    });
  })
</script>
@stop
