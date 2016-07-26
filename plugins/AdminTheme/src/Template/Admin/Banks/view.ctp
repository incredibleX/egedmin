<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <h4 class="text-muted margin-left-15"><b><?= h($bank->name) ?></b></h4>
            </div>
            <div class="card">
                <div class="content">
                    <table class="vertical-table table table-hover table-striped">
                        <tr>
                            <th><?= __('User') ?></th>
                            <td><?= $bank->has('user') ? $this->Html->link($bank->user->name, ['controller' => 'Users', 'action' => 'view', $bank->user->id]) : '' ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Name') ?></th>
                            <td><?= h($bank->name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Country') ?></th>
                            <td><?= h($bank->country) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Account Type') ?></th>
                            <td><?= h($bank->account_type) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Currency Type') ?></th>
                            <td><?= h($bank->currency_type) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Iban Code') ?></th>
                            <td><?= h($bank->iban_code) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Bic Code') ?></th>
                            <td><?= h($bank->bic_code) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Purpose') ?></th>
                            <td><?= h($bank->purpose) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Address') ?></th>
                            <td><?= $this->Text->autoParagraph(h($bank->address)); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
