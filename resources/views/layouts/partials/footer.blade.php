<!-- FOOTER -->
<footer id="footer" class="bg-white border-top shadow-sm py-3 fixed-bottom transition-all">
    <div class="container-fluid text-center text-muted small">
        &copy; {{ date('Y') }} <strong class="text-primary">TaliKuat</strong>. All Rights Reserved.
    </div>
</footer>

<style>
     body.dark #footer {
        background-color: #1e1e2d !important;
        border-top-color: rgba(255,255,255,0.1) !important;
    }

    /* Teks footer jadi putih di dark mode */
    body.dark #footer,
    body.dark #footer .text-muted {
        color: #ffffff !important;
    }

    body.dark #footer strong {
        color: #4f9eff !important;
    }

    /* Link style di footer */
    #footer a {
        color: inherit;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    #footer a:hover {
        color: #0d6efd;
    }
</style>
