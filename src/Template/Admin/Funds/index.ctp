<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fund'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Banks'), ['controller' => 'Banks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bank'), ['controller' => 'Banks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="funds index large-9 medium-8 columns content">
    <h3><?= __('Funds') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('bank_id') ?></th>
                <th><?= $this->Paginator->sort('amount') ?></th>
                <th><?= $this->Paginator->sort('verified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funds as $fund): ?>
            <tr>
                <td><?= $this->Number->format($fund->id) ?></td>
                <td><?= $fund->has('user') ? $this->Html->link($fund->user->name, ['controller' => 'Users', 'action' => 'view', $fund->user->id]) : '' ?></td>
                <td><?= $fund->has('bank') ? $this->Html->link($fund->bank->name, ['controller' => 'Banks', 'action' => 'view', $fund->bank->id]) : '' ?></td>
                <td><?= $this->Number->format($fund->amount) ?></td>
                <td><?= h($fund->verified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fund->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fund->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fund->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fund->id)]) ?>
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
