<footer>
    <div class="container">
        <h1 class="follow">Follow Instagram</h1>
        <h5 class="perfil">@User_photographer</h5>
    </div>
    <div id="feed-instagram"></div>
    <div class="rodape">
        <div class="container">
            <div class="sobre">
                <img src="<?= get_template_directory_uri() ?>/assets/images/logo.png"/>
                <p>Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore
                    magna aliqua.</p>
                <div class="redes-sociais">
                    <a href=""><i class="icon-facebook"></i></a>
                    <a href=""><i class="icon-instagram"></i></a>
                    <a href=""><i class="icon-twitter"></i></a>
                    <a href=""><i class="icon-youtube"></i></a>
                </div>
            </div>
            <div class="link-rapidos">
                <h1 class="title">Quick links</h1>
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Contact</a>
                <a href="">Gallery</a>
                <a href="">Portfolio</a>
                <a href="">Services</a>
            </div>
            <div class="contato">
                <h1 class="title">Entre em contato</h1>
                <form action="">
                    <input type="text" placeholder="Nome"/>
                    <input type="text" placeholder="Telefone"/>
                    <textarea placeholder="Mensagem"></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </div>
            <div class="copyrights">
                <h5>Copyright ©<?= Date('Y') ?> Todos diretos reservados. desenvolvidor por <a href="https://github.com/gabrielleles18">Gabreil Leles</a>
                </h5>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script src="<?= get_template_directory_uri() ?>/assets/js/templates/imagebox.js"></script>
</body>
</html>
