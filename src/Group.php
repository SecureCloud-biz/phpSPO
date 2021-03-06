<?php

namespace SharePoint\PHP\Client;


/**
 * Group resource
 */
class Group extends Principal
{

    /**
     * Gets a collection of user objects that represents all of the users in the group.
     * @return UserCollection
     */
    public function getUsers()
    {
        if(!$this->isPropertyAvailable('Users')){
            $this->setProperty("Users", new UserCollection($this->getContext(),new ResourcePathEntry($this->getContext(),$this->getResourcePath() , "Users")));
        }
        return $this->getProperty("Users");
    }
}