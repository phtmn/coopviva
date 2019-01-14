

 <div class="row">

  <div class="col-md-1">
    <div class="form-group">
      
    </div>
      </div>


   <div class="col-md-2">
    <div class="form-group">
       <h2 class="box-title">Conta de Patrocínio</h2>
       
    </div>
      </div>


  <div class="col-md-3">
<div class="form-group">
        {!! Form::label('Banco') !!}
        {!! Form::select('bank_patrocinio',[
                'CEF'   =>  "Caixa Economica Federal",
                'BB'    =>  "Banco do Brasil",
                'SA'    =>  "Banco Santander",
                'IT'    =>  "Banco Itaú"  
        ],null,['placeholder'=>'Selecione uma Opção','class'=>'form-control','required'=>'true']) !!}
    </div>
     </div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('Agência') !!}
        {!! Form::text('bank_agent_patrocinio',null,['class'=>'form-control','required'=>'true']) !!}
    </div>
     </div>
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('Conta') !!}
        {!! Form::text('checking_account_patrocinio',null,['class'=>'form-control','required'=>'true']) !!}
    </div>
     </div> 
 </div>




<hr>
 <div class="row">

  <div class="col-md-1">
    <div class="form-group">
      
    </div>
      </div>

   <div class="col-md-2">
    <div class="form-group">
        <h2 class="box-title">Conta de Doação</h2>
    </div>
      </div>

  <div class="col-md-3">
    <div class="form-group">
        {!! Form::label('Banco') !!}
        {!! Form::select('bank_doacao',[
                'CEF'   =>  "Caixa Economica Federal",
                'BB'    =>  "Banco do Brasil",
                'SA'    =>  "Banco Santander",
                'IT'    =>  "Banco Itaú"  
        ],null,['placeholder'=>'Selecione uma Opção','class'=>'form-control','required'=>'true']) !!}
    </div>
      </div>

 <div class="col-md-3">
    <div class="form-group">
        {!! Form::label('Agência') !!}
        {!! Form::text('bank_agent_doacao',null,['class'=>'form-control','required'=>'true']) !!}
    </div>
      </div>

 <div class="col-md-3">
    <div class="form-group">
        {!! Form::label('Conta') !!}
        {!! Form::text('checking_account_doacao',null,['class'=>'form-control','required'=>'true']) !!}
    </div>
      </div>
         </div>
