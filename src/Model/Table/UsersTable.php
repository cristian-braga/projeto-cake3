<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Upload');
        $this->addBehavior('UploadRed');
        $this->addBehavior('DeleteArq');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 220)
            ->notEmptyString('name', 'Campo obrigatório!');

        $validator
            ->email('email')
            ->notEmptyString('email', 'Campo obrigatório!');

        $validator
            ->scalar('username')
            ->maxLength('username', 220)
            ->notEmptyString('username', 'Campo obrigatório!');

        $validator
            ->scalar('password')
            ->maxLength('password', 220)
            ->notEmptyString('password', 'Campo obrigatório!')
            ->add('password', [
                'length' => [
                    'rule' => ['minLength', 6],
                    'message' => 'A senha deve ter no mínimo 6 caracteres!'
                ]
            ]);

        $validator
            ->notEmptyString('imagem', 'Selecione uma imagem!')
            ->add('imagem', 'file', [
                'rule' => ['mimeType', ['image/jpeg', 'image/png']],
                'message' => 'Extensão inválida! Selecione um arquivo JPEG ou PNG.'
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
        $rules->add($rules->isUnique(['email'], 'Email já cadastrado!'));
        $rules->add($rules->isUnique(['username'], 'Nome de usuário já cadastrado!'));

        return $rules;
    }

    public function getUserDados($user_id)
    {
        $query = $this->find()
            ->select(['id', 'name', 'email', 'imagem'])
            ->where([
                'Users.id' => $user_id
            ]);
        
        return $query->first();
    }

    public function getConfEmail($cod_val_email)
    {
        $query = $this->find()
            ->select('id')
            ->where([
                'Users.cod_val_email' => $cod_val_email
            ]);
        
        return $query->first();
    }

    public function getRecuperarSenha($email)
    {
        $query = $this->find()
            ->select(['id', 'name', 'email', 'username', 'recuperar_senha'])
            ->where([
                'Users.email' => $email
            ]);
        
        return $query->first();
    }

    public function getAtualizarSenha($recuperar_senha)
    {
        $query = $this->find()
            ->select('id')
            ->where([
                'Users.recuperar_senha' => $recuperar_senha
            ]);
        
        return $query->first();
    }
}
