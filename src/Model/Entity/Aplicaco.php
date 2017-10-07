<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aplicaco Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $dominio
 * @property string $tld
 * @property \Cake\I18n\FrozenDate $data_ativacao
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Aplicaco extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'dominio' => true,
        'tld' => true,
        'data_ativacao' => true,
        'created' => true,
        'modified' => true
    ];
}
