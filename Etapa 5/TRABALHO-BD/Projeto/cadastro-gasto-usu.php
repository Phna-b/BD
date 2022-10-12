<br><br>
<h1>DIGITE SEUS DADOS DE CONSUMO</h1>
<form action= "?pagee=salvar" method="POST" >
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Seu Consumo por dia</label>
        <input type="text" name="cigarros_consumo_dia" class="form-control">
    </div>
    <div class="mb-3">
        <label>Sua Meta de Consumo ao final de 30 dias</label>
        <input type="text" name="cigarros_meta" class="form-control">
    </div>
    <div class="mb-3">
        <label>Seu $Gasto por Mes(30 dias)</label>
        <input type="text" name="cigarros_gasto_mes" class="form-control">
    </div>
    <div class="mb-3">
        <label>Sua Meta de Gasto ao final de 30 dias</label>
        <input type="text" name="cigarro_gasto_mes_meta" class="form-control">
    </div>
    <div class="mb-3">
        <label>Tipo de Cigarro<br>(Com filtro,Paiol,Eletrônico)</label>
        <input type="text" name="tipo" class="form-control">
    </div>
    <div class="mb-3">
        <label>Preço do Cigarro</label>
        <input type="text" name="preco" class="form-control">
    </div>
    <div class="mb-3">
        <label>Digite um Nome de usuario <br>(Este nome servira para identificar seus dados)</label>
        <input type="text" name="nome_usuario" class="form-control">
    </div>
    

    
    
    <div class="mb-3">
        <button type="submit" class="btn
        btn-primary">Enviar</button>
    </div>
</form>