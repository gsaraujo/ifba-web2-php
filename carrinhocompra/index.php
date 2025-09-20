<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Formulário de Login</title>
    <style>
        :root { --bg:#f7f7f9; --card:#fff; --text:#111827; }
        [data-theme="dark"]{ --bg:#0b1220; --card:#0f1724; --text:#e6eef8; }
        *{box-sizing:border-box}
        body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial; background:var(--bg); color:var(--text); margin:0; display:flex; align-items:center; justify-content:center; min-height:100vh;}
        .card {background:var(--card); padding:22px; border-radius:12px; box-shadow:0 8px 24px rgba(2,6,23,.08); width:360px;}
        h2{margin:0 0 14px 0;font-size:1.25rem}
        label{display:block; font-size:0.9rem; margin-bottom:6px}
        .input{width:100%; padding:10px 12px; border:1px solid #e6e9ef; border-radius:8px; margin-bottom:14px; background:transparent; color:inherit}
        .btn{width:100%; padding:10px 12px; border:0; border-radius:8px; background:#2563eb; color:white; font-weight:600; cursor:pointer}
        small{display:block; margin-top:8px; color:#6b7280}
    </style>
</head>
<body data-theme="light">
<div class="card" role="form" aria-labelledby="formTitle">
    <h2 id="formTitle">Entrar</h2>

    <form id="loginForm" action="preferencias_usuario.php" method="post" autocomplete="on"">
    <div>
        <label for="usuario">Usuário</label>
        <input id="usuario" name="usuario" class="input" type="text" required placeholder="seu usuário">
    </div>

    <div>
        <label for="senha">Senha</label>
        <input id="senha" name="senha" class="input" type="password" required placeholder="sua senha">
    </div>

    <div>
        <label for="tema">Tema</label>
        <select id="tema" name="tema" class="input" aria-label="Tema">
            <option value="light">Claro</option>
            <option value="dark">Escuro</option>
            <option value="system">Seguir sistema</option>
        </select>
    </div>

    <button class="btn" type="submit">Entrar</button>
    <small id="msg" aria-live="polite"></small>
    </form>

</div>

<script>
    const form = document.getElementById('loginForm');
    const temaSelect = document.getElementById('tema');

    // Aplica tema quando selecionado
    temaSelect.addEventListener('change', e => {
        const val = e.target.value;
        if (val === 'dark') document.documentElement.setAttribute('data-theme', 'dark');
        else if (val === 'light') document.documentElement.setAttribute('data-theme', 'light');
        else {
            const prefers = window.matchMedia('(prefers-color-scheme: dark)').matches;
            document.documentElement.setAttribute('data-theme', prefers ? 'dark' : 'light');
        }
    });

    function handleSubmit(e) {
        e.preventDefault();
        const u = form.usuario.value.trim();
        const s = form.senha.value; // normalmente NÃO exiba a senha em produção
        const t = form.tema.value;
        document.getElementById('msg').textContent = `Envio simulado: usuário="${u}", tema="${t}"`;
        // Aqui você pode enviar via fetch para o backend (ex: fetch('/login', {method:'POST', body: new FormData(form)}))
    }
</script>
</body>
</html>
