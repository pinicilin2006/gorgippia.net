<?php

/* contact_admin.txt */
class __TwigTemplate_0676d9d6c13abfabcafeba40d83ce0237457c9d911c39204e254fe978794204a extends Twig_Template
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
        echo "
Здравствуйте, ";
        // line 2
        echo (isset($context["TO_USERNAME"]) ? $context["TO_USERNAME"] : null);
        echo ",

Следующее сообщение отправлено с помощью страницы для связи с администрацией на сайте «";
        // line 4
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "».

";
        // line 6
        if ((isset($context["S_IS_REGISTERED"]) ? $context["S_IS_REGISTERED"] : null)) {
            // line 7
            echo "Сообщение отправлено с учётной записи на сайте.
Имя пользователя: ";
            // line 8
            echo (isset($context["FROM_USERNAME"]) ? $context["FROM_USERNAME"] : null);
            echo "
E-mail адрес: ";
            // line 9
            echo (isset($context["FROM_EMAIL_ADDRESS"]) ? $context["FROM_EMAIL_ADDRESS"] : null);
            echo "
IP адрес: ";
            // line 10
            echo (isset($context["FROM_IP_ADDRESS"]) ? $context["FROM_IP_ADDRESS"] : null);
            echo "
Профиль: ";
            // line 11
            echo (isset($context["U_FROM_PROFILE"]) ? $context["U_FROM_PROFILE"] : null);
            echo "
";
        } else {
            // line 13
            echo "Сообщение отправлено гостем, который оставил следующую контактную информацию:
Имя: ";
            // line 14
            echo (isset($context["FROM_USERNAME"]) ? $context["FROM_USERNAME"] : null);
            echo "
E-mail адрес: ";
            // line 15
            echo (isset($context["FROM_EMAIL_ADDRESS"]) ? $context["FROM_EMAIL_ADDRESS"] : null);
            echo "
IP адрес: ";
            // line 16
            echo (isset($context["FROM_IP_ADDRESS"]) ? $context["FROM_IP_ADDRESS"] : null);
            echo "
";
        }
        // line 18
        echo "

Отправленное сообщение
~~~~~~~~~~~~~~~~~~~~~~~~~~~

";
        // line 23
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "contact_admin.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  70 => 18,  65 => 16,  61 => 15,  57 => 14,  54 => 13,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  34 => 7,  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
