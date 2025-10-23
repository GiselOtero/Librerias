<?php

class ejemploIndex
{


    public function mensaje($datos)
    {

        $salida = array(
            "mensaje" => "error al verificar que sos humano",
            "exito" => false,
        );

        $verificacion = $this->verificarCaptcha($datos);
        if ($verificacion) {
            $salida["exito"] = true;
            $salida["mensaje"] = "Verificado";
        }

        return $salida;
    }

    public function verificarCaptcha($datos)
    {
        $claveSecreta = "6LdwU_ArAAAAAHBAi9pXLS1xhHJJXO8L1B2dSRpf"; /* Clave secreta proporcionada por Google reCAPTCHA (se usa para validar la respuesta en el servidor) */

        $reCaptcha = $datos["g-recaptcha-response"]; /*  Se obtiene el token generado por el reCAPTCHA en el formulario del lado del cliente */
        /*  */
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $claveSecreta . "&response=" . $reCaptcha); /*Se envía una solicitud a la API de Google para verificar si el token es válido */

        $exito = false;
        if (!$reCaptcha) {
            /* "Debes verificar que eres humano" */
            $exito = false;
        } else {
            $response = json_decode($response, true); /* Se decodifica la respuesta JSON que devuelve*/
            if ($response["success"]) {
                $exito = true;
            }
        }


        return $exito;
    }
}
