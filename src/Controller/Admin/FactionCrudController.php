<?php

namespace App\Controller\Admin;

use App\Entity\Faction;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FactionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Faction::class;
    }

   
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            ImageField::new('image')->setBasePath('uploads/')->setUploadDir('public/uploads/')->setUploadedFileNamePattern('[randomhash].[extension]')->setRequired(false),
            TextField::new('races'),
            TextareaField::new('description'),
        ];
    }
    
}
