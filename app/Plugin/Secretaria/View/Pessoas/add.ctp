<script>
  $(document).ready(function(){
    $('.datepicker').datepicker({
      language: "pt-BR"
    }).on('changeDate', function(ev){
      $('.datepicker').datepicker('hide');
    });
  });
</script>

<ol class="breadcrumb"><!-- breadcrumb -->
  <li><a href="#">Início</a></li>
  <li><a href="#">Gerenciar Membros</a></li>
  <li class="active">Cadastro de Membros</li>
</ol><!-- /breadcrumb -->
<h2>Cadastro de Membro</h2>
<!-- form -->
<?php echo $this->Form->create('Pessoa', array('role' => 'form')); 

  echo $this->Form->input('nome', array('label' => 'Nome do Membro' ,'placeholder' => 'Nome do Membro', 'class' => 'form-control', 'required', 'div' => array('class' => 'form-group col-md-12'))); 
  echo $this->Form->input('email', array('label' => 'Email Pessoal' ,'placeholder' => 'Entre com seu email', 'class' => 'form-control col-md-12', 'required', 'div' => array('class' => 'form-group col-md-12'))); 
?>
<div class="nascimento">
  <?php 
    echo $this->Form->input('tipo_id', array('label' => 'Tipo de Membro' ,'class' => 'form-control', 'required', 'div' => array('class' => 'form-group col-md-3'), 'options' => array('0' => 'Selecione', '1' => 'Membro', '2' => 'Visitante', '3' => 'Parente'))); 
    echo $this->Form->input('sexo', array('label' => 'Sexo' ,'class' => 'form-control', 'required', 'div' => array('class' => 'form-group col-md-3'), 'options' => array('0' => 'Selecione', '1' => 'Masculino', '2' => 'Feminino'))); 
    echo $this->Form->input('datanascimento', array('type' => 'text', 'label' => 'Data de Nascimento' ,'class' => 'form-control datepicker', 'required', 'div' => array('class' => 'form-group col-md-3'), 'data-date-format' => 'dd/mm/yyyy')); 

    echo $this->Form->input('estado_id', array('label' => 'Estado' ,'class' => 'form-control', 'required', 'div' => array('class' => 'form-group col-md-3'), 'options' => array($estados))); 
  ?>
</div>
<?php 
  echo $this->Form->input('naturalidade', array('label' => 'Naturalidade' ,'placeholder' => 'Ex: Brasileiro', 'class' => 'form-control col-md-6', 'required', 'div' => array('class' => 'form-group col-md-6')));
  echo $this->Form->input('estadocivil', array('label' => 'Estado Civil' ,'class' => 'form-control', 'required', 'div' => array('class' => 'form-group col-md-6'), 'options' => array('0' => 'Solteiro', '1' => 'Casado', '2' => 'Viuvo', '3' => 'Desquitado'))); 

  echo $this->Form->input('rg', array('label' => 'RG' ,'placeholder' => '00.000.000-0', 'class' => 'form-control col-md-3', 'required', 'div' => array('class' => 'form-group col-md-3')));
  echo $this->Form->input('cpf', array('label' => 'CPF' ,'placeholder' => '000.000.000-00', 'class' => 'form-control col-md-3', 'required', 'div' => array('class' => 'form-group col-md-3')));

  echo $this->Form->input('telefone', array('label' => 'Telefone', 'class' => 'form-control col-md-6', 'required', 'div' => array('class' => 'form-group col-md-6')));
  echo $this->Form->input('celular', array('label' => 'Celular', 'class' => 'form-control col-md-6', 'required', 'div' => array('class' => 'form-group col-md-6')));

  echo $this->Form->input('escolaridade', array('label' => 'Escolaridade' ,'class' => 'form-control', 'required', 'div' => array('class' => 'form-group col-md-6'), 'options' => array('0' => 'Selecione', '1' => 'Ensino Superior', '2' => 'Ensino Médio Completo', '3' => 'Ensino Médio Incompleto', '4' => 'Ensino Fundamental Completo', '5' => 'Ensino Fundamental Incompleto'))); 

  echo $this->Form->input('profissao_id', array('label' => 'Profissão', 'class' => 'form-control col-md-6', 'required', 'div' => array('class' => 'form-group col-md-6'), 'options' => array($profissoes), 'default' => '0'));
  echo $this->Form->input('empresa', array('label' => 'Empresa', 'class' => 'form-control col-md-6', 'required', 'div' => array('class' => 'form-group col-md-6')));

  echo $this->Form->input('databatismo', array('type' => 'text', 'label' => 'Data de Batismo', 'class' => 'form-control col-md-2 datepicker', 'required', 'div' => array('class' => 'form-group col-md-2', 'style' => 'border-bottom:3px !important;')));
  echo $this->Form->input('igrejabatismo', array('label' => 'Igreja Batismo', 'class' => 'form-control col-md-6', 'placeholder' => 'Nome da igreja que foi batizado', 'required', 'div' => array('class' => 'form-group col-md-5')));
  echo $this->Form->input('pastorbatismo', array('label' => 'Pastor que Batizou', 'class' => 'form-control col-md-6', 'placeholder' => 'Nome do Pastor que batizou', 'required', 'div' => array('class' => 'form-group col-md-5')));

  echo $this->Form->input('ultimaigreja', array('label' => 'Ultima Igreja que frequentou', 'class' => 'form-control col-md-6', 'placeholder' => 'Nome da Igreja que Frequentou', 'required', 'div' => array('class' => 'form-group col-md-6')));

  echo $this->Form->input('cargo_id', array('type' => 'text', 'label' => 'Cargo na Igreja', 'class' => 'form-control col-md-6', 'placeholder' => 'Cargo que tinha na Igreja', 'required', 'div' => array('class' => 'form-group col-md-6')));

  echo $this->Form->input('igrejasanteriores', array('label' => 'Igrejas que já frequentou', 'class' => 'form-control', 'placeholder' => 'Nome das igrejas que já frequentou (pulando linhas)', 'required', 'div' => array('class' => 'form-group', 'style' => 'padding: 0 1em')));
?>
  <div class="form-group col-md-6">
    <button type="submit" class="btn btn-primary">Cadastrar nova pessoa</button>
  </div>
<?php echo $this->Form->end(); ?>
<!-- /form -->