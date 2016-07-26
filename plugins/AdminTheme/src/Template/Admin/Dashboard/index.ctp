<div class="container-fluid">
    <div class="jumbotron">
        <h2 class="text-center text-info">Welcome to the Dashboard, <span
                class="text-default"><b><?= ucfirst($authUser['name']); ?></b> !</h2>
    </div>
    <div class="col-sm-8 col-sm-offset-2">
        <div class="row">
            <div class="card">
                <div class="header">
                    <h4 class="title text-center">Here are some things you can try.</h4>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-sm-6"><?= $this->Html->Link(__('Add a Bank Account'), [
                                'controller' => 'Banks',
                                'action' => 'add'
                            ], ['class' => 'btn btn-info btn-fill pull-right']); ?>
                        </div>
                        <div class="col-sm-6"><?= $this->Html->Link(__('Add Fundings to Bank'), [
                                'controller' => 'Users',
                                'action' => 'index'
                            ], ['class' => 'btn btn-danger btn-fill push-left']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        $.notify({
            icon: 'pe-7s-gift',
            message: "Welcome to <b>EG Admin</b> -  Add Funds Enjoy Financing."

        }, {
            type: 'info',
            timer: 4000
        });
    });
</script>