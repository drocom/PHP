<?php

class Preguntas{
    private $pregunta1;
    private $pregunta2;
    private $pregunta3;
    private $respuestaA;
    private $respuestaB;
    private $respuestaC;
    private $correcta;
    private $titulo;

    function __construct(){
        $this->generarPregunta();
    }

    function generarPregunta(){
        $lineas = file("text.txt");
        $nAleatorio = rand(0,2);
        $lineaPregunta = $lineas[$nAleatorio];
        $info = explode("&",$lineaPregunta);
        $this->titulo=$info[0];
        $this->respuestaA=$info[1];

    }

    /**
     * @return mixed
     */
    public function getRespuestaA()
    {
        return $this->respuestaA;
    }

    /**
     * @return mixed
     */
    public function getRespuestaB()
    {
        return $this->respuestaB;
    }

    /**
     * @return mixed
     */
    public function getRespuestaC()
    {
        return $this->respuestaC;
    }

    public function getCorrecta()
    {
        return $this->correcta;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getPregunta1(): string
    {
        return $this->pregunta1;
    }
    public function getPregunta2(): string
    {
        return $this->pregunta2;
    }
    public function getPregunta3(): string
    {
        return $this->pregunta3;
    }







}

