<?php


namespace SharePoint\PHP\Client;

/**
 * An object used to facilitate creation of a cross-site group.
 */
class GroupCreationInformation extends ClientValueObject
{
    /**
     * Gets or sets a string that contains the description of the group to be created.
     */
    public $Description;

    /**
     * Gets or sets a string that contains the name of the group to be created.
     */
    public $Title;


    public function __construct($title)
    {
        $this->Title = $title;
        $this->Description = "";
        $this->setMetadataType("SP.Group");
    }
    
}