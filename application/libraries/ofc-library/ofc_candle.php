<?php

include_once 'ofc_bar_base.php';

class candle_value
{
    /**
     *
     */
    public function candle_value($high, $open, $close, $low)
    {
        $this->high = $high;
        $this->top = $open;
        $this->bottom = $close;
        $this->low = $low;
    }

    public function set_colour($colour)
    {
        $this->colour = $colour;
    }

    public function set_tooltip($tip)
    {
        $this->tip = $tip;
    }
}

class candle extends bar_base
{
    public function candle($colour, $negative_colour = null)
    {
        $this->type = 'candle';
        parent::bar_base();

        $this->set_colour($colour);
        if (!is_null($negative_colour)) {
            $this->{'negative-colour'} = $negative_colour;
        }
    }
}
