<?php

namespace App\Controller\Admin;

use App\Entity\Subfaction;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;


class SubfactionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Subfaction::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            ImageField::new('image')->setBasePath('uploads/')->setUploadDir('public/uploads/')->setUploadedFileNamePattern('[randomhash].[extension]')->setRequired(false),
            TextareaField::new('description'),
            AssociationField::new('faction')
        ];
    }
    
}
