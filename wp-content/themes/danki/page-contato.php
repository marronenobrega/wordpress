<?php
    //Template Name: Contato 
?>  

    <?php get_header(); ?>

    </div>
    </section>
    
    <section class="contato">
        <div class="center">
            <div class="w50 contato-info">
                <h2>A mais importante, <br />primeira conversa</h2>
                <br />
                <p><b>Telefone:</b> (48) 9981-3620</p>
                <p><b>Telefone:</b> (48) 9981-3620</p>
                <p><b>Telefone:</b> (48) 9981-3620</p>
                
            <div class="mapa-container">
            <div id="mapa">     
            </div>
            </div><!---mapa--->
            </div>
            <div class="w50 contato-form">
               <?php the_content(); ?>
            
                <!-- <form>
                    <input placeholder="Nome" type="text">
                    <input placeholder="E-mail" type="text">
                    <input placeholder="Telefone (xx) xxxxx-xxxx" type="text">
                    <select>
                        <option>Geral</option>
                    </select>
                    <textarea placeholder="Mensagem"></textarea>
                    <input type="submit">
                </form> -->
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <?php get_footer(); ?>
