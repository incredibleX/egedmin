<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Banks'), ['controller' => 'Banks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bank'), ['controller' => 'Banks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Marital Status') ?></th>
            <td><?= h($user->marital_status) ?></td>
        </tr>
        <tr>
            <th><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th><?= __('Street') ?></th>
            <td><?= h($user->street) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($user->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($user->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Zipcode') ?></th>
            <td><?= $this->Number->format($user->zipcode) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= $this->Number->format($user->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Gender') ?></th>
            <td><?= $user->gender ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Email Conformation') ?></th>
            <td><?= $user->email_conformation ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Banks') ?></h4>
        <?php if (!empty($user->banks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Address') ?></th>
                <th><?= __('Country') ?></th>
                <th><?= __('Account Type') ?></th>
                <th><?= __('Currency Type') ?></th>
                <th><?= __('Iban Code') ?></th>
                <th><?= __('Bic Code') ?></th>
                <th><?= __('Purpose') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->banks as $banks): ?>
            <tr>
                <td><?= h($banks->id) ?></td>
                <td><?= h($banks->user_id) ?></td>
                <td><?= h($banks->name) ?></td>
                <td><?= h($banks->address) ?></td>
                <td><?= h($banks->country) ?></td>
                <td><?= h($banks->account_type) ?></td>
                <td><?= h($banks->currency_type) ?></td>
                <td><?= h($banks->iban_code) ?></td>
                <td><?= h($banks->bic_code) ?></td>
                <td><?= h($banks->purpose) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Banks', 'action' => 'view', $banks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Banks', 'action' => 'edit', $banks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Banks', 'action' => 'delete', $banks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
