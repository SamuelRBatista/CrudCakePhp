<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $name
 * @property string|resource $img
 * @property string $end
 * @property string $cep
 * @property string $bairro
 * @property string $cidade
 * @property string $uf
 * @property string $tel
 * @property string $cpf
 * @property string $cnpj
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Cliente extends Entity
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
        'name'=>true,
        'img' => true,
        'end' => true,
        'cep' => true,
        'bairro' => true,
        'cidade' => true,
        'uf' => true,
        'tel' => true,
        'cpf' => true,
        'cnpj' => true,
        'created' => true,
        'modified' => true,
    ];
}
