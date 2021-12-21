<?php

namespace App;

class ProductStructure {
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array {
        $result = [];
        foreach (self::products as $value) {
            $separate = explode('-', $value);
            if (array_key_exists($separate[0], $result)) {
                $color = $result[$separate[0]];
                if (array_key_exists($separate[1], $color)) {
                    $color[$separate[1]] = $color[$separate[1]] + 1;
                } else {
                    $color[$separate[1]] = 1;
                }
                $result[$separate[0]] = $color;
            } else {
                $result[$separate[0]] = [$separate[1] => 1];
            }
        }
        return $result;
    }
}