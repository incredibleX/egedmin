<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FundsFixture
 *
 */
class FundsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'user_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'bank_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'amount' => ['type' => 'decimal', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'verified' => ['type' => 'boolean', 'length' => null, 'default' => 0, 'null' => true, 'comment' => null, 'precision' => null],
        '_indexes' => [
            'funds_user_id' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'funds_bank_id' => ['type' => 'index', 'columns' => ['bank_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'funds_bank_id' => ['type' => 'foreign', 'columns' => ['bank_id'], 'references' => ['banks', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'funds_user_id' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'user_id' => 1,
            'bank_id' => 1,
            'amount' => 1.5,
            'verified' => 1
        ],
    ];
}
