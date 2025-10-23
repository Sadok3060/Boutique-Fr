<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HealthController extends AbstractController
{
    #[Route('/health', name: 'app_health')]
    public function check(Connection $connection): JsonResponse
    {
        $status = ['status' => 'healthy'];
        
        try {
            // Test database connection
            $connection->connect();
            $status['database'] = 'connected';
            $version = $connection->fetchOne('SELECT VERSION()');
            $status['database_version'] = $version;
        } catch (\Exception $e) {
            $status = [
                'status' => 'unhealthy',
                'database' => 'error',
                'error' => $e->getMessage()
            ];
            return new JsonResponse($status, 500);
        }
        
        return new JsonResponse($status);
    }
}