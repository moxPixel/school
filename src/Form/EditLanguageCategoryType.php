<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use App\Entity\LanguageProgramationCategory;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EditLanguageCategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class,['label' => 'Technologie','attr' => ['placeholder'=>'Technologie']])
            ->add('picture',FileType::class,[
                'required' => false,
                'label' => 'Ilustration',
                'data_class' => null,
                'attr' => [
                'required' => false,
                'data-allowed-file-extensions' => 'jpg jpeg png gif',
                'class' => 'dropify',
                ]
            ])
            ->add('submit', SubmitType::class, [
                'attr' => ['class' => 'btn btn-primary btn-block'],
                'label' => 'Ajouter/modifier une technologie']);
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => LanguageProgramationCategory::class,
        ]);
    }
}
