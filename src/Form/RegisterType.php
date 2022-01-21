<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

        ->add('firstname', TextType::class,[
            'label'=>'Firstname',
            'attr'=>[
                'placeholder'=>'Your firstname'
            ]
        ])
        ->add('name', TextType::class,[
            'label'=>'Name',
            'attr'=>[
                'placeholder'=>'Your name'
            ]
        ])
            ->add('email', EmailType::class, [
                'label' => 'E-Mail',
                'attr' => [
                    'placeholder' =>"E-Mail"
                ]
            ])
            ->add('password', RepeatedType::class,[
                'type' => PasswordType::class,
                'constraints'=> new Length([
                'min' => 8,
                'max' => 17]),
                'invalid_message'=> 'Password and confirmations must be identical',
                'required'=> true,
                'first_options'=>['label'=>'Minimum 8 characters',
                'attr' => [
                    'placeholder' => 'Password'
                ]],
                'second_options'=>['label'=>'Confirm Password',
                'attr' => [
                    'placeholder' => 'Confirm'
                ]],
                
            ])
          
            ->add('submit', SubmitType::class,[
                'label' =>"Register",
                'attr' =>[
                    'class' => 'btn-block btn-gold mb-5'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
