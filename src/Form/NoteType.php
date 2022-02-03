<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Rating;
use App\Repository\UserRepository;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;
use App\Entity\LanguageProgramationCategory;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class NoteType extends AbstractType
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        // grab the user, do a quick sanity check that one exists
        $user = $this->security->getUser();
        if (!$user) {
            throw new \LogicException();
        }

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use ($user) {
            if (null !== $event->getData()->getUser()) {

                return;
            }

            $form = $event->getForm();


            $formOptions = [
                'class' => User::class,
                'choice_label' => 'fullName',
                'query_builder' => function (UserRepository $userRepository) use ($user) {
                    return $userRepository->createQueryBuilder('u')
                        ->where('u.session = :user')
                        ->setParameter('user', $user->getSession())
                        ->orderBy('u.session', 'ASC');
                },
                'label' => 'Etudiant'
            ];
            // create the field, this is similar the $builder->add()
            // field name, field type, field options

            if ($user->getRole() == 'Administrateur') {

                $form->add('user', EntityType::class, [
                    'class' => User::class,
                    'choice_label' => 'fullName',
                    'label' => 'Etudiant'
                ]);
            } else {
                $form->add('user', EntityType::class, $formOptions);
            }
        });
        $builder

            ->add('category', EntityType::class, [
                'label' => 'Language',
                'class' => LanguageProgramationCategory::class,
                'choice_label' => 'name',
            ])
            ->add('name', TextType::class, ['label' => 'Intitulé'])
            ->add('note', NumberType::class, ['label' => 'Note'])
            ->add('remark', TextareaType::class, ['label' => 'Remarques'])

            ->add('submit', SubmitType::class, [
                'attr' => ['class' => 'btn btn-primary btn-block'],
                'label' => 'Ajouter une note'
            ]);;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Rating::class,
        ]);
    }
}
