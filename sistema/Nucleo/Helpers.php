<?php

namespace sistema\Nucleo;

class Helpers {

    public static function url(string $url = null): string {
        $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
        $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);

        if (str_starts_with($url, '/')) {

            return $ambiente . $url;
        }
        return $ambiente . '/' . $url;
    }

    public static function saudacao(): string {
        return 'Ola mundo';
    }


    public function localhost(): bool {
        $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');

        if ($servidor == 'localhost') {
            return true;
        }
        return false;
    }

}
