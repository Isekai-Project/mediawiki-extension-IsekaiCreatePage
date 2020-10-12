<?php
namespace Isekai\CreatePage;

use MapCacheLRU;

class CreatePagePanel {
    public function getHtml(){
        ob_start();
        include(dirname(__DIR__) . '/modules/ext.isekai.createPagePanel.tpl');
        $template = ob_get_clean();
        return [$template, "markerType" => 'nowiki'];
    }
    
    public static function onParserSetup(&$parser){
        $parser->setHook('createpage', self::class . '::createPagePanel');
		return true;
    }
    
    public static function createPagePanel($text, $params, $parser, $frame){
        $parser->getOutput()->addModules('ext.isekai.createPage');

        $createPagePanel = new self();
        return $createPagePanel->getHtml();
    }
}