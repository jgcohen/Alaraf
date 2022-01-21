<?php

namespace App\Controller\Admin;

use App\Entity\Faction;
use App\Entity\Npc;
use App\Entity\Subfaction;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Alaraf');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Users', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Factions', 'fas fa-user', Faction::class);
        yield MenuItem::linkToCrud('SubFactions', 'fas fa-user', Subfaction::class);
        yield MenuItem::linkToCrud('Npcs', 'fas fa-user', Npc::class);
    }
}
