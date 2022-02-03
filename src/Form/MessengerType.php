<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Message;
use App\Repository\UserRepository;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class MessengerType extends AbstractType
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
            if (null !== $event->getData()->getRecipient()) {

                return;
            }

            $form = $event->getForm();


            $formOptions = [
                'attr' => [
                    'class' => 'select2',
                ],
                'class' => User::class,
                'choice_label' => 'fullName',
                'query_builder' => function (UserRepository $userRepository) use ($user) {
                    return $userRepository->createQueryBuilder('u')
                        ->where('u.session = :user')
                        ->setParameter('user', $user->getSession())
                        ->orderBy('u.session', 'ASC');
                },
                'label' => 'Destinataire'
            ];
            // create the field, this is similar the $builder->add()
            // field name, field type, field options

            if ($user->getRole() == 'Administrateur') {

                $form->add('recipient', EntityType::class, [
                    'attr' => [
                        'class' => 'select2',
                    ],
                    'class' => User::class,
                    'choice_label' => 'fullName',
                    'label' => 'Destinataire'
                ]);
            } else {
                $form->add('recipient', EntityType::class, $formOptions);
            }
        });

        $builder
            ->add('file', FileType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'data-allowed-file-extensions' => 'jpg jpeg png gif pdf doc docx xls xlsx odt ods html php css js ts twig rar zip mdp',
                    'class' => 'dropify',
                ]
            ])

            ->add('message', TextareaType::class, [
                'attr' => ['rows' => 20,  'placeholder' => 'Tapez votre message', 'class' => 'messageinput'],
                'label' => false,
                'required' => true,
            ])

            ->add('submit', SubmitType::class, [
                'attr' => ['class' => 'btn btn-primary btn-block'],
                'label' => 'Envoyer'
            ]);;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}
