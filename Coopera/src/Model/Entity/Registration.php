<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Registration Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $flag
 * @property int $schedule_id
 * @property int $workshop_id
 * @property int $client_id
 *
 * @property \App\Model\Entity\Schedule $schedule
 * @property \App\Model\Entity\Workshop $workshop
 * @property \App\Model\Entity\Client $client
 */
class Registration extends Entity
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
        'flag' => true,
        'schedule_id' => true,
        'workshop_id' => true,
        'client_id' => true,
        'schedule' => true,
        'workshop' => true,
        'client' => true
    ];
}
