<?php

namespace LLPP\JournalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CorsoFormazioneType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titolo')
            ->add('modalita')
            ->add('durata')
            ->add('dataInizio')
            ->add('dataFine')
            ->add('descrizione')
            ->add('cfp')
            ->add('enteEsterno')
            ->add('quotaIscrizione')
            ->add('sede')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LLPP\JournalBundle\Entity\CorsoFormazione'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'llpp_journalbundle_corsoformazione';
    }
}
