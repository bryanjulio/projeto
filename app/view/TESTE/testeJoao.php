<?php

class testeJoao
{
    public function render($nivelAcesso)
    { ?>

        <?php if (($nivelAcesso['nivelAcesso'] ?? '') === 'super_admin'): ?>
            <!-- Código HTML para os componentes exclusivos do administrador -->
           
        <?php endif; ?>

        <!DOCTYPE html>
         <p>Hello World!</p>
        </html>
        <?php
    }
}