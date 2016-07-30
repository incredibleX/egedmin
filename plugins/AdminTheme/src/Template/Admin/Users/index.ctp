<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <h4 class="text-muted margin-left-15"><b>Users</b></h4>
            </div>
            <div class="card">
                <div class="header">
                    <?= $this->Html->Link(__('Add New'), [
                        '_name' => 'register'
                    ], [
                        'class' => 'btn btn-success pull-right',
                        'escape' => false
                    ]); ?>
                </div>
                <div class="content table-responsive table-full-width clearfix">
                    <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('username') ?></th>
                            <th><?= $this->Paginator->sort('name') ?></th>
                            <th><?= $this->Paginator->sort('gender') ?></th>
                            <th><?= $this->Paginator->sort('marital_status') ?></th>
                            <?php if ($authUser['role'] == 'admin'): ?>
                                <th><?= $this->Paginator->sort('role') ?></th>
                            <?php endif; ?>
                            <th><?= $this->Paginator->sort('country') ?></th>
                            <th><?= $this->Paginator->sort('zipcode') ?></th>
                            <th><?= $this->Paginator->sort('phone') ?></th>
                            <th><?= $this->Paginator->sort('email') ?></th>
                            <?php if ($authUser['role'] == 'admin'): ?>
                                <th><?= $this->Paginator->sort('email_conformation') ?></th>
                            <?php endif; ?>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= h($user->username) ?></td>
                                <td><?= h($user->name) ?></td>
                                <td><?= h($user->gender) == false ? "Male" : "female"; ?></td>
                                <td><?= h(ucfirst($user->marital_status)) ?></td>
                                <?php if ($authUser['role'] == 'admin'): ?>
                                    <td><?= h($user->role) ?></td>
                                <?php endif; ?>
                                <td><?= h($user->country) ?></td>
                                <td><?= $this->Number->format($user->zipcode) ?></td>
                                <td><?= $this->Number->format($user->phone) ?></td>
                                <td><?= h($user->email) ?></td>
                                <?php if ($authUser['role'] == 'admin'): ?>
                                    <td><?= h($user->email_conformation) == false ? "No" : "Yes"; ?></td>
                                <?php endif; ?>
                                <td><?= h($user->created) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                                    <?php if ($authUser['role'] == 'admin') { ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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