<footer class="site-footer">
    <div class="footer-inner">
        <p>© {{ date('Y') }} CBTA 35 "Leona Vicario" · Todos los derechos reservados.</p>
        <div class="footer-actions">
            <button type="button" class="credits-btn" id="openCredits">Créditos</button>
            <a href="#top" class="back-to-top">Volver al inicio</a>
        </div>
    </div>
</footer>

<dialog id="creditsDialog" class="credits-dialog">
    <h2>Créditos del sitio</h2>
    <ul>
        <li><strong>Desarrollo:</strong> Luis Ángel Méndez Clavellina</li>
        <li><strong>Grupo:</strong> 3B PRVC</li>
        <li><strong>Carrera:</strong> Técnico en Programación</li>
        <li><strong>Institución:</strong> CBTA 35 "Leona Vicario"</li>
    </ul>
    <form method="dialog">
        <button class="dialog-close">Cerrar</button>
    </form>
</dialog>
<script>
    const dialog = document.getElementById('creditsDialog');
    document.getElementById('openCredits').addEventListener('click', () => {
        dialog.showModal();
    });
</script>