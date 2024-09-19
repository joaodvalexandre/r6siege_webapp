<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Weapons Model
 *
 * @property \App\Model\Table\OperatorsTable&\Cake\ORM\Association\BelongsToMany $Operators
 *
 * @method \App\Model\Entity\Weapon newEmptyEntity()
 * @method \App\Model\Entity\Weapon newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Weapon> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Weapon get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Weapon findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Weapon patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Weapon> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Weapon|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Weapon saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Weapon>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Weapon>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Weapon>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Weapon> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Weapon>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Weapon>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Weapon>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Weapon> deleteManyOrFail(iterable $entities, array $options = [])
 */
class WeaponsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('weapons');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Operators', [
            'foreignKey' => 'weapon_id',
            'targetForeignKey' => 'operator_id',
            'joinTable' => 'weapons_operators',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->integer('type')
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->integer('firemode')
            ->requirePresence('firemode', 'create')
            ->notEmptyString('firemode');

        $validator
            ->integer('damage')
            ->requirePresence('damage', 'create')
            ->notEmptyString('damage');

        $validator
            ->integer('rate_of_fire')
            ->requirePresence('rate_of_fire', 'create')
            ->notEmptyString('rate_of_fire');

        $validator
            ->integer('mobility')
            ->requirePresence('mobility', 'create')
            ->notEmptyString('mobility');

        $validator
            ->integer('mag_size')
            ->requirePresence('mag_size', 'create')
            ->notEmptyString('mag_size');

        $validator
            ->decimal('reload_time_emp')
            ->requirePresence('reload_time_emp', 'create')
            ->notEmptyString('reload_time_emp');

        $validator
            ->decimal('reload_time_tac')
            ->requirePresence('reload_time_tac', 'create')
            ->notEmptyString('reload_time_tac');

        $validator
            ->integer('ads_time')
            ->requirePresence('ads_time', 'create')
            ->notEmptyString('ads_time');

        $validator
            ->scalar('ammo_type')
            ->maxLength('ammo_type', 255)
            ->requirePresence('ammo_type', 'create')
            ->notEmptyString('ammo_type');

        return $validator;
    }
}
