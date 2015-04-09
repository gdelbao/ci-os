<div id="conteudo">    
    <h1>Cadastro de Usuários</h1>
    incluir menu com Adicionar Usuário
    <br>
    <?php
    //TODO: Tabela para mostrar Cadastros
    $this->table->set_heading('ID','NOME','LOGIN');
    $this->table->add_row('1', 'Gabriel', 'admin');
    echo $this->table->generate();
    ?>
</div>
