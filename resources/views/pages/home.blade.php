@extends('layouts.app')

@section('content')

{{--SIDE Bar--}}

<div class="sidebar-left">
    <div class="sidebar-close">
        <a class="close" href="#close"><i class="lni lni-close"></i></a>
    </div>
    <div class="sidebar-content">
        <div class="sidebar-logo">
            <a href="index.html"><img src="assets/images/Logo.png" alt="Logo" /></a>
        </div>
        <p class="text">A <b> Wonders - Tecnologia e Serviços</b> oferece serviços digitais inovadores que impulsionam
            negócios rumo ao futuro.</p>


        <!-- logo -->
        <div class="sidebar-menu">
            <!-- <h5 class="menu-title">Quick Links</h5> -->
            <ul>
                <!-- <li class="nav-item"><a class="page-scroll" href="#hero-area">Home</a></li> -->
                <li class="nav-item"><a class="page-scroll" href="#about">Sobre</a></li>
                <li class="nav-item"><a class="page-scroll" href="#services">Serviços</a></li>
                <li class="nav-item"><a class="page-scroll" href="#call-action">Clientes</a></li>
                <li class="nav-item"><a class="page-scroll" href="#contact">Contacto</a></li>


                </li>
            </ul>
        </div>
        <!-- menu -->

        <!-- <div class="sidebar-social align-items-center justify-content-center">
        <h5 class="social-title">Siga-nos em</h5>
        <ul>
          <li>
            <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
          </li>
          <li>
            <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
          </li>
          <li>
            <a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
          </li>
          <li>
            <a href="javascript:void(0)"><i class="lni lni-youtube"></i></a>
          </li>
        </ul>
      </div> -->
        <!-- sidebar social -->
    </div>
    <!-- content -->
</div>
<div class="overlay-left"></div>

{{-- Hero Area --}}
<section id="hero-area" class="header-area header-eight">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-content">
                    <h1>Transformamos ideias em soluções tecnológicas.</h1>
                    <p>
                        A <strong> Wonders - Tecnologia e Serviços</strong> oferece serviços digitais inovadores que impulsionam
                        negócios rumo ao futuro.
                    </p>
                    <div class="button">
                        <a href="https://wa.me/258872340383?text=Saudações,%20Gostaria%20de%20saber%20mais%20sobre%20a%20vossa%20empresa
" target="_blank" rel="noopener noreferrer" class="btn primary-btn">Fale com a nossa equipe</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-image">
                    <img src="assets/images/header/Tech_concept_2_01.jpg" alt="#" />

                </div>
            </div>
        </div>
    </div>
</section>

{{-- Sobre Nós --}}
<section id="about" class="about-area about-five">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="about-image-five">
                    <svg class="shape" width="106" height="134" viewBox="0 0 106 134" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="1.66654" cy="1.66679" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="16.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="31.0001" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="45.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="60.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="88.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="117.667" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="74.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="103" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="132" r="1.66667" fill="#DADADA" />
                        <circle cx="16.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
                        <circle cx="16.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="16.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
                        <circle cx="16.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="16.333" cy="60.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="16.333" cy="88.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="16.333" cy="117.667" r="1.66667" fill="#DADADA" />
                        <circle cx="16.333" cy="74.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="16.333" cy="103" r="1.66667" fill="#DADADA" />
                        <circle cx="16.333" cy="132" r="1.66667" fill="#DADADA" />
                        <circle cx="30.9998" cy="1.66679" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
                        <circle cx="30.9998" cy="16.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="30.9998" cy="31.0001" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
                        <circle cx="30.9998" cy="45.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="31" cy="60.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6668" cy="60.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="31" cy="88.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6668" cy="88.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="31" cy="117.667" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6668" cy="117.667" r="1.66667" fill="#DADADA" />
                        <circle cx="31" cy="74.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6668" cy="74.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="31" cy="103" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6668" cy="103" r="1.66667" fill="#DADADA" />
                        <circle cx="31" cy="132" r="1.66667" fill="#DADADA" />
                        <circle cx="74.6668" cy="132" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="60.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="60.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="88.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="88.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="117.667" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="117.667" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="74.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="74.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="103" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="103" r="1.66667" fill="#DADADA" />
                        <circle cx="45.6665" cy="132" r="1.66667" fill="#DADADA" />
                        <circle cx="89.3333" cy="132" r="1.66667" fill="#DADADA" />
                        <circle cx="60.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="1.66679" r="1.66667" fill="#DADADA" />
                        <circle cx="60.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="16.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="60.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="31.0001" r="1.66667" fill="#DADADA" />
                        <circle cx="60.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="45.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="60.333" cy="60.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="60.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="60.333" cy="88.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="88.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="60.333" cy="117.667" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="117.667" r="1.66667" fill="#DADADA" />
                        <circle cx="60.333" cy="74.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="74.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="60.333" cy="103" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="103" r="1.66667" fill="#DADADA" />
                        <circle cx="60.333" cy="132" r="1.66667" fill="#DADADA" />
                        <circle cx="104" cy="132" r="1.66667" fill="#DADADA" />
                    </svg>
                    <img src="assets/images/about/group-multinational-busy-people-working-office.jpg" alt="about" />
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-five-content">

                    <h2 class="main-title fw-bold"> <i class="lni lni-users"></i> Quem Somos</h2>
                    <h6 class="small-title text-lg"> <br> </h6>
                    <p style="text-align: justify;">Somos uma empresa de base tecnológica especializada em soluções digitais
                        para empresas de todos os portes. Com uma equipa jovem e criativa, desenvolvemos sistemas web, aplicações
                        móveis, automações e estratégias digitais com foco em resultados.</p>
                    <div class="about-five-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab" data-bs-target="#nav-who"
                                    type="button" role="tab" aria-controls="nav-who" aria-selected="true"> <i class="lni lni-target"></i> Missão</button>
                                <button class="nav-link" id="nav-vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision"
                                    type="button" role="tab" aria-controls="nav-vision" aria-selected="false"> <i class="lni lni-eye"></i> Visão</button>
                                <button class="nav-link" id="nav-history-tab" data-bs-toggle="tab" data-bs-target="#nav-history"
                                    type="button" role="tab" aria-controls="nav-history" aria-selected="false"> <i class="lni lni-heart"></i> Valores</button>

                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-who" role="tabpanel" aria-labelledby="nav-who-tab">

                                <h6 class="small-title"> <br> </h6>
                                <p>Oferecer soluções tecnológicas inteligentes, acessíveis e personalizadas que maximizem o desempenho
                                    dos nossos clientes.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <h6 class="small-title"> <br> </h6>
                                <p>Ser referência em inovação tecnológica em Moçambique e além-fronteiras, contribuindo para a
                                    transformação digital de forma ética e sustentável.</p>

                            </div>
                            <div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-history-tab">
                                <p class="small-title">Inovação contínua</p>
                                <p class="small-title">Comprometimento com resultados</p>
                                <p class="small-title">Transparência e ética</p>
                                <p class="small-title">Foco no cliente</p>
                                <p class="small-title">Excelência e qualidade</p>
                            </div>
                            <div class="tab-pane fade" id="nav-valores" role="tabpanel" aria-labelledby="nav-valores-tab">

                                <p class="small-title tex">Inovação contínua</p>
                                <p>Comprometimento com resultados</p>
                                <p>Transparência e ética</p>
                                <p>Foco no cliente</p>
                                <p>Excelência e qualidade</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

{{-- Serviços --}}
<section id="services" class="services-area services-eight">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>Serviços</h6>
                        <h2 class="fw-bold">Nossos serviços</h2>
                        <p>
                            Oferecemos soluções completas em tecnologia e comunicação. Conheça abaixo nossos principais serviços:
                        </p>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!--======  End Section Title Five ======-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="service-icon">
                        <i class="lni lni-vector"></i>
                        <!-- <i class="lni lnis-brush-2"></i> -->
                    </div>

                    <div class="service-content">
                        <h4>Design Grafico</h4>
                        <p style="text-align: justify;">
                            Desenvolvemos identidades visuais profissionais que fortalecem a imagem da sua marca e garantem
                            coerência em todos os pontos de contato com o cliente, do logotipo à comunicação institucional.

                        </p> <br>
                        <a href="#" class="program-btn"><span>Mais info...</span> </i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="service-icon">
                        <i class="lni lni-website"></i>
                    </div>
                    <div class="service-content">
                        <h4>Desenvolvimento Web</h4>
                        <p style="text-align: justify;">
                            Criamos websites corporativos e institucionais com foco em usabilidade, desempenho, segurança e
                            conversão. Garantimos que sua presença online represente fielmente os valores e objetivos do seu
                            negócio.
                        </p>
                        <br>
                        <a href="#" class="program-btn"><span>Mais info...</span> </i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="service-icon">
                        <i class="lni lni-mobile"></i>
                    </div>
                    <div class="service-content">
                        <h4>Aplicativos Móveis</h4>
                        <p style="text-align: justify;">
                            Projetamos e implementamos aplicações móveis para Android e iOS, alinhadas com os objetivos do cliente e
                            otimizadas para escalabilidade, performance e experiência do usuário
                        </p>
                        <br> <br>
                        <a href="#" class="program-btn"><span>Mais info...</span> </i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="service-icon">
                        <i class="lni lni-bullhorn"></i>
                    </div>
                    <div class="service-content">
                        <h4>Marketing Digital</h4>
                        <p style="text-align: justify;">
                            Planejamos e executamos estratégias digitais orientadas a dados, com foco em aquisição, retenção e
                            conversão. Atuamos com SEO, tráfego pago, inbound marketing e gestão de reputação online.
                        </p>
                        <br> <br>
                        <a href="#" class="program-btn"><span>Mais info...</span> </i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="service-icon">
                        <i class="lni lni-whatsapp"></i>
                    </div>
                    <div class="service-content">
                        <h4>Bots Para WhatsApp</h4>
                        <p style="text-align: justify;">
                            Implementamos assistentes virtuais para atendimento automatizado via WhatsApp, melhorando a experiência
                            do cliente, reduzindo custos operacionais e otimizando o tempo da sua equipe.
                        </p><br><br>
                        <a href="#" class="program-btn"><span>Mais info...</span> </i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="service-icon">
                        <i class="lni lni-consulting"></i>
                    </div>
                    <div class="service-content">
                        <h4>Consultoria informática</h4>
                        <p style="text-align: justify;">
                            Avaliamos e aprimoramos a infraestrutura tecnológica da sua empresa com foco em segurança, produtividade
                            e escalabilidade. Indicamos soluções sob medida para apoiar o crescimento sustentável do seu negócio.
                        </p><br>
                        <a href="#" class="program-btn"><span>Mais info...</span> </i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="service-icon">
                        <i class="lni lni-network"></i>
                    </div>
                    <div class="service-content">
                        <h4>Gestão de Redes Socias</h4>
                        <p style="text-align: justify;">
                            Gerenciamos estrategicamente suas redes sociais com criação de conteúdo de valor, posicionamento da
                            marca, monitoramento de métricas e interação com o público-alvo, fortalecendo o relacionamento com
                            clientes.
                        </p><br>
                        <a href="#" class="program-btn"><span>Mais info...</span> </i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="service-icon">
                        <i class="lni lni-cloud-network"></i>
                    </div>
                    <div class="service-content">
                        <h4>Infraestrutura de Redes</h4>
                        <p style="text-align: justify;">
                            Projetamos e implementamos redes corporativas seguras, escaláveis e de alta performance. Cuidamos da
                            conectividade da sua empresa para garantir disponibilidade e continuidade dos processos.
                        </p><br> <br>
                        <a href="#" class="program-btn"><span>Mais info...</span> </i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="service-icon">
                        <i class="lni lni-cogs"></i>
                    </div>
                    <div class="service-content">
                        <h4>Assistência Técnica</h4>
                        <p style="text-align: justify;">
                            Oferecemos suporte técnico especializado, manutenção preventiva e corretiva de equipamentos, diagnóstico
                            rápido de falhas e soluções eficazes para garantir o pleno funcionamento dos ativos tecnológicos.
                        </p><br>
                        <a href="#" class="program-btn"><span>Mais info...</span> </i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Clientes Star --}}
<section id="call-action" class="call-action">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
                <div class="inner-content">
                    <h2>Pronto para <br />transformar o seu negócio?</h2>
                    <p>
                        Entre em contacto e receba uma consultoria gratuita.
                    </p>
                    <div class="light-rounded-buttons">
                        <a href="https://wa.me/258872340383?text=Gostaria%20de%20saber%20mais%20sobre%20os%20vossos%20serviços%20e%20os%20preços%20dos%20mesmos" target="_blank" rel="noopener noreferrer" class="btn primary-btn-outline">Solicitar Orçamento</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Clientes Star --}}

<div id="clients" class="brand-area section">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>Conheça os nossos clientes</h6>
                        <h2 class="fw-bold">Os Nossos Incríveis Clientes</h2>

                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!--======  End Section Title Five ======-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="clients-logos">
                    <div class="single-image">
                        <a href="https://thinqr.org/">
                            <img src="assets/images/client-logo/Thinqr - Logo.png" alt="Thinqr" />
                        </a>
                    </div>
                    <div class="single-image">
                        <a href="https://gestores.co.mz/">
                            <img src="assets/images/client-logo/GC Logo.png" alt="Gestory's Company, LDA" />
                        </a>
                    </div>
                    <div class="single-image">
                        <img src="assets/images/client-logo/neon-calar1739294411.png" alt="Neon Art" />
                    </div>
                    <div class="single-image">
                        <img src="assets/images/client-logo/Gorgeous.png" alt="Gorgeous Closet" />
                    </div>
                    <div class="single-image">
                        <a href="https://acabe.org.mz/">
                            <img src="assets/images/client-logo/Acabe.png" alt="Associação Amigos da Criança Boa Esperança" />
                        </a>

                    </div>
                    <div class="single-image">
                        <a href="https://flowtech.co.mz/">
                            <img src="assets/images/client-logo/Logo Flow.png   " alt="Flow Technologies" />
                        </a>

                    </div>
                    <!-- <div class="single-image">
              <img src="assets/images/client-logo/tailwindtemplates.svg" alt="Brand Logo Images" />
            </div>
            <div class="single-image">
              <img src="assets/images/client-logo/ecomhtml.svg" alt="Brand Logo Images" />
            </div> -->
                </div>
            </div>
        </div>
    </div>
</div>



{{-- Contacto --}}
<section id="contact" class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="contact-item-wrapper">
                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="lni lni-phone"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Contacto</h4>
                                    <p>+258 87 234 0383</p>
                                    <p>contact@mzwonders.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="lni lni-map-marker"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Endereço</h4>
                                    <p>25 De Junho B</p>
                                    <p>Maputo - Choupal</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="lni lni-alarm-clock"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Horário</h4>
                                    <p>Aberto 24 horas / 7 dias</p>
                                    <p>Horário de funcionamento: 09:00h às 18:00h</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="contact-form-wrapper">
                    <div class="row">
                        <div class="col-xl-10 col-lg-8 mx-auto">
                            <div class="section-title text-center">
                                <span> Entre em contacto </span>
                                <h2>
                                    Pronto para começar
                                </h2>
                                <p>
                                    Converse com a nossa equipe e descubra como podemos transformar suas ideias em soluções digitais
                                    eficazes, estamos à sua disposição.
                                </p>
                            </div>
                            {{-- Mensagem de sucesso --}}
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <form action="{{route('contact.submit')}}" class="contact-form" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="nome" id="name" placeholder="Nome" required class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') }}" />
                                @error('nome') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" id="email" placeholder="Email" required class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" />
                                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="telefone" id="phone" placeholder="Telefone" required class="form-control @error('telefone') is-invalid @enderror" value="{{ old('telefone') }}" />
                                @error('telefone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="assunto" id="email" placeholder="Assunto" required class="form-control @error('assunto') is-invalid @enderror" value="{{ old('assunto') }}" />
                                @error('assunto') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <textarea name="mensagem" id="mensagem" placeholder="Mensagem" rows="5" required class="form-control @error('mensagem') is-invalid @enderror" value="{{ old('mensagem') }}"></textarea>
                                @error('mensagem') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="button text-center rounded-buttons">
                                    <button type="submit" class="btn primary-btn rounded-full">
                                        Enviar mensagem
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Mapa --}}
<section class="map-section map-style-9">
    <div class="map-container">
        <object style="border:0; height: 500px; width: 100%;"
            data="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8535.494356139645!2d32.56941526816753!3d-25.911136430203626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-PT!2smz!4v1750614543176!5m2!1spt-PT!2smz"></object>
    </div>

    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8535.494356139645!2d32.56941526816753!3d-25.911136430203626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-PT!2smz!4v1750614543176!5m2!1spt-PT!2smz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
    </div>
</section>



@endsection