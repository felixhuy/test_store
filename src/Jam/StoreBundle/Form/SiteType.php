<?php

namespace Jam\StoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class SiteType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
        ;
    }

    public function getName()
    {
        return 'jam_storebundle_sitetype';
    }
}
