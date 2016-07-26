<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bank'), ['action' => 'edit', $bank->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bank'), ['action' => 'delete', $bank->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bank->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Banks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bank'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="banks view large-9 medium-8 columns content">
    <h3><?= h($bank->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $bank->has('user') ? $this->Html->link($bank->user->name, ['controller' => 'Users', 'action' => 'view', $bank->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($bank->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($bank->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Account Type') ?></th>
            <td><?= h($bank->account_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Currency Type') ?></th>
            <td><?= h($bank->currency_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Iban Code') ?></th>
            <td><?= h($bank->iban_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Bic Code') ?></th>
            <td><?= h($bank->bic_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Purpose') ?></th>
            <td><?= h($bank->purpose) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($bank->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($bank->address)); ?>
    </div>
</div>
