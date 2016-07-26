<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <h4 class="text-muted margin-left-15"><b>Edit bank</b></h4>
            </div>
            <div class="card">
                <div class="content">
                    <?= $this->Form->create($bank) ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Select user <sup class="text-danger">*</sup></label>
                                <?php if ($authUser['role'] == 'admin') { ?>
                                    <?= $this->Form->input('user_id', ['options' => $users, 'class' => 'form-control', 'label' => false]); ?>
                                <?php } else { ?>
                                    <?= $this->Form->input('user_id', ['value' => $authUser['name'], 'class' => 'orm-control', 'label' => 'false']); ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Bank Name<sup class="text-danger">*</sup></label>
                                <?= $this->Form->input('name', ['class' => 'form-control', 'label' => false]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address<sup class="text-danger">*</sup></label>
                                <?= $this->Form->input('address', ['type' => 'textarea', 'class' => 'form-control', 'label' => false]); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Country<sup class="text-danger">*</sup></label>
                                <?= $this->Form->input('country', ['class' => 'form-control', 'label' => false]); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Account Type<sup class="text-danger">*</sup></label>
                                <?= $this->Form->input('account_type', ['options' => ['credit' => 'Credit Card', 'postal' => 'Postal Account'], 'empty' => 'Select Account Type', 'class' => 'form-control', 'label' => false]); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Currency<sup class="text-danger">*</sup></label>
                                <?= $this->Form->input('currency_type', ['options' => ['euro' => 'Euro', 'chf' => 'CHF', 'dollars' => 'Dollars'], 'empty' => 'Select Currency', 'class' => 'form-control', 'label' => false]); ?>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>IBAN Code<sup class="text-danger">*</sup></label>
                                <?= $this->Form->input('iban_code', ['class' => 'form-control', 'label' => false]); ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>BIC Code<sup class="text-danger">*</sup></label>
                                <?= $this->Form->input('bic_code', ['class' => 'form-control', 'label' => false]); ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Purpose<sup class="text-danger">*</sup></label>
                                <?= $this->Form->input('purpose', ['options' => ['loan' => 'Loan', 'investment' => 'Investment', 'donation' => 'Donation'], 'empty' => 'Select Purpose', 'class' => 'form-control', 'label' => false]) ?>
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