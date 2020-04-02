<?php

namespace OCFram;

class TextField extends Field
{
    // PROPERTIES //

    protected $cols;
    protected $rows;


    // METHOD //

    public function buildWidget()
    {
        $id = "commentaire";
        if ($_GET['app'] == "Backend") {
            $id = "mytextarea";
        }

        $widget = '';

        if (!empty($this->errorMessage)) {
            $widget .= $this->errorMessage . '<br />';
        }

        $widget .= '<label>' . $this->label . '</label><textarea id="' . $id . '" name="' . $this->name . '"';

        if (!empty($this->cols)) {
            $widget .= ' cols="' . $this->cols . '"';
        }

        if (!empty($this->rows)) {
            $widget .= ' rows="' . $this->rows . '"';
        }

        $widget .= '>';

        if (!empty($this->value)) {
            $widget .= htmlspecialchars($this->value);
        }

        return $widget . '</textarea>';
    }

    // SETTERS //
    
    public function setCols($cols)
    {
        $cols = (int) $cols;

        if ($cols > 0) {
            $this->cols = $cols;
        }
    }

    public function setRows($rows)
    {
        $rows = (int) $rows;

        if ($rows > 0) {
            $this->rows = $rows;
        }
    }
}
