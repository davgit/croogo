<?php

namespace Croogo\Taxonomy\Config\Migration;

class RenameNodesTaxonomy extends CakeMigration
{

/**
 * Migration description
 *
 * @var string
 * @access public
 */
    public $description = 'Rename nodes_taxonomies';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
    public $migration = [
        'up' => [
            'rename_table' => [
                'nodes_taxonomies' => 'model_taxonomies',
            ],
        ],
        'down' => [
            'rename_table' => [
                'model_taxonomies' => 'nodes_taxonomies',
            ],
        ],
    ];

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
    public function before($direction)
    {
        return true;
    }

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
    public function after($direction)
    {
        return true;
    }
}
