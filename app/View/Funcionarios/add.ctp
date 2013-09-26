<div class="funcionarios form">
    <?php echo $this->Form->create('Funcionario'); ?>
    <fieldset>
        <legend><?php echo __('Adicionar Funcionario'); ?></legend>
        <?php
        echo $this->Form->input('nomeFunc', array('label' => 'Nome Funcionário'));
        echo $this->Form->input('tipoFunc', array('label' => 'Tipo Funcionario', 'options' => array(
                'C' => 'Controle',
                'B' => 'Motorista'
        )));
        echo $this->Form->input('cnhNum', array('label' => 'Nº CNH'));
        echo $this->Form->input('cnhVenc', array('label' => 'Vencimento CNH'));
        echo $this->Form->input('cnhTipo', array('label' => 'Tipo CNH', 'options' => array(
                'A' => 'A',
                'B' => 'B',
                'AB' => 'AB',
                'C' => 'C',
                'D' => 'D',
                'E' => 'E',
        )));
        echo $this->Form->input('cpf', array('label' => 'CPF'));
        echo $this->Form->input('user', array('label' => 'Usuário'));
        echo $this->Form->input('senha', array('label' => 'Senha', 'type' => 'password'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Adicionar Funcionário')); ?>
</div> 
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('Listar Funcionarios'), array('action' => 'index')); ?></li>
    </ul>
</div>
