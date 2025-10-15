<footer class="footer py-3" style="background:#fff; border-top:1px solid #eee;">
  <div class="container-fluid text-center">
    <span class="text-muted">
      © {{ date('Y') }}
      <span style="color:#e14eca; font-weight:600;">Matheus de Mattos Chaves</span>
      — Todos os direitos reservados.
    </span>
  </div>
</footer>

<style>
  .main-panel {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
  }

  .main-panel .content {
    flex: 1 0 auto;
  }

  .footer {
    flex-shrink: 0;
  }
</style>