<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Collaborators Model
 *
 * @property \App\Model\Table\WorkshopsTable|\Cake\ORM\Association\HasMany $Workshops
 *
 * @method \App\Model\Entity\Collaborator get($primaryKey, $options = [])
 * @method \App\Model\Entity\Collaborator newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Collaborator[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Collaborator|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Collaborator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Collaborator[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Collaborator findOrCreate($search, callable $callback = null, $options = [])
 */
class CollaboratorsTable extends Table
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

        $this->setTable('collaborators');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Workshops', [
            'foreignKey' => 'collaborator_id'
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
            ->allowEmpty('id', 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 25)
            ->requirePresence('telefone', 'create')
            ->notEmpty('telefone');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['id']));

        return $rules;
    }
}
