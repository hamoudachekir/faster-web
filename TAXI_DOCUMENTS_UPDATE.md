# Mise à jour: Documents de taxi spécifiques

## Résumé des modifications
Cette mise à jour transforme le formulaire d'inscription conducteur en un formulaire spécifique pour les chauffeurs de taxi avec 5 documents requis au lieu de 6-7 documents génériques.

## Documents requis maintenant
1. **Selfie** - Photo du visage du conducteur
2. **Permis de conduire** - Permis valide
3. **Photo du véhicule taxi** - Photo du taxi avec plaque visible
4. **Carte grise** - Certificat d'immatriculation
5. **Licence de taxi** - Licence officielle de taxi

## Fichiers modifiés

### 1. Frontend - Formulaire d'inscription
**Fichier**: `resources/views/join/driver.blade.php`
- ✅ Titre changé: "Documents requis pour chauffeur de taxi"
- ✅ Remplacement de 6 champs par 5 champs spécifiques
- ✅ Mise à jour des noms de champs: `selfie`, `permis_conduire`, `photo_vehicule`, `carte_grise`, `licence_taxi`
- ✅ Mise à jour des icônes et descriptions

### 2. Backend - Contrôleur
**Fichier**: `app/Http/Controllers/JoinController.php`
- ✅ Validation mise à jour pour les 5 nouveaux champs
- ✅ Tous les champs marqués comme `required` (obligatoires)
- ✅ Stockage des fichiers sous `driver-applications/`
- ✅ Message de succès adapté: "Votre candidature de chauffeur de taxi..."

### 3. Base de données - Migration
**Fichier**: `database/migrations/2025_10_29_update_driver_documents_to_taxi_specific.php` (NOUVEAU)
- ✅ Supprime les 7 anciens champs de documents
- ✅ Ajoute 5 nouveaux champs avec commentaires
- ✅ Méthode `down()` pour rollback si nécessaire

### 4. Modèle Eloquent
**Fichier**: `app/Models/DriverApplication.php`
- ✅ `$fillable` mis à jour avec les 5 nouveaux champs
- ✅ Suppression des anciens noms de champs

### 5. Vue admin - Affichage des documents
**Fichier**: `resources/views/admin/drivers/show.blade.php`
- ✅ Photo de profil utilise maintenant `selfie`
- ✅ Section documents mise à jour avec les 5 champs taxi
- ✅ Suppression de la section "Photos du véhicule" (maintenant intégré)

## Instructions de déploiement sur cPanel

### Étape 1: Sauvegarde
```bash
# Dans cPanel File Manager, créer une archive de:
- database/ (zip existant)
- app/ (zip existant)
- resources/views/ (zip existant)
```

### Étape 2: Upload des fichiers modifiés
Via cPanel "Gestionnaire de fichiers", uploader ces fichiers en **mode Binaire**:

1. `resources/views/join/driver.blade.php`
2. `app/Http/Controllers/JoinController.php`
3. `app/Models/DriverApplication.php`
4. `resources/views/admin/drivers/show.blade.php`
5. `database/migrations/2025_10_29_update_driver_documents_to_taxi_specific.php` (nouveau fichier)

### Étape 3: Exécuter la migration
Dans le terminal cPanel:
```bash
cd public_html  # ou votre répertoire Laravel
php artisan migrate
```

**Résultat attendu**:
```
Migrating: 2025_10_29_update_driver_documents_to_taxi_specific
Migrated:  2025_10_29_update_driver_documents_to_taxi_specific (XX ms)
```

### Étape 4: Vider les caches Laravel
```bash
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Étape 5: Vérification
1. **Frontend**: Aller sur `https://faster-ride.com/join/driver`
   - Vérifier que le formulaire affiche "Documents requis pour chauffeur de taxi"
   - Vérifier les 5 champs de documents

2. **Backend**: Tester une soumission de formulaire
   - Uploader les 5 documents
   - Vérifier qu'aucune erreur ne se produit

3. **Admin**: Aller dans le backoffice
   - Vérifier que les nouveaux documents s'affichent correctement
   - Vérifier que la photo de profil (selfie) apparaît

## Compatibilité avec les anciennes données

⚠️ **IMPORTANT**: Les anciennes candidatures avec les anciens champs de documents (`profile_photo`, `license_front`, etc.) **ne s'afficheront plus** dans l'admin après cette migration car ces colonnes sont supprimées.

### Options:
1. **Migration propre** (recommandé si pas d'anciennes données importantes)
2. **Migration de données** (si vous voulez garder les anciennes candidatures):
   - Créer un script pour copier `profile_photo` → `selfie`
   - Copier `license_front` → `permis_conduire`
   - etc.

## Rollback (en cas de problème)

Si vous rencontrez des problèmes, vous pouvez revenir en arrière:

```bash
php artisan migrate:rollback --step=1
```

Cela restaurera les anciens champs de documents.

## Support

Si vous rencontrez des erreurs:
1. Vérifier les logs: `storage/logs/laravel.log`
2. Vérifier que tous les fichiers ont été uploadés correctement
3. Vérifier les permissions sur `storage/app/public`

## Résumé des bénéfices
✅ Formulaire plus clair et spécifique au taxi
✅ Moins de confusion pour les candidats
✅ Documents pertinents pour l'activité de taxi
✅ Validation stricte (tous les documents obligatoires)
✅ Interface admin mise à jour
