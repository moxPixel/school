<?php

namespace App\Form;

use App\Entity\Remuneration;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RemunerationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tarification', NumberType::class, [
                'attr' => ['placeholder' => 'Rémuneration'],
                'label' => 'Tarif journalier'
            ])

            ->add('submit', SubmitType::class, [
                'attr' => ['class' => 'btn btn-primary btn-block', 'method' => "post"],
                'label' => 'Ajouter un tarif'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Remuneration::class,
        ]);
    }
}
