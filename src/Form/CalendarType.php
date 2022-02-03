<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Session;
use App\Entity\Calendar;

use Symfony\Component\Form\AbstractType;
use App\Entity\LanguageProgramationCategory;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CalendarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('start', DateType::class, [
                'label' => 'Dapart',
                'widget' => 'single_text'
            ])
            ->add('end', DateType::class, [
                'label' => 'Cloture',
                'widget' => 'single_text'
            ])
            ->add('name', TextType::class, [
                'label' => 'Intitulé',
            ])
            ->add('category', EntityType::class, [
                'label' => 'Technologie',
                'class' => LanguageProgramationCategory::class,
                'choice_label' => 'name',
            ])
            ->add('session', EntityType::class, [
                'label' => 'Session',
                'class' => Session::class,
                'choice_label' => 'name',
            ])
            ->add('teacher', EntityType::class, [
                'label' => 'Formateur',
                'class' => User::class,
                'choice_label' => 'fullname',
            ])
            ->add('submit', SubmitType::class, [
                'attr' => ['class' => 'btn btn-primary btn-block'],
                'label' => 'Ajouter/modifier une date'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Calendar::class,
        ]);
    }
}
