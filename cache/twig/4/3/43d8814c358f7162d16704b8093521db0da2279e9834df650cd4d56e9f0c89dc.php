<?php

/* @uloginteam_ulogin/event/overall_header_page_body_before.html */
class __TwigTemplate_43d8814c358f7162d16704b8093521db0da2279e9834df650cd4d56e9f0c89dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style type=\"text/css\">
    #ulogin-message-box {
        font-size: 12px;
        background-color: #ECF1F3;
        padding: 5px 10px;
        border-radius: 7px;
        margin: 3px 0;
        display: none;
    }

    #ulogin-message-box.message_error {
        background-color: #EFC0C0;
    }

    #ulogin-message-box.message_success {
        background-color: #ECF3ED;
    }
</style>

<div id=\"ulogin-message-box\"></div>";
    }

    public function getTemplateName()
    {
        return "@uloginteam_ulogin/event/overall_header_page_body_before.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
