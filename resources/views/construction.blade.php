<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faster - Site en Construction</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/faster-logo.png') }}">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body, html {
            width: 100%;
            height: 100%;
            overflow: hidden;
            background: #000;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }
        
        .video-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #000;
        }
        
        .video-container video {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        
        /* Overlay avec logo et message */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            pointer-events: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            padding: 2rem;
            background: linear-gradient(
                to bottom,
                rgba(0, 0, 0, 0.4) 0%,
                rgba(0, 0, 0, 0) 20%,
                rgba(0, 0, 0, 0) 80%,
                rgba(0, 0, 0, 0.4) 100%
            );
        }
        
        .logo-section {
            text-align: center;
            animation: fadeInDown 1s ease-out;
        }
        
        .logo {
            width: 150px;
            height: auto;
            margin-bottom: 1rem;
            filter: drop-shadow(0 4px 12px rgba(43, 216, 52, 0.5));
        }
        
        .tagline {
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.8);
            letter-spacing: 0.5px;
        }
        
        .info-section {
            text-align: center;
            animation: fadeInUp 1s ease-out;
        }
        
        .coming-soon {
            color: #2BD834;
            font-size: 2rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 1rem;
            text-shadow: 0 2px 16px rgba(43, 216, 52, 0.8),
                         0 4px 24px rgba(0, 0, 0, 0.9);
            animation: pulse 2s ease-in-out infinite;
        }
        
        .description {
            color: white;
            font-size: 1.1rem;
            font-weight: 500;
            margin-bottom: 2rem;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.8);
            max-width: 600px;
        }
        
        .social-links {
            display: flex;
            gap: 1.5rem;
            margin-top: 1rem;
            pointer-events: auto;
        }
        
        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.2);
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .social-link:hover {
            background: #2BD834;
            border-color: #2BD834;
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(43, 216, 52, 0.4);
        }
        
        .social-link svg {
            width: 24px;
            height: 24px;
        }
        
        /* Control buttons */
        .controls {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 3;
            display: flex;
            gap: 1rem;
        }
        
        .control-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(43, 216, 52, 0.9);
            border: none;
            color: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }
        
        .control-btn:hover {
            background: #22b028;
            transform: scale(1.1);
        }
        
        .control-btn svg {
            width: 24px;
            height: 24px;
        }
        
        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .logo {
                width: 100px;
            }
            
            .tagline {
                font-size: 1rem;
            }
            
            .coming-soon {
                font-size: 1.5rem;
            }
            
            .description {
                font-size: 0.95rem;
                padding: 0 1rem;
            }
            
            .social-link {
                width: 45px;
                height: 45px;
            }
            
            .controls {
                bottom: 1rem;
                right: 1rem;
            }
            
            .control-btn {
                width: 45px;
                height: 45px;
            }
        }
    </style>
</head>
<body>
    <!-- Video Background -->
    <div class="video-container">
        <video id="constructionVideo" autoplay loop muted playsinline>
            <source src="{{ asset('images/SITE EN CONSTRUCTION.mp4') }}" type="video/mp4">
            Votre navigateur ne supporte pas la lecture de vidéos.
        </video>
    </div>
    
    <!-- Overlay Content -->
    <div class="overlay">
        <!-- Top Section: Logo -->
        <div class="logo-section">
            <img src="{{ asset('images/faster-logo.png') }}" alt="Faster Logo" class="logo">
            <div class="tagline">Transport & Livraison Rapide</div>
        </div>
        
        <!-- Bottom Section: Info -->
        <div class="info-section">
            <div class="coming-soon">Bientôt Disponible</div>
            <div class="description">
                Nous préparons quelque chose d'extraordinaire pour vous. 
                Restez connectés pour découvrir la révolution du transport et de la livraison en Tunisie.
            </div>
            
            <!-- Social Links -->
            <div class="social-links">
                <!-- Facebook -->
                <a href="#" class="social-link" aria-label="Facebook">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
                
                <!-- Instagram -->
                <a href="#" class="social-link" aria-label="Instagram">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
                
                <!-- TikTok -->
                <a href="#" class="social-link" aria-label="TikTok">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
                    </svg>
                </a>
                
                <!-- WhatsApp -->
                <a href="#" class="social-link" aria-label="WhatsApp">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Video Controls -->
    <div class="controls">
        <button class="control-btn" id="muteBtn" aria-label="Son">
            <svg id="muteIcon" fill="currentColor" viewBox="0 0 24 24">
                <path d="M16.5 12c0-1.77-1.02-3.29-2.5-4.03v2.21l2.45 2.45c.03-.2.05-.41.05-.63zm2.5 0c0 .94-.2 1.82-.54 2.64l1.51 1.51C20.63 14.91 21 13.5 21 12c0-4.28-2.99-7.86-7-8.77v2.06c2.89.86 5 3.54 5 6.71zM4.27 3L3 4.27 7.73 9H3v6h4l5 5v-6.73l4.25 4.25c-.67.52-1.42.93-2.25 1.18v2.06c1.38-.31 2.63-.95 3.69-1.81L19.73 21 21 19.73l-9-9L4.27 3zM12 4L9.91 6.09 12 8.18V4z"/>
            </svg>
            <svg id="unmuteIcon" style="display:none;" fill="currentColor" viewBox="0 0 24 24">
                <path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z"/>
            </svg>
        </button>
        
        <button class="control-btn" id="playPauseBtn" aria-label="Play/Pause">
            <svg id="pauseIcon" fill="currentColor" viewBox="0 0 24 24">
                <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>
            </svg>
            <svg id="playIcon" style="display:none;" fill="currentColor" viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z"/>
            </svg>
        </button>
    </div>
    
    <script>
        // Video controls
        const video = document.getElementById('constructionVideo');
        const muteBtn = document.getElementById('muteBtn');
        const playPauseBtn = document.getElementById('playPauseBtn');
        const muteIcon = document.getElementById('muteIcon');
        const unmuteIcon = document.getElementById('unmuteIcon');
        const pauseIcon = document.getElementById('pauseIcon');
        const playIcon = document.getElementById('playIcon');
        
        // Toggle mute
        muteBtn.addEventListener('click', () => {
            video.muted = !video.muted;
            if (video.muted) {
                muteIcon.style.display = 'block';
                unmuteIcon.style.display = 'none';
            } else {
                muteIcon.style.display = 'none';
                unmuteIcon.style.display = 'block';
            }
        });
        
        // Toggle play/pause
        playPauseBtn.addEventListener('click', () => {
            if (video.paused) {
                video.play();
                pauseIcon.style.display = 'block';
                playIcon.style.display = 'none';
            } else {
                video.pause();
                pauseIcon.style.display = 'none';
                playIcon.style.display = 'block';
            }
        });
        
        // Auto-play video
        video.play().catch(err => {
            console.log('Autoplay prevented:', err);
        });
    </script>
</body>
</html>
