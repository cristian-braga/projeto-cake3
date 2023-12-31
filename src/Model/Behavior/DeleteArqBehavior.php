<?php
namespace App\Model\Behavior;

use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Cake\ORM\Behavior;
use Cake\ORM\Table;

/**
 * DeleteArq behavior
 */
class DeleteArqBehavior extends Behavior
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function deleteArq($destino)
    {
        $diretorio = new Folder($destino);
        if ($diretorio->delete($destino)) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteFile($destino, $arqAntigo, $arqNovo = null)
    {
        if (($arqAntigo !== null) && ($arqAntigo !== $arqNovo)) {
            $file = new File($destino . $arqAntigo);
            $file->delete($destino . $arqAntigo);
        }
    }
}
