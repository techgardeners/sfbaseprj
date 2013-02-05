<?php
/*
 * This file is part of the Base Framework project
 *
 * (c) Roberto Beccaceci <roberto@beccaceci.it>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace TechG\AuthProjectBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;

class ProfileFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        parent::buildForm($builder, $options); 
        
        // add your custom field
        $builder->add('name', null, array('label' => 'form.name', 'translation_domain' => 'FOSUserBundle', 'required' => false));
        $builder->add('surname', null, array('label' => 'form.surname', 'translation_domain' => 'FOSUserBundle', 'required' => false));
        $builder->add('jobTitle', null, array('label' => 'form.jobTitle', 'translation_domain' => 'FOSUserBundle', 'required' => false));
        $builder->add('companyName', null, array('label' => 'form.companyName', 'translation_domain' => 'FOSUserBundle', 'required' => false));
        $builder->add('addressLineFirst', null, array('label' => 'form.addressLineFirst', 'translation_domain' => 'FOSUserBundle', 'required' => false));
        $builder->add('addressLineSecond', null, array('label' => 'form.addressLineSecond', 'translation_domain' => 'FOSUserBundle', 'required' => false));
        $builder->add('zipcode', null, array('label' => 'form.zipcode', 'translation_domain' => 'FOSUserBundle', 'required' => false));
        $builder->add('phone', null, array('label' => 'form.phone', 'translation_domain' => 'FOSUserBundle', 'required' => false));
        $builder->add('country', 'country', array('label' => 'form.country', 'translation_domain' => 'FOSUserBundle', 'required' => false));
     
    }

    public function getName()
    {
        return 'tech_g_auth_project_user_profile';
    }
}