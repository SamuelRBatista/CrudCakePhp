<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Listar Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clientes form content">
            <?= $this->Form->create($cliente,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Adicionar Cliente') ?></legend>
                <?php
               
                   echo $this->Form->control('name');   
                   echo $this->Form->control('img_file',['type'=>'file']);     
                   echo $this->Form->control('end');
                   echo $this->Form->control('cep');
                   echo $this->Form->control('bairro');
                   echo $this->Form->control('cidade');
                   echo $this->Form->control('uf');
                   echo $this->Form->control('tel');
                   echo $this->Form->control('cpf');
                   echo $this->Form->control('cnpj');
                 
                  
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
