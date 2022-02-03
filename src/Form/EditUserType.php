<?php

namespace App\Form;

use App\Entity\User;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class EditUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, ['attr' => ['placeholder' => 'Email']])
            ->add('password', RepeatedType::class, [
                'type' => passwordType::class,
                'invalid_message' => 'Le mots de passe ne correspond pas',
                'required' => true,
                'first_options' => [
                    'label' => 'Mot de passe',
                    'attr' => ['placeholder' => 'Veuillez saisir votre mot de passe']
                ],
                'second_options' => [
                    'label' => 'Confirmez votre mot de passe',
                    'attr' => ['placeholder' => 'Veuillez confirmé votre mot de passe']
                ]
            ])

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
