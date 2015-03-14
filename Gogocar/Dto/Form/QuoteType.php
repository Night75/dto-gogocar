<?php

namespace Gogocar\Dto\Form;

use Gogocar\Dto\Model\Quote;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints as Assert;

class QuoteType extends InputType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('details', 'email', [
                    'constraints' => [
                        new Assert\NotBlank(['message' => 'details.not_blank']),
                    ],
                ])
            ->add('price', 'text', [
                    'constraints' => [
                        new Assert\NotBlank(['message' => 'price.not_blank']),
                    ],
                ])
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => Quote::class,
            ));
    }
}
