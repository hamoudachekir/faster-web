# 🚀 Déployer sur Netlify - Guide Simple

## ✅ Fichiers Prêts
Tous les fichiers sont dans le dossier `deploy/`:
- ✅ `index.html` (responsive pour smartphones)
- ✅ `images/faster-logos.png` (logo + favicon)
- ✅ `images/SITE EN CONSTRUCTION.mp4` (vidéo de fond)

## 📱 Méthode 1: Netlify Drop (La plus simple - Sans compte GitHub)

### Étapes:
1. **Ouvrir Netlify Drop**
   - Aller sur: https://app.netlify.com/drop
   - Ou créer un compte gratuit sur: https://app.netlify.com/signup

2. **Glisser-Déposer le dossier**
   - Glisser TOUT le dossier `deploy` directement dans la zone
   - ⚠️ **Important**: Glisser le dossier complet, pas seulement index.html

3. **Attendre le déploiement**
   - Netlify génère automatiquement un URL (ex: `https://random-name-123456.netlify.app`)
   - Le site est en ligne en ~30 secondes!

4. **Personnaliser le nom (Optionnel)**
   - Cliquer sur "Site settings"
   - Aller dans "Change site name"
   - Choisir: `faster-construction` ou autre nom disponible
   - Votre URL devient: `https://faster-construction.netlify.app`

---

## 🔧 Méthode 2: Netlify CLI (Plus rapide avec terminal)

### Installation:
```powershell
npm install -g netlify-cli
```

### Déploiement:
```powershell
# Se connecter (première fois seulement)
netlify login

# Se placer dans le dossier deploy
cd deploy

# Déployer en production
netlify deploy --prod
```

- Choisir "Create & configure a new site"
- Appuyer sur Entrée pour valider le dossier actuel (.)
- Votre site est en ligne!

---

## 📋 Checklist Avant Déploiement

✅ Vérifier que ces 3 fichiers existent:
- `deploy/index.html`
- `deploy/images/faster-logos.png`
- `deploy/images/SITE EN CONSTRUCTION.mp4`

✅ Tester localement:
```powershell
# Ouvrir index.html dans le navigateur
start deploy\index.html
```

---

## 📱 Fonctionnalités

✅ **Responsive Design**:
- Desktop: Logo 150px, texte grand
- Tablet (≤768px): Logo 120px, texte moyen
- Smartphone (≤480px): Logo 100px, texte petit

✅ **Favicon**: Logo Faster dans l'onglet du navigateur

✅ **Contrôles vidéo**: Boutons Play/Pause et Mute/Unmute

✅ **Réseaux sociaux**: Liens Facebook, Instagram, TikTok, WhatsApp

---

## 🌐 Résultat Final

Après déploiement, vous aurez:
- 🔗 URL publique (ex: `https://faster-construction.netlify.app`)
- 📱 Compatible tous les appareils (Desktop, Tablet, Smartphone)
- ⚡ Site ultra-rapide (hébergement gratuit)
- 🔒 HTTPS automatique (certificat SSL gratuit)

---

## 💡 Astuce

Pour mettre à jour le site:
1. Modifier les fichiers dans `deploy/`
2. Re-glisser le dossier sur Netlify Drop
3. Ou re-lancer `netlify deploy --prod`

C'est tout! Votre page de construction est en ligne! 🎉
