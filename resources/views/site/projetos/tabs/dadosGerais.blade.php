 <div class="row">
  <div class="col-md-6">
    <div class="form-group">
        {!! Form::label('Nome') !!}
        {!! Form::text('description',null,["class"=>"form-control col-xs-4", 'placeholder'=>'Nome do Projeto','required'=>'true']) !!}                           
    </div>

</div>
<div class="col-md-6">
    <div class="form-group">
         {!! Form::label('Responsável pela Empresa') !!}
        {!! Form::text('responsible_company',null,['class'=>'form-control','required'=>'true']) !!}
    </div>
</div>
</div>

<div class="row">
<div class="col-md-4">
    <div class="form-group">
        {!! Form::label('Instância do Projeto') !!}
        {!! Form::select('project_instance',$quotas,null,['placeholder'=>'Selecione uma Opção','class'=>'form-control','required'=>'true']) !!}
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        {!! Form::label('Âmbito do Projeto') !!}
        {!! Form::select('ambit',[
                        'federal'   =>  "Federal",
                        'estadual'  => "Estadual",
                        'municipal' => "Municipal"
                        ],null,
        ['placeholder'=>'Selecione uma Opção','class'=>'form-control','required'=>'true']) !!}
    </div>
</div>    
<div class="col-md-4">
    <div class="form-group">
        {!! Form::label('Segmento Cultural') !!}
        {!! Form::select('cultural_segment',[
                        'esportes'  => "Esportes",
                        'cultura'   => "Cultura",
                        'educação'  => "Educação",
                        'saude'     => "Saúde"
                        ],null,
        ['placeholder'=>'Selecione uma Opção','class'=>'form-control','required'=>'true']) !!}
    </div>

</div>
</div>

<div class="row">

<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('Valor (R$)') !!}
        {!! Form::text('project_value',null,['class'=>'input form-control','id'=>'project_value','required'=>'true']) !!}
    </div>
</div>

<div class="col-md-3"> 
        <div class="form-group">
            {!! Form::label('Número de Registro 1') !!}
            {!! Form::text('register_number1',null,['class'=>'form-control']) !!}                            
        </div>
        </div>

<div class="col-md-3"> 
        <div class="form-group">
            {!! Form::label('Número de Registro 2') !!}
            {!! Form::text('register_number2',null,['class'=>'form-control']) !!}                            
        </div> 
        </div>      

<div class="col-md-3"> 
        <div class="form-group">
            {!! Form::label('Artigo de Enquadramento') !!}
            {!! Form::text('framework_article',null,['class'=>'form-control','required'=>'true']) !!}
        </div>
  </div>
  </div>