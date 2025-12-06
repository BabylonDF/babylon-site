<?php
$counterFile = __DIR__ . '/views.txt';
$views = file_exists($counterFile) ? (int) file_get_contents($counterFile) : 0;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Contador de visitas – Babylon</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    body {
      background: #000;
      color: #ffd700;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }
    .card {
      border: 1px solid rgba(255, 215, 0, 0.5);
      padding: 24px 32px;
      border-radius: 16px;
      box-shadow: 0 12px 30px rgba(0,0,0,0.8);
      text-align: center;
      max-width: 360px;
    }
    h1 {
      font-size: 1.1rem;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      margin-bottom: 12px;
    }
    .count {
      font-size: 2.6rem;
      font-weight: 700;
      margin-bottom: 8px;
    }
    .label {
      font-size: 0.9rem;
      opacity: 0.85;
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Visitas à página inicial</h1>
    <div class="count"><?php echo number_format($views, 0, ',', '.'); ?></div>
    <div class="label">visualizações acumuladas da <strong>index</strong>.</div>
  </div>
</body>
</html>
