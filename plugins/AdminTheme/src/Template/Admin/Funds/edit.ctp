<div class="container-fluid">
    <?= $this->Form->create($fund) ?>
    <div class="row">
        <div class="col-md-12 clearfix">
            <h4 class="text-muted float-left"><b><?= h($fund->name) ?></b></h4>
            <h4>
                <?= $this->Html->Link(__("Cancel"), [
                    'controller' => 'Funds',
                    'action' => 'view',
                    $fund->id
                ], [
                    'class' => 'btn btn-danger float-right',
                    'escape' => false
                ]); ?>
                <?= $this->Form->button(__('Done'), ['class' => 'btn btn-info btn-fill float-right']); ?>
            </h4>
        </div>
        <div class="col-md-6 col-md-offset-1 margin-bottom-20">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Select Bank <sup class="text-danger">*</sup></label>
                        <?= $this->Form->input('bank_id', ['options' => $banks, 'class' => 'form-control', 'label' => false]); ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Amount<sup class="text-danger">*</sup></label>
                        <?= $this->Form->input('amount', ['class' => 'form-control', 'label' => false]); ?>
                    </div>
                </div>
            </div>

            <?= $this->Form->button(__('Done Editing'), ['class' => 'btn btn-info btn-fill pull-right']); ?>
            <div class="clearfix"></div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>