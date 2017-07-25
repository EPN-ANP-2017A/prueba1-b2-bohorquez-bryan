<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class pedidoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('cantidad');
		/**->add('clientes')
		->add('platos');**/
        /**->add('clientes', EntityType::class, array(
	        // query choices from this entity
	        'class' => 'AppBundle:cliente',

	        // use the Category.nombre property as the visible option string
	        'choice_label' => function ($clientes) {
		        return $clientes->getNombre();
	        })
        ->add('platos',EntityType::class, array(
	        // query choices from this entity
	        'class' => 'AppBundle:plato',

	        // use the Category.nombre property as the visible option string
	        'choice_label' => function ($platos) {
		        return $platos->getNombre();
	        }));**/
	        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\pedido'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_pedido';
    }


}
