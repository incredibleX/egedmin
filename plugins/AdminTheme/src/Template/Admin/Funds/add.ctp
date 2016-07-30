<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <h4 class="text-muted margin-left-15"><b>Add Funds</b></h4>
            </div>
            <div class="card">
                <div class="content">
                    <?= $this->Form->create($fund) ?>
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

                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-info btn-fill pull-right']); ?>
                    <div class="clearfix"></div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>