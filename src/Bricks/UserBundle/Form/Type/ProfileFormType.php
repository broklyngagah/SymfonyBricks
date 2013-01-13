<?php

namespace Bricks\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;

class ProfileFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add('emailpolicy_send_on_new_message', 'checkbox', array(
            'label' => 'profile.emailpolicy_send_on_new_message.label',
            'translation_domain' => 'FOSUserBundle',
        ));
    }

    public function getName()
    {
        return 'bricks_user_profile';
    }
}
