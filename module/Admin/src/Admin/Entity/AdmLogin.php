<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Adm_User
 *
 * @author augusto
 */

namespace Admin\Entity;
use Doctrine\ORM\Mapping as ORM,
    Zend\Form\Annotation;

/** 
 * @ORM\Entity
 */
class AdmLogin 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\SequenceGenerator(sequenceName="admlogin_loginid_seq", initialValue=1)
     * 
     * @Annotation\Type("Zend\Form\Element\Hidden")
     */
    protected $loginid;
    
    /** 
     * @ORM\Column(type="string", length=255)
     * 
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Required({"required":"true"})
     * @Annotation\Filter({"name":"StripTags"})
     * @Annotation\Options({"label":"Login"})
     * @Annotation\Attributes({"class":"form-control"})
     */
    protected $username;
    
    /** 
     * @ORM\Column(type="string", length=255) 
     * 
     * @Annotation\Type("Zend\Form\Element\Password")
     * @Annotation\Required({"required":"true"})
     * @Annotation\Filter({"name":"StripTags"})
     * @Annotation\Options({"label":"Senha"})
     * @Annotation\Attributes({"class":"form-control"})
     */
    protected $password;
    
    /**
     * @Annotation\Type("Zend\Form\Element\Submit")
     * @Annotation\Attributes({"value":"Logar", "class":"btn btn-primary"})
     */
    protected $send;
    
    public function getLoginid() 
    {
        return $this->loginid;
    }

    public function setLoginid($loginid) 
    {
        $this->loginid = $loginid;
    }

    public function getUsername() 
    {
        return $this->username;
    }

    public function setUsername($username) 
    {
        $this->username = $username;
    }

    public function getPassword() 
    {
        return $this->password;
    }

    public function setPassword($password) 
    {
        $this->password = $password;
    }
}

?>
