<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* formulaire.scss */
class __TwigTemplate_f9394ac3fc44da6a884401ce538dfccedf1d1676db08a5279b859d70dd73cf25 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire.scss"));

        // line 1
        echo "\$yellow:#f5ba1a;
\$black:#000000;
\$grey:#cccccc;


body {
\tfont-family: Verdana, Geneva, sans-serif;
\tfont-size: 14px;
\tbackground: #f2f2f2;
}
.clearfix {
\t&:after {
\t\tcontent: \"\";
\t\tdisplay: block;
\t\tclear: both;
\t\tvisibility: hidden;
\t\theight: 0;
\t}
}
.form_wrapper {
\tbackground: #fff;
\twidth: 400px;
\tmax-width: 100%;
\tbox-sizing: border-box;
\tpadding: 25px;
\tmargin: 8% auto 0;
\tposition: relative;
\tz-index: 1;
\tborder-top: 5px solid \$yellow;
\t-webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
\t-moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
\tbox-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
    -webkit-transform-origin: 50% 0%;
    transform-origin: 50% 0%;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
    -webkit-transition: none;
    transition: none;
    -webkit-animation: expand 0.8s 0.6s ease-out forwards;
    animation: expand 0.8s 0.6s ease-out forwards;
    opacity: 0;
\th2 {
\t\tfont-size: 1.5em;
\t\tline-height: 1.5em;
\t\tmargin: 0;
\t}
\t.title_container {
\t\ttext-align: center;
\t\tpadding-bottom: 15px;
\t}
\th3 {
\t\tfont-size: 1.1em;
\t\tfont-weight: normal;
\t\tline-height: 1.5em;
\t\tmargin: 0;
\t}
    label {
        font-size: 12px;
    }
\t.row {
\t\tmargin: 10px -15px;
\t\t>div {
\t\t\tpadding: 0 15px;
\t\t\tbox-sizing: border-box;
\t\t}
\t}
\t.col_half {
\t\twidth: 50%;
\t\tfloat: left;
\t}
\t.input_field {
\t\tposition: relative;
\t\tmargin-bottom: 20px;
        -webkit-animation: bounce 0.6s ease-out;
  \t     animation: bounce 0.6s ease-out;
\t\t>span {
\t\t\tposition: absolute;
\t\t\tleft: 0;
\t\t\ttop: 0;
\t\t\tcolor: #333;
\t\t\theight: 100%;
\t\t\tborder-right: 1px solid \$grey;
\t\t\ttext-align: center;
\t\t\twidth: 30px;
\t\t\t>i {
\t\t\t\tpadding-top: 10px;
\t\t\t}
\t\t}
\t}
\t.textarea_field {
\t\t>span {
\t\t\t>i {
\t\t\t\tpadding-top: 10px;
\t\t\t}
\t\t}
\t}
\tinput {
    &[type=\"text\"], &[type=\"email\"], &[type=\"password\"] {
      width: 100%;
      padding: 8px 10px 9px 35px;
      height: 35px;
      border: 1px solid \$grey;
      box-sizing: border-box;
      outline: none;
      -webkit-transition: all 0.30s ease-in-out;
      -moz-transition: all 0.30s ease-in-out;
      -ms-transition: all 0.30s ease-in-out;
      transition: all 0.30s ease-in-out;
    }
    &[type=\"text\"]:hover, &[type=\"email\"]:hover, &[type=\"password\"]:hover {
      background: #fafafa;
    }
    &[type=\"text\"]:focus, &[type=\"email\"]:focus, &[type=\"password\"]:focus {
      -webkit-box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
      -moz-box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
      box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
      border: 1px solid \$yellow;
      background: #fafafa;
    }
    &[type=\"submit\"] {
\t\tbackground: \$yellow;
\t\theight: 35px;
\t\tline-height: 35px;
\t\twidth: 100%;
\t\tborder: none;
\t\toutline: none;
\t\tcursor: pointer;
\t\tcolor: #fff;
\t\tfont-size: 1.1em;
\t\tmargin-bottom: 10px;
\t\t-webkit-transition: all 0.30s ease-in-out;
\t\t-moz-transition: all 0.30s ease-in-out;
\t\t-ms-transition: all 0.30s ease-in-out;
\t\ttransition: all 0.30s ease-in-out;
\t\t&:hover {
\t\t\tbackground: darken(\$yellow,7%);
\t\t}
\t\t&:focus {
\t\t\tbackground: darken(\$yellow,7%);
\t\t}
\t}    
    &[type=\"checkbox\"], &[type=\"radio\"] {
      border: 0;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px;
    }
  }
}
.form_container {
\t.row {
\t\t.col_half.last {
\t\t\tborder-left: 1px solid \$grey;
\t\t}
\t}
}
.checkbox_option{
    label{
        margin-right: 1em;
        position: relative;
        &:before {
          content: \"\";
          display: inline-block;
          width: 0.5em;
          height: 0.5em;
          margin-right: 0.5em;
          vertical-align: -2px;
          border: 2px solid \$grey;
          padding: 0.12em;
          background-color: transparent;
          background-clip: content-box;
          transition: all 0.2s ease;
        }
        &:after {
          border-right: 2px solid \$black;
          border-top: 2px solid \$black;
          content: \"\";
          height: 20px;
          left: 2px;
          position: absolute;
          top: 7px;
          transform: scaleX(-1) rotate(135deg);
          transform-origin: left top;
          width: 7px;
          display: none;
        }
    }
    input {
    &:hover + label:before {
      border-color: \$black;
    }
    &:checked + label {
      &:before {
        border-color: \$black;
      }
      &:after {
        -moz-animation: check 0.8s ease 0s running;
        -webkit-animation: check 0.8s ease 0s running;
        animation: check 0.8s ease 0s running;
        display: block;
        width: 7px;
        height: 20px;
        border-color: \$black;
      }
    }
  }
}
.radio_option {
  label {
      margin-right: 1em;
    &:before {
      content: \"\";
      display: inline-block;
      width: 0.5em;
      height: 0.5em;
      margin-right: 0.5em;
      border-radius: 100%;
      vertical-align: -3px;
      border: 2px solid \$grey;
      padding: 0.15em;
      background-color: transparent;
      background-clip: content-box;
      transition: all 0.2s ease;
    }
  }
  input {
    &:hover + label:before {
      border-color: \$black;
    }
    &:checked + label:before {
      background-color: \$black;
      border-color: \$black;
    }
  }
}
.select_option {
  position: relative;
  width: 100%;
  select {
    display: inline-block;
    width: 100%;
    height: 35px;
    padding: 0px 15px;
    cursor: pointer;
    color: #7b7b7b;
    border: 1px solid \$grey;
    border-radius: 0;
    background: #fff;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    transition: all 0.2s ease;
    &::-ms-expand {
      display: none;
    }
    &:hover, &:focus {
      color: \$black;
      background: #fafafa;
      border-color: \$black;
      outline: none;
    }
  }
}
.select_arrow {
  position: absolute;
  top: calc(50% - 4px);
  right: 15px;
  width: 0;
  height: 0;
  pointer-events: none;
  border-width: 8px 5px 0 5px;
  border-style: solid;
  border-color: #7b7b7b transparent transparent transparent;
}

.select_option select {
  &:hover + .select_arrow, &:focus + .select_arrow {
    border-top-color: \$black;
  }
}
.credit {
\tposition: relative;
\tz-index: 1;
\ttext-align: center;
\tpadding: 15px;
\tcolor: \$yellow;
\ta {
\t\tcolor: darken(\$yellow,7%);
\t}
}
@-webkit-keyframes check {
  0% { height: 0; width: 0; }
  25% { height: 0; width: 7px; }
  50% { height: 20px; width: 7px; }
}

@keyframes check {
  0% { height: 0; width: 0; }
  25% { height: 0; width: 7px; }
  50% { height: 20px; width: 7px; }
}

@-webkit-keyframes expand { 
\t0% { -webkit-transform: scale3d(1,0,1); opacity:0; }
\t25% { -webkit-transform: scale3d(1,1.2,1); }
\t50% { -webkit-transform: scale3d(1,0.85,1); }
\t75% { -webkit-transform: scale3d(1,1.05,1); }
\t100% { -webkit-transform: scale3d(1,1,1);  opacity:1; }
}

@keyframes expand { 
\t0% { -webkit-transform: scale3d(1,0,1); transform: scale3d(1,0,1);  opacity:0; }
\t25% { -webkit-transform: scale3d(1,1.2,1); transform: scale3d(1,1.2,1); }
\t50% { -webkit-transform: scale3d(1,0.85,1); transform: scale3d(1,0.85,1); }
\t75% { -webkit-transform: scale3d(1,1.05,1); transform: scale3d(1,1.05,1); }
\t100% { -webkit-transform: scale3d(1,1,1); transform: scale3d(1,1,1);  opacity:1; }
}


@-webkit-keyframes bounce { 
\t0% { -webkit-transform: translate3d(0,-25px,0); opacity:0; }
\t25% { -webkit-transform: translate3d(0,10px,0); }
\t50% { -webkit-transform: translate3d(0,-6px,0); }
\t75% { -webkit-transform: translate3d(0,2px,0); }
\t100% { -webkit-transform: translate3d(0,0,0); opacity: 1; }
}

@keyframes bounce { 
\t0% { -webkit-transform: translate3d(0,-25px,0); transform: translate3d(0,-25px,0); opacity:0; }
\t25% { -webkit-transform: translate3d(0,10px,0); transform: translate3d(0,10px,0); }
\t50% { -webkit-transform: translate3d(0,-6px,0); transform: translate3d(0,-6px,0); }
\t75% { -webkit-transform: translate3d(0,2px,0); transform: translate3d(0,2px,0); }
\t100% { -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0); opacity: 1; }
}
@media (max-width: 600px) {
\t.form_wrapper {
\t\t.col_half {
\t\t\twidth: 100%;
\t\t\tfloat: none;
\t\t}
\t}
\t.bottom_row {
\t\t.col_half {
\t\t\twidth: 50%;
\t\t\tfloat: left;
\t\t}
\t}
\t.form_container {
\t\t.row {
\t\t\t.col_half.last {
\t\t\t\tborder-left: none;
\t\t\t}
\t\t}
\t}
\t.remember_me {
\t\tpadding-bottom: 20px;
\t}
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formulaire.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\$yellow:#f5ba1a;
\$black:#000000;
\$grey:#cccccc;


body {
\tfont-family: Verdana, Geneva, sans-serif;
\tfont-size: 14px;
\tbackground: #f2f2f2;
}
.clearfix {
\t&:after {
\t\tcontent: \"\";
\t\tdisplay: block;
\t\tclear: both;
\t\tvisibility: hidden;
\t\theight: 0;
\t}
}
.form_wrapper {
\tbackground: #fff;
\twidth: 400px;
\tmax-width: 100%;
\tbox-sizing: border-box;
\tpadding: 25px;
\tmargin: 8% auto 0;
\tposition: relative;
\tz-index: 1;
\tborder-top: 5px solid \$yellow;
\t-webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
\t-moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
\tbox-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
    -webkit-transform-origin: 50% 0%;
    transform-origin: 50% 0%;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
    -webkit-transition: none;
    transition: none;
    -webkit-animation: expand 0.8s 0.6s ease-out forwards;
    animation: expand 0.8s 0.6s ease-out forwards;
    opacity: 0;
\th2 {
\t\tfont-size: 1.5em;
\t\tline-height: 1.5em;
\t\tmargin: 0;
\t}
\t.title_container {
\t\ttext-align: center;
\t\tpadding-bottom: 15px;
\t}
\th3 {
\t\tfont-size: 1.1em;
\t\tfont-weight: normal;
\t\tline-height: 1.5em;
\t\tmargin: 0;
\t}
    label {
        font-size: 12px;
    }
\t.row {
\t\tmargin: 10px -15px;
\t\t>div {
\t\t\tpadding: 0 15px;
\t\t\tbox-sizing: border-box;
\t\t}
\t}
\t.col_half {
\t\twidth: 50%;
\t\tfloat: left;
\t}
\t.input_field {
\t\tposition: relative;
\t\tmargin-bottom: 20px;
        -webkit-animation: bounce 0.6s ease-out;
  \t     animation: bounce 0.6s ease-out;
\t\t>span {
\t\t\tposition: absolute;
\t\t\tleft: 0;
\t\t\ttop: 0;
\t\t\tcolor: #333;
\t\t\theight: 100%;
\t\t\tborder-right: 1px solid \$grey;
\t\t\ttext-align: center;
\t\t\twidth: 30px;
\t\t\t>i {
\t\t\t\tpadding-top: 10px;
\t\t\t}
\t\t}
\t}
\t.textarea_field {
\t\t>span {
\t\t\t>i {
\t\t\t\tpadding-top: 10px;
\t\t\t}
\t\t}
\t}
\tinput {
    &[type=\"text\"], &[type=\"email\"], &[type=\"password\"] {
      width: 100%;
      padding: 8px 10px 9px 35px;
      height: 35px;
      border: 1px solid \$grey;
      box-sizing: border-box;
      outline: none;
      -webkit-transition: all 0.30s ease-in-out;
      -moz-transition: all 0.30s ease-in-out;
      -ms-transition: all 0.30s ease-in-out;
      transition: all 0.30s ease-in-out;
    }
    &[type=\"text\"]:hover, &[type=\"email\"]:hover, &[type=\"password\"]:hover {
      background: #fafafa;
    }
    &[type=\"text\"]:focus, &[type=\"email\"]:focus, &[type=\"password\"]:focus {
      -webkit-box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
      -moz-box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
      box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
      border: 1px solid \$yellow;
      background: #fafafa;
    }
    &[type=\"submit\"] {
\t\tbackground: \$yellow;
\t\theight: 35px;
\t\tline-height: 35px;
\t\twidth: 100%;
\t\tborder: none;
\t\toutline: none;
\t\tcursor: pointer;
\t\tcolor: #fff;
\t\tfont-size: 1.1em;
\t\tmargin-bottom: 10px;
\t\t-webkit-transition: all 0.30s ease-in-out;
\t\t-moz-transition: all 0.30s ease-in-out;
\t\t-ms-transition: all 0.30s ease-in-out;
\t\ttransition: all 0.30s ease-in-out;
\t\t&:hover {
\t\t\tbackground: darken(\$yellow,7%);
\t\t}
\t\t&:focus {
\t\t\tbackground: darken(\$yellow,7%);
\t\t}
\t}    
    &[type=\"checkbox\"], &[type=\"radio\"] {
      border: 0;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px;
    }
  }
}
.form_container {
\t.row {
\t\t.col_half.last {
\t\t\tborder-left: 1px solid \$grey;
\t\t}
\t}
}
.checkbox_option{
    label{
        margin-right: 1em;
        position: relative;
        &:before {
          content: \"\";
          display: inline-block;
          width: 0.5em;
          height: 0.5em;
          margin-right: 0.5em;
          vertical-align: -2px;
          border: 2px solid \$grey;
          padding: 0.12em;
          background-color: transparent;
          background-clip: content-box;
          transition: all 0.2s ease;
        }
        &:after {
          border-right: 2px solid \$black;
          border-top: 2px solid \$black;
          content: \"\";
          height: 20px;
          left: 2px;
          position: absolute;
          top: 7px;
          transform: scaleX(-1) rotate(135deg);
          transform-origin: left top;
          width: 7px;
          display: none;
        }
    }
    input {
    &:hover + label:before {
      border-color: \$black;
    }
    &:checked + label {
      &:before {
        border-color: \$black;
      }
      &:after {
        -moz-animation: check 0.8s ease 0s running;
        -webkit-animation: check 0.8s ease 0s running;
        animation: check 0.8s ease 0s running;
        display: block;
        width: 7px;
        height: 20px;
        border-color: \$black;
      }
    }
  }
}
.radio_option {
  label {
      margin-right: 1em;
    &:before {
      content: \"\";
      display: inline-block;
      width: 0.5em;
      height: 0.5em;
      margin-right: 0.5em;
      border-radius: 100%;
      vertical-align: -3px;
      border: 2px solid \$grey;
      padding: 0.15em;
      background-color: transparent;
      background-clip: content-box;
      transition: all 0.2s ease;
    }
  }
  input {
    &:hover + label:before {
      border-color: \$black;
    }
    &:checked + label:before {
      background-color: \$black;
      border-color: \$black;
    }
  }
}
.select_option {
  position: relative;
  width: 100%;
  select {
    display: inline-block;
    width: 100%;
    height: 35px;
    padding: 0px 15px;
    cursor: pointer;
    color: #7b7b7b;
    border: 1px solid \$grey;
    border-radius: 0;
    background: #fff;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    transition: all 0.2s ease;
    &::-ms-expand {
      display: none;
    }
    &:hover, &:focus {
      color: \$black;
      background: #fafafa;
      border-color: \$black;
      outline: none;
    }
  }
}
.select_arrow {
  position: absolute;
  top: calc(50% - 4px);
  right: 15px;
  width: 0;
  height: 0;
  pointer-events: none;
  border-width: 8px 5px 0 5px;
  border-style: solid;
  border-color: #7b7b7b transparent transparent transparent;
}

.select_option select {
  &:hover + .select_arrow, &:focus + .select_arrow {
    border-top-color: \$black;
  }
}
.credit {
\tposition: relative;
\tz-index: 1;
\ttext-align: center;
\tpadding: 15px;
\tcolor: \$yellow;
\ta {
\t\tcolor: darken(\$yellow,7%);
\t}
}
@-webkit-keyframes check {
  0% { height: 0; width: 0; }
  25% { height: 0; width: 7px; }
  50% { height: 20px; width: 7px; }
}

@keyframes check {
  0% { height: 0; width: 0; }
  25% { height: 0; width: 7px; }
  50% { height: 20px; width: 7px; }
}

@-webkit-keyframes expand { 
\t0% { -webkit-transform: scale3d(1,0,1); opacity:0; }
\t25% { -webkit-transform: scale3d(1,1.2,1); }
\t50% { -webkit-transform: scale3d(1,0.85,1); }
\t75% { -webkit-transform: scale3d(1,1.05,1); }
\t100% { -webkit-transform: scale3d(1,1,1);  opacity:1; }
}

@keyframes expand { 
\t0% { -webkit-transform: scale3d(1,0,1); transform: scale3d(1,0,1);  opacity:0; }
\t25% { -webkit-transform: scale3d(1,1.2,1); transform: scale3d(1,1.2,1); }
\t50% { -webkit-transform: scale3d(1,0.85,1); transform: scale3d(1,0.85,1); }
\t75% { -webkit-transform: scale3d(1,1.05,1); transform: scale3d(1,1.05,1); }
\t100% { -webkit-transform: scale3d(1,1,1); transform: scale3d(1,1,1);  opacity:1; }
}


@-webkit-keyframes bounce { 
\t0% { -webkit-transform: translate3d(0,-25px,0); opacity:0; }
\t25% { -webkit-transform: translate3d(0,10px,0); }
\t50% { -webkit-transform: translate3d(0,-6px,0); }
\t75% { -webkit-transform: translate3d(0,2px,0); }
\t100% { -webkit-transform: translate3d(0,0,0); opacity: 1; }
}

@keyframes bounce { 
\t0% { -webkit-transform: translate3d(0,-25px,0); transform: translate3d(0,-25px,0); opacity:0; }
\t25% { -webkit-transform: translate3d(0,10px,0); transform: translate3d(0,10px,0); }
\t50% { -webkit-transform: translate3d(0,-6px,0); transform: translate3d(0,-6px,0); }
\t75% { -webkit-transform: translate3d(0,2px,0); transform: translate3d(0,2px,0); }
\t100% { -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0); opacity: 1; }
}
@media (max-width: 600px) {
\t.form_wrapper {
\t\t.col_half {
\t\t\twidth: 100%;
\t\t\tfloat: none;
\t\t}
\t}
\t.bottom_row {
\t\t.col_half {
\t\t\twidth: 50%;
\t\t\tfloat: left;
\t\t}
\t}
\t.form_container {
\t\t.row {
\t\t\t.col_half.last {
\t\t\t\tborder-left: none;
\t\t\t}
\t\t}
\t}
\t.remember_me {
\t\tpadding-bottom: 20px;
\t}
}", "formulaire.scss", "C:\\Users\\fedi\\fadi\\templates\\formulaire.scss");
    }
}
