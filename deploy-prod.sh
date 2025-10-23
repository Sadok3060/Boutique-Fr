#!/bin/bash

# Activer le mode maintenance si nécessaire
# php bin/console doctrine:cache:clear-metadata
# php bin/console cache:clear --env=prod

# Exécuter les migrations de manière sécurisée
php bin/migrate-prod.php

# Vérifier si les migrations ont réussi
if [ $? -eq 0 ]; then
    echo "✅ Déploiement réussi"
    exit 0
else
    echo "❌ Erreur pendant le déploiement"
    exit 1
fi