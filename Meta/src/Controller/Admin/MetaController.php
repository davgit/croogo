<?php

namespace Croogo\Meta\Controller\Admin;

use Croogo\Meta\Controller\MetaAppController;

/**
 * Meta Controller
 *
 * @category Meta.Controller
 * @package  Croogo.Meta
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class MetaController extends MetaAppController
{

/**
 * Components
 *
 * @var array
 * @access public
 */
    public $components = [
        'Search.Prg' => [
            'presetForm' => [
                'paramType' => 'querystring',
            ],
            'commonProcess' => [
                'paramType' => 'querystring',
                'filterEmpty' => true,
            ],
        ],
    ];

/**
 * Preset Variable Search
 *
 * @var array
 * @access public
 */
    public $presetVars = true;

/**
 * Admin delete meta
 *
 * @param int$id
 * @return void
 * @access public
 */
    public function delete_meta($id = null)
    {
        $Meta = ClassRegistry::init('Meta.Meta');
        $success = false;
        if ($id != null && $Meta->delete($id)) {
            $success = true;
        } else {
            if (!$Meta->exists($id)) {
                $success = true;
            }
        }

        $success = ['success' => $success];
        $this->set(compact('success'));
        $this->set('_serialize', 'success');
    }

/**
 * Admin add meta
 *
 * @return void
 * @access public
 */
    public function add_meta()
    {
        $this->layout = 'ajax';
    }
}
