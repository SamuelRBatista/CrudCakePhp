<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $clientes
 */
?>
<div class="clientes index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clientes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                     <th><?= $this->Paginator->sort('img') ?></th>
                    <th><?= $this->Paginator->sort('end') ?></th>
                    <th><?= $this->Paginator->sort('cep') ?></th>
                    <th><?= $this->Paginator->sort('bairro') ?></th>
                    <th><?= $this->Paginator->sort('cidade') ?></th>
                    <th><?= $this->Paginator->sort('uf') ?></th>
                    <th><?= $this->Paginator->sort('tel') ?></th>
                    <th><?= $this->Paginator->sort('cpf') ?></th>
                    <th><?= $this->Paginator->sort('cnpj') ?></th>                   
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                    <td><?= h($cliente->name) ?></td>
                    <td><?= @$this->Html->img($user->img, ['style' => 'max-width:90px;height:50px;border-radius:50%;']) ?></td>
                    <td><?= h($cliente->end) ?></td>
                    <td><?= h($cliente->cep) ?></td>
                    <td><?= h($cliente->bairro) ?></td>
                    <td><?= h($cliente->cidade) ?></td>
                    <td><?= h($cliente->uf) ?></td>
                    <td><?= h($cliente->tel) ?></td>
                    <td><?= h($cliente->cpf) ?></td>
                    <td><?= h($cliente->cnpj) ?></td>
                 
                    <td><?= h($cliente->created) ?></td>
                    <td><?= h($cliente->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $cliente->id]) ?>
                        <?= $this->Html->link(__('Alterar'), ['action' => 'edit', $cliente->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $cliente->id], ['confirm' => __('Você quer realamente apagar esse registro# {0}?', $cliente->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
