<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title>Responsive Email Template</title>

        <style type="text/css">
            .ReadMsgBody {width: 100%; background-color: #ffffff;}
            .ExternalClass {width: 100%; background-color: #ffffff;}
            body	 {width: 100%; background-color: #ffffff; margin:0; padding:0; -webkit-font-smoothing: antialiased;font-family: Georgia, Times, serif}
            table {border-collapse: collapse;}

            @media only screen and (max-width: 640px)  {
                body[yahoo] .deviceWidth {width:440px!important; padding:0;}
                body[yahoo] .center {text-align: center!important;}
            }

            @media only screen and (max-width: 479px) {
                body[yahoo] .deviceWidth {width:280px!important; padding:0;}
                body[yahoo] .center {text-align: center!important;}
                body[yahoo] span {padding-right: 10px!important; }
                body[yahoo] .rowValue {border-bottom: 0px!important; width: 100%;}
            }
            #container {
                width: 100%;
                border-color: blue;
                text-align: center;
            }

            .box {
                float: left;
                width: 30%; height: 30px;
                margin: 10px 20px;
            }
        </style>
    </head>
    
    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" yahoo="fix" style="font-family: Georgia, Times, serif">

        <!-- Wrapper -->
        <table width="580" border="0" cellpadding="0" cellspacing="0" align="center">
            <tr>
                <!--<td width="100%" valign="top" bgcolor="#ffffff" style="padding-top:20px">-->
                <td>
                    <!-- Start Header-->
                    <!-- Logo -->
                    <table width="580" border="0" cellpadding="0" cellspacing="0" align="center" class="deviceWidth">
                        <tr>
                            <td class="center">
                                <img src="http://www.barimaculada.com.br/img/logo.png" alt="" border="0" />
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #ffffff; background-color: #1798a5; text-align:left;line-height: 20px;" st-title="rightimage-title">
                                Movimento do dia dd/mm/YYY
                            </td>
                        </tr>
                    </table>
                    <!-- End Logo -->
                    <!-- End Header -->

                    <div style="height:15px;margin:0 auto;">&nbsp;</div><!-- spacer -->

                    <!-- Valores Entrada -->
                    <table width="580" id="column-1" class="deviceWidth" border="0" cellpadding="0" cellspacing="0" bgcolor="#202022">
                        <tr>
                            <td width="100%" style="font-size: 13px; color: #959595; font-weight: normal; text-align: left; font-family: Georgia, Times, serif; line-height: 24px; vertical-align: top; padding:10px 8px 10px 8px; background-color: #ffffff" bgcolor="#eeeeed">
                                <table width="100%">
                                    <tr width="100%">
                                        <th width="100%" valign="top" style="padding:0 10px 0px 0; border-bottom: 1px solid #1798a5; text-align: center;">
                                            <img src="http://www.smartrain.net/wp-content/uploads/2014/01/Home-SaveMoney-Icon.png" alt="" border="0" align="center" style="height: 50px; width: 65px;" />
                                            <span style="text-decoration: none; color: #272727; font-size: 16px; font-weight: bold; font-family:Arial, sans-serif ">
                                                Valores (Entrada)
                                            </span>
                                        </th>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <?php
                                        $valorTotalEntrada = 0;
                                        foreach ($valores as $valor) {
                                        if ($valor['Sentido'] == TRUE) {
                                        ?>
                                        <td class="rowValue" width="45%" valign="top" style="padding:0 10px 0px 0; border-bottom: 1px solid; margin-right: 10px; float: left; line-height: 30px;">
                                            <?php
                                            echo ('<span style="float: left;">' . $valor['Metodo'] . ': </span>');
                                            echo ('<span style="float: right;">R$ ' . number_format($valor['Valor'], 2, ',', '.') . '</span>');
                                            $valorTotalEntrada = $valorTotalEntrada + $valor['Valor'];
                                            }
                                            };
                                            ?>
                                        </td>
                                        <td class="rowValue" width="45%" valign="top" style="padding:0 10px 0px 0; border-bottom: 1px solid; float: left; line-height: 30px;">
                                            <?php
                                            echo ('<span style="color: #272727; font-size: 16px; font-weight: bold; float: left; font-family:Arial, sans-serif">Valor Total: </span>');
                                            echo ('<span style="color: #272727; font-size: 16px; font-weight: bold; float: right; font-family:Arial, sans-serif">R$ ' .
                                            number_format($valorTotalEntrada, 2, ',', '.') . '</span>');
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <!-- Valores de Entrada -->

                    <div style="height:15px;margin:0 auto;">&nbsp;</div><!-- spacer -->

                    <!-- Valores Saida -->
                    <table width="580" id="column-2" class="deviceWidth" border="0" cellpadding="0" cellspacing="0" bgcolor="#202022">
                        <tr>
                            <td width="100%" style="font-size: 13px; color: #959595; font-weight: normal; text-align: left; font-family: Georgia, Times, serif; line-height: 24px; vertical-align: top; padding:10px 8px 10px 8px; background-color: #ffffff" bgcolor="#eeeeed">
                                <table width="100%">
                                    <tr width="100%">
                                        <th width="100%" valign="top" style="padding:0 10px 0px 0; border-bottom: 1px solid #1798a5; text-align: center;">
                                            <img  src="http://www.smartrain.net/wp-content/uploads/2014/01/Home-SaveMoney-Icon.png" alt="" border="0" align="center" style="height: 50px; width: 65px;" />
                                            <span style="text-decoration: none; color: #272727; font-size: 16px; font-weight: bold; font-family:Arial, sans-serif ">
                                                Valores (Saida)
                                            </span>
                                        </th>
                                    </tr>                            
                                </table>
                                <table>
                                    <tr>
                                        <?php
                                        $valorTotalSaida = 0;
                                        foreach ($valores as $valor) {
                                        if ($valor['Sentido'] == FALSE) {
                                        ?>
                                        <td class="rowValue" width="45%" valign="top" style="padding:0 10px 0px 0; border-bottom: 1px solid; margin-right: 10px; float: left; line-height: 30px;">
                                            <?php
                                            echo ('<span style="float: left;">' . $valor['Metodo'] . ': </span>');
                                            echo ('<span style="float: right;">R$ ' . number_format($valor['Valor'], 2, ',', '.') . '</span>');
                                            $valorTotalSaida = $valorTotalSaida + $valor['Valor'];
                                            }
                                            };
                                            ?>
                                        </td>
                                        <td class="rowValue" width="45%" valign="top" style="padding:0 10px 0px 0; border-bottom: 1px solid; float: left; line-height: 30px;">
                                            <?php
                                            echo ('<span style="color: #272727; font-size: 16px; font-weight: bold; float: left; font-family:Arial, sans-serif">Valor Total: </span>');
                                            echo ('<span style="color: #272727; font-size: 16px; font-weight: bold; float: right; font-family:Arial, sans-serif">R$ ' .
                                            number_format($valorTotalSaida, 2, ',', '.') . '</span>');
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <!-- Valores Saida-->

                    <div style="height:15px;margin:0 auto;">&nbsp;</div><!-- spacer -->

                    <!-- Cerveja Entrada -->
                    <table width="580" id="column-3" class="deviceWidth" border="0" cellpadding="0" cellspacing="0" bgcolor="#202022">
                        <tr>
                            <td width="100%" style="font-size: 13px; color: #959595; font-weight: normal; text-align: left; font-family: Georgia, Times, serif; line-height: 24px; vertical-align: top; padding:10px 8px 10px 8px; background-color: #ffffff" bgcolor="#eeeeed">
                                <table width="100%">
                                    <tr width="100%">
                                        <th width="100%" valign="top" style="padding:0 10px 0px 0; border-bottom: 1px solid #1798a5; text-align: center;">
                                            <img  src="http://www.smartrain.net/wp-content/uploads/2014/01/Home-SaveMoney-Icon.png" alt="" border="0" align="center" style="height: 50px; width: 65px;" />
                                            <span style="text-decoration: none; color: #272727; font-size: 16px; font-weight: bold; font-family:Arial, sans-serif ">
                                                Cervejas (Entrada)
                                            </span>
                                        </th>
                                    </tr>                            
                                </table>
                                <table>
                                    <tr>
                                        <?php
                                        $quantidadeTotalEntrada = 0;
                                        foreach ($cervejas as $qtd) {
                                        if ($qtd['Sentido'] == TRUE) {
                                        ?>
                                        <td class="rowValue" width="45%" valign="top" style="padding:0 10px 0px 0; border-bottom: 1px solid; margin-right: 10px; float: left; line-height: 30px;">
                                            <?php
                                            echo ('<span style="float: left;">' . $qtd['Cerveja'] . ': </span>');
                                            echo ('<span style="float: right;">' . $qtd['Quantidade'] . ' Un.</span>');
                                            $quantidadeTotalEntrada = $quantidadeTotalEntrada + $qtd['Quantidade'];
                                            }
                                            };
                                            ?>
                                        </td>
                                        <td class="rowValue" width="45%" valign="top" style="padding:0 10px 0px 0; border-bottom: 1px solid; float: left; line-height: 30px;">
                                            <?php
                                            echo ('<span style="color: #272727; font-size: 16px; font-weight: bold; float: left; font-family:Arial, sans-serif">Quantidade Total: </span>');
                                            echo ('<span style="color: #272727; font-size: 16px; font-weight: bold; float: right; font-family:Arial, sans-serif">R$ ' .
                                            $quantidadeTotalEntrada . ' Un</span>');
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <!-- End Cerveja Entrada -->

                    <div style="height:15px;margin:0 auto;">&nbsp;</div><!-- spacer -->

                    <!-- Dark Background, Three Column Images -->

                    <!-- Cerveja Saida -->
                    <table width="580" id="column-4" class="deviceWidth" border="0" cellpadding="0" cellspacing="0" bgcolor="#202022">
                        <tr>
                            <td width="100%" style="font-size: 13px; color: #959595; font-weight: normal; text-align: left; font-family: Georgia, Times, serif; line-height: 24px; vertical-align: top; padding:10px 8px 10px 8px; background-color: #ffffff" bgcolor="#eeeeed">
                                <table width="100%">
                                    <tr width="100%">
                                        <th width="100%" valign="top" style="padding:0 10px 0px 0; border-bottom: 1px solid #1798a5; text-align: center;">
                                            <img  src="http://www.smartrain.net/wp-content/uploads/2014/01/Home-SaveMoney-Icon.png" alt="" border="0" align="center" style="height: 50px; width: 65px;" />
                                            <span style="text-decoration: none; color: #272727; font-size: 16px; font-weight: bold; font-family:Arial, sans-serif ">
                                                Cervejas (Saida)
                                            </span>
                                        </th>
                                    </tr>                            
                                </table>
                                <table>
                                    <tr>
                                        <?php
                                        $quantidadeTotalSaida = 0;
                                        foreach ($cervejas as $qtd) {
                                        if ($qtd['Sentido'] == FALSE) {
                                        ?>
                                        <td class="rowValue" width="45%" valign="top" style="padding:0 10px 0px 0; border-bottom: 1px solid; margin-right: 10px; float: left; line-height: 30px;">
                                            <?php
                                            echo ('<span style="float: left;">' . $qtd['Cerveja'] . ': </span>');
                                            echo ('<span style="float: right;">' . $qtd['Quantidade'] . ' Un.</span>');
                                            $quantidadeTotalSaida = $quantidadeTotalSaida + $qtd['Quantidade'];
                                            }
                                            };
                                            ?>
                                        </td>
                                        <td class="rowValue" width="45%" valign="top" style="padding:0 10px 0px 0; border-bottom: 1px solid; float: left; line-height: 30px;">
                                            <?php
                                            echo ('<span style="color: #272727; font-size: 16px; font-weight: bold; float: left; font-family:Arial, sans-serif">Quantidade Total: </span>');
                                            echo ('<span style="color: #272727; font-size: 16px; font-weight: bold; float: right; font-family:Arial, sans-serif">R$ ' .
                                            $quantidadeTotalSaida . ' Un</span>');
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <!-- End Cerveja Saida -->

                    <!-- Dark Background, Three Column Images -->

                    <div style="height:15px;margin:0 auto;">&nbsp;</div><!-- spacer -->

                    <!-- Fundo de Caixa -->
                    <table width="580" id="column-5" class="deviceWidth" border="0" cellpadding="0" cellspacing="0" bgcolor="#202022">
                        <tr>
                            <td width="100%" style="font-size: 13px; color: #959595; font-weight: normal; text-align: left; font-family: Georgia, Times, serif; line-height: 24px; vertical-align: top; padding:10px 8px 10px 8px; background-color: #ffffff" bgcolor="#eeeeed">
                                <table width="100%">
                                    <tr width="100%">
                                        <th width="100%" valign="top" style="padding:0 10px 0px 0; border-bottom: 1px solid #1798a5; text-align: center;">
                                            <img  src="http://www.smartrain.net/wp-content/uploads/2014/01/Home-SaveMoney-Icon.png" alt="" border="0" align="center" style="height: 50px; width: 65px;" />
                                            <span style="text-decoration: none; color: #272727; font-size: 16px; font-weight: bold; font-family:Arial, sans-serif ">
                                                Fundos
                                            </span>
                                        </th>
                                    </tr>                            
                                </table>
                                <table>
                                    <tr>
                                        <td class="rowValue" width="45%" valign="top" style="padding:0 10px 0px 0; border-bottom: 1px solid; margin-right: 10px; float: left; line-height: 30px;">
                                            <?php
                                            echo ('<span style="float: left;">Fundo de Caixa: </span>');
                                            echo ('<span style="float: right;">R$ ' . number_format($movimento['FUNDO_CAIXA'], 2, ',', '.') . '</span>');
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <!-- End Fundo de Caixa -->
                </td>
                <div style="height:25px;margin:0 auto;">&nbsp;</div><!-- spacer -->

                <!-- Blog Headlines -->

                <!-- end blog headlines -->


            </tr>
        </table> <!-- End Wrapper -->
        <div style="display:none; white-space:nowrap; font:15px courier; color:#ffffff;">
            - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
        </div>
    </body>
</html>