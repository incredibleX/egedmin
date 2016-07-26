<?php
use Migrations\AbstractMigration;

class CreateBanks extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('banks')
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'limit' => 250,
                'null' => false,
            ])
            ->addColumn('address', 'text', [
                'null' => false,
            ])
            ->addColumn('country', 'string', [
                'limit' => 250,
                'null' => false,
            ])
            ->addColumn('account_type', 'string', [
                'limit' => 250,
                'null' => false,
            ])
            ->addColumn('currency_type', 'string', [
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('iban_code', 'string', [
                'null' => false,
            ])
            ->addColumn('bic_code', 'string', [
                'null' => false,
            ])
            ->addColumn('purpose', 'string', [
                'limit' => 250,
                'null' => false,
            ])
            ->addIndex(
                [
                    'user_id',
                ]
            );
        $table->create();


        $this->table('banks')
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();
    }
}
