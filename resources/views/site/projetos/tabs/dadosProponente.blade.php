 <div class="row">
  <div class="col-md-6">
    <div class="form-group">
        {!! Form::label('Nome') !!}
        {!! Form::text('proponent_name',null,['class'=>'form-control', 'placeholder'=>'Nome do Proponente','required'=>'true']) !!}
    </div>
     </div>

 <div class="col-md-3">
  <div class="form-group">
        {!! Form::label('Número do Telefone') !!}
        {!! Form::text('phone_number',null,['class'=>'form-control','id'=>'phone_number','required'=>'true']) !!}
    </div>
    </div>
 <div class="col-md-3">
    <div class="form-group">
        {!! Form::label('Número do Telefone 2') !!}
        {!! Form::text('phone_number2',null,['class'=>'form-control','id'=>'phone_number']) !!}
    </div>
    </div>
   </div>

<div class="row">
<div class="col-md-4">
    <div class="form-group">
        {!! Form::label('Documento') !!}
        {!! Form::text('proponent_document',null,['class'=>'form-control','placeholder'=>'CPF ou CNPJ','required'=>'true']) !!}
    </div>
     </div>
   
 <div class="col-md-4">
 <div class="form-group">
        {!! Form::label('E-mail Principal') !!}
        {!! Form::email('primary_email',null,['class'=>'form-control','required'=>'true']) !!}
    </div>
    </div>

<div class="col-md-4">    
    <div class="form-group">
        {!! Form::label('E-mail Secundário') !!}
        {!! Form::email('secondary_email',null,['class'=>'form-control']) !!}
    </div>
    </div>


</div>   



  



   
