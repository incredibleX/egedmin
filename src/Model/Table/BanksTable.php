<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Banks Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Bank get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bank newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bank[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bank|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bank patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bank[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bank findOrCreate($search, callable $callback = null)
 */
class BanksTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('banks');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Funds', [
            'foreignKey' => 'bank_id'
        ]);

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->requirePresence('country', 'create')
            ->notEmpty('country');

        $validator
            ->requirePresence('account_type', 'create')
            ->notEmpty('account_type')
            ->add('account_type', 'inList', [
                'rule' => ['inList', ['credit', 'postal']],
                'message' => 'Please enter a valid Bank Account Type'
            ]);

        $validator
            ->requirePresence('currency_type', 'create')
            ->notEmpty('currency_type')
            ->add('currency_type', 'inList', [
                'rule' => ['inList', ['euro', 'chf', 'dollars']],
                'message' => 'Please enter a valid Currency'
            ]);;

        $validator
            ->requirePresence('iban_code', 'create')
            ->notEmpty('iban_code');

        $validator
            ->requirePresence('bic_code', 'create')
            ->notEmpty('bic_code');

        $validator
            ->requirePresence('purpose', 'create')
            ->notEmpty('purpose')
            ->add('purpose', 'inList', [
                'rule' => ['inList', ['loan', 'investment', 'donation']],
                'message' => 'Please enter a valid Purpose'
            ]);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
