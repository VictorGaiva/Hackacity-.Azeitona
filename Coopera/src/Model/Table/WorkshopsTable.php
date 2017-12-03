<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Workshops Model
 *
 * @property \App\Model\Table\CollaboratorsTable|\Cake\ORM\Association\BelongsTo $Collaborators
 * @property \App\Model\Table\CategoryWorkshopTable|\Cake\ORM\Association\HasMany $CategoryWorkshop
 * @property \App\Model\Table\RegistrationsTable|\Cake\ORM\Association\HasMany $Registrations
 *
 * @method \App\Model\Entity\Workshop get($primaryKey, $options = [])
 * @method \App\Model\Entity\Workshop newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Workshop[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Workshop|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Workshop patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Workshop[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Workshop findOrCreate($search, callable $callback = null, $options = [])
 */
class WorkshopsTable extends Table
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

        $this->setTable('workshops');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Collaborators', [
            'foreignKey' => 'collaborator_id'
        ]);
        $this->hasMany('CategoryWorkshop', [
            'foreignKey' => 'workshop_id'
        ]);
        $this->hasMany('Registrations', [
            'foreignKey' => 'workshop_id'
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
            ->scalar('locar')
            ->maxLength('locar', 255)
            ->allowEmpty('locar');

        $validator
            ->integer('vagas')
            ->requirePresence('vagas', 'create')
            ->notEmpty('vagas');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 500)
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->scalar('periodo_inscr')
            ->maxLength('periodo_inscr', 100)
            ->requirePresence('periodo_inscr', 'create')
            ->notEmpty('periodo_inscr');

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
        $rules->add($rules->isUnique(['id']));
        $rules->add($rules->existsIn(['collaborator_id'], 'Collaborators'));

        return $rules;
    }
}
