<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bank'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="banks index large-9 medium-8 columns content">
    <h3><?= __('Banks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('country') ?></th>
                <th><?= $this->Paginator->sort('account_type') ?></th>
                <th><?= $this->Paginator->sort('currency_type') ?></th>
                <th><?= $this->Paginator->sort('iban_code') ?></th>
                <th><?= $this->Paginator->sort('bic_code') ?></th>
                <th><?= $this->Paginator->sort('purpose') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($banks as $bank): ?>
            <tr>
                <td><?= $this->Number->format($bank->id) ?></td>
                <td><?= $bank->has('user') ? $this->Html->link($bank->user->name, ['controller' => 'Users', 'action' => 'view', $bank->user->id]) : '' ?></td>
                <td><?= h($bank->name) ?></td>
                <td><?= h($bank->country) ?></td>
                <td><?= h($bank->account_type) ?></td>
                <td><?= h($bank->currency_type) ?></td>
                <td><?= h($bank->iban_code) ?></td>
                <td><?= h($bank->bic_code) ?></td>
                <td><?= h($bank->purpose) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bank->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bank->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bank->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bank->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
