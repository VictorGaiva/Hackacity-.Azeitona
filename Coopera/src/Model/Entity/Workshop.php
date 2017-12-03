<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Workshop Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $locar
 * @property int $vagas
 * @property string $descricao
 * @property string $periodo_inscr
 * @property int $collaborator_id
 *
 * @property \App\Model\Entity\Collaborator $collaborator
 * @property \App\Model\Entity\CategoryWorkshop[] $category_workshop
 * @property \App\Model\Entity\Registration[] $registrations
 */
class Workshop extends Entity
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
        'locar' => true,
        'vagas' => true,
        'descricao' => true,
        'periodo_inscr' => true,
        'collaborator_id' => true,
        'collaborator' => true,
        'category_workshop' => true,
        'registrations' => true
    ];
}
