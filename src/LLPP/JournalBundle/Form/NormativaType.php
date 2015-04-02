<?php

namespace LLPP\JournalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NormativaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titolo')
            ->add('oggetto')
            ->add('dataNormativa')
            ->add('gazzettaUfficiale')
            ->add('contenuto')
            ->add('dataInserimento')
            ->add('news')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LLPP\JournalBundle\Entity\Normativa'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'llpp_journalbundle_normativa';
    }
}
