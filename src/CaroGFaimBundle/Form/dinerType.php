<?php

namespace CaroGFaimBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class dinerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDiner', 'datetime', array('label' => 'Date du dîner'))
            ->add('estArchive', null, array('label' => 'Dîner effectué ?'))
            ->add('invites', null, array('label'=>"Invités : "));

        $diner = $builder->getData();
        /*
                $type_plats = $diner->getPresenterTypePlats();

                foreach($type_plats => $type_plat) {
                 //   $builder->add($type_plat);

                }
        */
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CaroGFaimBundle\Entity\diner'
        ));
    }
}
