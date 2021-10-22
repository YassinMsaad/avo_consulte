<?php

namespace App\Form;

use App\Entity\Avocat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AvocatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom_fr')
            ->add('nom_ar')
            ->add('adresse_fr')
            ->add('adresse_ar')
            ->add('gouvernorat_ar',ChoiceType::class, [
                'choices'  => [
                    'Maybe' => null,
'أريانة' =>'أريانة',
'باجة' => 'باجة',
'بن عروس'  => 'بن عروس',
'بنزرت'  => 'بنزرت',
'تطاوين'  =>'تطاوين',
'توزر'  =>'توزر',
'تونس'  =>'تونس' ,
'جندوبة'  =>'جندوبة',
'زغوان'  =>'زغوان' ,
'سليانة'  =>'سليانة',
'سوسة'  =>'سوسة',
'سيدي بوزيد'  =>'سيدي بوزيد',
'صفاقس'  =>'صفاقس',
'قابس'  =>'قابس',
'قبلي'  =>'قبلي' ,
'القصرين'  =>'القصرين',
'قفصة'  =>'قفصة' ,
'القيروان'  =>'القيروان',
'الكاف'  =>'الكاف'  ,
'مدنين'  =>'مدنين'  ,
'المنستير'  =>'المنستير',
'منوبة'  =>'منوبة' ,
'المهدية' =>  'المهدية',
'نابل' =>'نابل'
                ],'choice_label' => function ($choice, $key, $value) {
                    if (null === $choice) {
                        return 'الولاية';
                    }return strtoupper($key);}
            
            ])
            ->add('delegationFr',ChoiceType::class)
            ->add('delegationAr',ChoiceType::class)
            ->add('gouvernorat_fr',ChoiceType::class, [
                'choices'  => [
                'Maybe' => null,
                'Ariana' =>'Ariana',
                'Beja'=>'Beja',
'Ben Arous'=>'Ben Arous',
'Bizerte'=>'Bizerte',
'Gabes'=>'Gabes',
'Gafsa'=>'Gafsa',
'Jendouba'=>'Jendouba',
'Kairouan'=>'Kairouan',
'Kasserine'=>'Kasserine',
'Kebili'=>'Kebili',
'Kef'=>'Kef',
'Mahdia'=>'Mahdia',
'Manouba'=>'Manouba',
'Medenine'=>'Medenine',
'Monastir'=>'Monastir',
'Nabeul'=>'Nabeul',
'Sfax' => 'Sfax',
'Sidi Bouzid'=>'Sidi Bouzid',
'Siliana' => 'Siliana',
'Sousse' => 'Sousse',
'Tataouine' => 'Tataouine',
'Tozeur' => 'Tozeur',
'Tunis' => 'Tunis',
'Zaghouan' => 'Zaghouan',
                
],'choice_label' => function ($choice, $key, $value) {
                    if (null === $choice) {
                        return 'Gouvernorat';
                    }
            
                    return strtoupper($key);
            
                    // or if you want to translate some key
                    //return 'form.choice.'.$key;
                },
            ])
            ->add('telephone',TelType::Class)
            ->add('mobile',TelType::Class)
            ->add('fax',TelType::Class)
            ->add('email',EmailType::Class)
            ->add('password',PasswordType::Class)
            ->add('confirm_password',PasswordType::Class)
            ->add('specialite',ChoiceType::class, [
                'choices'  => [
                'Maybe' => null,
                'Tribunal de premiere instance' =>'Tribunal de premiere instance',
                'Tribunal de court d appel'=>'Tribunal de court d appel',
                'Tribunal de cour de cassation'=>'Tribunal de cour de cassation'
            ],'choice_label' => function ($choice, $key, $value) {
                    if (null === $choice) {
                        return 'specialite';
                    }
            
                    return strtoupper($key);
            
                    // or if you want to translate some key
                    //return 'form.choice.'.$key;
                },])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Avocat::class,
        ]);
    }
}
