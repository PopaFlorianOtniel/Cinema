<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Showings Model
 *
 * @property \App\Model\Table\MoviesTable&\Cake\ORM\Association\BelongsTo $Movies
 * @property \App\Model\Table\RoomsTable&\Cake\ORM\Association\BelongsTo $Rooms
 * @property \App\Model\Table\CinemasTable&\Cake\ORM\Association\BelongsTo $Cinemas
 *
 * @method \App\Model\Entity\Showing newEmptyEntity()
 * @method \App\Model\Entity\Showing newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Showing[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Showing get($primaryKey, $options = [])
 * @method \App\Model\Entity\Showing findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Showing patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Showing[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Showing|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Showing saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Showing[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Showing[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Showing[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Showing[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ShowingsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('showings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Movies', [
            'foreignKey' => 'movie_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Rooms', [
            'foreignKey' => 'room_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Cinemas', [
            'foreignKey' => 'cinema_id',
            'joinType' => 'INNER',
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
            ->integer('movie_id')
            ->notEmptyString('movie_id');

        $validator
            ->integer('room_id')
            ->notEmptyString('room_id');

        $validator
            ->integer('cinema_id')
            ->notEmptyString('cinema_id');

        $validator
            ->dateTime('date_time')
            ->requirePresence('date_time', 'create')
            ->notEmptyDateTime('date_time');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('movie_id', 'Movies'), ['errorField' => 'movie_id']);
        $rules->add($rules->existsIn('room_id', 'Rooms'), ['errorField' => 'room_id']);
        $rules->add($rules->existsIn('cinema_id', 'Cinemas'), ['errorField' => 'cinema_id']);

        return $rules;
    }
}
