<?php

    //Template Name: Home

?>

<?php get_header(); ?>
                <div class="clear"></div>
                <br />
                <br />
                <div class="w50 descricao-time">
                    <h2><?php the_field('chamada_topo'); ?></h2>
                    <p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>
                    <a target="_blank" href="http://dankicode.com">Ver Demostração</a>
                </div><!---w50 descricao-time-->

                <div class="w50 imagem">
                    <img src="<?php echo get_theme_root_uri();?>/danki/images/equipe.png"/>
                </div>
                <div class="clear"></div>
            </div><!--center-->
    </section><!--topo-->
    <div class="circle"><i class="fa fa-angle-down"></i></div>
    <section class="clientes-slider">
   
        <div class="center">
            <div style="max-width: 700px; margin: 0 auto;overflow:hidden;" class="slider-container">
            <img src="<?php echo get_theme_root_uri();?>/danki/images/amazon.jpg" />
            <img src="<?php echo get_theme_root_uri();?>/danki/images/costco.jpg" />
            <img src="<?php echo get_theme_root_uri();?>/danki/images/dominos.jpg" />
            <img src="<?php echo get_theme_root_uri();?>/danki/images/walmart.jpg" />
            <img src="<?php echo get_theme_root_uri();?>/danki/images/uber.jpg" />
            </div>
        </div>
    </section>

        <section class="diferenciais">
            <div class="center">
                <h2>Contribuimos de ponta a ponta</h2>
            <div class="icons-diferenciais">
                
                <div class="box-single-diferenciais">
                    <img src="<?php echo get_theme_root_uri();?>/danki/images/icon1.png"/>
                    <h3>Ambiente Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div><!--box-single-diferenciais-->

                <div class="box-single-diferenciais">
                    <img src="<?php echo get_theme_root_uri();?>/danki/images/icon2.png"/>
                    <h3>Ambiente Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div><!--box-single-diferenciais-->

                <div class="box-single-diferenciais">
                    <img src="<?php echo get_theme_root_uri();?>/danki/images/icon3.png"/>
                    <h3>Ambiente Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div><!--box-single-diferenciais-->
                
                </div><!--icons-diferenciais-->
            </div><!--center-->
        </section>

        <section class="sobre-times">
            <div class="center">
                <div class="w50 time-descricao-2">
                    <h2>Um time experiente,</br>comunicador e coeso</h2>
                    <p><?php the_field('sobre_home'); ?> </p>
                </div><!--w50-->
                <div class="w50 img-time">
                    <img src="<?php echo get_theme_root_uri();?>/danki/images/time.png"/>
                </div>
                <div class="clear"></div>
                </div>
        </section>

        <section class="depoimentos">
            <div class="center">
                <h2>Depoimentos</h2>
                <div class="depoimentos-box">
                <div class="depoimento-single">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste harum eos inventore. Sit maxime obcaecati vel modi nostrum enim magni.</p>
                    <p>Guilherme Grillo</p>
                    <img src="<?php echo get_theme_root_uri();?>/danki/images/autor.jpg"/>
                    </div><!--depoimento-single-->

                    <div class="depoimento-single">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste harum eos inventore. Sit maxime obcaecati vel modi nostrum enim magni.</p>
                    <p>Guilherme Grillo</p>
                    <img src="<?php echo get_theme_root_uri();?>/danki/images/autor.jpg"/>
                    </div><!--depoimento-single-->

                    <div class="depoimento-single">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste harum eos inventore. Sit maxime obcaecati vel modi nostrum enim magni.</p>
                    <p>Guilherme Grillo</p>
                    <img src="<?php echo get_theme_root_uri();?>/danki/images/autor.jpg"/>
                    </div><!--depoimento-single-->
                </div><!--depoimentos-box-->

            </div><!--center-->
    
        </section>

<?php get_footer(); ?>

