<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <title>Sistema</title>
    <style>
        body {
            overflow-x: hidden;
        }
        .sidebar {
            width: 260px;
            min-height: 100vh;
            background: #1c1f23;
            padding: 20px 15px;
        }
        .sidebar .nav-link {
            border-radius: 6px;
            padding: 10px 14px;
            margin-bottom: 6px;
        }
        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            background: #0d6efd;
        }
        .content-area {
            flex-grow: 1;
            padding: 30px;
        }
        footer {
            border-top: 1px solid #fff;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <main class="d-flex">
        <div class="sidebar text-white">
            <h4 class="mb-4">📌 Menu</h4>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a href="/" class="nav-link text-white">
                        🏠 Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('category.index') }}" class="nav-link text-white">
                        🗂️ Categorias
                    </a>
                </li>
                <li>
                    <a href="{{ route('action.index') }}" class="nav-link text-white">
                        ⚙️ Ações
                    </a>
                </li>
                <li>
                    <a href="{{ route('useraction.index') }}" class="nav-link text-white">
                        👤 Ações de Usuários
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('reward.index')}}" class="nav-link text-white">
                        <span>💰 Recompensas</span>
                    </a>
                </li>
            </ul>
        </div>

        <!--Conteúdo -->
        <div class="content-area">
            @yield('content')

            <footer class="pt-3 mt-4 text-body-secondary">
                <div class="d-flex justify-content-between flex-wrap">
                    <div>© 2025 Company, Inc</div>

                    <div>
                        <a class="text-body-secondary me-3" href="#">Instagram</a>
                        <a class="text-body-secondary" href="#">Facebook</a>
                    </div>
                </div>
            </footer>
        </div>
    </main>

</body>

</html>
