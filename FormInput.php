<?php
Class FormInput {
    private $action;
    private $method;
    private $form;


    public function __construct($action, $method="POST") {
        $this->action = $action;
        $this->method = $method;
    }
     public function open() {
        echo "<form action='{$this->action}' method='{$this->method}'>";
    }

     //input text
    public function inputText($name, $label, $value =""){
        $this->form .= "<label>$label</label><br>";
        $this->form .= "<input type = 'text' name='$name' value='$value'><br><br>";

    }


        //input radio
    public function inputRadio($name, $label, $options = []) {
        echo "<label>$label:</label><br>";
        foreach($options as $value => $text) {
            echo "<input type='radio' name='$name' value='$value'> $text<br>";
        }
    }

        //input checkbox
      public function inputCheckbox($name, $label, $options = []) {
        echo "<label>$label:</label><br>";
        foreach($options as $value => $text) {
            echo "<input type='checkbox' name='{$name}[]' value='$value'> $text<br>";
        }
    }

    // Input dropdown/select
    public function inputSelect($name, $label, $options = []) {
        echo "<label>$label: <select name='$name'>";
        foreach($options as $value => $text) {
            echo "<option value='$value'>$text</option>";
        }
        echo "</select></label><br>";
    }

    // Input textarea
    public function inputTextarea($name, $label) {
    echo "<label>$label</label><br>
          <textarea name='$name'></textarea><br>";
}


    // Tombol submit
    public function submitButton($label) {
    $this->form .= "<input type='submit' value='$label'>";
}



    // Tutup form
    public function close() {
        $this->form .= "</form>";
        return $this->form;
    }
}
?>
