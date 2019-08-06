<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html ng-app="app"<?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="//cdn.marketingmidia9.com.br/css/sweetalert2.css">
<link rel="stylesheet" type="text/css" href="//cdn.marketingmidia9.com.br/css/ngDialog.min.css">
<link href="//stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<?php astra_head_bottom(); ?>
<?php wp_head(); ?>
</head>

<body ng-controller="Lead"<?php astra_schema_body(); ?> <?php body_class(); ?>>
<style type="text/css">
    .float,.float:hover{background-color:#25d366}.float{position:fixed;width:60px;height:60px;bottom:150px;right:20px;color:#FFF;border-radius:50px;text-align:center;font-size:30px;z-index:100}.float:hover{color:#fff!important}.float:active{animation-iteration-count:1}.my-float{margin-top:16px}@keyframes shake{10%,90%{transform:translate3d(-1px,0,0)}20%,80%{transform:translate3d(2px,0,0)}30%,50%,70%{transform:translate3d(-4px,0,0)}40%,60%{transform:translate3d(4px,0,0)}}.float{box-shadow:0 0 0 0 #25d366;-webkit-animation:pulse 1.25s infinite cubic-bezier(.66,0,0,1);-moz-animation:pulse 1.25s infinite cubic-bezier(.66,0,0,1);-ms-animation:pulse 1.25s infinite cubic-bezier(.66,0,0,1);animation:pulse 1.25s infinite cubic-bezier(.66,0,0,1)}.pulse-button:hover{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}@-webkit-keyframes pulse{to{box-shadow:0 0 0 45px rgba(232,76,61,0)}}@-moz-keyframes pulse{to{box-shadow:0 0 0 45px rgba(232,76,61,0)}}@-ms-keyframes pulse{to{box-shadow:0 0 0 45px rgba(232,76,61,0)}}@keyframes pulse{to{box-shadow:0 0 0 45px rgba(232,76,61,0)}}
</style>
<style type="text/css">
    .m9-form-12p{
        padding: 9px !important;
        border-radius: 0px !important;
    }
    .m9-form-22p{
        padding: 19px !important;
        border-radius: 0px !important;
    }
    .btn-m9{
        font-family: 'Montserrat', sans-serif !important;
		width: 100%;
		color: white !important;
		padding: 10px 30px !important;
		background: #A6CE39 !important;
		border: 1px solid #a6ce39 !important;
		border-top: 1px solid #a6ce39 !important;
		box-shadow: 0px 2px 0 #87a733, 2px 4px 6px #627924 !important;
		border-radius: 4px;
    }
    .btn-m9:hover {
        background: #94b735 !important;
        border: 1px solid #94b735 !important;
        border-top: 1px solid #94b735 !important;
        cursor: pointer !important;
    }
    textarea.form-control {
        height: 70px !important;
    }
    .form-group {
        margin-bottom: 15px !important;
    }
    .form-control {
        font-family: 'Montserrat', sans-serif !important;
        width: 100% !important;
        height: 34px !important;
        padding: 6px 12px !important;
        font-size: 14px !important;
        line-height: 1.42857143 !important;
        color: #79668e !important;
        background-color: #f1f0f0 !important;
        background-image: none !important;
        border: 1px solid #ccc !important;
        border-radius: 4px !important;
    }
    .font-terras-raras-titulo{
        font-family: 'Montserrat', sans-serif !important;
        font-size: 18px !important;
        font-weight: 500 !important;
        color: #79668e !important;
        margin-bottom: 10px !important;
        text-align: center;
    }
    .font-terras-raras-paragrafo{
        font-size: 12px !important;
        line-height: 1.2em !important;
        padding: 0px !important;
        color: #797979 !important;
        font-family: 'Montserrat', sans-serif !important;
        margin-bottom: 15px;
        text-align: center !important;
    }
    .hr{
        border-bottom: 1px dashed #79668e !important;
        margin-bottom: 10px !important;
        margin-top: 10px !important;
    }
    .float {
        left: 20px!important;
        color: white !important;
        cursor: pointer;
    }
</style>
<!-- BOTAO FLUTUANTE -->
<a ng-click="openForm('form', null, true)" class="float">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<!-- INTEGRACAO -->
<script src="//cdn.marketingmidia9.com.br/js/angular.min.js"></script>
<script src="//cdn.marketingmidia9.com.br/js/angular-route.min.js"></script>
<script src="//cdn.marketingmidia9.com.br/js/ngMask.min.js"></script>
<script src="//cdn.marketingmidia9.com.br/js/ngDialog.min.js"></script>
<script src='//cdn.marketingmidia9.com.br/js/sweetalert.min.js'></script>
<script type="text/javascript">
angular.module('app', ['ngMask', 'ngDialog']).controller('Lead', function($scope, $log, $http, $location, ngDialog, $httpParamSerializerJQLike) {
    $scope.enviarwpp = !1;
    $scope.load = !1;
    $scope.load1 = !1;
    $scope.dados = {};
    var host = 'http://crm2.marketingmidia9.com.br'
    var registra_acesso = function() {
        $http.get(host + '/api/registraAcesso/K-uBZ6MsEpysNgp0ZiwfEupSUK2him54xpw8oSDgNHs').success(function(result) {
            $log.info(result);
            $scope.request = result.data
        })
    }
    $scope.enviarLead = function(dados, tmp = null) {
        $scope.load = !0;
        // dados.EMP_Key = $scope.request.EMP_Key;
        dados.EMP_Key = 'F27PPqcdM4zg0n6SXaGrWUPCkK6LGc7za0ni_QBtiG8';
        $log.info(dados);
        $http({
            method: 'POST',
            url: host + '/api2/registraLead',
            data: $httpParamSerializerJQLike(dados),
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        }).success(function(retorno) {
            $scope.load = !1;
            if (!retorno.error) {
                swal({
                    title: "Obrigado!",
                    text: "suas informações foram enviadas com sucesso, um de nossos consultores irá lhe contactar em breve",
                    type: "success",
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ok",
                    closeOnConfirm: !1
                }, function() {
                    $log.info($scope.enviarwpp);
                    if ($scope.enviarwpp == !0) {
                        window.location.href = "https://api.whatsapp.com/send?phone=NUMERO&text=Olá, me chamo  " + dados.LE_Nome + "   e gostaria de receber mais informações sobre os Lotes."
                    } else {
                        window.location.href = ""
                    }
                })
            } else {
                swal("Ops!", "Ocorreu um problema ao enviar suas informações, tente novamente", "error")
            }
        }).error(function(retorno) {
            $scope.load = !1;
            $log.error(retorno)
        })
    }
    $scope.openForm = function(template, tipo, whatsapp) {
        $scope.enviarwpp = whatsapp;
        $scope.dados.LE_CodigoTipo = tipo;
        ngDialog.openConfirm({
            template: template,
            scope: $scope,
            showClose: !1,
            closeByDocument: !0,
            closeByEscape: !0
        })
    }
    registra_acesso()
})
</script>
<?php astra_body_top(); ?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?></a>

	<?php astra_header_before(); ?>

	<?php astra_header(); ?>

	<?php astra_header_after(); ?>

	<?php astra_content_before(); ?>

	<div id="content" class="site-content">

		<div class="ast-container">

		<?php astra_content_top(); ?>
