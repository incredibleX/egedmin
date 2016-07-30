<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <h4 class="text-muted margin-left-15"><b>Funds</b></h4>
            </div>
            <div class="card">
                <div class="header">
                    <?= $this->Html->Link(__('Add New'), [
                        'prefix' => 'admin',
                        'controller' => 'Funds',
                        'action' => 'add'
                    ], [
                        'class' => 'btn btn-success pull-right',
                        'escape' => false
                    ]); ?>
                </div>
                <div class="content table-responsive table-full-width">
                    <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
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
                        <?php if (!empty($funds)) { ?>
                            <?php foreach ($funds as $fund): ?>
                                <tr>
                                    <td><?= $this->Number->format($fund->id) ?></td>
                                    <td><?= $fund->has('user') ? $this->Html->link($fund->user->name, ['controller' => 'Users', 'action' => 'view', $fund->user->id]) : '' ?></td>
                                    <td><?= $fund->has('bank') ? $this->Html->link($fund->bank->name, ['controller' => 'Banks', 'action' => 'view', $fund->bank->id]) : '' ?></td>
                                    <td><?= $this->Number->format($fund->amount) ?></td>
                                    <td><?= h($fund->verified == true ? "Yes" : "No") ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $fund->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fund->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fund->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fund->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="5" class="text-center text-muted">You don't have added any funds yet.</td>
                            </tr>
                        <?php } ?>
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