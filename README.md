# 🏥 PharmaTrack - Plateforme de Gestion des Pharmacies

Une plateforme moderne et épurée pour gérer les pharmacies au Mali.

## 🚀 Technologie

- **Backend** : Laravel 11
- **Admin Panel** : Filament 3
- **Database** : MySQL 8
- **Containerization** : Docker + Laravel Sail
- **Design** : Vert médical moderne (#10B981)

## ✨ Fonctionnalités

### 📦 Gestion des Médicaments
- Inventaire complet
- Suivi des stocks
- Alertes de rupture
- Dates d'expiration
- Gestion des prix

### 💰 Gestion des Ventes
- Point de vente (POS)
- Factures et reçus
- Historique des transactions
- Statistiques de ventes

### 👥 Gestion des Clients
- Profil client
- Historique d'achats
- Système de fidélité
- Informations de contact

### 👨‍💼 Rôles & Permissions
- **Admin** : Gestion complète du système
- **Pharmacien** : Gestion des stocks et ventes
- **Client** : Consultation des produits

### 📊 Tableau de Bord
- KPI en temps réel
- Graphiques de ventes
- Stocks critiques
- Statistiques quotidiennes

---

## 🔧 Installation

### Prérequis
- Mac OS avec Docker Desktop installé
- Git
- Composer

### Étapes

1. **Cloner le repository**
```bash
git clone https://github.com/Bassoum981/pharmatrack.git
cd pharmatrack
```

2. **Copier le fichier .env**
```bash
cp .env.example .env
```

3. **Générer la clé APP**
```bash
./vendor/bin/sail artisan key:generate
```

4. **Installer les dépendances avec Sail**
```bash
./vendor/bin/sail composer install
```

5. **Démarrer les containers**
```bash
./vendor/bin/sail up -d
```

6. **Exécuter les migrations**
```bash
./vendor/bin/sail artisan migrate --seed
```

7. **Accéder à l'application**
- Dashboard : http://localhost
- Mailpit : http://localhost:8025

---

## 📝 Commandes Sail Utiles

```bash
# Démarrer les containers
./vendor/bin/sail up

# Arrêter les containers
./vendor/bin/sail down

# Voir les logs
./vendor/bin/sail logs -f

# Exécuter une commande artisan
./vendor/bin/sail artisan migrate

# Ouvrir Tinker (console interactive)
./vendor/bin/sail tinker

# Exécuter les tests
./vendor/bin/sail pest

# Publier les assets Filament
./vendor/bin/sail artisan filament:install
```

---

## 🎨 Structure du Projet

```
pharmtrack/
├── app/
│   ├── Models/          # Modèles (Medicament, Vente, Client, User)
│   ├── Filament/        # Ressources Filament
│   └── Http/
├── database/
│   ├── migrations/      # Migrations MySQL
│   └── seeders/         # Seeders de test
├── resources/
│   ├── views/           # Vues Blade/Filament
│   └── css/             # Styles personnalisés
├── routes/
│   ├── web.php          # Routes web
│   └── api.php          # Routes API
├── docker-compose.yml   # Configuration Docker
└── .env.example         # Variables d'environnement
```

---

## 🔐 Utilisateurs par Défaut

Après la migration avec seed :

| Email | Mot de passe | Rôle |
|-------|-------------|------|
| admin@pharmatrack.com | password | Admin |
| pharmacien@pharmatrack.com | password | Pharmacien |
| client@pharmatrack.com | password | Client |

**⚠️ Changez ces mots de passe en production !**

---

## 📧 Support & Contact

Pour les questions ou problèmes, créez une issue sur GitHub.

---

## 📄 Licence

MIT License - voir le fichier LICENSE pour plus de détails.

---

**Développé avec ❤️ pour le Mali** 🇲🇱
