<?php
use Migrations\AbstractMigration;

class CreateFunds extends AbstractMigration
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
        $table = $this->table('funds')
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('bank_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('amount', 'decimal', [
                'null' => false,
            ])
            ->addColumn('verified', 'boolean', [
                'null' => true,
                'default' => false
            ])
            ->addIndex(
                [
                    'bank_id',
                ]
            )
            ->addIndex(
                [
                    'user_id',
                ]
            );
        $table->create();


        $this->table('funds')
            ->addForeignKey(
                'bank_id',
                'banks',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
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
