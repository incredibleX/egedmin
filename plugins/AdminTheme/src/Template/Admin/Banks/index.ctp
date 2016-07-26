<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <h4 class="text-muted margin-left-15"><b>Banks</b></h4>
            </div>
            <div class="card">
                <div class="header">
                    <?php if ($authUser['role'] == 'admin'): ?>
                        <?= $this->Html->Link(__('Add New'), [
                            'prefix' => 'admin',
                            'controller' => 'Banks',
                            'action' => 'add'
                        ], [
                            'class' => 'btn btn-success pull-right',
                            'escape' => false
                        ]); ?>
                    <?php endif; ?>
                </div>
                <div class="content table-responsive table-full-width">
                    <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
                        <thead>
                        <tr>
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
                                <?php if ($authUser['role'] == 'admin') { ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bank->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bank->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bank->id)]) ?>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="margin-left-15">
                        <div class="paginator">
                            <ul class="pagination">
                                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                                <?= $this->Paginator->numbers() ?>
                                <?= $this->Paginator->next(__('next') . ' >') ?>
                            </ul>
                            <p><?= $this->Paginator->counter() ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>