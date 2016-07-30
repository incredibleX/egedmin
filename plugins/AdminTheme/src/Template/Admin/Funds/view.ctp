<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 clearfix">
            <h4 class="text-muted float-left"><b><?= h($fund->name) ?></b></h4>
            <h4>
                <?= $this->Html->Link(__("<i class='fa fa-pencil'></i> Edit"), [
                    'controller' => 'Funds',
                    'action' => 'edit',
                    $fund->id
                ], [
                    'class' => 'btn btn-danger float-right',
                    'escape' => false
                ]); ?>
            </h4>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="content">
                    <table class="vertical-table table table-hover table-striped">
                        <tr>
                            <th><?= __('User') ?></th>
                            <td><?= $fund->has('user') ? $this->Html->link($fund->user->name, ['controller' => 'Users', 'action' => 'view', $fund->user->id]) : '' ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Bank') ?></th>
                            <td><?= $fund->has('bank') ? $this->Html->link($fund->bank->name, ['controller' => 'Banks', 'action' => 'view', $fund->bank->id]) : '' ?></td>
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
            </div>
        </div>
    </div>
</div>

