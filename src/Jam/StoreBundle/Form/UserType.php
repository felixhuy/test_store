<?php

namespace Jam\StoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('site_id')
            ->add('created_ad')
            ->add('details', null, array('required' => false))
        ;
    }

    public function getName()
    {
        return 'jam_storebundle_usertype';
    }
}
