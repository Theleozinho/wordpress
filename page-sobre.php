<?php
/*
template name: Sobre

*/
get_header(); ?>


<div class="bloco-b">
<section class="banner veloz">

    <div class="b-conteudo b-box">
        <h2> <?php the_title(); ?></h2>

        <p> <?php the_field('texto_sobre'); ?></p>
      
    </div>

    <div class="b-img b-box">
  
        <img src="<?php the_field('imagem_sobre');?>" alt="imagem vetorizada de uma mulher sentada no celular"/>
    </div>
</section>
</div>

<?php get_footer(); ?>