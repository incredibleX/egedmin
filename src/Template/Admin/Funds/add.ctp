<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Funds'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Banks'), ['controller' => 'Banks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bank'), ['controller' => 'Banks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="funds form large-9 medium-8 columns content">
    <?= $this->Form->create($fund) ?>
    <fieldset>
        <legend><?= __('Add Fund') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('bank_id', ['options' => $banks]);
            echo $this->Form->input('amount');
            echo $this->Form->input('verified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
