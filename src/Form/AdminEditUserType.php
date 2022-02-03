<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Session;
use App\Entity\Remuneration;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class AdminEditUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, ['attr' => ['placeholder' => 'Email']])
            ->add('lastname', TextType::class, ['label' => 'Nom', 'attr' => ['placeholder' => 'Nom']])
            ->add('firstname', TextType::class, ['label' => 'Prenom', 'attr' => ['placeholder' => 'Prenom']])
            ->add('phone', TelType::class, ['label' => 'Telephone',    'attr' => ['placeholder' => 'Numero de telephone']])
            ->add('picture', FileType::class, [
                'required' => false,
                'label' => 'Photo',
                'data_class' => null,
                'attr' => [
                    'required' => false,
                    'data-allowed-file-extensions' => 'jpg jpeg png gif',
                    'class' => 'dropify',
                ]
            ])
            ->add('roles', ChoiceType::class, [
                'label' => 'Roles',
                'required' => true,
                'multiple' => true,
                'expanded' => false,
                'choices'  => [
                    'Administrateur' => "ROLE_ADMIN",
                    'Formateur' => "ROLE_TEACHER",
                    'Eleve' => "ROLE_USER"
                ]
            ])
            ->add('session', EntityType::class, [
                'label' => 'Session',
                'class' => Session::class,
                'choice_label' => 'name'
            ])
            ->add('remuneration', EntityType::class, [
                'label' => 'Rémuneration',
                'class' => Remuneration::class,
                'choice_label' => 'tarification'
            ])

            ->add('submit', SubmitType::class, [
                'attr' => ['class' => 'btn btn-light-primary'],
                'label' => 'Modifier les informations'
            ]);;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
