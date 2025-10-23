<?php

namespace App\Command;

use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;

class CreateAdminCommand extends Command
{
    protected static $defaultName = 'app:create-admin';
    private $em;
    private $passwordHasher;

    public function __construct(EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher)
    {
        parent::__construct();
        $this->em = $em;
        $this->passwordHasher = $passwordHasher;
    }

    protected function configure()
    {
        $this->setDescription('Creates the admin user if not exists');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $adminEmail = 'admin@frshop.com';
        $adminPassword = 'Admin123!@#';
        
        // Check if admin exists
        $existingAdmin = $this->em->getRepository(User::class)->findOneBy(['email' => $adminEmail]);
        if ($existingAdmin) {
            $output->writeln('Admin already exists');
            return Command::SUCCESS;
        }

        // Create new admin user
        $admin = new User();
        $admin->setEmail($adminEmail);
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->passwordHasher->hashPassword($admin, $adminPassword));
        $admin->setFirstname('Admin');  // firstName => firstname
        $admin->setLastname('System');  // lastName => lastname
        $admin->setIsActive(true);

        // Save to database
        $this->em->persist($admin);
        $this->em->flush();

        $output->writeln('Admin user created successfully');
        return Command::SUCCESS;
    }
}