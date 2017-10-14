<?php
class Template
{
    //File config
    private $_fileConfig;

    //File template
    private $_fileTemplate;

    //Controller Obj
    private $_controller;

    //Folder template
    private $_folderTemplate;

    //file CSS
    private $_fileCSS;

    //file CSS
    private $_fileJS;

    //title 
    private $_title;

    public function __construct($controller)
    {
        $this->_controller = $controller;
    }

    public function load()
    {
        $fileConfig = $this->_fileConfig;
        $fileTemplate = $this->_fileTemplate;
        $folderTemplate = $this->_folderTemplate;

        $pathFileConfig = TEMPLATE_PATH . DS . $folderTemplate . DS . $fileConfig;
        if(file_exists($pathFileConfig)){
            $arrConfig = parse_ini_file($pathFileConfig);
            $view = $this->_controller->getView();

            $view->_metaHTTP = $view->createMeta($arrConfig['metaHTTP'],'http');
            $view->_metaName = $view->createMeta($arrConfig['metaName'],'name');
            $view->_title = $view->createTitle($arrConfig['title']);
            $view->_fileCSS = $view->createLink($this->_folderTemplate.DS.$arrConfig['dirCss'],$arrConfig['fileCss'],'css');
            $view->_fileJS = $view->createLink($this->_folderTemplate.DS.$arrConfig['dirJs'],$arrConfig['fileJs'],'js');
            $view->_dirImg = TEMPLATE_URL.DS.$this->_folderTemplate.DS.$arrConfig['dirImg'];
            $view->setTemplatePath(TEMPLATE_PATH.DS.$this->_folderTemplate.DS.$this->_fileTemplate);
        }
    }

    //set Template
    public function setFileTemplate($fileTemplate)
    {
        $this->_fileTemplate = $fileTemplate;
    }

    //get Template
    public function getFileTemplate()
    {
        return $this->_fileTemplate;
    }

    //set Template
    public function setFolderTemplate($folderTemplate)
    {
        $this->_folderTemplate = $folderTemplate;
    }

    //get Template
    public function getFolderTemplate()
    {
        return $this->_folderTemplate;
    }

    //set Template
    public function setFileConfig($fileConfig)
    {
        $this->_fileConfig = $fileConfig;
    }

    //get Template
    public function getFileConfig()
    {
        return $this->_fileConfig;
    }
}
