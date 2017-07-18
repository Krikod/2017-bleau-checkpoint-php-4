<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;


class PanierFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('amount', RangeType::class, array(
                'attr' => array(
                    'min' => 0,
                    'max' => 10
                )
            ))
            ->add('price', MoneyType::class, array(
                'attr' => array(
                    'min' => 0
                )
            ))
            ->add('tva', ChoiceType::class, array(
                'choices' => array(
                    '20%' => 20,
                    '10%' => 10,
                    '5.5%' => 5.5
                )
            ))
            ->add('submit', SubmitType::class)
            ;
    }
}

