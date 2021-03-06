<?php


namespace SharePoint\PHP\Client;


class RequestContext extends ClientObject
{
    /**
     * @var Site
     */
    private $site;

    /**
     * @var Web
     */
    private $web;
    
    
    /**
     * @return Site
     */
    public function getSite()
    {
        if(!isset($this->site)){
            $this->site = new Site($this->getContext(),new ResourcePathEntry($this->getContext(),$this->getResourcePath(),"Site"));
        }
        return $this->site;
    }

    /**
     * @return mixed|null|Site
     */
    public function getWeb()
    {
        if(!isset($this->web)){
            $this->web = new Web($this->getContext(),new ResourcePathEntry($this->getContext(),$this->getResourcePath(),"Web"));
        }
        return $this->web;
    }


    public static function GetCurrent(ClientContext $context)
    {
        static $current = null;
        if ($current === null) {
            $current = new RequestContext($context,null);
        }
        return $current;
    }

}