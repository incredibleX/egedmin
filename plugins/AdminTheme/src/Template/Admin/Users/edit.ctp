<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Banks'), ['controller' => 'Banks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bank'), ['controller' => 'Banks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('name');
        echo $this->Form->radio('gender', ['0' => 'Male', '1' => 'Female'], ['label' => 'Gender']);
        echo $this->Form->input('marital_status', ['options' => ['single' => 'Single', 'married' => 'Married', 'divorced' => 'Divorced'], 'empty' => 'Select Marital Status']);
        echo $this->Form->input('role', ['options' => ['user' => 'User', 'admin' => 'Admin']]);
        echo $this->Form->input('street');
        echo $this->Form->input('city');
        echo $this->Form->input('country');
        echo $this->Form->input('zipcode');
        echo $this->Form->input('phone');
        echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
