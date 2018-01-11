<?php
Class Form  {
    private $formId;
    private $formSelfName;
    private $submitPath;
    private $formType;

        // getters and setters
    public function __construct($formSelfName) {

        $this->setFormSelfName($formSelfName);
    }

    // The form to be rendered
    private $formSelf = array();

    // Methods
    public function createSingleInput($inputName = false, $inputType = false, $inputLabel = false) {

        if($inputName && $inputType && $inputLabel) {
            $input = array();
            $input["name"] = $inputName;
            $input["inputType"] = $inputType;
            $input["label"] = $inputLabel;

        } else {

            return false;
        }
        $this->bindInput('singleInput', $input);
    }

    // Give me an array I will give you a dropdown
    public function createDropdownInput($inputName = false, $inputLabel = false, $values = false) {
        $inputDropdown = array ();
        if($inputName && $inputLabel) {
            $inputDropdown["name"]  = $inputName;
            $inputDropdown["label"]  = $inputLabel;
            if($values)  {

                foreach ($values as $key => $value) {
                    $inputDropdown["dropdownValues"][] = $value;
                }
            }
        } else {
            return false;
        }

        $this->bindInput("dropdownInput", $inputDropdown);
    }
    // Give me an array, I will giv you a checkbox
    public function createCheckBoxInput($inputName = false, $inputLabel = false, $values = false) {

        $inputCheckBox = array();
        if($inputLabel && $inputName) {
            $inputCheckBox["name"]  = $inputName;
            $inputCheckBox["label"]  = $inputLabel;
        }


        // Process Values
        if ($values) {
            foreach ($values as $key => $value) {
                $inputCheckBox["checkBoxValues"][] = $value;
            }
        }
        $this->bindInput("checkBoxInput", $inputCheckBox);
    }

    public function bindInput($type,$input) {
        $this->formSelf[$type][] = $input;

    }

    public function renderForm() {
        echo "<form id='unique-form'>";
        
        
        // Takes all type of inputs and render it
        foreach($this->formSelf["singleInput"] as $key => $field) {
            echo "<div class='form-value-container'>";
            echo "<span class='cameleon-label-form'>". $field['label']."</span><input class='single-input' name='".$field['label'] ."' type=". $field["inputType"] .">";
            echo "</div>";
        }

        if (isset($this->formSelf["checkBoxInput"])) {
            foreach($this->formSelf["checkBoxInput"] as $key => $field) {
                echo "<span class='cameleon-label-form-select'>". $field['label']."</span>";
                foreach ($field["checkBoxValues"] as $key => $value) {

                      echo "<input type='checkbox' name=". $field['name'] ." value=". $value .  " checked>$value<br>";
                }
            }
        }
        if (isset($this->formSelf["dropdownInput"])) {
            foreach($this->formSelf["dropdownInput"] as $key => $field) {
                echo "<span class='cameleon-label-form-dropdown'>". $field['label']."</span>";
                echo "<select>";
                foreach ($field["dropdownValues"] as $key => $value) {
                    echo "<option value='$value'>$value</option>";
                }
                echo "</select>";
            }
        }
        
        echo "<span class='form-submit main-button'> Submit </span>";
        echo "</form>";
    }


    
    public function submitForm($formSelf, $url) {
        
    }
    
    // getters && setters
    public function setFormType($formType) {
        $this->formType = $formType;
    }

    public function getFormId() {
        return $this->formId;
    }

    public function setFormId($id) {
        $this->id = $id;
    }

    public function getFormSelfName() {
        return $this->getFormSelfName;
    }

    public function setFormSelfName($formName) {
        $this->$formName = $formName;
    }

    public function setSubmitPath($path)  {
        $this->submitPath = $path;
    }

    public function getSubmitPath() {
        return $this->submitPath;
    }

}
