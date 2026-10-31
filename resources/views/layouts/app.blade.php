<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') · Laravel POS</title>
    <style>
        :root{--bg:#f6f4ef;--card:#fff;--ink:#1c1a17;--muted:#6d675f;--line:#e6e1d8;--brand:#e8402f;--soft:#fdeceb}
        @media (prefers-color-scheme:dark){:root{--bg:#14120f;--card:#1e1b17;--ink:#f2ebe2;--muted:#a39a8e;--line:#332e27;--brand:#ff5a4b;--soft:#2c1815}}
        *{box-sizing:border-box}
        body{margin:0;background:var(--bg);color:var(--ink);font:16px/1.6 system-ui,sans-serif}
        .wrap{max-width:960px;margin:0 auto;padding:0 20px}
        nav{background:var(--card);border-bottom:1px solid var(--line);position:sticky;top:0}
        nav .wrap{display:flex;align-items:center;justify-content:space-between;gap:12px;flex-wrap:wrap;padding-top:12px;padding-bottom:12px}
        .logo{font-weight:800;font-size:20px;color:var(--ink);text-decoration:none}
        .logo span{color:var(--brand)}
        .links{display:flex;gap:6px;flex-wrap:wrap}
        .links a{color:var(--muted);text-decoration:none;padding:6px 12px;border-radius:99px;font-weight:500}
        .links a:hover{background:var(--soft);color:var(--brand)}
        .links a.active{background:var(--brand);color:#fff}
        main{padding:40px 0 60px}
        h1{font-size:clamp(32px,7vw,52px);line-height:1.05;letter-spacing:-.03em;margin:0 0 12px}
        .lede{color:var(--muted);font-size:18px;max-width:55ch;margin:0 0 28px}
        .btn{display:inline-block;background:var(--brand);color:#fff;text-decoration:none;padding:10px 20px;border-radius:12px;font-weight:600;margin:0 8px 8px 0}
        .btn.alt{background:transparent;color:var(--ink);border:1px solid var(--line)}
        .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:14px;margin-top:32px}
        .card{background:var(--card);border:1px solid var(--line);border-radius:16px;padding:18px}
        .card h3{margin:0 0 4px}
        .card p{margin:0;color:var(--muted)}
        .table-wrap{overflow-x:auto;background:var(--card);border:1px solid var(--line);border-radius:16px}
        table{width:100%;border-collapse:collapse;min-width:560px}
        th,td{text-align:left;padding:14px 16px;border-bottom:1px solid var(--line)}
        th{font-size:12px;text-transform:uppercase;letter-spacing:.08em;color:var(--muted)}
        tr:last-child td{border-bottom:0}
        tbody tr:hover{background:var(--soft)}
        .badge{padding:3px 10px;border-radius:99px;font-size:13px;font-weight:600;background:var(--soft);color:var(--brand)}
        .badge.off{background:var(--line);color:var(--muted)}
        footer{color:var(--muted);font-size:14px;text-align:center;padding:24px}
    </style>
</head>
<body>
    <nav>
        <div class="wrap">
            <a href="{{ route('home') }}" class="logo">Laravel<span>POS</span></a>
            <div class="links">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('customers') }}" class="{{ request()->routeIs('customers') ? 'active' : '' }}">Customers</a>
                <a href="{{ route('users') }}" class="{{ request()->routeIs('users') ? 'active' : '' }}">Users</a>
            </div>
        </div>
    </nav>

    <main><div class="wrap">@yield('content')</div></main>

    <footer>IT0049 · TFA5 · Laravel POS</footer>
</body>
</html>