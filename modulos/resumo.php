<style>
    @keyframes float {
        0% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
        100% {
            transform: translateY(0);
        }
    }

    .fa-html5, .fa-css3-alt, .fa-js, .fa-php {
        font-size: 5rem; /* Tamanho dos ícones */
        padding: 15px; /* Espaçamento ao redor dos ícones */
        animation: float 3s infinite ease-in-out; /* Animação contínua */
        color: #70e3ea;
    }
    .icon-title {
        animation: float 3s infinite ease-in-out; /* Animação contínua */
        color: #70e3ea;
    }
</style>

<section id="sobre-mim" class="bg-black3 text-white py-90">
    <div class="container px-5">
        <div class="col-12">
            <div class="row align-items-center pt-3">
                <!-- Informações do perfil -->
                <div class="col-6">
                    <img src="imagens/perfil.jpeg" alt="Imagem do Eduardo" class="borda-50">
                    <h1 class="fw-bold fsize-1">Eduardo Saldanha</h1>
                    <h3 class="text-blue fw-light">Desenvolvedor Web</h3>
                    <div>
                        <i class="px-1 py-1 me-2 bg-black4 fs-4 fa-brands fa-linkedin"></i>
                        <i class="px-1 py-1 me-2 bg-black4 fs-4 fa-brands fa-github"></i>
                        <i class="px-1 py-1 me-2 bg-black4 fs-4 fa-brands fa-instagram"></i>
                    </div>
                </div>
                <!-- Ícones -->
                <div class="col-6 text-center">
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <div class="d-flex flex-column">
                                <span class="icon-title fs-3">HTML</span>
                                <i class="fa-brands fa-html5"></i>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="d-flex flex-column">
                                <span class="icon-title fs-3">CSS</span>
                                <i class="fa-brands fa-css3-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                            <div class="col-5">
                                <div class="d-flex flex-column">
                                    <span class="icon-title fs-3">JAVASCRIPT</span>
                                    <i class="fa-brands fa-js"></i>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="d-flex flex-column">
                                    <span class="icon-title fs-3">PHP</span>
                                    <i class="fa-brands fa-php"></i>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
