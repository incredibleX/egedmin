<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fund'), ['action' => 'edit', $fund->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fund'), ['action' => 'delete', $fund->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fund->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Funds'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fund'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Banks'), ['controller' => 'Banks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bank'), ['controller' => 'Banks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="funds view large-9 medium-8 columns content">
    <h3><?= h($fund->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $fund->has('user') ? $this->Html->link($fund->user->name, ['controller' => 'Users', 'action' => 'view', $fund->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Bank') ?></th>
            <td><?= $fund->has('bank') ? $this->Html->link($fund->bank->name, ['controller' => 'Banks', 'action' => 'view', $fund->bank->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($fund->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Amount') ?></th>
            <td><?= $this->Number->format($fund->amount) ?></td>
        </tr>
        <tr>
            <th><?= __('Verified') ?></th>
            <td><?= $fund->verified ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
