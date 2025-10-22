<?php
class LoginreCaptcha
{

    public function salidaLogin($datos)
    {
        $salida = array(
            "error" => "",
            "exito" => false,
            "respuesta" => ""
        );

        $Usuario = $datos["usuario"];
        $respuesta = $this->verificarCaptcha($datos);

        if ($respuesta["exito"]) {
            $salida["respuesta"] = "Bienvenido " . $Usuario;
            $salida["exito"] = true;
        } else {
            $salida["respuesta"] = "";
            $salida["exito"] = false;
            $salida["error"] = "Debes verificar que eres humano";
        }


        return $salida;
    }
    public function verificarCaptcha($datos)
    {
        $claveSecreta = "6LdwU_ArAAAAAHBAi9pXLS1xhHJJXO8L1B2dSRpf";
        /* 6LdwU_ArAAAAAHBAi9pXLS1xhHJJXO8L1B2dSRpf */
        $reCaptcha = $datos["g-recaptcha-response"]; /* Se obtiene la respuesta de la verificacion reCaptcha lado usuario/cliente */
        /*  */
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $claveSecreta . "&response=" . $reCaptcha);/* se obtiene una respuesta */

        $salida = array(
            "error" => "",
            "exito" => false,
            "respuesta" => ""
        );
        if (!$reCaptcha) {
            $salida["error"] = "Debes verificar que eres humano";
            $salida["exito"] = false;
        } else {
            $response = json_decode($response, true);
            if ($response["success"]) {
                $salida["respuesta"] =  "bien";
                $salida["exito"] = true;
            }
        }


        return $salida;
    }
}
