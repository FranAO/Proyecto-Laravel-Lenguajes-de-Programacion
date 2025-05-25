<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $language->nombre }} - Lenguajes de Programación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --primary-hover: #4f46e5;
            --secondary: #818cf8;
            --accent: #c4b5fd;
            --background: #f8fafc;
            --surface: #ffffff;
            --text: #1e293b;
            --text-secondary: #64748b;
            --border: #e2e8f0;
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --gradient: linear-gradient(135deg, var(--primary), var(--secondary));
        }

        body {
            background-color: var(--background);
            font-family: 'Inter', sans-serif;
            color: var(--text);
            line-height: 1.6;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar-brand {
            color: var(--primary) !important;
            font-weight: 700;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            transition: transform 0.3s ease;
        }

        .navbar-brand:hover {
            transform: translateY(-2px);
        }

        .navbar-brand i {
            font-size: 1.75rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            color: var(--text-secondary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 0.75rem 1.5rem;
            border-radius: 1rem;
            background: var(--surface);
            border: 1px solid var(--border);
            box-shadow: var(--shadow-sm);
            margin-bottom: 2rem;
        }

        .back-button:hover {
            color: var(--primary);
            transform: translateX(-4px);
            box-shadow: var(--shadow);
            background: var(--surface);
        }

        .language-header {
            background: var(--gradient);
            padding: 6rem 0;
            margin-bottom: 4rem;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .language-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.5;
        }

        .language-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            position: relative;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .language-meta {
            display: flex;
            gap: 2.5rem;
            margin-top: 2rem;
            position: relative;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 1.1rem;
            background: rgba(255, 255, 255, 0.1);
            padding: 0.75rem 1.25rem;
            border-radius: 1rem;
            backdrop-filter: blur(4px);
        }

        .meta-item i {
            font-size: 1.25rem;
            opacity: 0.9;
        }

        .content-section {
            background: var(--surface);
            border-radius: 1.25rem;
            padding: 2.5rem;
            margin-bottom: 2.5rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--border);
            transition: transform 0.3s ease;
        }

        .content-section:hover {
            transform: translateY(-4px);
        }

        .section-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .section-title i {
            color: var(--primary);
            background: rgba(99, 102, 241, 0.1);
            padding: 0.75rem;
            border-radius: 1rem;
        }

        .feature-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 1.25rem;
            padding: 1.75rem;
            border-radius: 1rem;
            background: var(--background);
            margin-bottom: 1.25rem;
            transition: all 0.3s ease;
            border: 1px solid var(--border);
        }

        .feature-item:hover {
            transform: translateX(8px);
            box-shadow: var(--shadow);
            border-color: var(--primary);
            background: var(--surface);
        }

        .feature-item i {
            color: var(--primary);
            font-size: 1.25rem;
            margin-top: 0.25rem;
            background: rgba(99, 102, 241, 0.1);
            padding: 1rem;
            border-radius: 0.75rem;
        }

        .feature-content h4 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--text);
        }

        .feature-content p {
            color: var(--text-secondary);
            margin: 0;
            font-size: 1rem;
            line-height: 1.7;
        }

        .website-card {
            background: var(--surface);
            border-radius: 1.25rem;
            padding: 2.5rem;
            text-align: center;
            box-shadow: var(--shadow);
            border: 1px solid var(--border);
            transition: all 0.3s ease;
        }

        .website-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
        }

        .website-card i {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 1.5rem;
            background: rgba(99, 102, 241, 0.1);
            padding: 1.5rem;
            border-radius: 1.25rem;
        }

        .website-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: var(--text);
        }

        .btn-primary {
            background: var(--gradient);
            border: none;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            font-size: 1rem;
            border-radius: 0.875rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            color: white;
            text-decoration: none;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow);
            color: white;
        }

        /* Animation classes */
        .fade-in {
            animation: fadeIn 0.8s ease-out;
        }

        .slide-up {
            animation: slideUp 0.8s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .language-title {
                font-size: 2.5rem;
            }

            .language-meta {
                flex-direction: column;
                gap: 1rem;
            }

            .content-section {
                padding: 1.75rem;
            }

            .meta-item {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('languages.index') }}">
                <i class="fas fa-code"></i>
                <span>Lenguajes de Programación</span>
            </a>
        </div>
    </nav>

    <div class="container">
        <a href="{{ route('languages.index') }}" class="back-button fade-in">
            <i class="fas fa-arrow-left"></i>
            <span>Volver a la lista</span>
        </a>
    </div>

    <section class="language-header">
        <div class="container">
            <h1 class="language-title fade-in">{{ $language->nombre }}</h1>
            <div class="language-meta slide-up">
                <div class="meta-item">
                    <i class="fas fa-code-branch"></i>
                    <span>{{ $language->paradigma }}</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-user"></i>
                    <span>{{ $language->creador }}</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-calendar"></i>
                    <span>{{ $language->año_creacion }}</span>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="content-section slide-up">
                    <h2 class="section-title">
                        <i class="fas fa-info-circle"></i>
                        <span>Descripción</span>
                    </h2>
                    <p>{{ $language->descripcion }}</p>
                </div>

                <div class="content-section fade-in">
                    <h2 class="section-title">
                        <i class="fas fa-list-check"></i>
                        Características
                    </h2>
                    <ul class="feature-list">
                        @foreach($language->caracteristicas as $caracteristica)
                        <li class="feature-item slide-up">
                            <i class="fas fa-check-circle"></i>
                            <div class="feature-content">
                                <h4>{{ $caracteristica['titulo'] }}</h4>
                                <p>{{ $caracteristica['descripcion'] }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="website-card slide-up" style="animation-delay: 0.4s">
                    <i class="fas fa-globe"></i>
                    <h3>Sitio Web Oficial</h3>
                    <a href="{{ $language->sitio_web }}" class="btn btn-primary" target="_blank">
                        <span>Visitar Sitio</span>
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>