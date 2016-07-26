<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Banks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="banks form large-9 medium-8 columns content">
    <?= $this->Form->create($bank) ?>
    <fieldset>
        <legend><?= __('Add Bank') ?></legend>
        <?php
        if($authUser['role'] == 'admin') {
            echo $this->Form->input('user_id', ['options' => $users]);
        }else {
            echo $this->Form->input('user_id', ['value' => $authUser['name']]);
        }
        echo $this->Form->input('name', ['label' => 'Bank Name']);
        echo $this->Form->input('address', ['label' => 'Bank Address']);
        echo $this->Form->input('country');
        echo $this->Form->input('account_type', ['options' => ['credit' => 'Credit Card', 'postal' => 'Postal Account'], 'empty' => 'Select Account Type']);
        echo $this->Form->input('currency_type', ['options' => ['euro' => 'Euro', 'chf' => 'CHF', 'dollars' => 'Dollars'], 'empty' => 'Select Currency']);
        echo $this->Form->input('iban_code');
        echo $this->Form->input('bic_code');
        echo $this->Form->input('purpose', ['options' => ['loan' => 'Loan', 'investment' => 'Investment', 'donation' => 'Donation'], 'empty' => 'Select Purpose']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
