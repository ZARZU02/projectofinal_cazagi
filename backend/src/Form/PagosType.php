<?php

namespace App\Form;

use App\Entity\Empleado;
use App\Entity\Pagos;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PagosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pedido_fecha')
            ->add('pedido_tipo')
            ->add('fecha_envio')
            ->add('total')
            ->add('pagos_no', EntityType::class, [
                'class' => Empleado::class,
                'choice_label' => 'id',
            ])
            ->add('submit', SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pagos::class,
        ]);
    }
}
