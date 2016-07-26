<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <h4 class="text-muted margin-left-15"><b><?= h($user->name) ?>2</b></h4>
            </div>
            <div class="card">
                <div class="content">
                    <table class="vertical-table table table-hover table-striped">
                        <tr>
                            <th><?= __('Username') ?></th>
                            <td><?= h($user->username) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Name') ?></th>
                            <td><?= h($user->name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Marital Status') ?></th>
                            <td><?= ucfirst(h($user->marital_status)) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Gender') ?></th>
                            <td><?= $user->gender ? __('Female') : __('Male'); ?></td>
                        </tr>
                        <?php if ($authUser['role'] == 'admin'): ?>
                            <tr>
                                <th><?= __('Role') ?></th>
                                <td><?= ucfirst(h($user->role)) ?></td>
                            </tr>
                        <?php endif; ?>
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
                            <th><?= __('Email Conformation') ?></th>
                            <td><?= $user->email_conformation ? __('Yes') : __('No'); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <h4 class="text-muted margin-left-15"><b>Related Banks</b></h4>
            </div>
            <div class="card">
                <div class="content">
                    <div class="related">
                        <?php if (!empty($user->banks)): ?>
                            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
                                <tr>
                                    <th><?= __('Bank Name') ?></th>
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
                                            <?php if ($authUser['role'] == 'admin'): ?>
                                                <?= $this->Html->link(__('Edit'), ['controller' => 'Banks', 'action' => 'edit', $banks->id]) ?>
                                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Banks', 'action' => 'delete', $banks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banks->id)]) ?>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>