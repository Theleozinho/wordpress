<?php get_header(); ?>
/*
template name: home
*/
<!--Banner start-->
<div class="bloco-a">
<section class="banner">
    <div class="b-conteudo b-box">
        <h2> <?php the_field('home_titulo'); ?></h2>
        <p><?php the_field('text_home_1');?></p>
        <button class="a-btn" style="width:50%">Solicitar orçamento</button>

    </div>

    <div class="b-img b-box">
        <img src="<?php bloginfo('template_url');?>/img/banner-cel.svg" alt="imagem vetorizada de uma mulher sentada no celular" />
    </div>
</section>

</div>

<!--Banner end-->


<div class="bloco-b">
<section class="banner veloz">

    <div class="b-conteudo b-box">
        <h2>Por que usamos Wordpress?</h2>
        <br>
        <p> O <b>Wordpress</b> é um ecossistema que é utilizado para criar, gerenciar e publicar conteúdos na internet. Tudo isso de forma simplificada e intuitiva, sem exigir conhecimentos avançados de desenvolvimento web.</p>
        <br/>
        <p>Outro motivo é porque dispensa custos com assistência especializada para simples manutenções de rotina. Além disso, o <b>Wordpress é o CMS mais usado no mercado</b>.</p>


    </div>

    <div class="b-img b-box">
        <img src="<?php bloginfo('template_url')?>/img/wordpress.svg" alt="imagem vetorizada de uma mulher sentada no celular"/>
    </div>
</section>
</div>



<div class="bloco-c">
    <section class="banner veloz">
        <div class="b-img b-box">
            <img src="<?php bloginfo('template_url')?>/img/dev.svg" alt="imagem vetorizada de uma mulher sentada no celular" />
        </div>
        <div class="b-conteudo b-box">
            <h2>Consultoria gratuita</h2>
    
            <p>Todos os nossos sites são feitos em Wordpress, 
                isso signifca que você não vai precisar ter conhecimento tecnico para editar o seu site, todo o conteúdo é editado diretamente pelo painel administrativo. </p>
            
            <button class="b-btn">Saiba Mais</button>
    
        </div>
    
       
    </section>
    </div>

<div class="bloco-d">
    <section class="banner veloz">
    
        <div class="b-conteudo b-box">
            <h2>SITE COM ALTA PERFORMANCE</h2>
    
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  
            Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled
            it to make a type specimen book. It has </p>
            
            <button class="b-btn">Saiba Mais</button>
    
        </div>
    
        <div class="b-img b-box">
            <img src="<?php bloginfo('template_url')?>/img/fast-ico.svg" alt="imagem vetorizada de uma mulher sentada no celular" />
        </div>
    </section>
    </div>
    
    <?php get_footer(); ?>