<?php
/*
 * This file is part of the Base Framework project
 *
 * (c) Roberto Beccaceci <roberto@beccaceci.it>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace TechG\AuthProjectBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TechG\AuthProjectBundle\Entity\User
 *
 * @ORM\Table(name="auth_user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;    
    

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }    
    

/********************************************************************************************************************
*********************************************************************************************************************
*********************************************************************************************************************     
*********************************************************************************************************************/

    /**
     * @Assert\True(message = "fos_user.email.invalid_domain")
     */     
    public function isEmailLegal()
    {

        return true;
        
        $blackListDomain = array('hotmail.com','gmail.com','yahoo.com');
        
        return  !(in_array(strtolower(substr(strrchr($this->email, "@"), 1)), $blackListDomain));
    }    

            
/********************************************************************************************************************
*********************************************************************************************************************
*********************************************************************************************************************     
*********************************************************************************************************************/
    
    
}