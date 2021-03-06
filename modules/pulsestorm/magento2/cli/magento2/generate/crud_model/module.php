<?php
namespace Pulsestorm\Magento2\Cli\Magento2\Generate\Crud_Model;
use function Pulsestorm\Pestle\Importer\pestle_import;
pestle_import('Pulsestorm\Pestle\Library\output');
pestle_import('Pulsestorm\Magento2\Cli\Generate\Crud\Model\exported_pestle_cli');

/**
* One Line Description
*
* @command magento2:generate:crud_model
* @argument module_name Which module? [Pulsestorm_HelloGenerate]
* @argument model_name  What model name? [Thing]
*/
function pestle_cli($argv)
{
    return exported_pestle_cli($argv);
}
