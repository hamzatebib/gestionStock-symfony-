<?php

namespace App\Form;

use App\Entity\Fournisseur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FournisseurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('address', TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('email', TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('phone', TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Fournisseur::class,
        ]);
    }
}
