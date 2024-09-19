<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Operators Model
 *
 * @method \App\Model\Entity\Operator newEmptyEntity()
 * @method \App\Model\Entity\Operator newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Operator> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Operator get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Operator findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Operator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Operator> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Operator|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Operator saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Operator>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Operator>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Operator>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Operator> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Operator>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Operator>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Operator>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Operator> deleteManyOrFail(iterable $entities, array $options = [])
 */
class OperatorsTable extends Table
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

        $this->setTable('operators');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->integer('side')
            ->requirePresence('side', 'create')
            ->notEmptyString('side');

        $validator
            ->integer('health')
            ->requirePresence('health', 'create')
            ->notEmptyString('health');

        $validator
            ->integer('speed')
            ->requirePresence('speed', 'create')
            ->notEmptyString('speed');

        $validator
            ->integer('difficulty')
            ->requirePresence('difficulty', 'create')
            ->notEmptyString('difficulty');

        $validator
            ->integer('ability')
            ->requirePresence('ability', 'create')
            ->notEmptyString('ability');

        $validator
            ->scalar('biography')
            ->maxLength('biography', 4294967295)
            ->requirePresence('biography', 'create')
            ->notEmptyString('biography');

        $validator
            ->scalar('real_name')
            ->maxLength('real_name', 128)
            ->requirePresence('real_name', 'create')
            ->notEmptyString('real_name');

        $validator
            ->date('birthday')
            ->requirePresence('birthday', 'create')
            ->notEmptyDate('birthday');

        $validator
            ->scalar('place_birth')
            ->maxLength('place_birth', 128)
            ->requirePresence('place_birth', 'create')
            ->notEmptyString('place_birth');

        $validator
            ->scalar('psychological_report')
            ->maxLength('psychological_report', 4294967295)
            ->requirePresence('psychological_report', 'create')
            ->notEmptyString('psychological_report');

        return $validator;
    }
}
