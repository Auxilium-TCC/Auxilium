<?php

$Imagem = base64_encode($_SESSION['imagem']);

if($_SESSION['rank'] == 1){
    
    $Perfil = '/Auxilium/login/dashboard/dashboard_admin/index.php';
    $Config = '/Auxilium/login/dashboard/dashboard_admin/index.php';
    
}elseif($_SESSION['rank'] == 0){
    
    $Perfil = '/Auxilium/login/dashboard/dashboard_usuario/configuracoes.php';
    $Config = '/Auxilium/login/dashboard/dashboard_usuario/configuracoes.php';
    
}
?>

<div class='app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header'>
        <div class='app-header__logo'>
            <div class='app-header__content'>
            <div class='app-header-right'>
                <div class='header-btn-lg pr-0'>
                    <div class='widget-content p-0'>
                        <div class='widget-content-wrapper'>
                            <div class='widget-content-left'>
                                <div class='btn-group'>
                                    <a data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' class='p-0 btn'>
                                        <img width='42' height='42' style='margin-left: 800px' class='rounded-circle' src='data:image/jpeg;base64,<?php echo($Imagem); ?>' alt=''>
                                        <i class='fa fa-angle-down ml-2 opacity-8'></i>
                                    </a>
                                    <div tabindex='-1' role='menu' aria-hidden='true' class='dropdown-menu dropdown-menu-right'>
                                        <p type='button' tabindex='0' class='dropdown-item'><?php echo($_SESSION['apelido']);?></p>
                                        <a href='<?php echo($Perfil) ?>'><button type='button' tabindex='0' class='dropdown-item'>Perfil</button></a>
                                        <a href='<?php echo($Config) ?>'><button type='button' tabindex='0' class='dropdown-item'>Configurações</button></a>
                                    	<a href='/Auxilium/login/processando.php?Acao=Sair'><button type='button' tabindex='0' class='dropdown-item'>Sair</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>