<?php

class H1WithRandomColor extends AddH1 implements H1, Color {

    const COLOR1 = 'black';

    public function getColor(): string
    {
        return 'rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).')';
    }

}