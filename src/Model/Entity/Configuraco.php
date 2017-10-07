<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Configuraco Entity
 *
 * @property int $id
 * @property int $aplicacao_id
 * @property string $linguagem
 * @property string $capital
 * @property string $whois
 * @property string $coordenadas
 * @property string $pub
 * @property string $id_criterio
 * @property string $bandeira
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Aplicaco $aplicaco
 */
class Configuraco extends Entity
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
        'aplicacao_id' => true,
        'linguagem' => true,
        'capital' => true,
        'whois' => true,
        'coordenadas' => true,
        'pub' => true,
        'id_criterio' => true,
        'bandeira' => true,
        'created' => true,
        'modified' => true,
        'aplicaco' => true
    ];
}
