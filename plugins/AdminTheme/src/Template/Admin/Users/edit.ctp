<div class="container-fluid">
    <?= $this->Form->create($user) ?>
    <div class="row">
        <div class="col-md-12 clearfix">
            <h4 class="text-muted float-left"><b><?= h($user->name) ?></b></h4>
            <h4>
                <?= $this->Html->Link(__("Cancel"), [
                    'controller' => 'Users',
                    'action' => 'view',
                    $user->id
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
                        <label>Full Name<sup class="text-danger">*</sup></label>
                        <?= $this->Form->input('name', [
                            'class' => 'form-control',
                            'label' => false
                        ]) ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Username<sup class="text-danger">*</sup></label>
                        <?= $this->Form->input('username', [
                            'class' => 'form-control',
                            'label' => false
                        ]) ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Password<sup class="text-danger">*</sup></label>
                        <?= $this->Form->input('password', [
                            'class' => 'form-control',
                            'label' => false
                        ]) ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email<sup class="text-danger">*</sup></label>
                        <?= $this->Form->input('email', [
                            'class' => 'form-control',
                            'label' => false
                        ]) ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Gender<sup class="text-danger">*</sup></label><br>
                        <?= $this->Form->radio('gender', ['0' => 'Male', '1' => 'Female'], [
                            'class' => 'form-control',
                            'label' => true
                        ]); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Marital Status<sup class="text-danger">*</sup></label>
                        <?= $this->Form->input('marital_status', ['options' => ['single' => 'Single', 'married' => 'Married', 'divorced' => 'Divorced'],
                            'empty' => 'Select Marital Status',
                            'class' => 'form-control',
                            'label' => false
                        ]) ?>
                    </div>
                </div>
            </div>
            <?php if ($authUser['role'] == 'admin'): ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Role<sup class="text-danger">*</sup></label>

                            <?= $this->Form->input('role', ['options' => ['user' => 'User', 'admin' => 'Admin'],
                                'class' => 'form-control',
                                'label' => false]); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Street<sup class="text-danger">*</sup></label>
                        <?= $this->Form->input('street', [
                            'class' => 'form-control',
                            'label' => false
                        ]) ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>City<sup class="text-danger">*</sup></label>
                        <?= $this->Form->input('city', [
                            'class' => 'form-control',
                            'label' => false
                        ]) ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Country<sup class="text-danger">*</sup></label>
                        <?= $this->Form->input('country', [
                            'class' => 'form-control',
                            'label' => false
                        ]) ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Zipcode<sup class="text-danger">*</sup></label>
                        <?= $this->Form->input('zipcode', [
                            'class' => 'form-control',
                            'label' => false
                        ]) ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone<sup class="text-danger">*</sup></label>
                        <?= $this->Form->input('phone', [
                            'class' => 'form-control',
                            'label' => false
                        ]) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12 pull-right">
                <div class="form-group">
                    <?= $this->Form->button(__('Done Editing'), ['class' => 'btn btn-info btn-fill pull-right']); ?>
                </div>
            </div>

        </div>
    </div>
    <?= $this->Form->end() ?>
</div>
